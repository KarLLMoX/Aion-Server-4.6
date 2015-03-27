/**
 * This file is part of Aion-Lightning <aion-lightning.org>.
 *
 *  Aion-Lightning is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  Aion-Lightning is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details. *
 *  You should have received a copy of the GNU General Public License
 *  along with Aion-Lightning.
 *  If not, see <http://www.gnu.org/licenses/>.
 */


package com.aionemu.packetsamurai.crypt;

import java.util.Arrays;

import com.aionemu.packetsamurai.PacketSamurai;
import com.aionemu.packetsamurai.parser.PartType;
import com.aionemu.packetsamurai.parser.datatree.IntValuePart;
import com.aionemu.packetsamurai.protocol.Protocol;
import com.aionemu.packetsamurai.protocol.protocoltree.PacketFamilly.packetDirection;
import com.aionemu.packetsamurai.session.DataPacket;

/**
 * @author -Nemesiss-
 *
 */
public abstract class AionGameCrypter implements ProtocolCrypter
{
	private Protocol protocol;
	private PartType opcodecType;
    byte[] staticKey = "nKO/WctQ0AVLbpzfBkS6NevDYT8ourG5CRlmdjyJ72aswx4EPq1UgZhFMXH?3iI9".getBytes();
    byte[] clientPacketkey;
    byte[] serverPacketkey;

    public boolean decrypt(byte[] raw, packetDirection dir)
    {
		if(dir == packetDirection.clientPacket)
        {
            if (clientPacketkey == null)
                return false;
            decode(raw, clientPacketkey);
        }
        else
        {
			if (clientPacketkey == null)
            {
				if(!validatePacket(raw, getStaticClientPacketCode()))
                	PacketSamurai.getUserInterface().log("Invalid Static Client Packet Code!!!");
                decodeOpcodec(raw);
                return searchKey(Arrays.copyOf(raw, raw.length), dir);
            }
            decode(raw, serverPacketkey);
            if(!validatePacket(raw, getStaticServerPacketCode()))
            	PacketSamurai.getUserInterface().log("Invalid Static Server Packet Code !!!");
            decodeOpcodec(raw);
        }
        return true;
    }
 
    private boolean searchKey(byte[] raw, packetDirection dir)
    {
        DataPacket packet = new DataPacket(0, raw, dir, 0, protocol);
        
        if (dir ==  packetDirection.serverPacket && "SM_KEY".equals(packet.getName()))
        {
            int key;
            IntValuePart part = (IntValuePart) packet.getRootNode().getPartByName("key");
            if(part == null)
            {
            	PacketSamurai.getUserInterface().log("Check your protocol there is no part called 'key' which is required in packet 0x49 SM_KEY of the GS protocol.");
                return false;
            }
            key = part.getIntValue();
			if (this instanceof AionGame4_3_0_0Crypter || this instanceof AionGame4_5_0_0Crypter) {
				key = (key - 0x3FF2CCCF) ^ 0xCD92E4DB;
			}
			else {
				key = (key - 0x3FF2CCCF) ^ 0xCD92E4DD;
			}

            clientPacketkey = new byte[8];
            clientPacketkey[0] = (byte) (key & 0xff);
            clientPacketkey[1] = (byte) ((key >> 8) & 0xff);
            clientPacketkey[2] = (byte) ((key >> 16) & 0xff);
            clientPacketkey[3] = (byte) ((key >> 24) & 0xff);
            clientPacketkey[4] = (byte) 0xa1;
            clientPacketkey[5] = (byte) 0x6c;
            clientPacketkey[6] = (byte) 0x54;
            clientPacketkey[7] = (byte) 0x87;
            serverPacketkey = new byte[8];
            System.arraycopy(clientPacketkey, 0, serverPacketkey, 0, 8);
            return true;
        }
        PacketSamurai.getUserInterface().log("No key found...");
        return false;
    }

    public void decode(byte[] raw, byte[] key)
    {
        int prev = raw[0];
        /** Decode first byte */
        raw[0] ^= (key[0] &0xff);

        for (int i=1; i < raw.length; i++)
        {
            int curr = raw[i] &0xff;
            raw[i] = (byte)(curr ^ (staticKey[i&63] &0xff) ^ (key[i&7] &0xff) ^ prev);
            prev = curr;
        }

        long old = 
            (((long) key[0] & 0xff)) |
            (((long)key[1] &0xff) <<  8) |
            (((long)key[2] &0xff) << 16) |
            (((long)key[3] &0xff) << 24) |
            (((long)key[4] &0xff) << 32) |
            (((long)key[5] &0xff) << 40) |
            (((long)key[6] &0xff) << 48) |
            (((long)key[7] &0xff) << 56);

        old += raw.length;

        key[0] = (byte)(old &0xff);
        key[1] = (byte)(old >>  8 &0xff);
        key[2] = (byte)(old >> 16 &0xff);
        key[3] = (byte)(old >> 24 &0xff);
        key[4] = (byte)(old >> 32 &0xff);
        key[5] = (byte)(old >> 40 &0xff);
        key[6] = (byte)(old >> 48 &0xff);
        key[7] = (byte)(old >> 56 &0xff);
    }

	private final boolean validatePacket(byte[] raw, byte code) {
		int opSize = opcodecType.getTypeByteNumber();
		for (int i = 0; i < opSize; i++) {
			if (raw[i] != ~raw[i + opSize + 1]) {
				return false;
			}
		}
		return raw[opSize] == code;
	}

    private final void decodeOpcodec(byte[] raw)
    {
    	int op = 0;
    	for(int i = 0; i < opcodecType.getTypeByteNumber(); i++)
    		op |= (raw[i] & 0xff) << (i*8);

    	int decOp = decodeOpcodec(op);

    	for(int i = 0; i < opcodecType.getTypeByteNumber(); i++)
    		raw[i] = (byte) (decOp >> (i*8));
    }

	public void setProtocol(Protocol protocol)
	{
		this.protocol = protocol;
		this.opcodecType = protocol.getServerPacketsFamilly().getSwitchType();
	}

	abstract int decodeOpcodec(int op);
	abstract byte getStaticServerPacketCode();
	abstract byte getStaticClientPacketCode();
}

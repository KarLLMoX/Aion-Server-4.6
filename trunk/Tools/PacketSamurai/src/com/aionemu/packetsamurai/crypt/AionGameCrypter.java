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

import com.aionemu.packetsamurai.IUserInterface;
import com.aionemu.packetsamurai.PacketSamurai;
import com.aionemu.packetsamurai.parser.PartType;
import com.aionemu.packetsamurai.parser.datatree.DataTreeNodeContainer;
import com.aionemu.packetsamurai.parser.datatree.IntValuePart;
import com.aionemu.packetsamurai.protocol.Protocol;
import com.aionemu.packetsamurai.protocol.protocoltree.PacketFamilly;
import com.aionemu.packetsamurai.protocol.protocoltree.PacketFamilly.packetDirection;
import com.aionemu.packetsamurai.session.DataPacket;
import java.util.Arrays;

public abstract class AionGameCrypter implements ProtocolCrypter {

    private Protocol protocol;
    private PartType opcodecType;
    byte[] staticKey = "nKO/WctQ0AVLbpzfBkS6NevDYT8ourG5CRlmdjyJ72aswx4EPq1UgZhFMXH?3iI9".getBytes();
    byte[] clientPacketkey;
    byte[] serverPacketkey;
  
    public boolean decrypt(byte[] raw, PacketFamilly.packetDirection dir) {
        if (dir == PacketFamilly.packetDirection.clientPacket) {
            if (clientPacketkey == null) {
                return false;
            }
            decode(raw, clientPacketkey);
        }
        else {
            if (clientPacketkey == null) {
                if (!validatePacket(raw, getStaticClientPacketCode())) {
                PacketSamurai.getUserInterface().log("Invalid Static Client Packet Code!!!");
            }
            decodeOpcodec(raw);
            return searchKey(Arrays.copyOf(raw, raw.length), dir);
        }
        decode(raw, serverPacketkey);
        if (!validatePacket(raw, getStaticServerPacketCode())) {
            PacketSamurai.getUserInterface().log("Invalid Static Server Packet Code !!!");
        }
        decodeOpcodec(raw);
        }
        return true;
    }
  
    private boolean searchKey(byte[] raw, PacketFamilly.packetDirection dir) {
        DataPacket packet = new DataPacket(0, raw, dir, 0L, protocol);
        if ((dir == PacketFamilly.packetDirection.serverPacket) && ("SM_KEY".equals(packet.getName()))) {
            IntValuePart part = (IntValuePart)packet.getRootNode().getPartByName("key");
            if (part == null) {
                PacketSamurai.getUserInterface().log("Check your protocol there is no part called 'key' which is required in packet 0x49 SM_KEY of the GS protocol.");
                return false;
            }
            int key = part.getIntValue();
            if ((this instanceof AionGame4_7_0_0Crypter)) {
                key = key - 0x3FF2CCCF ^ 0xCD92E4DD;
            } else if ((this instanceof AionGame4_5_0_15Crypter)) {
                key = key - 0x3FF2CCCF ^ 0xCD92E4DD;
            } else if ((this instanceof AionGame4_5_0_0Crypter)) {
                key = key - 0x3FF2CCCF ^ 0xCD92E4DB;
            } else {
                key = key - 0x3FF2CCCF ^ 0xCD92E4D9;
            }
            clientPacketkey = new byte[8];
            clientPacketkey[0] = ((byte)(key & 0xFF));
            clientPacketkey[1] = ((byte)(key >> 8 & 0xFF));
            clientPacketkey[2] = ((byte)(key >> 16 & 0xFF));
            clientPacketkey[3] = ((byte)(key >> 24 & 0xFF));
            clientPacketkey[4] = -95;
            clientPacketkey[5] = 108;
            clientPacketkey[6] = 84;
            clientPacketkey[7] = -121;
            serverPacketkey = new byte[8];
            System.arraycopy(clientPacketkey, 0, serverPacketkey, 0, 8);
            return true;
        }
        PacketSamurai.getUserInterface().log("No key found...");
        return false;
    }
  
    public void decode(byte[] raw, byte[] key) {
        int prev = raw[0]; int 
    
        tmp6_5 = 0; byte[] tmp6_4 = raw;tmp6_4[tmp6_5] = ((byte)(tmp6_4[tmp6_5] ^ key[0] & 0xFF));
        for (int i = 1; i < raw.length; i++) {
            int curr = raw[i] & 0xFF;
            raw[i] = ((byte)(curr ^ staticKey[(i & 0x3F)] & 0xFF ^ key[(i & 0x7)] & 0xFF ^ prev));
            prev = curr;
        }
        long old = 
            (key[0] & 0xFF) << 0 | 
            (key[1] & 0xFF) << 8 | 
            (key[2] & 0xFF) << 16 | 
            (key[3] & 0xFF) << 24 | 
            (key[4] & 0xFF) << 32 | 
            (key[5] & 0xFF) << 40 | 
            (key[6] & 0xFF) << 48 | 
            (key[7] & 0xFF) << 56;
    
        old += raw.length;
    
        key[0] = ((byte)(int)(old >> 0 & 0xFF));
        key[1] = ((byte)(int)(old >> 8 & 0xFF));
        key[2] = ((byte)(int)(old >> 16 & 0xFF));
        key[3] = ((byte)(int)(old >> 24 & 0xFF));
        key[4] = ((byte)(int)(old >> 32 & 0xFF));
        key[5] = ((byte)(int)(old >> 40 & 0xFF));
        key[6] = ((byte)(int)(old >> 48 & 0xFF));
        key[7] = ((byte)(int)(old >> 56 & 0xFF));
    }
  
    private final boolean validatePacket(byte[] raw, byte code) {
        int opSize = opcodecType.getTypeByteNumber();
        for (int i = 0; i < opSize; i++) {
            if (raw[i] != (raw[(i + opSize + 1)] ^ 0xFFFFFFFF)) {
                return false;
            }
        }
        return raw[opSize] == code;
    }
  
    private final void decodeOpcodec(byte[] raw) {
        int op = 0;
        for (int i = 0; i < opcodecType.getTypeByteNumber(); i++) {
            op |= (raw[i] & 0xFF) << i * 8;
        }
        int decOp = decodeOpcodec(op);
        for (int i = 0; i < opcodecType.getTypeByteNumber(); i++) {
            raw[i] = ((byte)(decOp >> i * 8));
        }
    }
  
    public void setProtocol(Protocol protocol) {
        this.protocol = protocol;
        opcodecType = protocol.getServerPacketsFamilly().getSwitchType();
    }
  
    abstract int decodeOpcodec(int paramInt); 
    abstract byte getStaticServerPacketCode(); 
    abstract byte getStaticClientPacketCode();
}

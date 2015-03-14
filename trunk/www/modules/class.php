<?php
// ServerAion Web by Pr00f & Sky (serveraion.ru)
// ServerAion Web 2.0 German by R3spons4bl3 (silkroad-german.de)

require "class_m.php";


?>
          <table width="100%" height="258px" class="klassen" cellpadding="0" cellspacing="0">
					<tbody><tr valign="bottom">		
					<td align="center" class="dot1"><div style="position: absolute;margin:130px 0px 0px 8px;align:center;z-index:1000"><?php echo "".round(($players_GLADIATOR/$players_class_all*100), 0)."%";?></div>
					<div style=" position: relative;height:150px;width:35px;border-bottom:2px solid #000"><div style="position: absolute; bottom: 0;height:<?php echo "".round(($players_GLADIATOR/$players_class_all*100), 1)."%";?>;width:35px;background:#000;border:0px solid #20267C"></div></div>
					<small><?php echo $players_GLADIATOR; ?></small></td>
					<td align="center" class="dot1"><div style="position: absolute;margin:130px 0px 0px 8px;align:center;z-index:1000"><?php echo "".round(($players_TEMPLAR/$players_class_all*100), 0)."%";?></div>
					<div style=" position: relative;height:150px;width:35px;border-bottom:2px solid #000"><div style="position: absolute; bottom: 0;height:<?php echo "".round(($players_TEMPLAR/$players_class_all*100), 1)."%";?>;width:35px;background:#000;border:0px solid #20267C"></div></div>
					<small><?php echo $players_TEMPLAR; ?></small></td>
					<td align="center" class="dot1"><div style="position: absolute;margin:130px 0px 0px 8px;align:center;z-index:1000"><?php echo "".round(($players_ASSASSIN/$players_class_all*100), 0)."%";?></div>
					<div style=" position: relative;height:150px;width:35px;border-bottom:2px solid #000"><div style="position: absolute; bottom: 0;height:<?php echo "".round(($players_ASSASSIN/$players_class_all*100), 1)."%";?>;width:35px;background:#000;border:0px solid #20267C">&nbsp;</div></div>
					<small><?php echo $players_ASSASSIN; ?></small></td>
					<td align="center" class="dot1"><div style="position: absolute;margin:130px 0px 0px 8px;align:center;z-index:1000"><?php echo "".round(($players_RANGER/$players_class_all*100), 0)."%";?></div>
					<div style=" position: relative;height:150px;width:35px;border-bottom:2px solid #000"><div style="position: absolute; bottom: 0;height:<?php echo "".round(($players_RANGER/$players_class_all*100), 1)."%";?>;width:35px;background:#000;border:0px solid #20267C">&nbsp;</div></div>
					<small><?php echo $players_RANGER; ?></small></td>
          <td align="center" class="dot1"><div style="position: absolute;margin:130px 0px 0px 8px;align:center;z-index:1000"><?php echo "".round(($players_SORCERER/$players_class_all*100), 0)."%";?></div>
					<div style=" position: relative;height:150px;width:35px;border-bottom:2px solid #000"><div style="position: absolute; bottom: 0;height:<?php echo "".round(($players_SORCERER/$players_class_all*100), 1)."%";?>;width:35px;background:#000;border:0px solid #20267C">&nbsp;</div></div>
					<small><?php echo $players_SORCERER; ?></small></td>
					<td align="center" class="dot1"><div style="position: absolute;margin:130px 0px 0px 8px;align:center;z-index:1000"><?php echo "".round(($players_SPIRIT_MASTER/$players_class_all*100), 0)."%";?></div>
					<div style=" position: relative;height:150px;width:35px;border-bottom:2px solid #000"><div style="position: absolute; bottom: 0;height:<?php echo "".round(($players_SPIRIT_MASTER/$players_class_all*100), 1)."%";?>;width:35px;background:#000;border:0px solid #20267C">&nbsp;</div></div>
					<small><?php echo $players_SPIRIT_MASTER; ?></small></td>
					<td align="center" class="dot1"><div style="position: absolute;margin:130px 0px 0px 8px;align:center;z-index:1000"><?php echo "".round(($players_CLERIC/$players_class_all*100), 0)."%";?></div>
					<div style=" position: relative;height:150px;width:35px;border-bottom:2px solid #000"><div style="position: absolute; bottom: 0;height:<?php echo "".round(($players_CLERIC/$players_class_all*100), 1)."%";?>;width:35px;background:#000;border:0px solid #20267C">&nbsp;</div></div>
					<small><?php echo $players_CLERIC; ?></small></td>
					<td align="center" class="dot1"><div style="position: absolute;margin:130px 0px 0px 8px;align:center;z-index:1000"><?php echo "".round(($players_CHANTER/$players_class_all*100), 0)."%";?></div>
					<div style=" position: relative;height:150px;width:35px;border-bottom:2px solid #000"><div style="position: absolute; bottom: 0;height:<?php echo "".round(($players_CHANTER/$players_class_all*100), 1)."%";?>;width:35px;background:#000;border:0px solid #20267C">&nbsp;</div></div>
					<small><?php echo $players_CHANTER; ?></small></td>
					<td align="center" class="dot1"><div style="position: absolute;margin:130px 0px 0px 8px;align:center;z-index:1000"><?php echo "".round(($players_GUNNER/$players_class_all*100), 0)."%";?></div>
					<div style=" position: relative;height:150px;width:35px;border-bottom:2px solid #000"><div style="position: absolute; bottom: 0;height:<?php echo "".round(($players_GUNNER/$players_class_all*100), 1)."%";?>;width:35px;background:#000;border:0px solid #20267C">&nbsp;</div></div>
					<small><?php echo $players_GUNNER; ?></small></td>
					<td align="center" class="dot1"><div style="position: absolute;margin:130px 0px 0px 8px;align:center;z-index:1000"><?php echo "".round(($players_RIDER/$players_class_all*100), 0)."%";?></div>
					<div style=" position: relative;height:150px;width:35px;border-bottom:2px solid #000"><div style="position: absolute; bottom: 0;height:<?php echo "".round(($players_RIDER/$players_class_all*100), 1)."%";?>;width:35px;background:#000;border:0px solid #20267C">&nbsp;</div></div>
					<small><?php echo $players_RIDER; ?></small></td>
					<td align="center" class="dot1"><div style="position: absolute;margin:130px 0px 0px 8px;align:center;z-index:1000"><?php echo "".round(($players_ARTIST/$players_class_all*100), 0)."%";?></div>
					<div style=" position: relative;height:150px;width:35px;border-bottom:2px solid #000"><div style="position: absolute; bottom: 0;height:<?php echo "".round(($players_ARTIST/$players_class_all*100), 1)."%";?>;width:35px;background:#000;border:0px solid #20267C">&nbsp;</div></div>
					<small><?php echo $players_ARTIST; ?></small></td>
					<td align="center" class="dot1"><div style="position: absolute;margin:130px 0px 0px 8px;align:center;z-index:1000"><?php echo "".round(($players_BARD/$players_class_all*100), 0)."%";?></div>
					<div style=" position: relative;height:150px;width:35px;border-bottom:2px solid #000"><div style="position: absolute; bottom: 0;height:<?php echo "".round(($players_BARD/$players_class_all*100), 1)."%";?>;width:35px;background:#000;border:0px solid #20267C">&nbsp;</div></div>
					<small><?php echo $players_BARD; ?></small></td>
					</tr><tr valign="bottom">
		
					 		
					<td align="center"><img src="img_top/gladiator.png" title="<?php echo $language['Gladiator'];?>"></td>
					<td align="center"><img src="img_top/templar.png" title="<?php echo $language['Templar'];?>"></td>
					
					<td align="center"><img src="img_top/assassin.png" title="<?php echo $language['Assassin'];?>"></td>
					<td align="center"><img src="img_top/ranger.png" title="<?php echo $language['Ranger'];?>"></td>
					
					<td align="center"><img src="img_top/sorcerer.png" title="<?php echo $language['Sorcerer'];?>"></td>
					<td align="center"><img src="img_top/spiritmaster.png" title="<?php echo $language['SpiritMaster'];?>"></td>
					
					<td align="center"><img src="img_top/cleric.png" title="<?php echo $language['Cleric'];?>"></td>
					<td align="center"><img src="img_top/chanter.png" title="<?php echo $language['Chanter'];?>"></td>
					
					<td align="center"><img src="img_top/gunner.png" title="<?php echo $language['Gunner'];?>"></td>
					<td align="center"><img src="img_top/rider.png" title="<?php echo $language['Rider'];?>"></td>
					
					<td align="center"><img src="img_top/artist.png" title="<?php echo $language['Artist'];?>"></td>
					<td align="center"><img src="img_top/bard.png" title="<?php echo $language['Bard'];?>"></td>
										
          </tr></tbody></table>

           

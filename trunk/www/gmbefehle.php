<?php
// ServerAion Web by Pr00f &amp; Sky (serveraion.ru)
require "header.php";
?>

<div class="case">
	<div class="content">
    	<div class="news">
			<div class="news-title"><center>Deutsche Admin/GM Kommando Liste</center></div>
			<div id="nodecor" align="left" class="mb10">
			
			
<div id="post-message" style="font-size: 14px;">


<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		font-size: 14px;
		overflow: auto">//promote &lt;Spieler&gt; &lt;Admin Level&gt;</pre>
</div>Hiermit k&ouml;nnen Adminrechte vergeben werden (Admin Level = 1-3)<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//revoke &lt;Spieler&gt;</pre>
</div>Hiermit k&ouml;nnen Adminrechte entzogen werden<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 50px;
		text-align: left;
		overflow: auto">//add &lt;Spieler&gt; &lt;Item ID&gt; &lt;Anzahl&gt;
//add &lt;Item ID&gt; &lt;Anzahl&gt;</pre>
</div>F&uuml;gt einen Gegenstang in gew&uuml;nschter Menge einem Spieler oder dir selbst ins Inventar hinzu.<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//remove &lt;Spieler&gt; &lt;Gegenstand ID&gt; &lt;Menge&gt;</pre>
</div>L&ouml;scht die Gegenst&auml;nde aus dem Inventar des Spielers<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//adddrop &lt;Mob ID&gt; &lt;Item ID&gt; &lt;min&gt; &lt;max&gt; &lt;Chance&gt;</pre>
</div>F&uuml;gt in die Datenbank hinzu<br>
welcher Mob &lt;Mob ID&gt;<br>
welches Item &lt;Item ID&gt;<br>
welche Menge &lt;min&gt; und &lt;max&gt;<br>
und die Drop Chance &lt;Chance&gt; er haben soll.<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 50px;
		text-align: left;
		overflow: auto">//addset &lt;Spieler&gt; &lt;Itemset ID&gt;
//addset &lt;Itemset ID&gt;</pre>
</div>F&uuml;gt einem Spieler oder sich selbst ein Set im Inventar hinzu.<br>
(Set Liste unten)<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//addskill &lt;Skill ID&gt; &lt;Skill Level&gt;</pre>
</div>F&uuml;gt ein Skill mit dem entsprechenden Skill Level hinzu.<br>
M&uuml;&szlig;te auch bei markierten Spielern funktionieren.<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//addtitle &lt;Title ID&gt; &lt;Spieler&gt;</pre>
</div>Gibt einem Spieler einen Titel.<br>
(Titel Liste unten)<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 50px;
		text-align: left;
		overflow: auto">//announce anonymous &lt;Text&gt;
//announce name &lt;Text&gt;</pre>
</div>Ank&uuml;ndigungen in der Bildmitte ohne Namen.<br>
Ank&uuml;ndigung in der Bildmitte mit Namen.<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 50px;
		text-align: left;
		overflow: auto">//announcefaction ely &lt;Text&gt;
//announcefaction asmo &lt;Text&gt;</pre>
</div>Ank&uuml;ndigunge NUR an Elyos oder Asmos<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 66px;
		text-align: left;
		overflow: auto">//announcements list
//announcements add &lt;Fraktion: ELYOS | ASMODIANS | ALL&gt; &lt;Type: NORMAL | ANNOUNCE | ORANGE | YELLOW | SHOUT&gt; &lt;Zeit in Sekunden&gt; &lt;Text&gt;
//announcements delete &lt;ID&gt;</pre>
</div>Zeigt die ID Liste der Automatischen Ank&uuml;ndigungen an<br>
Tr&auml;gt eine Automatische Ank&uuml;ndigung in die Datenbank ein<br>
L&ouml;scht eine Automatische Ank&uuml;ndigung<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//appearance &lt;size | voice | hair | face | deco | head_size | tattoo | reset&gt; &lt;Nummer&gt;</pre>
</div>&auml;ndert das Aussehen vom Makierten Ziel (reset macht alles R&uuml;ckg&auml;ngig)<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 82px;
		text-align: left;
		overflow: auto">//bk add &lt;Speicherpunkt Name&gt;
//bk del
//bk tele &lt;Speicherpunkt Name&gt;
//bk list</pre>
</div>Setzt einen Bookmark (Speicherpunkt zum Teleportieren)<br>
L&ouml;scht einen Speicherpunkt<br>
Teleportiert dich zum Speicherpunkt<br>
zeigt alle Bookmarks an<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//delete</pre>
</div>L&ouml;scht einen anvisierten NPC<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 50px;
		text-align: left;
		overflow: auto">//dye &lt;Farbname oder Hex Farbcode&gt;
//dye no</pre>
</div>&auml;ndert die Farbe der R&uuml;stung vom Markierten Spieler oder macht es wieder R&uuml;ckg&auml;ngig<br>
(Farbliste unten)<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 82px;
		text-align: left;
		overflow: auto">//enemy players
//enemy npcs
//enemy all
//enemy cancel</pre>
</div>Das gleiche wie //neutral<br>
players - Du bist neutral zu Spielern beider Fraktionen<br>
npcs - Du bist neutral zu allen NPC`s und Monster<br>
all - Du bist neutral bei Spieler beider Fraktionen und allen NPCs<br>
cancel - Alles aufgehoben. Spieler und NPCs haben standardm&auml;&szlig;ig Feindschaft<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 66px;
		text-align: left;
		overflow: auto">//equip &lt;Spielername&gt; socket &lt;Manastein ID&gt; &lt;Solts Anzahl&gt;
//equip &lt;Spielername&gt; enchant &lt;Anzahl der Verzauberungsstufen&gt;
//equip &lt;Spielername&gt; godstone &lt;Gottstein ID&gt;</pre>
</div>Erstellt z.B. mit "//equip socket 167000555 2" "zwei" Manasteine Magieverst&auml;rkung +27 in jedem Ausr&uuml;stungsgegenstand.<br>
Der Spieler bekommt auf jeden Gegenstand Verzauberungssteine gesockelt (max +15). <br>
Setzt Gottsteine in die Gegenst&auml;nde des Spielers.<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 50px;
		text-align: left;
		overflow: auto">//gag &lt;Name&gt;
//ungag &lt;Name&gt;</pre>
</div>Chat Sperren oder entsperren<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//givemissingskills</pre>
</div>&uuml;berpr&uuml;ft fehlende F&auml;higkeiten des Charakters und f&uuml;gt Sie ihm hinzu<br>
<br>
<br>

//gmlist<br>
Zeigt alle Trial GM, GM und Admins an. Wer seinen Status unter "V" auf unsichtbar stellt, wird in der Liste nicht als tGM, GM oder Admin angezeigt.<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//goto &lt;Ort&gt;</pre>
</div>Teleportiert dich zu einem Ort (siehe Liste unten)<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//grouptome &lt;Spielername&gt;</pre>
</div>Teleportiert die Gruppe des Spieler her<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//heal</pre>
</div>Heilt das Markierte Ziel<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//help</pre>
</div>Zeigt alle GM Befehle nach Berechtigung an.<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//info &lt;Name&gt;</pre>
</div>//playerinfo &lt;Name&gt; &lt;loc | item | group | skill | legion&gt;<br>
Zeigt verschiedene Infos des Spielers an (oder des Markierten Ziels)<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//invis</pre>
</div>Macht dich unsichtbar und sichtbar<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//invul</pre>
</div>Macht dich unsterblich und sterblich<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//kill</pre>
</div>T&ouml;tet das Anvesierte Ziel<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//kinah &lt;Summe&gt;</pre>
</div>Addet Kinah in angegebener Menge<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 82px;
		text-align: left;
		overflow: auto">//legion diband &lt;Legionsname&gt;
//legion setlevel &lt;Legionname&gt; &lt;Level&gt;
//legion setpoints &lt;Legionsname&gt; &lt;Punkte&gt;
//legion setname &lt;Legionname&gt; &lt;Neuer Legiosnname&gt;</pre>
</div>Legions Name aufl&ouml;sen (l&ouml;schen)<br>
Legionsstufe festlegen<br>
Beitragspunkte geben<br>
Name der Legion &auml;ndern<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 50px;
		text-align: left;
		overflow: auto">//morph &lt;Mob ID&gt;
//morph cancel</pre>
</div>Verwandelt dich oder einen Markierten Spieler in ein Mob (z.B.f&uuml;r Events)<br>
Macht die Verwandlung R&uuml;ckg&auml;ngig<br>
<br>
<br>

//moveplayertoplayer &lt;Name&gt; &lt;Name&gt;<br>
Teleportiert ein Spieler zum anderen Spieler<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//moveto &lt;Koordinate&gt;</pre>
</div>Teleportiert dich zu eine Koordinate <br>
(siehe Liste unten)<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//movetonpc &lt;NPC ID&gt;</pre>
</div>Teleportiert dich zu einem NPC<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//movetoplayer &lt;Name&gt;</pre>
</div>Teleportiert dich zu einem Spieler<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 82px;
		text-align: left;
		overflow: auto">//neutral players
//neutral npcs
//neutral all
//neutral cancel</pre>
</div>players - Du bist neutral zu Spielern beider Fraktionen<br>
npcs - Du bist neutral zu allen NPC`s und Monster<br>
all - Du bist neutral bei Spieler beider Fraktionen und allen NPCs<br>
cancel - Alles aufgehoben. Spieler und NPCs haben standardm&auml;&szlig;ig Feindschaft<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//notice &lt;Text&gt;</pre>
</div>Schriebt eine Nachricht an alle in Wei&szlig; NUR im Chat<br>
<br>
<br>

<div style="margin:20px; margin-top:5px; ">
	<div  style="margin-bottom:2px">Zitat:</div>
	<table cellpadding="6" cellspacing="0" border="0" width="100%">
	<tbody><tr>
		<td class="alt2" style="border:1px inset">
			
				//petition<br>
//petition &lt;id&gt;<br>
//petition &lt;id&gt; delete<br>
//petition &lt;id&gt; reply &lt;Text&gt;
			
		</td>
	</tr>
	</tbody></table>
</div>Zeigt alle Tickets ID`s an.<br>
Zeigt das Ticket an.<br>
L&ouml;scht das Ticket.<br>
Schreibt eine Antwort an den Spieler zur&uuml;ck. (Ticket kommt als Brief beim Spieler an)<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//powerup &lt;Spielername&gt; &lt;0-2&gt;</pre>
</div>Erh&ouml;ht die HP, MP, Verteidigung usw nach Anzahl. <br>
Pro Zahl "verdoppelt" sich die HP, MP... <br>
0 = normal<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 50px;
		text-align: left;
		overflow: auto">//quest start &lt;Quest ID&gt;
//quest set &lt;Quest ID&gt;</pre>
</div>Quest starten, Fortschritt<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 82px;
		text-align: left;
		overflow: auto">//reload quest
//reload skill
//reload portal
//reload spawn</pre>
</div>Reloaded alle angegebenen Atribute<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 50px;
		text-align: left;
		overflow: auto">//sprison &lt;Spieler&gt; &lt;zeit&gt;
//rprison &lt;Spieler&gt;</pre>
</div>Schickt den angegebenen Spieler ins Gef&auml;ngnis (Zeit: in Minuten)<br>
Holt den angegebenen Spieler aus dem Gef&auml;ngnis<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//rez</pre>
</div><div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//rez instant</pre>
</div>Belebt ein Anvisiertes Ziel wieder<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//save_spawn</pre>
</div>Speichert alle Spawndaten (/spawns/new)<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//say &lt;Nachricht&gt;</pre>
</div>Spricht als NPC, Mob oder Spieler wenn er Markiert ist<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//set level &lt;Level&gt;</pre>
</div>&auml;ndert das Level des anvisierten Spielers (Max. Level = 56)<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//set exp &lt;Betrag&gt;</pre>
</div>&auml;ndert die Erfahrung des anvisierten Spielers<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//set ap &lt;Betrag&gt;</pre>
</div>&auml;ndert die AP des Spielers<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//set title &lt;Titel ID&gt;</pre>
</div>&auml;ndert den Titel das anvisierten Spielers<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//set class &lt;Klassen ID&gt;</pre>
</div>&auml;ndert die Klasse des anvisierten Spielers (siehe Liste unten)<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//siege help</pre>
</div>Zeigt Infos von Artefacten und weitere Befehle an<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//spawn &lt;NPC ID&gt;</pre>
</div>Spawned einen NPC<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//speed &lt;0-200&gt;</pre>
</div>Erh&ouml;ht deine Geschwindigkeit (0 ist normal Geschwindigkeit)<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 98px;
		text-align: left;
		overflow: auto">//time dawn
//time day
//time dusk
//time night
//time &lt;Uhrzeit&gt;</pre>
</div>&auml;ndert die Ingame Zeit<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 82px;
		text-align: left;
		overflow: auto">//ban &lt;Name&gt; &lt;account|ip|full&gt; &lt;Zeit in Minuten&gt;
//unban &lt;Name&gt;
//banip &lt;Name&gt; &lt;Zeit in Minuten&gt;
//unbanip &lt;Name&gt;</pre>
</div>Es wird ein Spieler gebannt oder entbannt<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//unstuck &lt;Name&gt;</pre>
</div>Teleportiert einen Spieler der feststeckt zu seinem Bindepunkt<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 50px;
		text-align: left;
		overflow: auto">//weather &lt;Ort&gt; &lt;Nummer (0-8)&gt;
//weather reset</pre>
</div>&auml;ndert das Wetter auf des angegebenen Ort oder setzt es wieder zur&uuml;ck<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//zone</pre>
</div>Zeigt den Ort an, an dem man sich befindet<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//sys restart &lt;Countdown Zeit in Sekunden&gt; &lt;Anzeige in Sekunden&gt;</pre>
</div>Startet den Server Neu. (z.B. //sys restart 60 5) <br>
Startet in 60 Sekunden den Server neu und zeigt alle 5 Sekunden an, das der Server runtergefahren wird.<br>
<br>
<br>

<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//sys shutdown &lt;Countdown Zeit in Sekunden&gt; &lt;Anzeige in Sekunden&gt;</pre>
</div>F&auml;hrt den Server runter (z.B. //sys shutdown 60 5) <br>
Startet in 60 Sekunden den Server neu und zeigt alle 5 Sekunden an, das der Server runtergefahren wird.<br>
<br>
<br>
<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 130px;
		text-align: left;
		overflow: auto">//ai &lt;info|event|state&gt;

//sys info

//sys memory

//sys gc</pre>
</div><br>
<div style="margin:20px; margin-top:5px">
	<div  style="margin-bottom:2px">Befehl:</div>
	<pre class="alt2" dir="ltr" style="
		margin: 0px;
		padding: 6px;
		border: 1px inset;
		width: 599px;
		height: 34px;
		text-align: left;
		overflow: auto">//dye Farben:</pre>
</div>Farbname - Hex Farbe // Item Farbe<br>

Turquoise - 198d94 //169200001, 169201001<br>
Blue - 1f87f5 //169200002, 169201002<br>
Brown - 66250e //169200003, 169201003<br>
Purple - c38df5 //169200004, 169201004<br>
true red - c22626 //169200005, 169201005, 169220001, 169230001, 169231001<br>
true white / white - ffffff //169200006, 169201006, 169220002, 169231002<br>
true black / black - 000000 //169200007, 169201007, 169230008, 169231008<br>
hot orange - e36b00 //169201008, 169220004, 169230009, 169231009<br>
rich purple - 440b9a //169201009, 169220005, 169230007, 169231003<br>
hot pink - d60b7e //169201010, 169220006, 169230010, 169231010<br>
mustard - fcd251 //169201011, 169220007, 169230004, 169231004<br>
green tea - 61bb4f //169201012, 169220008, 169230003, 169231005<br>
olive green - 5f730e //169201013, 169220009, 169230005, 169231006<br>
deep blue - 14398b //169201014, 169220010, 169230006, 169231007<br>
romantic purple - 80185d //169230011<br>
wiki - 85e831 //169240001<br>
omblic - ff5151 //169240002<br>
meon - afaf26 //169240003<br>
ormea - ffaa11 //169240004<br>
tange - bd5fff //169240005<br>
ervio - 3bb7fe //169240006<br>
lunime - c7af27 //169240007<br>
vinna - 052775 //169240008<br>
kirka - ca84ff //169240009<br>
brommel - c7af27 //169240010<br>
pressa - ff9d29 //169240011<br>
merone - 8df598 //169240012<br>
kukar - ffff96 //169240013<br>
leopis - 31dfff //169240014<br>
--------------------------------------------------------------<br>
<br>
<br>
//set class Klassen ID's:<br>

Krieger - 0<br>
Gladiator - 1<br>
Templer - 2<br>
<br>
Sp&auml;her - 3<br>
Assassin - 4<br>
J&auml;ger - 5<br>
<br>
Magier - 6<br>
Zauberer - 7<br>
Beschw&ouml;rer - 8<br>
<br>
Priester - 9<br>
Kleriker - 10<br>
Kantor - 11<br>
-------------------------------------------------------------------------<br>
<br>
<div class="hr"></div>			
			
			</div>
			
			
			

<!--

      </div>
			<div class="hr"></div>
			<div class="news-title" id="setup"><center>Setup</center></div>
			<div id="nodecor" align="center" class="mb10">
-->
Credits by Titus&amp;Dallas<br>
			</div>
			<div id="clear"></div>
		</div>
    </div>
    
<?php require "sidebar.php"; ?>
</div>

<?php require "footer.php"; ?>
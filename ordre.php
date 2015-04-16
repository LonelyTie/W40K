<div id="info">

<?php

//recuperation optionnel du type de vaisseau
	echo "<br />";
	echo "Navire de Class Frigate : <br />";
	echo "<br />";
	echo "Type : ".Frigate::TYPE."<br />";
	echo "Length : ".Frigate::HEIGHT."<br />";
	echo "Width : ".Frigate::WIDTH."<br />";
	echo "Speed : ".Frigate::SPEED."<br />";
	echo "Weapon(s) :"."<br />";

	echo "PP : ".Frigate::PP."<br />";
	echo "Inertie : ".Frigate::MOVE."<br />";
?>

</div>

<div id="info2">
<p>Il vous est possible d'attribuer des points de jeu (PP) a differentes actions ! Attention le nombre de PP est limiter, etudiez votre navire en detail avant de vous decider. Cliquer sur Valider pour passer a l'etape suivante</p>
<form action="main.php?preset=mouvement" method="post">
	Boost bouclier : <input type="number" name="ppShield" min="0" /><br />
	Boost Armes : <input type="number" name="ppWeapon" min="0"/><br />
	Reparations : <input type="number" name="ppRepear" min="0" /><br />
	Boost deplacement : <input type="number" name="ppMove" min="0"/>&nbsp;&nbsp;
	<input type="submit" name="submit" value="OK"><br />
	
</form>

</div>


<div id="info">

<?php
include("stat.php");
?>

</div>

<div id="info2">
<p>You can attribute Power Points (PP) to differents actions, Be careful, the PP number is limited, think your spaceship details before you decide. Click on Validate to go to the next step.</p>
	<form action="main.php?preset=mouvement" method="post">
	Boost shield : <input type="number" name="ppShield" min="0" /><br />
	Boost weapon : <input type="number" name="ppWeapon" min="0"/><br />
	Reparations : <input type="number" name="ppRepair" min="0" /><br />
	Boost move : <input type="number" name="ppMove" min="0"/>&nbsp;&nbsp;
	<input type="submit" name="submit" value="Validater"><br />
	
</form>

</div>


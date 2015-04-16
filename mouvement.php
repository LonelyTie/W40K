<?php

if (!isset($_POST['ppShield']))
	$shield = 0;
else
	$shield = $_POST['ppShield'];
if (!isset($_POST['ppRepair']))
	$repair = 0;
else
	$repair = $_POST['ppRepair'];

if ($shield + $repair <= 10)
{
	if ($repair != 0)
	{
		$tab = $game->roll_the_dice($repair);
		foreach ($tab as $elem)
		{
			echo "you rolled a : "
			echo $elem;
			echo 'for repair<br />';
		//	if ($elem == 6)
		}

	}


}
else
	echo "to many points attributed, nothing has been done. Keep playing";




echo $game->merge_dice();
$game->reset_the_dice();


$str = serialize($_POST);
$_SESSION['pp'] = $str;

?>

<?php

	require_once("Weapon.class.php");

	class NavalSpear 
	{
		const			FRONT		= TRUE;
		const			REAR		= FALSE;
		const			S_SCOPE		= 30;
		const			I_SCOPE		= 60;
		const			L_SCOPE		= 90;

		private			$_load		= 0;
		private			$_used		= FALSE;
		public static	$verbose	= FALSE;

		use Weapon;
		
		function		__construct()
		{
			if (self::$verbose)
				echo "New NavalSpear Instanced<br>" . PHP_EOL;
		}

		function		__destruct()
		{
			if (self::$verbose)
				echo "NavalSpear desctructed<br>" . PHP_EOL;
		}
	}

?>

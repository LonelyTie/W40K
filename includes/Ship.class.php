<?php

	class Ship
	{
		protected		$_name;
		protected		$_shield = 0;
		protected		$_sprite;
		protected		$_coords;

		use Order, Movement, Shot;
	}

?>

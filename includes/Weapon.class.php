<?php

	trait Weapon {

		public	function	load_weapon($pp_spent)
		{
			$this->_load += $pp_spent;
			if ($this->_load && !$this->_used)
				return TRUE;
			else
				return FALSE;
		}

		public	function	getScope( $dice )
		{
			if ($dice >= 6)
				return self::S_SCOPE;
			else if ($dice >= 5)
				return self::I_SCOPE;
			else if ($dice >= 4)
				return self::L_SCOPE;
			else
				return (0);
		}

		public	function	check_target($coord, $map, $target_id, $scope)
		{
			$x		= $coords['x']; 
			$y		= $coords['y']; 
			$dir	= $coords['dir']; 
			$i		= 0;

			if ($dir == Game::WEST )
			{
				while (($x - $i) >= 0)
				{
					if ($map[$y][$x - $i] == $target_id && $i <= $scope)
						return TRUE;
					$i++;
				}
			}
			else if ($dir == Game::EAST )
			{
				while (($x + $i) <= Game::WIDTH)
				{
					if ($map[$y][$x + $i] == $target_id && $i <= $scope)
						return TRUE;
					$i++;
				}
			}
			else if ($dir == Game::NORTH )
			{
				while (($y + $i) <= Game::HEIGHT)
				{
					if ($map[$y + $i][$x] == $target_id && $i <= $scope)
						return TRUE;
					$i++;
				}
			}
			else if ($dir == Game::SOUTH )
			{
				while (($y - $i) <= 0)
				{
					if ($map[$y - $i][$x] == $target_id && $i <= $scope)
						return TRUE;
					$i++;
				}
			}
			return FALSE;
		}

		public	function	shot($ship_target)
		{
			$shield	= $target_ship->getShield();
			$pc		= $target_ship->getPc();

			if ($shield)
				$target_ship->setShield($shield - 1);
			else
				$target_ship->setPc($pc - 1);
			
			if (!$target_ship->getPc())
				echo "detruire le ship du joueur";
	
			$this->_used = TRUE;
		}
	}

?>

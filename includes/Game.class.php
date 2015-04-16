<?php

	class Game
	{
		const			NAME		= "Awesome Starships Battles In The Dark Grim Future Of The Grim Dark 41st Millenium";
		const			WIDTH		= 80;
		const			HEIGHT		= 80;
		const			NORTH		= 1;
		const			SOUTH		= 2;
		const			EAST		= 4;
		const			WEST		= 8;
		private			$_map;
		public static	$verbose	= False;

		function			__construct()
		{
			if (self::$verbose)
				echo "New Game instanced" . PHP_EOL;
			$this->init_map();
		}

		private		function		init_map()
		{
			$i = 0;
			while ($i < self::HEIGHT)
			{
				$j = 0;
				while ($j < self::WIDTH)
				{
					$this->_map[$i][$j] = 0;
					$j++;
				}
				$i++;
			}
			if (self::$verbose)
				echo "Map init" . PHP_EOL;
		}

		public function		getMap() { return ($this->_map); }


		public		function		add_player( $kwargs )
		{
			return ( new Player( $kwargs['id'], $kwargs['name'], $kwargs['ships'] ));
		}	


		/*
		 * ID DU JOUER + TABLEAU DE TABLEAU de bateau
		 * */
		public function		add_ship( $player_id, $ships )
		{
			
			foreach ($ships as $ship)
			{
				$coords = $ship->getCoords();
				$y		= $coords['y'];
				$x		= $coords['x'];
				$dir	= $coords['dir'];
				$i		= 0;

				if ($dir == self::NORTH)
				{
					while ($i < 4)
					{
						$this->_map[$y + $i][$x] = $player_id;
						$i++;
					}
				}
				else if ($dir == self::SOUTH)
				{
					while ($i < 4)
					{
						$this->_map[$y - $i][$x] = $player_id;
						$i++;
					}
				}
				else if ($dir == self::EAST)
				{
					while ($i < 4)
					{
						$this->_map[$y][$x - $i] = $player_id;
						$i++;
					}
				}
				else if ($dir == self::WEST)
				{
					while ($i < 4)
					{
						$this->_map[$y][$x + $i] = $player_id;
						$i++;
					}
				}
			}
		}

		public function		__toString()
		{
			$return	= "";
			$i		= 0;

			while ($i < Game::HEIGHT)
			{
				$j = 0;
				while ($j < Game::WIDTH)
				{
					$return .= $this->_map[$i][$j];
					$j++;
				}
				$return .= "<br>";
				$i++;
			}
			return ($return);
		}

		function			__destruct()
		{
			if (self::$verbose)
				echo "Game destructed" . PHP_EOL;
		}
	}

?>

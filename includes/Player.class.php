<?php

	class Player
	{
		protected		$_id;
		protected		$_name;
		protected		$_ships;
		public static	$verbose = FALSE;

		function		__construct( $id, $name, $ships )
		{
			if (self::$verbose)
				echo "New player instanced" . PHP_EOL;
			
			$this->_id		= $id; 
			$this->_name	= $name; 
			$this->_ships	= $ships; 
		}

		public	function	getId()    { return ($this->_id);    }
		public	function	getName()  { return ($this->_name);  }
		public	function	getShips() { return ($this->_ships); }

		public	function	alive()
		{
			if (empty($this->_ships))
				return FALSE;
			else
				return TRUE;
		}

		function		__destruct()
		{
			if (self::$verbose)
				echo "Player destructed" . PHP_EOL;
		}
	}


?>

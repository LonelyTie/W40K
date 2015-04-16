<?php

	class Frigate extends Ship
	{
		const	TYPE			= "Imperial_Frigate";
		const	SPEED			= 15;
		const	PP				= 10;
		const	MOVE			= 4;
		const	WIDTH			= 1;
		const	HEIGHT			= 4;
	
		protected $_id;
		protected $_pc			=	5;
		protected $_pp_spent	=	0;
		protected $_moving		=	FALSE;
		protected $_prevmov		=	0;
		protected $_activated	=	FALSE;
		protected $_weapon		=	array ("Naval_Spear");
		protected $coords;
		
		function		__construct( $kwargs )
		{
			parent::$_i++;
			$this->_name	= $kwargs['name'];
			$this->_id		= parent::$_i;
			$this->setCoords($kwargs['x'], $kwargs['y'], $kwargs['dir']);

			if (self::$verbose)
				echo "New Frigate Ship: ".$this->_id." instanced<br>" . PHP_EOL;
		}

		public function		getName()		{ return ($this->_name);		}
		public function		getMoving()		{ return ($this->_moving);		}
		public function		getActivated()	{ return ($this->_activated);	}
		public function		getWeapon()		{ return ($this->_weapon);		}
		public function		getPrevmov()	{ return ($this->_prevmov);		}
		public function		getPc()			{ return ($this->_pc);			}
		public function		getPpspent()	{ return ($this->_pp_spend);	}
		public function		getCoords()		{ return ($this->_coords);		}

		private function	setCoords($x, $y, $dir)
		{
			$coords = array ('x' => $x, 'y' => $y, 'dir' => $dir);
			$this->_coords	= $coords;
		}

		private function	setPrevmov($data)
		{
			$this->_prevmov = $data;
		}

		function		__destruct()
		{
			if (self::$verbose)
				echo "Frigate Ship: ".$this->_id." destructed<br>" . PHP_EOL;
		}
	}

?>

<?php

	class Ship
	{

		protected static	$_i			= 0;
		protected			$_name;
		protected			$_shield	= 0;
		protected			$_sprite;
		protected			$_coords;
		public static		$verbose	=	FALSE;
		protected $_id;
		protected $_pp_spent	=	0;
		protected $_moving		=	FALSE;
		protected $_prevmov		=	0;
		protected $_activated	=	FALSE;
		protected $_weapon		=	array ("Naval_Spear");
		protected $coords;

//		use Order, Movement, Shot;

		public function		getName()		{ return ($this->_name);		}
		public function		getMoving()		{ return ($this->_moving);		}
		public function		getActivated()	{ return ($this->_activated);	}
		public function		getWeapon()		{ return ($this->_weapon);		}
		public function		getPrevmov()	{ return ($this->_prevmov);		}
		public function		getPc()			{ return ($this->_pc);			}
		public function		getPpspent()	{ return ($this->_pp_spend);	}
		public function		getCoords()		{ return ($this->_coords);		}
		public function		getLength()		{ return (static::HEIGHT);		}

		public function		setPc($v){ 
			if ($v == 1 && ($this->getPc() + $v) <= self::MAXPC)
				$this->_pc += $v;
		}	

		protected function	setCoords($x, $y, $dir)
		{
			$coords = array ('x' => $x, 'y' => $y, 'dir' => $dir);
			$this->_coords	= $coords;
		}


		protected function	setPrevmov($data)
		{
			$this->_prevmov = $data;
		}
	}

?>

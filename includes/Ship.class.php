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
		protected $_ppspent	=	0;
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
		public function		getShield()			{ return ($this->_shield);			}
		public function		getPpspent()	{ return ($this->_ppspent);	}
		public function		getCoords()		{ return ($this->_coords);		}
		public function		getLength()		{ return (static::HEIGHT);		}

		public function		resetPpspent(){ 
			$this->_pp_spent = 0;
		}	

		public function		incPpspent($v){ 
			if (($this->getPpspent() + $v) <= static::PP)
				$this->_ppspent += $v;
			else
				$this->_ppspent = static::PP;
		}	

		public function		incPc(){ 
			if (($this->getPc() + 1) <= static::MAXPC)
				$this->_pc++;
		}	

		public function		decPc(){ 
			if (($this->getPc() - 1) <= static::MAXPC)
				$this->_pc++;
		}	

		public function		incShield($v){ 
				$this->_shield += $v;
		}	

		public function		decShield(){ 
			if (($this->getShield() - 1) >=  0)
				$this->_shield--;
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

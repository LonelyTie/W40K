<?php

	class Ship
	{
		protected static	$_i			= 0;
		public static		$verbose	=	FALSE;
		protected			$_name;
		protected			$_shield	= 0;
		protected			$_sprite;
		protected			$_coords;
		protected			$_id;
		protected			$_pp_spent	=	0;
		protected			$_moving	=	FALSE;
		protected			$_prevmov	=	0;
		protected			$_activated	=	FALSE;
		protected			$_weapon	=	array ("Naval_Spear");
		protected			$coords;

//		use Order, Movement, Shot;

		public function		getName()		{ return ($this->_name);		}
		public function		getMoving()		{ return ($this->_moving);		}
		public function		getActivated()	{ return ($this->_activated);	}
		public function		getWeapon()		{ return ($this->_weapon);		}
		public function		getPrevmov()	{ return ($this->_prevmov);		}
		public function		getPc()			{ return ($this->_pc);			}
		public function		getId()			{ return ($this->_id);			}
		public function		getPpspent()	{ return ($this->_pp_spent);	}
		public function		getCoords()		{ return ($this->_coords);		}
		public function		getShield()		{ return ($this->_shield);		}
		public function		getLength()		{ return (static::HEIGHT);		}

		protected function	setPrevmov($data)	{ $this->_prevmov = $data; }
		protected function	setShield($data)	{ $this->_shield = $data; }

		public function		setPc($v){ 
			if ($v == 1 && ($this->getPc() + $v) <= self::MAXPC)
				$this->_pc += $v;
		}	

		protected function	setCoords($x, $y, $dir)
		{
			$coords = array ('x' => $x, 'y' => $y, 'dir' => $dir);
			$this->_coords	= $coords;
		}

	}

?>

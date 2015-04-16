<?php

	class Frigate extends Ship
	{
		$this->_name			= "Hand Of The Emperor";

		const	TYPE			= "Imperial_Frigate";
		const	SIZE			= "1x4";
		const	SPEED			= 15;
		const	WEAPON			= "Naval_Spear";
		const	PP				= 10;
		const	MOVE			= 4;
	
		protected $_pc			=	5;
		protected $_pp_spend	=	0;
		protected $_activated	=	FALSE;

		
	}

?>

<?php
trait Order
{
	private $_dices = array();

	public function order_move() {
		if (!array_key_exists('move', $this->_dices))
			$this->dices = array_merge($this->_dices, array('move' => 1));
			else
				$this->_dices['move']++;
	}

	public function add_shield() {
		if (!array_key_exists('shield', $this->_dices))
			$this->dices = array_merge($this->_dices, array('shield' => 1));
		else
			$this->_dices['shield']++;
	}

	public function order_weapon()
	{
		if (!array_key_exists('weapon', $this->_dices))
			$this->dices = array_merge($this->_dices, array('weapon' => 1));
		else
			$this->_dices['weapon']++;
	}

	public function repare() {
		if (!array_key_exists('repare', $this->_dices))
			$this->dices = array_merge($this->_dices, array('repare' => 1));
		else
			$this->_dices['repare']++;
	}

	public function send_orders() {
		return ($this->_dices);
	}
}
?>












$this->factory = array_merge($this->factory, $this->currentsoldier);
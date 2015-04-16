<?php
trait Order
{
	private $_dices = array();

	public function orders($array) {
			$this->_dices = array_merge($this->_dices, array(   'move' => $array['move'],
																'shield' => $array['shield'],
																'weapon' => $array['weapon'],
																'repare' => $array['repare']));
	}

	public function send_orders() {
		return ($this->_dices);
	}
}
?>
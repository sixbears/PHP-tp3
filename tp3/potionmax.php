<?php
class Potionmax extends Potions
{
	public $name;
	public $pv_rendus;
	
	public function __construct ()
	{
		$name = 'Potionmax';
		$pv_rendus = 1000;

		parent::__construct($name, $pv_rendus);
	}
}
?>
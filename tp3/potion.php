<?php
class Potion extends Potions
{
	public $name;
	public $pv_rendus;
	
	public function __construct ()
	{
		$name = 'Potion';
		$pv_rendus = 20;

		parent::__construct($name, $pv_rendus);
	}
}
?>
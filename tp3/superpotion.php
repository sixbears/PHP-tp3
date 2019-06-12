<?php
class Superpotion extends Potions
{
	public $name;
	public $pv_rendus;
	
	public function __construct ()
	{
		$name = 'Superpotion';
		$pv_rendus = 50;

		parent::__construct($name, $pv_rendus);
	}
}
?>
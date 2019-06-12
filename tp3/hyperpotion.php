<?php
class Hyperpotion extends Potions
{
	public $name;
	public $pv_rendus;
	
	public function __construct ()
	{
		$name = 'Hyperpotion';
		$pv_rendus = 200;

		parent::__construct($name, $pv_rendus);
	}
}
?>
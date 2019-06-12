<?php

class Bulbizarre extends Pokemon
{
	public function __construct ($level, $life = null)
	{
		$name = 'Bulbizarre';
		$life_max = 100 + 7 * $level;
		$life = $life ?? $life_max;
		$type = 'plante';
		$strength = 10 + 3 * $level;

		parent::__construct($name, $life_max, $life, $level, $type, $strength);
	}

	public static function say_hi ()
	{
		echo "Bulbi !<br/>";
	}
}
?>
<?php

class Salameche extends Pokemon
{
	public function __construct ($level, $life = null)
	{
		$name = 'Salameche';
		$life_max = 100 + 5 * $level;
		$life = $life ?? $life_max;
		$type = 'feu';
		$strength = 10 + 4 * $level;

		parent::__construct($name, $life_max, $life, $level, $type, $strength);
	}

	public static function say_hi ()
	{
		echo "Sala ! <br/>";
	}
}
?>
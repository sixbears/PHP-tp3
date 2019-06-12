<?php

abstract class Pokemon
{
	public $name;
	public $life_max;
	public $life;
	public $level;
	public $type;
	public $strength;

	public function __construct ($name, $life_max, $life, $level, $type, $strength)
	{
		$this->name = $name;
		$this->life_max = $life_max;
		$this->life = $life;
		$this->level = $level;
		$this->type = $type;
		$this->strength = $strength;
		static::say_hi();
	}
	
	public static function say_hi ()
	{
		echo "Hi ! <br/>";
	}
	
	public function level_up ()
	{
		$this->level += 1;
		$this->life_max += 5;
		$this->life += 5;
		$this->strength += 2;
		$level_up_text = $this->name .' passe au niveau ' . $this->level ;
	}

	public function attaquer ($pokemon_adverse)
	{
		$dommage = round($this->strength * (rand(900, 1100) / 1000));
		return $dommage;
	}
}
?>
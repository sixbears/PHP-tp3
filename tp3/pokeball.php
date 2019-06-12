<?php
class Pokeball extends Ball
{
	public $name;
	public $level;
	
	public function __construct ()
	{
		$name = 'Pokeball';
		$level = 10;

		parent::__construct($name, $level);
	}

	public function capturer ($pokemon_viser)
	{
		$chance_capture = round(((($pokemon_viser->life_max - $pokemon_viser->life) / $pokemon_viser->life_max) * (1 + (10 - $pokemon_viser->level) / 25)),0);
		return $chance_capture;

		parent::capturer($pokemon_viser, $ball_use);
	}
}
?>
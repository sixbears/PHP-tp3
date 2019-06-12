<?php
abstract class Ball
{
	public $name;
	public $level;
	
	public function __construct ($name, $level)
	{
		$this->name = $name;
		$this->level = $level;
	}

	public function capturer ($pokemon_viser, $ball_use)
	{
		if ($ball_use->level > 80)
		{
			$chance_capture = 1;
		}
		else
		{
			$chance_capture = round((($pokemon_viser->life_max - $pokemon_viser->life) / $pokemon_viser->life_max) * (1 + ($ball_use->level - $pokemon_viser->level) / 25),0);
		}
		return $chance_capture;
	}
}
?>
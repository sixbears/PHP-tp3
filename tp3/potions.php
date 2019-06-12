<?php
abstract class Potions
{
	public $name;
	public $pv_rendus;
	
	public function __construct ($name, $pv_rendus)
	{
		$this->name = $name;
		$this->pv_rendus = $pv_rendus;
	}

	public function soigner ($pokemon_viser, $potion_use)
	{
		if ($potion_use->name == 'Potionmax')
		{
			$pokemon_viser->life = $pokemon_viser->life_max;
			echo "$pokemon_viser->name" . ' regagne toute sa vie! ';
		}
		elseif ($pokemon_viser->life + $potion_use->name > $pokemon_viser->life_max)
		{
			$pokemon_viser->life = $pokemon_viser->life_max;
			echo "$pokemon_viser->name" . ' regagne ' . "$potion_use->pv_rendus" . ' PDV! <br/>';
		}
		else
		{
			$pokemon_viser->life += $potion_use->pv_rendus;
			echo "$pokemon_viser->name" . ' regagne ' . "$potion_use->pv_rendus" . ' PDV! <br/>';
		}
		echo "$pokemon_viser->name" . ' a ' . "$pokemon_viser->life" . ' pdv.<br/>';

	}
}
?>
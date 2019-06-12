<?php
//potions
include 'potions.php';
include 'potion.php';
include 'superpotion.php';
include 'hyperpotion.php';
include 'potionmax.php';
//pokeballs
include 'ball.php';
include 'pokeball.php';
include 'superball.php';
include 'hyperball.php';
include 'masterball.php';
//pokemons
include 'pokemon.php';
include 'carapuce.php';
include 'salameche.php';
include 'bulbizarre.php';


// 


	// );

$carapuce = new Carapuce(50);
$salameche = new Salameche(5);

//$pokeball->capturer($salameche, $pokeball);
//$potion->soigner($carapuce, $potion);


// for($i = 0; $i < (count($sac_a_dos)+1); $i++)
// {
// 	echo $sac_a_dos[$i]->name;
// 	echo "<br/>";
// }
function use_item($item)
{
	
}

function fight($mon_pokemon,$pokemon_combat)
{
	$sac_a_dos = array(
		$pokeball1 = new Pokeball(),
		$pokeball2 = new Pokeball(),
		$pokeball3 = new Pokeball(),
		$potion1 = new Potion(),
		$potion2 = new Potion(),
		$superpotion1 = new Superpotion()
	);
	$end = 0;
	while ($end == 0) 
	{
		$compteur_tour = 0;
		++$compteur_tour;
		//Tour de mon Pokemon *****************************
		echo "<br/>C'est à votre tour :<br/>";
		// Condition pour savoir l'action a effectué
		if (rand(0,10) > 4 /*|| $compteur_tour == int(1)*/) {
			//attaque
			$dommage_mon_pokemon = $mon_pokemon->attaquer($pokemon_combat);
			$pokemon_combat->life -= $dommage_mon_pokemon;
			echo "$mon_pokemon->name" .' inflige ' . "$dommage_mon_pokemon" . ' dégats à ' . "$pokemon_combat->name" . '. <br/>';
			if ($pokemon_combat->life < 0)
			{
				echo "$pokemon_combat->name" . ' est K.O.<br/>';
				echo 'Vous avez gagné!<br/>';
				$win = 0;
				$win++;
			}
			else
			{

				echo "$pokemon_combat->name". ' a ' . "$pokemon_combat->life" . 'PDV!<br/>';
			}
		}
		// capture
		else {
			$j = 1;
			$chance_capture = $pokeball1->capturer($pokemon_combat);
			echo "Dresseur lance une pokeball!";
			++$j;
			if (((rand(0,100))/100) > $chance_capture)
			{
				echo 'La capture a échoué.';
			}
			else
			{
				echo "La capture a reussi! <br/> Salameche est ajouté au Pokedex!";
				$capt = 0;
				$capt++;
			}
		}

		// Tour de l'adversaire *******************************
		if (($capt or $win) == 0) {
			echo "<br/>C'est au tour de votre adversaire :<br/>";
			$dommage_pokemon_combat = $pokemon_combat->attaquer($mon_pokemon);
			$mon_pokemon->life -= $dommage_pokemon_combat;
			echo "$pokemon_combat->name" . ' inflige ' . "$dommage_pokemon_combat" . ' dégats à ' . "$mon_pokemon->name" . '. <br/>';
			if ($mon_pokemon->life < 0)
			{
				echo "$mon_pokemon->name" . ' est K.O.<br/>';
				echo 'Vous avez perdu...<br/>';
			}
			else
			{
				echo "$mon_pokemon->name" . ' a ' . "$mon_pokemon->life" . 'PDV!<br/>';
			}
			//Ligne de demarquation des tours.
			echo '************************************************';
		}
		
		//condition de fin de partie
		if ($mon_pokemon->life < 0 || $pokemon_combat->life < 0 || $capt ==1 ) {
			++$end;
		}
	}
}
fight($carapuce,$salameche);

?>
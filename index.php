<pre>
<?php

	require("includes/Game.class.php");
	require("includes/Player.class.php");

	Game::$verbose = TRUE;
	Player::$verbose = TRUE;

	$ships_p1	= array (
					array ("type" => 'Frigate',
							"y" => 1,
							"x" => 10,
							"dir" => Game::EAST)
				);

	$ships_p2	= array (
					array ("type" => 'Frigate',
							"y" => 78,
							"x" => 68,
							"dir" => Game::WEST),
					array ("type" => 'Frigate',
							"y" => 50,
							"x" => 50,
							"dir" => Game::NORTH)
				);

	$player1	= array (
					"id" => 1,
					"name" => "Tommy",
					"ships" => $ships_p1
				);

	$player2	= array (
					"id" => 2,
					"name" => "Anthony",
					"ships" => $ships_p2
				);

	$game = new Game;

	$p1 = $game->add_player($player1);
	$p2 = $game->add_player($player2);

	$game->add_ship('1', $p1->getShips());
	$game->add_ship('2', $p2->getShips());

	echo $game;

?>

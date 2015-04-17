<?php
session_start();
require_once('includes/Ship.class.php');
require_once('includes/Obstacle.class.php');
require_once('includes/NavalSpear.class.php');
require_once('includes/Dice.class.php');
require_once('includes/Frigate.class.php');
require_once('includes/Player.class.php');
require_once('includes/Game.class.php');
$game = unserialize($_SESSION['save']);
$active = $game->getActiveName();
$p1 = unserialize($_SESSION['player1']);
$p2 = unserialize($_SESSION['player2']);
if (array_key_exists('ship', $_SESSION))
	$ship = unserialize($_SESSION['ship']);


$coords = $ship->getCoords();
$length = $ship->getLength() / 2;
if ($_POST['side'] == "left")
{
	$coords['x'] = $coords['x'] + $length;
	$coords['y'] = $coords['y'] - $length;
	$coords['dir'] = 4;
	
}
if ($_POST['side'] == "right")
{
	$coords['x'] = $coords['x'] + $length;
	$coords['y'] = $coords['y'] + $length;
	$coords['dir'] = 8;

}
$game->del_ship($ship->getId(), $ship);
$ship->setCoords($coords['x'], $coords['y'], $coords['dir']);
$game->add_ship($ship->getId(), array($ship));
$ship->incPpspent($_POST['move']);
print_r($coords);



if (isset($ship))
	$currentShip = serialize($ship);
$player1 = serialize($p1);
$player2 = serialize($p2);
$save = serialize($game);
$_SESSION['save'] = $save;
$_SESSION['ship'] = $currentShip;;
$_SESSION['player1'] = $player1;
$_SESSION['player2'] = $player2;
header("Location: main.php?preset=mouvement");
?>

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
$actif = $game->getActive($p1, $p2);
$game->del_ship($actif->getId(), $ship);
if ($coords['dir'] == 1)
	$ship->setCoords($coords['x'], $coords['y'] - $_POST['move'], $coords['dir']);
if ($coords['dir'] == 2)
	$ship->setCoords($coords['x'], $coords['y'] + $_POST['move'], $coords['dir']);
if ($coords['dir'] == 4)
	$ship->setCoords($coords['x'] + $_POST['move'], $coords['y'], $coords['dir']);
if ($coords['dir'] == 8)
	$ship->setCoords($coords['x'] - $_POST['move'], $coords['y'], $coords['dir']);
$game->add_ship($actif->getId(), array($ship));
$ship->incPpspent($_POST['move']);



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

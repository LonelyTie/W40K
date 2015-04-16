<?php
session_start();
require_once('includes/Ship.class.php');
require_once('includes/Frigate.class.php');
require_once('includes/Player.class.php');
require_once('includes/Game.class.php');
$game = unserialize($_SESSION['save']);
$p1 = unserialize($_SESSION['player1']);
$p2 = unserialize($_SESSION['player2']);
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
</head>
	<body>
		<div id="content">
			<div id="box">
<?php
	echo '<h1>'.Game::NAME.'</h1>';
include('map.php');
echo "<br />";
echo "<br />";
if ($_GET['preset'] === 'select')
	include('select.php');
if ($_GET['preset'] === 'ordre')
	include('ordre.php');
if ($_GET['preset'] === 'mouvement')
	include('mouvement.php');
if ($_GET['preset'] === 'tir')
	include('tir.php');

$player1 = serialize($p1);
$player2 = serialize($p2);
$save = serialize($game);
$_SESSION['save'] = $save;
$_SESSION['player1'] = $player1;
$_SESSION['player2'] = $player2;
?>
			</div>
		</div>
	</body>
</html>

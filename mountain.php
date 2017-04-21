<!DOCTYPE html>
<html>
<head>
<title>Level: 2</title>
<link rel="stylesheet" type="text/css" href="Styles.css"> 
</head>
<body>
<div class="main left">
	<div class="textDisplay">
		<table class="menu" action="mountain.php">
		<p>
		It would read something like ____ our hero has arrived at the sprawling mountains.
		this should be at the bottom and transparent so the user can scroll the text over their adventure.
		
		After selecting all of your food, the journey starts at Garrett's Sadnwhich materials.
		The task is to transport a large shipment of sandwhich materials across a mountain range.
		
		This takes the player to the coast line, a great location for opening Delicatessens. This is where the delivery
		needs to be.
		</p>
		<form action="hills.php">
		<input type="submit" value="Continue"/>
		</form>
		</table>
	</div>
</div>
<div id="mountain">

</div>
<div class="inventory">
<p>Here is where the php would process the text creating an inventory</p>
<table class="bag">
<tr>
	<td>slot</td>
	<td>slot</td>
</tr>
<tr>
	<td>slot</td>
	<td>slot</td>
</tr>
<tr>
	<td>slot</td>
	<td>slot</td>
</tr>
</table>
</div>
<?php
	/*Variables are created here like the player and basic weapon damage*/
	$class= $_POST['class'];
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
	
	$base = rand(5, 15);          	
    $wpn = rand(25, 30);        	
    $speed = rand(10, 20) / 10;
	
	$health;		// calculate this based on some values that are different for each class
	/*All the items of the game*/
	$items = array();
	$items[0] = "rotary phone";		$items[3] = "clay pot";				$items[6] = "ice cube tray";		$items[9] = "plastic utensils";
	$items[1] = "spool of thread";	$items[4] = "coloring book";		$items[7] = "glow sticks";
	$items[2] = "sleeping bag";		$items[5] = "protective eye wear";	$items[8] = "harpoon";
	# utensils for use
	$clutter = shuffle($items);
	echo print_r($items);
	echo print_r($clutter);
	
	// Generate numbers within a range and assign them to the above variables.
#variables to create the board
// movement variables
/*This code is switching the user selected value and showing a player image*/
	$player = $class;
	switch($class){
		case 'Ninja':
			echo '<img src="images/ninja.png" id="player" align="middle" />'.$class;
			break;
		case 'Archer':
			echo '<img src="images/archer.png" id="player" />'.$class;
			break;
		case 'Pirate':
			echo '<img src="images/pirate.png" id="player" />'.$class;
			break;
		case 'SeaMonster':
			echo '<img src="images/seaMonster.png" id="player" />'.$class;
			break;
	} // change background colors for image
	
	@ $fp = fopen("NewGame.txt", 'ab');
	flock($fp, LOCK_EX);
	if(!$fp){
		echo"<p>Game was not created, an existing game is running</p>";
		exit;
	}
	fwrite($fp, $class);
	flock($fp, LOCK_UN);
	fclose($fp);
?>

</body>
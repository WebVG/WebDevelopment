<html>

<head>
<title>A GAME IN PHP</title>
<link rel="stylesheet" type="text/css" href="Styles.css"> 
</head>
<!-- 
add some check boxes of talents the player has.
http://www.pathguy.com/cg35.htm check this place out

add some selectable actions nothing crazy. keep it simple.

the inventory should stay the same.

more PHP code.

add enemies. write to the file. it should be more advanced writing to the file.


-->
<header class='header'>
<h2>Welcome to Text Adventure!</h2>
</header>
<body>
<div class='main left'>
	<div class='area'>
		<div class='left'>
		<p> You should create a character and give him some items. </p>
			<legend>Character Creation</legend>
		<form action="board.php" method="post">
		
				Slect Class: <select name="class">
				<option value="Ninja">Ninja</option>
				<option value="Archer">Archer</option>
				<option value="Pirate">Pirate</option>
				<option value="SeaMonster">Sea Monster</option>
				</select>
				<p />
		<table class="charCreate">
		<tr>
			<td colspan="2">Character Creation</td>
		</tr>
		<tr>
			<td colspan="2">
			SUPPLIES</td>
		</tr>
		<tr>
			<td>Corned Beef<br /></td>
			<td><input type='text' id='cBeef'/><br /></td>
		<tr>
		<tr>
			<td>Turkey Breast<br /></td>
			<td><input type='text' id='turkey' /><br /></td>
		<tr>
		<tr>
			<td>Chicken Salad<br /></td>
			<td><input type='text' id="cSalad" /><br /></td>
		<tr>
		<tr>
			<td>Mayonnaise<br /></td>
			<td><input type='text' id='mayo'/><br /></td>
		<tr>
		<tr>
			<td>Rye Flour<br /></td>
			<td><input type='text' id='rye' /><br /></td>
		<tr>
		<tr>
			<td>Potato Flakes<br /></td>
			<td><input type='text' id="flakes" /><br /></td>
		<tr>
		<tr>
			<td>White Cheddar<br /></td>
			<td><input type='text' id='wChed'/><br /></td>
		<tr>
		<tr>
			<td>Brie<br /></td>
			<td><input type='text' id='brie' /><br /></td>
		<tr>
		<tr>
			<td>Swiss<br /></td>
			<td><input type='text' id="swiss" /><br /></td>
		<tr>
		</table>
				<p />
				
		<input type="submit" value="Play"/>
		</form>
		</div>
		<div class='menu'>
			<ul>
				<li><a href="Index.html">Main Page - Character Creation</li></a>
				<li><a href="Board.php">Board</li></a>
				<li><a href="mountain.php">Level 2</li></a>
				<li><a href="coast.html">Level 3</li></a>
				<li><a href="Score.html">ScoreBoard</li></a>
				<input type='button' id='reset' value='Reset Game'>
			</ul>
		</div>
	</div>
</div>
<?php
	require('footer.php');
?>
</body>
</html>

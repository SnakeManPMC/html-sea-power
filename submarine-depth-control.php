<!DOCTYPE html>
<html lang="en">
<head>
<title>Submarine Depth Control Sea Power Naval Combat in the Missile Age</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Submarine Depth Control Sea Power Naval Combat in the Missile Age">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("/var/www/pmctactical.org/include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Submarine Depth Control Sea Power</h1>

<p>
Submarine Depth Control Sea Power, HOWTO go deep, shallow or periscope depth, etc. Welcome to PMC website for naval warfare game: Sea Power Naval Combat in the Missile Age.
</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Submarine Depth Control Sea Power</h2>

<p>
How to dive your submarine in Sea Power? In <a href="tactical-display.php">Tactical Display</a> select your submarine, now the main GUI bottom left corner lists your boat data like name, speed (Spd kts), course (Crs degrees) and depth (feet). Now you can click the Depth: (feet) data text, this brings up a dialog like you see in the below example image.
</p>

<img src="screenshots/Submarine-Depth-Control-01.jpg" class="imgresponsive" loading="lazy" alt="Sea Power Submarine Depth Control" title="Sea Power Submarine Depth Control">
<div class="imgcredit">
Image credit: <a href="https://www.youtube.com/@Wolfpack345" target="_blank">Wolfpack345 youtube channel</a>, <a href="https://www.youtube.com/watch?v=Rh6p7Domris" target="_blank">SEA POWER Submarine Combat! || New Naval Simulation! video</a>.
</div>

<p>
Here USS Baltimore SSN-704 Los Angeles Class FLT1 nuclear attack submarine is on 255ft depth. Depth control dialog offers you few options: Surface, Periscope, Shallow, Above Layer, Below Layer, Deep and Very Deep.
</p>

<p>
I don't currently know what these text name based values are in actual feet, like "Deep", meaning what, how many feet deep are you talking about, this needs testing once I get the game. PMCTODO
</p>

<p>
Above layer and below layer vary depending on the environmental ocean conditions, looks like in the above example image its "Thermal layer depth: 303 ft" value. I recall seeing video or two where player reported that within the same mission/scenario the ocean water conditions varied where thermal layer was different depths on different locations in the area he was playing/operating in. PMCTODO
</p>

<p>
Wolfpack345 said in his "Submarine Combat!" video that just like in <a href="https://cold-waters.pmctactical.org" target="_blank">Cold Waters</a> you can control submarines in Sea Power using keyboard WASD keys. Meaning turns left/right, dive/surface, and I assume speed control as well.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>
<a href="links.php">Links</a>, <a href="index.php">Back to Home Page</a>.
</p>
<p><i>PMC Sea Power 2024 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>

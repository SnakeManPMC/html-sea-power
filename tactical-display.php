<!DOCTYPE html>
<html lang="en">
<head>
<title>Tactical Display Sea Power Naval Combat in the Missile Age</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Tactical Display Sea Power Naval Combat in the Missile Age">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("/var/www/pmctactical.org/include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Tactical Display Sea Power</h1>
<p>Welcome to PMC website for naval warfare game: Sea Power Naval Combat in the Missile Age.</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Tactical Display Sea Power</h2>

<p>
In Sea Power <b>Tactical Display</b> is your tactical map where all the units (ships, subs, aircrafts, ground vehicles etc), weapons, land etc will appear. You can also control your units in Real Time Strategy (RTS) style using tactical display.
</p>

<img src="screenshots/Tactical-Display-01.jpg" class="imgresponsive" loading="lazy" alt="Sea Power Tactical Display" title="Sea Power Tactical Display">
<div class="imgcredit">
Image credit: <a href="https://www.youtube.com/@Wolfpack345" target="_blank">Wolfpack345 youtube channel</a>, <a href="https://www.youtube.com/watch?v=fS25SReO9lc" target="_blank">SEA POWER First Look! || New Naval Simulation! video</a>.
</div>

<p>
Tactical Display dialog can be dragged around, made larger and smaller depending what you need.
</p>

<p>
<b>Track Number</b> is a number (top most line) on all units and weapons. This is a track that is assigned to each contact in your tactical display, I mean you have to keep track of whos who and this number will do just that. You have known lines like <i>Kill track 1234!</i> in various naval warfare games for decades now, this is the track. Track number includes TYPE of the unit, like "7001 (DD)" would be track seven zero zero one destroyer, "7019 (FFG)" would be track seven zero one niner frigate, and so on.
</p>

<p>
<b>Unit Name</b> is listed on the second line for all units.
</p>

<p>
<b>Number nm</b> is a Distance <a href="https://en.wikipedia.org/wiki/Nautical_mile" target="_blank">Nautical Miles (NM)</a> from currently selected unit.
</p>

<p>
<b>Number km</b> in the bottom right side of tactical display you have "legend" measurement in <a href="https://en.wikipedia.org/wiki/Kilometre" target="_blank">kilometers (km)</a>. As you zoom in and out in tactical display this km legend changes in size. Its a quick visual reference of distance on the chart/map ie tactical display.
</p>

<p>
<b>Altitude ft</b> is units current altitude, if its an aircraft its usually high above sea/ground level, its its a surface ship then its about "Alt 1 ft" which means sea level and if its a submerged submarine then its depth.
</p>

<p>
Having ship unit selected on tactical display which have weapons, you can see for example green, blue and rew range circles around the unit. I don't yet know which ranges these colors represent, could be even green being sonar or something, assumption now is that red is surface to air missile range. PMCTODO
</p>

<p>
Waypoints on tactical display have numbers on them like 12:34, apparently these are local ZULU time, for example this 1234 example would be thirty four minutes past twelve o'clock. For example in ship waypoints that would be the estimate time to arrival. You can easily see how long time does it take to travel any such distance (waypoint). PMCTODO
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

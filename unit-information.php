<!DOCTYPE html>
<html lang="en">
<head>
<title>Unit Information Sea Power Naval Combat in the Missile Age</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Unit Information Sea Power Naval Combat in the Missile Age">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("/var/www/pmctactical.org/include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Unit Information Sea Power</h1>
<p>Welcome to PMC website for naval warfare game: Sea Power Naval Combat in the Missile Age.</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Unit Information Sea Power</h2>

<p>
To bring up Unit Information dialog right click on unknown unit, then select Information, a dialog comes up which looks something like below example image.
</p>

<img src="screenshots/Unit-Information-01.jpg" class="imgresponsive" loading="lazy" alt="Sea Power Unit Information" title="Sea Power Unit Information">
<div class="imgcredit">
Image credit: <a href="https://www.youtube.com/@Wolfpack345" target="_blank">Wolfpack345 youtube channel</a>, <a href="https://www.youtube.com/watch?v=Rh6p7Domris" target="_blank">SEA POWER Submarine Combat! || New Naval Simulation! video</a>.
</div>

<p>
Top left corner has track identification (ID).
</p>

<p>
State dormant, PMCTODO
</p>

<p>
Last detection age, looks like HOURS:MINUTES:SECONDS.TENTHS-OF-SECONDS, possibly. PMCTODO
</p>

<p>
First detection age. PMCTODO
</p>

<p>
Detected by. PMCTODO
</p>

<p>
Class is suggested, possible, unit class type.
</p>

<p>
AuxPower. PMCTODO
</p>

<p>
Blades is like in the above example image detected propeller blades.
</p>

<p>
ElectricFrequency. PMCTODO
</p>

<p>
MainPower. PMCTODO
</p>

<p>
Radar. I believe this is just a report which this, for example "Type 205" submarine has for surface radar, not sure. PMCTODO
</p>

<p>
RCS, no idea can only guess, could this be Radar Cross Section (RCS)? No idea. PMCTODO
</p>

<p>
Shafts. PMCTODO
</p>

<p>
Sonar. PMCTODO
</p>

<p>
UnitCategory, as in the example image its "Submarine", this of course changes according to the contact you are tracking.
</p>

<p>
VisualSize, I assume rough example of how big the unit is when observed visually, the bigger it is the easier it is to see further out, no idea. PMCTODO
</p>

<p>
"and 21 more..." in above example image, on all the youtube videos I've seen so far this cannot be expanded or opened up for all those "21 things", maybe its work in progress or designed not to show more than 5, no idea. PMCTODO
</p>

<p>
Confidence, hard to say what the value means other than basic logic, larger the number and more confidence you have, but it is from 0.0 to 1.0 or what is the range, no idea. PMCTODO
</p>

<p>
Below example image shows our unknown contact being designated as hostile submarine matching few possible classes.
</p>

<img src="screenshots/Unit-Information-02.jpg" class="imgresponsive" loading="lazy" alt="Sea Power Unit Information Hostile Submarine" title="Sea Power Unit Information Hostile Submarine">
<div class="imgcredit">
Image credit: <a href="https://www.youtube.com/@Wolfpack345" target="_blank">Wolfpack345 youtube channel</a>, <a href="https://www.youtube.com/watch?v=Rh6p7Domris" target="_blank">SEA POWER Submarine Combat! || New Naval Simulation! video</a>.
</div>

<p>
These possible contact classes are soviet union submarine Alfa class, Victor 1 class or Victor 2 class. Note how there is no longer "and 21 more..." text on the bottom, now the contact resolution is so high that its narrowed down to three different commie submarine classes.
</p>

<p>
Unit information tracking of unindentified soviet submarine with 9.7 desibel (DB) underwater noise level.
</p>

<img src="screenshots/Unit-Information-03.jpg" class="imgresponsive" loading="lazy" alt="Sea Power Unit Information Tracking Soviet Submarine" title="Sea Power Unit Information Tracking Soviet Submarine">
<div class="imgcredit">
Image credit: <a href="https://www.youtube.com/@Wolfpack345" target="_blank">Wolfpack345 youtube channel</a>, <a href="https://www.youtube.com/watch?v=_RkaYshM_Jk" target="_blank">SEA POWER The Barney Incident || New Naval Simulation video</a>.
</div>

<p>
State is tracking, confidence is higher than 1.0, detected by DDG Adams class passive sonar.
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

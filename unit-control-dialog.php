<!DOCTYPE html>
<html lang="en">
<head>
<title>Unit Control Dialog Sea Power Naval Combat in the Missile Age</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Unit Control Dialog Sea Power Naval Combat in the Missile Age">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("/var/www/pmctactical.org/include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>Unit Control Dialog Sea Power</h1>
<p>Welcome to PMC website for naval warfare game: Sea Power Naval Combat in the Missile Age.</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Unit Control Dialog Sea Power</h2>

<img src="screenshots/Sea-Power-Unit-Control-Dialog-01.jpg" class="imgresponsive" loading="lazy" alt="Sea Power Unit Control Dialog" title="Sea Power Unit Control Dialog">
<div class="imgcredit">
Image credit: <a href="https://www.youtube.com/@Wolfpack345" target="_blank">Wolfpack345 youtube channel</a>, <a href="https://www.youtube.com/watch?v=fS25SReO9lc" target="_blank">SEA POWER First Look! || New Naval Simulation! video</a>.
</div>

<p>
Not sure if there is an official name for this but I'm calling it for now a <b>Unit Control Dialog</b> because it is a popup dialog which is used to order your units around.
</p>

<p>
Unit Control Dialog comes up from <a href="tactical-display.php">Tactical Display</a>, I can only assume by watching youtube videos that it comes up with right mouse button (RMB) click. This dialog has various options available. PMCTODO
</p>

<p>
This unit ordering around dialog is dynamic, meaning that if your unit has no weapons then you will not see option to use such weapons, if it has weapons then you get to see "Engage With" option in this dialog.
</p>

<p>
<b>Unit Reference</b>
</p>

<p>
<b>Assume Direct Control</b>
</p>

<p>
<b>Damage Control</b>
</p>

<p>
<b>Engage With</b> note that in the above example image this engage with option is not available.
</p>

<p>
<b>Navigate</b>
</p>

<p>
<b>Sensors</b>
</p>

<p>
<b>Formation</b>, has sub pages for: Create Formation, Join Formation, Formation Orders, Return to formation, Leave Formation, Disband Formation and Edit Formation.
</p>

<img src="screenshots/Unit-Control-Dialog-Formation-01.jpg" class="imgresponsive" loading="lazy" alt="Sea Power Unit Control Dialog Formation" title="Sea Power Unit Control Dialog Formation">
<div class="imgcredit">
Image credit: <a href="https://www.youtube.com/@Wolfpack345" target="_blank">Wolfpack345 youtube channel</a>, <a href="https://www.youtube.com/watch?v=fS25SReO9lc" target="_blank">SEA POWER First Look! || New Naval Simulation! video</a>.
</div>

<p>
If you want a unit leave the current formation it is in, just choose Formation -&gt; Leave Formation.
</p>

<p>
To create a new formation select an individual unit (I assume it cant be in existing formation) and choose Formation -&gt; Create Formation. To add other units to this new formation hold CTRL while RMB clicking on other units you want to join the formation. PMCTODO
</p>

<img src="screenshots/Formation-Editor-01.jpg" class="imgresponsive" loading="lazy" alt="Sea Power Formation Editor" title="Sea Power Formation Editor">
<div class="imgcredit">
Image credit: <a href="https://www.youtube.com/@Wolfpack345" target="_blank">Wolfpack345 youtube channel</a>, <a href="https://www.youtube.com/watch?v=fS25SReO9lc" target="_blank">SEA POWER First Look! || New Naval Simulation! video</a>.
</div>

<p>
<b>Formation Editor</b> is used to edit the positions of your units in the current formation (group). Activate formation editor by selecting Formation -&gt; Edit Formation.
</p>

<p>
Formation editor has a slider on the bottom for the range of the circle area where you can edit the positions of your units in the current formation. Next to the slider on the right side is a number, I assume this is nautical miles. PMCTODO
</p>

<p>
Formation Name label is simply a name for this formation (no idea where its used or shows up, other than this formation editor). You can drag the red circles/dots around in formation editor to place them where ever you want. Once you have dragged units around they automatically move into those positions, you do not have to give further waypoints to them. PMCTODO
</p>

<p>
<b>Orders</b>
</p>

<p>
<b>Air Defence State</b>
</p>

<p>
<b>Cease Fire</b>
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

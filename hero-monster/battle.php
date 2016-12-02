<?php
/**
 * La Verdad Christian College
 * Web Applications Development
 * @author Romack Natividad <romacknatividad@laverdad.edu.ph>
 * @since November 2016
 */

include "Monster.php";
include "Hero.php";

$barney = new Monster(100, 200);
echo "<h3>Monster</h3>";
echo "<li>Life: " . $barney->getLife();
echo "<li>Power: " . $barney->getPower();

$hero = new Hero(100, 1000);
echo "<h3>Hero</h3>";
echo "<li>Life: " . $hero->getLife();
echo "<li>Power: " . $hero->getPower();

$barney->attack();
$hero->decreaseLife();
echo "<h3>Monster attacked</h3>";
echo "<li>Life: " . $barney->getLife();
echo "<li>Power: " . $barney->getPower();
echo "<h3>Hero</h3>";
echo "<li>Life: " . $hero->getLife();
echo "<li>Power: " . $hero->getPower();

for ($i = 0; $i < 10; $i++) {
	$hero->attack();
	$barney->decreaseLife();
}
echo "<h3>Hero attacked</h3>";
echo "<li>Life: " . $hero->getLife();
echo "<li>Power: " . $hero->getPower();
echo "<h3>Monster</h3>";
echo "<li>Life: " . $barney->getLife();
echo "<li>Power: " . $barney->getPower();


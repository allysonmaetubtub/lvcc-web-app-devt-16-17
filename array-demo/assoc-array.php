<?php
/**
 * La Verdad Christian College
 * Web Applications Development
 * @author Romack Natividad <romacknatividad@laverdad.edu.ph>
 * @since November 2016
 */

$monster = [
	'size' => '12 meters',
	'power' => 200,
	'life' => 100
];

$monster['name'] = 'Barney';
$monster['age'] = 12;

// Monster attacked
$monster['power'] -= 30;
// Monster hit by Kamihamewave
$monster['life'] -= 100;
echo $monster['life'];


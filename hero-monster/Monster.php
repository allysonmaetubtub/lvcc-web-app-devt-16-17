<?php
/**
 * La Verdad Christian College
 * Web Applications Development
 * @author Romack Natividad <romacknatividad@laverdad.edu.ph>
 * @since November 2016
 */

include_once("Character.php");

class Monster extends Character {
	public function __construct($life, $power) {
		parent::__construct($life, $power);
	}
}
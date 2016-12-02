<?php
/**
 * La Verdad Christian College
 * Web Applications Development
 * @author Romack Natividad <romacknatividad@laverdad.edu.ph>
 * @since November 2016
 */

class Character {
	private $life;
	private $power;
	public function __construct($life, $power) {
		$this->life = $life;
		$this->power = $power;
	}
	public function getLife() {
		return $this->life;
	}
	public function getPower() {
		return $this->power;
	}
	public function attack() {
		$this->power -= 20;
	}
	public function decreaseLife() {
		$this->life -= 10;
	}
}
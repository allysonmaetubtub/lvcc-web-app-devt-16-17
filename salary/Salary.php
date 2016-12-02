<?php
/**
 * La Verdad Christian College
 * Web Applications Development
 * @author Romack Natividad <romacknatividad@laverdad.edu.ph>
 * @since November 2016
 */

class Salary {
	private $hours_worked;
	private $rate;
	private $gross;
	private $tax;
	const TAX_PERCENTAGE = (32 / 100);

	public function __construct($hours_worked, $rate) {
		$this->hours_worked = $hours_worked;
		$this->rate = $rate;
	}
	public function computeTax() {
		$this->gross = $this->hours_worked * $this->rate;
		$this->tax = $this->gross * self::TAX_PERCENTAGE;
	}
	public function getGross() {
		return $this->gross;
	}
	public function getTax() {
		return $this->tax;
	}
	public function getNetPay($sss, $pagibig, $philhealth) {
		$deductions = $this->tax;
		$deductions += $sss;
		$deductions += $pagibig;
		$deductions += $philhealth;
		$net_pay = $this->gross - $deductions;
		return $net_pay;
	}
}
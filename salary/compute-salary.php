<?php
/**
 * La Verdad Christian College
 * Web Applications Development
 * @author Romack Natividad <romacknatividad@laverdad.edu.ph>
 * @since November 2016
 */

include "Salary.php";
$name = '';
$rate = 0;
$hours_worked = 0;
$sss = 0;
$pagibig = 0;
$philhealth = 0;
$net_pay = 0;

if (!empty($_POST)) {
	$name = $_POST['name'];
	$rate = $_POST['rate'];
	$hours_worked = $_POST['hours'];
	$sss = $_POST['sss'];
	$pagibig = $_POST['pagibig'];
	$philhealth = $_POST['philhealth'];

	$salary = new Salary($hours_worked, $rate);
	$salary->computeTax();
	$net_pay = $salary->getNetPay(
		$sss,
		$pagibig,
		$philhealth
	);
}
?>
<h3>Name: <?php echo $name; ?></h3>
<h3>Gross Pay: <?php echo $salary->getGross(); ?></h3>
<h3>Tax: <?php echo $salary->getTax(); ?></h3>
<h3>Net Pay: <?php echo $net_pay; ?></h3>
<h1>Congratulations!!!</h1>





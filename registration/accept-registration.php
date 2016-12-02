<?php
/**
 * La Verdad Christian College
 * Web Applications Development
 * @author Romack Natividad <romacknatividad@laverdad.edu.ph>
 * @since November 2016
 */

$name = '';
$age = '';
$address = '';
if (!empty($_POST)) {
	$name = $_POST['name'];
	$age = $_POST['age'];
	$address = $_POST['address'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Accepted Registration</title>
</head>
<body>

<h3>Name: <font color="blue"><?php echo $name; ?></font></h3>
<h3>Age: <font color="blue"><?php echo $age; ?></font></h3>
<h3>Address: <font color="blue"><?php echo $address; ?></font></h3>

</body>
</html>






<?php
/**
 * La Verdad Christian College
 * Web Applications Development
 * @author Romack Natividad <romacknatividad@laverdad.edu.ph>
 * @since November 2016
 */

$numbers = [10, 21, 12, 73, 4, 6];
$fruits = ['apple', 'orange', 'kiwi'];


function showElements($list, $i) {
	if ($i < count($list)) {
		echo "<li>" . $list[$i];
		showElements($list, $i + 1);
	}
}
echo showElements($fruits, 0);
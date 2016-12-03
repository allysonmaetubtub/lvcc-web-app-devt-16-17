<?php
$filename = 'list.csv';

$fp = fopen($filename, 'r');

$data = fgetcsv($fp);

print_r($data);
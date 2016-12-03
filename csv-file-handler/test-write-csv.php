<?php
$filename = "new-file.csv";
$fp = fopen($filename, 'w+');
$students = [
	['John','de Leon','San Simon Pampanga'],
	['Lorenz','Florentino','Mandaluyong'],
	['Rhez','Crisostomo','Guagua']
];
foreach ($students as $student) {
	fputcsv($fp, $student);
}
fclose($fp);
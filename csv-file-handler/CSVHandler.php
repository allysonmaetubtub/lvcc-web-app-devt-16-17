<?php
/**
 * La Verdad Christian College
 * Web Applications Development
 * @author Romack Natividad <romacknatividad@laverdad.edu.ph>
 * @since November 2016
 */

class CSVHandler
{
	public function __construct($filename)
	{
		$this->filename = $filename;
		$this->csvFile = fopen($filename, 'ra');
	}

	public function writeContent($content)
	{
		fputcsv($this->csvFile, $content);
	}

	public function getContent()
	{
		$content = [];
		while ($data = fgetcsv($this->csvFile))
		{
			$content[] = $data;
		}
		return $content;
	}
}

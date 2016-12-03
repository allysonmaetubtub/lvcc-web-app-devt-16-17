<?php
/**
 * La Verdad Christian College
 * Web Applications Development
 * @author Romack Natividad <romacknatividad@laverdad.edu.ph>
 * @since November 2016
 */

class CSVHandler
{
	private $filename;
	public function __construct($filename)
	{
		$this->filename = $filename;
	}

	public function writeContent($content)
	{
		$fp = fopen($this->filename, 'a');
		fputcsv($fp, $content);
		fclose($fp);
	}

	public function getContent()
	{
		$fp = fopen($this->filename, 'r');
		$content = [];
		fgetcsv($fp); // Skip 1st line
		while ($data = fgetcsv($fp))
		{
			array_push($content, $data);
		}
		fclose($fp);
		return $content;
	}
}

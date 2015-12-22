<?php namespace Archips;

include 'extractor/Extractor.php';

/**
* Zip Extractor class
*/
class Zip implements Extractors\Extractor
{
	
	private $programName = 'unzip';

	function extract($file) 
	{
		return $this->programName.' -o '.$file;
	}

	function getExtractProgram() 
	{
		return $this->programName;
	}
}
<?php namespace Classes;

use Classes\Extractor;
/**
* Zip Extractor class
*/
class Zip implements Extractor
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
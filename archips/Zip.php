<?php namespace Archips;

/**
* Zip Extractor class
*/
class Zip implements \Extract\Extractor
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
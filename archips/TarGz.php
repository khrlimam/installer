<?php namespace Archips;

use Extractors\Extractor;

include 'extractor/Extractor.php';

/**
* TarGz class extractor
*/
class TarGz implements Extractor
{
	
	
	private $programName = 'tar';

	function extract($file) 
	{
		return $this->programName.' xzvf '.$file;
	}

	function getExtractProgram() 
	{
		return $this->programName;
	}
}
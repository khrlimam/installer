<?php namespace Archips;
/**
* TarGz class extractor
*/
class TarGz implements \Extract\Extractor
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
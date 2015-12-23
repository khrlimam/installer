<?php namespace Archips;
/**
* TarGz class extractor
* @author Khairul Imam ki65559@gmail.com
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
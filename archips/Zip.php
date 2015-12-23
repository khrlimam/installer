<?php namespace Archips;

/**
* Zip Extractor class
* @author Khairul Imam ki65559@gmail.com
*/
class Zip implements \Extract\Extractor
{
	
	private $programName = 'unzip';
	private $destination;

	function extract($file) 
	{
		if(is_null($this->destination))
			return $this->programName.' -o '.$file;
		else
			return $this->programName.' -o '.$file.' -d '.$this->destination;
	}

	public function setDestination($destination)
	{
		$this->destination = $destination;
	}

	function getExtractProgram() 
	{
		return $this->programName;
	}
}
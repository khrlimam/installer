<?php namespace KhairulImam\Installer\Archips;

use KhairulImam\Installer\Extract\Extractor;

/**
* Zip Extractor class
*/
class Zip implements Extractor
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
<?php namespace Archips;
/**
* TarGz class extractor
*/
class TarGz implements \Extract\Extractor
{	
	private $programName = 'tar';
	private $destination;

	function extract($file) 
	{
		if(is_null($this->destination))
			return $this->programName.' xzvf '.$file;
		else
			return $this->programName.' xzvf '.$file.' -C '.$this->destination;
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
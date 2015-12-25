<?php namespace KhairulImam\Installer\Archips;

use KhairulImam\Installer\Extract\Extractor;
/**
* Rar Extractor
*/
class Rar implements Extractor
{
	private $programName = 'unrar';
	private $destination;

	function extract($file)
	{
		if(is_null($this->destination))
			return $this->programName.' x -o+ '.$file;
		else 
			return $this->programName.' x -o+ '.$file.' '.$this->destination;
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
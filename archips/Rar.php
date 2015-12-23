<?php namespace Archips;

include 'extract/Extractor.php';
/**
* Rar Extractor
*/
class Rar implements \Extract\Extractor
{
	private $programName = 'unrar';

	function extract($file) 
	{
		return $this->programName.' x -o+ '.$file;
	}

	function getExtractProgram() 
	{
		return $this->programName;
	}
}
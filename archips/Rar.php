<?php namespace Archips;

include 'extract/Extractor.php';
/**
* Rar Extractor
* @author Khairul Imam ki65559@gmail.com
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
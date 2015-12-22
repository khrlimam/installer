<?php namespace Classes;

include 'Extractor.php';
/**
* Rar Extractor
*/
class Rar implements Extractor
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
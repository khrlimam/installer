<?php namespace Extract;
/**
* Extractor class responsible for extracts compressed file
* @author Khairul Imam ki65559@gmail.com
*/
interface Extractor
{
	public function extract($file);
	public function getExtractProgram();
}
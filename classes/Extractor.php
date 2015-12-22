<?php namespace Classes;
/**
* Extractor class responsible for extracts compressed file
*/
interface Extractor
{
	function extract($file);
	function getExtractProgram();
}
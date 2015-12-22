<?php namespace Extractors;
/**
* Extractor class responsible for extract compressed file
*/
interface Extractor
{
	function extract($file);
	function getExtractProgram();
}
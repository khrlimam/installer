<?php namespace KhairulImam\Installer\Extract;
/**
* Extractor class responsible for extracts compressed file
*/
interface Extractor
{
	public function extract($file);
	public function getExtractProgram();
}
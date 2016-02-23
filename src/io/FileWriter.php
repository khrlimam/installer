<?php namespace KhairulImam\Installer\IO;

use KhairulImam\Installer\Compilers\Compiler;

/**
* FileWriter class
*/
class FileWriter {

	private $file;
	private $compiler;

	function __construct($file, Compiler $compiler)
	{
		$this->file = $file;
		$this->compiler = $compiler;
	}

	public function isFileExists()
	{
		return file_exists($this->file);
	}

	public function setFile($file)
	{
		$this->file = $file;
	}

	public function writeSimple($contents)
	{
		if($this->isFileExists($this->file))
			return file_put_contents($this->file, $contents);
		else
			return false;
	}

	public function writeCompiled()
	{
		if($this->isFileExists($this->file))
		{
			$contents = $this->compiler->compile();
			return file_put_contents($this->file, $contents);
		}
		else
			return false;
	}

}
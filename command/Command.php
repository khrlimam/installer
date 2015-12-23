<?php namespace Command;

use Extract\Extractor;
/**
* Comamnd class
*/
class Command
{

	private $extractor;

	function __construct(Extractor $extractor)
	{
		$this->extractor = $extractor;
	}

	public function isProgrammExists()
	{
		$result = $this->runCommand(("which ".$this->extractor->getExtractProgram()));
		return !empty($result);
	}

	public function runCommand($command)
	{
		return shell_exec($command);
	}

	public function extractFile($file)
	{
		if($this->isProgrammExists())
			return $this->runCommand($this->extractor->extract($file));
		else
			return 'Program '.$this->program.' tidak ditemukan, tolong diinstal terlebih dahulu!';
	}

}
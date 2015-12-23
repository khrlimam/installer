<?php namespace Test;

include 'archips/Rar.php';
include 'archips/TarGz.php';
include 'archips/Zip.php';
include 'command/Command.php';
include 'compilers/Compiler.php';
include 'compilers/TemplateCompiler.php';
include 'io/FileWriter.php';

/**
* Test
*/
class Test
{
	public function testRar($file) {
		$rar = new \Archips\Rar();
		$command = new \Command\Command($rar);
		return $command->extractFile($file);
	}

	public function testZip($file) {
		$zip = new \Archips\Zip();
		$command = new \Command\Command($zip);
		return $command->extractFile($file);
	}

	public function testTar($file) {
		$tar = new \Archips\TarGz();
		$command = new \Command\Command($tar);
		return $command->extractFile($file);
	}

	public function write($file, $template) {
		$data = [
			'DATABASE' => 'mantap_db',
			'HOST' => 'mantap_host',
			'USERNAME' => 'mantap_username',
			'PASSWORD' => 'mantap_password'
		];
		$templateCompiler = new \Compilers\TemplateCompiler($data, $template);
		$fileWriter = new \IO\FileWriter($file, $templateCompiler);
		if($fileWriter->writeCompiled())
			return true;
		else
			return false;
	}

}

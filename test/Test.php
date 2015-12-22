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

	public function write($file) {
		$data = [
			'DATABASE' => 'database_mantap',
			'HOST' => 'host_mantap',
			'USERNAME' => 'username_mantap',
			'PASSWORD' => 'password_mantap'
		];
		$template = include('config/template.php');
		$templateCompiler = new \Compilers\TemplateCompiler($data, $template['lct']);
		$fileWriter = new \IO\FileWriter($file, $templateCompiler);
		if($fileWriter->writeCompiled())
			return true;
		else
			return false;
	}

}
<?php namespace Test;

use KhairulImam\Installer\Archips\Rar;
use KhairulImam\Installer\Archips\Zip;
use KhairulImam\Installer\Archips\TarGz;
use KhairulImam\Installer\IO\FileWriter;
use KhairulImam\Installer\Command\Command;
use KhairulImam\Installer\Compilers\TemplateCompiler;
require_once __DIR__.'/../vendor/autoload.php';
/**
* Test
*/
class Test
{
	public function testRar($file) {
		$rar = new Rar();
		$command = new Command($rar);
		return $command->extractFile($file);
	}

	public function testZip($file) {
		$zip = new Zip();
		$command = new Command($zip);
		return $command->extractFile($file);
	}

	public function testTar($file) {
		$tar = new TarGz();
		$command = new Command($tar);
		return $command->extractFile($file);
	}

	public function write($file, $template) {
		$data = [
			'DATABASE' => 'mantap_db',
			'HOST' => 'mantap_host',
			'USERNAME' => 'mantap_username',
			'PASSWORD' => 'mantap_password'
		];
		$templateCompiler = new TemplateCompiler($data, $template);
		$fileWriter = new FileWriter($file, $templateCompiler);
		if($fileWriter->writeCompiled())
			return true;
		else
			return false;
	}
}

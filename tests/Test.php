<?php namespace Test;
require_once '../vendor/autoload.php';
/**
* Test
*/
class Test
{
	public function testRar($file) {
		$rar = new KhairulImam\Installer\Archips\Rar();
		$command = new KhairulImam\Installer\Command\Command($rar);
		return $command->extractFile($file);
	}

	public function testZip($file) {
		$zip = new KhairulImam\Installer\Archips\Zip();
		$command = new KhairulImam\Installer\Command\Command($zip);
		return $command->extractFile($file);
	}

	public function testTar($file) {
		$tar = new KhairulImam\Installer\Archips\TarGz();
		$command = new KhairulImam\Installer\Command\Command($tar);
		return $command->extractFile($file);
	}

	public function write($file, $template) {
		$data = [
			'DATABASE' => 'mantap_db',
			'HOST' => 'mantap_host',
			'USERNAME' => 'mantap_username',
			'PASSWORD' => 'mantap_password'
		];
		$templateCompiler = new KhairulImam\Installer\Compilers\TemplateCompiler($data, $template);
		$fileWriter = new KhairulImam\Installer\IO\FileWriter($file, $templateCompiler);
		if($fileWriter->writeCompiled())
			return true;
		else
			return false;
	}
}

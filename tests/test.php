#!/usr/bin/env php
<?php

include 'Test.php';

$test = new Test\Test();

$fileLaravel = 'test/compiled/laravel_config.php';
$fileSymfony = 'test/compiled/symfony_config.yml';
$fileYii = 'test/compiled/yii_config.php';
$template = include('config/template.php');
$results = [
	'rar' => $test->testRar('test/wl.txt.rar'),
	'zip' => $test->testZip('test/wl.txt.zip'),
	'tar' => $test->testTar('test/wl.txt.tar.gz'),
	'writeLaravel' => ($test->write($fileLaravel, $template['lct']))? 'sukses writing':'gagal',
	'writeSymfony' => ($test->write($fileSymfony, $template['sct']))? 'sukses writing':'gagal',
	'writeYii' => ($test->write($fileYii, $template['yct']))? 'sukses writing':'gagal'
];

print_r($results);
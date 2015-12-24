#!/usr/bin/env php
<?php

include 'Test.php';

$test = new Test\Test();

$fileLaravel = 'compiled/laravel_config.php';
$fileSymfony = 'compiled/symfony_config.yml';
$fileYii = 'compiled/yii_config.php';
$template = include('config/template.php');
$results = [
	'rar' => $test->testRar('wl.txt.rar'),
	'zip' => $test->testZip('wl.txt.zip'),
	'tar' => $test->testTar('wl.txt.tar.gz'),
	'writeLaravel' => ($test->write($fileLaravel, $template['lct']))? 'sukses writing':'gagal',
	'writeSymfony' => ($test->write($fileSymfony, $template['sct']))? 'sukses writing':'gagal',
	'writeYii' => ($test->write($fileYii, $template['yct']))? 'sukses writing':'gagal'
];

print_r($results);
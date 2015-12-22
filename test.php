<?php

include 'test/Test.php';

$test = new Test\Test();

$results = [
	'rar' => $test->testRar('wl.txt.rar'),
];

print_r($results);

$file = 'test/compiled/laravel_config.php';
$write = $test->write($file);

if($write)
	print('WORKING AS EXPECTED SIR ;)');
else
	echo 'gagal';
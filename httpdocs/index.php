<?php

function loadProjectClass($class){
    $base = realpath(__DIR__.'/..');
    include_once $base . '/' . str_replace('\\', '/', $class) . '.php';

}

spl_autoload_register('loadProjectClass');

use App\ProjectAge;

$projectAge = new ProjectAge('Create Menu App', '2019-05-01', 'Pedro Suazo');
echo 'Project Name: '.$projectAge->getProjectName();
echo '<br>';
echo 'Project Age: '.$projectAge->getInterval().' Days';
echo '<br>';
echo 'Created By: '.$projectAge->getProjectAuthor();
echo '<br>';

try {
	echo $projectAge->doesNotExist;
} catch (Exception $e) {
	echo $e->getMessage();
}

try {
	$projectAge->doesNotExist = 'SOMETHING';
} catch (Exception $e) {
	echo $e->getMessage();
}

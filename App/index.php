<?php

function loadProjectClass($class){
    $base = realpath(__DIR__."/..");
    include_once $base . "/" . str_replace("\\", "/", $class) . ".php";

}

spl_autoload_register('loadProjectClass');

use App\Project;

//extending the class
class ProjectAge extends Project
{
    public function getInterval(){

        $currentTime = new DateTime();
        $dateEntered = new DateTime($this->projectDateCreated);
        $diff = $currentTime->diff($dateEntered)->format("%a");
        return $diff;
    }

}




$projectAge = new ProjectAge("Create Menu App", "2019-05-01", "Pedro Suazo");
echo "Project Name: ".$projectAge->getProjectName();
echo "<br>";
echo "Project Age: ".$projectAge->getInterval()." Days";
echo "<br>";
echo "Created By: ".$projectAge->getProjectAuthor();
echo "<br>";


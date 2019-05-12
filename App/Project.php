<?php

namespace App;

class Project
{
    public const Table ="Project"; // <- value that can not be change

    public $projectName; // <- Properties
    public $projectDateCreated; // <- Properties
    public $projectAuthor; // <- Properties

    //data container
    public function __construct($projectName, $projectDateCreated, $projectAuthor)
    {
        $this->projectName = $projectName;
        $this->projectDateCreated = $projectDateCreated;
        $this->projectAuthor = $projectAuthor;
    }

    //set values
    public function setProjectName($projectName){
        $this->projectName = $projectName;
    }
    public function setprojectDateCreated($projectDateCreated){
        $this->projectDateCreated = $projectDateCreated;
    }
    public function setprojectAuthor($projectAuthor){
        $this->projectAuthor = $projectAuthor;
    }


    //ready to display the values

    public function getProjectName(){
        return $this->projectName;
    }
    public function getProjectDate(){
        return $this->projectDateCreated;
    }
    public function getProjectAuthor(){
        return $this->projectAuthor;
    }

}





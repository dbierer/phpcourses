<?php
namespace App;

use Exception;
class Project
{
    public const Table ="Project"; // <- value that can not be change
	public const ERROR_PROP_GET = 'ERROR: tried to read a non-existent property: %s';
	public const ERROR_PROP_SET = 'ERROR: tried to set a non-existent property: %s';
	
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

	// protect against calls to non-existent properties
	public function __get($prop)
	{
		$message = sprintf(self::ERROR_PROP_GET, $prop);
		error_log($message);
		throw new Exception($message);
	}
	public function __set($prop, $params)
	{
		$message = sprintf(self::ERROR_PROP_SET, $prop);
		error_log($message);
		throw new Exception($message);
	}
}





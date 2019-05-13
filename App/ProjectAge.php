<?php
namespace App;
//extending the class
use DateTime;
class ProjectAge extends Project
{
    public function getInterval(){

        $currentTime = new DateTime();
        $dateEntered = new DateTime($this->projectDateCreated);
        $diff = $currentTime->diff($dateEntered)->format("%a");
        return $diff;
    }

}

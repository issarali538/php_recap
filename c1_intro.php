<?php
class student{
    public $name;
    public $course;
    public function __construct($name, $course){
        $this->name = $name;
        $this->course = $course;
    }

    public function show(){
        echo "My name is $this->name </br>";
        echo "My course is $this->course";
    }
}

class hobbies extends student{
    public $hobbies;
    public function __construct($hobbies){
        $this->hobbies = $hobbies;
    }

    public function show(){
        echo "</br> My hobbies are: " . implode(", ", $this->hobbies);
    }
}

$khalid = new student("Khalid", "DIT");
$khalid->show();
$hobbies = new hobbies(["Reading", "Traveling", "Coding"]);
$hobbies->show();
?>
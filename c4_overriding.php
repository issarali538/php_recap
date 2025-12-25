<?php
/*
class BaseClass{
    public function showMessage(){
        echo "This is the Base Class method.";
    }
}

class DerivedClass extends BaseClass{
    public function showMessage(){
        echo "This is the Derived Class method.";
    }
}

$baseObj = new BaseClass();
$baseObj->showMessage(); // Outputs: This is the Base Class method.
echo "</br>";
$derivedObj = new DerivedClass();
$derivedObj->showMessage(); // Outputs: This is the Derived Class method.
*/

class TimeTable{
    private $date;
    private $time;
    public function __construct($date, $time){
        $this->date = $date;
        $this->time = $time;
    }
}

class Period extends TimeTable{
    public $class;
    public $teacher;
    public function __construct($class, $teacher, $time,$date){
        parent::__construct($time,$date); // Call the parent constructor
        $this->teacher = $teacher;
        $this->class = $class;
        $this->time = $time;
        $this->date = $date;
    }

    public function displayPeriodInfo(){
        echo "Class: " . $this->class . "</br>";
        echo "Teacher: " . $this->teacher . "</br>";
        echo "Time: " . $this->time . "</br>";
        echo "Date: " . $this->date . "</br>";
    }
}
$morning = new Period("10th Grade", "Mr. Smith", "09:00", "2024-10-01");
$morning->displayPeriodInfo();
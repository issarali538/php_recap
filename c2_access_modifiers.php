<?php
class Patient{
    private $name;
    protected $age;
    public $gender;

    public function __construct($name, $age, $gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function getName(){
        return $this->name;
    }

    public function getGender(){
        return $this->gender;
    }

    private function setAppointment(){
        return "Appointment set for " . $this->name;
    }
    protected function returnSetAppointment(){
        return $this->setAppointment();
    }
}

class Doctor extends Patient{
    public function changeName(){
        $this->name = "Smith";
    }
    public function showDetails(){
    
        echo "Patient Name: " . $this->name . "</br>";
        echo "Patient Age: " . $this->age . "</br>";
        echo "Patient Gender: " . $this->getGender() . "</br>";
        echo $this->returnSetAppointment();
    }
}

$get_smith = new Doctor("Shahid",34, "Male");
$get_smith->changeName();
$get_smith->showDetails();

//public values are accessible from anywhere
//protected values are accessible within the class and by inheriting classes
//private values are accessible only within the class
?>
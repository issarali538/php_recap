<?php
Trait MyTrait {
    private function myTraitMethod() {
        return "This is a method from MyTrait.";
    }

    private function anotherTraitMethod() {
        return "This is another method from MyTrait.";
    }
}

class MyClass {
    use MyTrait;

    public function showTraitMessage() {
        echo $this->myTraitMethod();
    }

    public function callToMyTraitAnotherTraitMethod(){
        return $this->anotherTraitMethod();
    }
}

$myObject = new MyClass();
$myObject->showTraitMessage(); // Outputs: This is a method from MyTrait.
echo "</br>";
echo $myObject->callToMyTraitAnotherTraitMethod(); // Outputs: This is another method from MyTrait.
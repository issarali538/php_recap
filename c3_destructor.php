<?php
class Random{
    public function __construct(){
        echo "Constructor called </br>";
    }

    public function __destruct(){
        echo "End of program execution \n";
    }
    public function what_is_desctructor(){
        echo "Hello ";
    }
}
new Random();
?>

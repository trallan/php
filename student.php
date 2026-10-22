<?php 

class Student {
    public string $first_name;
    public string $last_name;
    // Constructor
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function say_name(){
        echo "My name is " . $this->first_name . " " . $this->last_name . ".\n";
    }
}
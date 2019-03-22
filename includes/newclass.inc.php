<?php


class NewClass {

//properties andd methods goes here

    public $data = "I am a property";

    public function __construct(){
      echo "This class has been instantiated";
    }

    public function setNewProperty($newdata){
    $this->data = "$newdata";
  }

    public function getProperty(){
      return $this->data;
  }
    public function __destruct(){
      echo "This is the end of the class";
    }
}


<?php


class NewClass {

//properties andd methods goes here

    public $data = "I am a property";
    public function setNewProperty($newdata){
    $this->data = "$newdata";
  }

    public function getProperty(){
      return $this->data;
  }
}


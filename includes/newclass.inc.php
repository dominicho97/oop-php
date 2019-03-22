<?php


class Users {

//properties andd methods goes here


public $first = "Dominic";
public $last = "Ho";
public $hairColor = "Black";
public $eyeColor = "Brown";



public function __construct($first,$last ,$hairColor,$eyeColor){
  $this->first = $first;
  $this->last= $last;
  $this->hairColor = $hairColor;
  $this->eyeColor= $eyeColor;
}

public function fullName(){
  return $this->first." " .  $this->last;
}


public function __destruct(){
  
}


}


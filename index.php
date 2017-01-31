<?php
  //instantiate the object i.e. starts program
  $obj = new main();
  
  //main class has the main functions of the program
  class main {
    //this is the first function called
    public function __construct () {
    //this shows calling a static method to create the car object from a factory.
      echo 'Program Started </br>';
      $car = carFactory::create();
    //this shows calling methods on the created object
      $car->accelerate();
      $car->decelerate();
   //this is how you print out the contents of the object  
      print_r($car);
    }
//this is the last function called at the end of the program
    public function __destruct() {
      echo 'Program Ended <br>';
    }
  }
//this is how you create car objects demonstrates factory pattern
  class carFactory{
    #allows you to call the function without instantiating the object.
    public static function create(){
      $car = new car;
      return $car;
    }
  }

//this is a public function
  abstract class vehicle{
    public function accelerate(){
    echo 'going faster <br>';
    }
    public function decelerate(){
    echo 'doing slower <br>';
    }
  }

//this is your car class that is the object of the program
  class car extends vehicle {

//these are properties of the car object
    public $make;
    public $model;
    public $year;

    public function __construct(){
     #self reference (it's like i)
     #pointer to it's memory location
      //this is how to set internal default properties using $this
      $this->make = 'ford';
      $this->year = date("Y");
    }
 
 }
?>

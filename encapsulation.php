<?php

// you cannot access private/protected method/attribute directly by object. you can access them from public method.

/* private & protected method/attribute differs only in 1 scenerio.
from base class you can access protected but not private.
you can  access private method only from public method of the same class.
*/
 
 
class Person { 
 
 public function __construct() {
     //echo 'constructor';
 }
 
 public function func1() {
    $this->func2();
 }  
 
  
 private function func2() {
    echo 'func22222222222222222222';
 } 
 
 protected function func3() {
    echo 'func33333333333333';
 }  
 
}

class Student extends Person {

  public function studentFunc() {	
    //echo $this->func1();
	//echo $this->func2(); error
	echo $this->func3();
  }

}


$ob1 = new Person;

//echo $ob1->func1();

// does not work
//echo $ob1->func2(); 

//echo $ob1->func2();

$ob2 = new Student;
echo $ob2->studentFunc();





?>
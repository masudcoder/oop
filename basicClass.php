<?php

// you cannot access private/protected directly by object. you can access them from public method.

/* private & protected method differs only in 1 scenerio.
from base class you can access protected but not private.
you can  access private method only from public method of the same class.
*/
 
 
class FirstClass { 
 protected $cgpa = 3;
 protected $v=6;
 
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
class SecondClass extends FirstClass {

  public function secondFunc() {
	echo $this->func2();
  }

}


$firstOb = new FirstClass;
//echo $firstOb->func2(); error

$secondOb = new SecondClass;
echo $secondOb->secondFunc();




?>
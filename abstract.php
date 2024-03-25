<?php
// abstract class contain atleast 1 abstract function
// abstract function must declare but not implement
// abstract class could not create object
// abstract class, child class must contain abstract function
abstract class class1{
    abstract function test();
}
class class2 extends class1{
    function test(){
        echo "working";
    }
}
$obj= new class2();
$obj->test();
?>
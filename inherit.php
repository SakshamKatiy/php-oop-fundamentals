<?php
class class1{
    function __construct(){
        echo "this is working";
    }
function fun1($a){
return $a;
}
function fun2($b){
    return $b;
}

}
class class2 extends class1{
function __construct(){
    parent::__construct();    #to use parent construct
    echo "wokring";
}
}
$obj = new class2();
echo '<br>';
echo $obj->fun1(3);
?>
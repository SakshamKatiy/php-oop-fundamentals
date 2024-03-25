<?php
// Interface support multiple inheritence
// Interface we can not define varibles
// no constructor in interface
// all function must be public
// interface can only contain abstract function

interface class1{
    public function fun1();
}
interface  class2{
    public function fun2();

}

class class4 implements class1,class2{
    public function fun1(){
        echo "tsting";
}
public function fun2(){

}

}
$obj = new class4();
$obj->fun1();
?>
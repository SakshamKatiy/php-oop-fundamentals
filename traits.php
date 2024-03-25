<?php
trait class1{
    function fun1(){
        echo "fun1";
    }
}
class class2{
    use class1;
    function fun2(){
        echo "fun2";
    }
}
trait class3{
    function fun1(){
        echo "fun3";
    }
}
class class4{
    use class1,class3{
        class1::fun1 insteadof class3;
class3 :: fun1 as fun2;
    }
    // function fun4(){
    //     echo "fun4";
    // }
}
$obj  = new class4();
$obj->fun2();
?>
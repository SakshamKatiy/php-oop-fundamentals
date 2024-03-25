<?php
// normal way

// class class1{
//     public $x = 10;
//     function fun(){
//         echo "test";
//     }
// }
// $obj = new class1();
// echo $obj->x;
// echo '<br>';


// static member
class class2{
    static public $y = 10;
    public $z=10;
    static function fun(){
        self::$z;  //you cannot use this in static function
    }
}
echo class2::$y;
// echo class2::fun();
?>
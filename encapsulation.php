<?php
// class class1{
//     public $x = 5;
//     function __construct(){
//        $this-> x;
//     }
// }

// $obj = new class1();
// echo $obj->x;
// echo '<br>';



// class class2{
//     protected $x = 5;
//     function __construct(){
//        $this-> x;
//     }
// }
// class class3 extends class2{
//     function num(){
// return $this->x;
//     }
// }


$obj = new class3();
echo $obj->num();
class class2{
    private $x = 5;
    function __construct(){
       $this-> x;
    }
}
class class3 extends class2{
    function num(){
return $this->x;
    }
}

$obj = new class2();
echo $obj->x;
$obj = new class3();
echo $obj->num();




?>
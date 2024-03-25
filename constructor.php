<?php
class class1{
    public $var = 30;
    function __construct(){
        $this->x = 5;
        echo "Welcome to play zone <br>";
    }
    function fun1(){
        echo $this->x;
        

    }
    function fun2($b){
        return $b.'<br>';
    }
    function fun3(){
        return $this->var++;
    }
    function __destruct(){
        echo "play again <br>";
    }
}

$obj = new class1();
$obj->fun3();

$obj->fun1();
echo '<br>';

echo $obj->var;
echo '<br>';
echo $obj->fun2(24);

?>
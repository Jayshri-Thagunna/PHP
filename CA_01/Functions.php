<?php
//User Defined Fucntions

//Function returning values
function multiply($a, $b){
    return $a * $b;
}
$product = multiply(8,2);
echo $product .PHP_EOL;

// Fucntion with parameters
function add($num1, $num2){
    echo $num1 + $num2 .PHP_EOL;
}
add(5,5);

//Function without parameters
function greet(){
    echo "Hello, welcome to php functions!" .PHP_EOL;
}
greet();

//Fucntion with Default parameters
function greetUser($name = "Guest"){
    echo "Hello, $name" .PHP_EOL;
}
greetUser();
greetUser("Jais");

//Anonymous Function
$greet = function($name){
    return "Hello, $name";
};
echo $greet("php") .PHP_EOL;

//Function as Variable
$var = function($a, $b){
    return $a - $b;
};
$value = $var(15 , 3);
echo $value .PHP_EOL;

//Gloabal Keyword
$a = 50;

$b = function(){
    global $a;
    echo $a .PHP_EOL;
};
$b();

//Pass it as an argument
$a = 27;

$b = function($p){
    echo $p .PHP_EOL;
};
$b($a);

//USE keyword

$a = 100;

$b = function() use($a){
    echo $a .PHP_EOL;
};
$b();


//Combine both argument and use keyword
$a = 10;
$p = 7;

$b = function($p) use($a){
    echo $p .PHP_EOL;
    echo $a .PHP_EOL;
};
$b($p);

//Arrow Function
$multiply = fn($a, $b) => $a * $b;
echo $multiply(4,5) .PHP_EOL;
?>
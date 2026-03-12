<?php
//Single Quoted - Does not access the special char
$name = 'Jayshri Thagunna';
echo $name;

//Double Quote - Access the special char also
$name2 = "\n Jayshri Thagunna \n";
echo $name2;


//Nowdoc - Same syntax but does not access the special char
$message2 = <<<'Hie'
$name, How are you?
Hie;
echo $message2;

//Heredoc - start with <<<string and end with same string
$message = <<<Hie
\n $name, How are you? \n
Hie;
echo $message;


//Strlen() - Length of the string
$place = strlen("Pithoragarh");
echo $place .PHP_EOL ;

//str_word_count() - Count words in a string
$place = str_word_count("Pihtoragarh");
echo $place .PHP_EOL;

//strrev() - Reverse a string
$place = strrev("Pithoragarh");
echo $place .PHP_EOL;

//ucfirst() - First char into upper case
$name = ucfirst("jayshri");
echo $name .PHP_EOL;

//lcfirst() - First char into lower case
$name = lcfirst("Jayshri");
echo $name .PHP_EOL;

//strpos() - searches for a specific text within a string
echo strpos("Hello Jayshri", "J") .PHP_EOL;

//str_replace() - Replace some char with some other char in a string
$str = "Hello Jayshri";
echo str_replace("Jayshri","World",$str) .PHP_EOL;

//trim() - Remove whitespaces or strings from both sides of a string
echo trim("Jaisuri", "ri") .PHP_EOL;

//strtolower() - Convert string into the lowercase string
$input = "WELCOME BACK TO PHP class";
echo strtolower($input) .PHP_EOL;

//strtoupper() - Convert string into uppercase string
$input = "welcome to php class";
echo strtoupper($input) .PHP_EOL;

//strcmp() - compare strings Same = 0 and Different = 1
echo strcmp("Hello Ji", "Hello Ji") .PHP_EOL;
echo strcmp("Hello zi", "Hello ji") .PHP_EOL;


$str = "Hello, world!";
echo strlen($str) .PHP_EOL; //Strlen count space also
echo strpos($str, "world") .PHP_EOL;
?>
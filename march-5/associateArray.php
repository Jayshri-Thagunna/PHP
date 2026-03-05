<?php
$b = ['abc'=>2, 'xyz'=>3]; //Associate Array
var_dump($b);

foreach ($b as $key => $value) {
    echo $key . " : " . $value . PHP_EOL; // PHP_EOL adds a new line
}

?>
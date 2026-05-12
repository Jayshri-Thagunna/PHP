<?php
$c = [['a', 1, 2],['b', 2, 3],['c',1,2]];  //Multiple array
print_r($c);


foreach($c as $row){
    foreach($row as $col){
    echo $col . " "; // . is for append
    }
}
?>
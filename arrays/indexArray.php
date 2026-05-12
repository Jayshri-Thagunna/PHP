
<?php
$a = array(1,2,'jais', true);
print_r($a); //only index with element
var_dump($a); //Detailed information of each element


//For prnting the element in array using for each loop
foreach($a as $x){
    echo $x;
}

//print only the second element
echo $a[2];
?>

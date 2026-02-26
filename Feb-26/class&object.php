<?php
class car {
    // Properties
    public $colour;

    // Methods
    function s($colour) {
        $this -> colour = $colour;
    }

    function display() {
        return $this -> colour;
    }
}

$red = new car();
$white = new car();

$red -> s('RED');
$white -> s('WHITE');

echo $red -> display();
echo " ";
echo $white -> display();
?>
<?php
     $salary = $_POST['salary'];
  //   $net = ($salary - ($salary * 0.1) + ($salary - ($salary * 0.12)) + ($salary-500))
     $net = $salary - ($salary * 0.1 + $salary * 0.12 + 500);

     echo "Your net salary is " .$net;
?>
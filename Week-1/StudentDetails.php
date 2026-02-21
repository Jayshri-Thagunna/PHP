<?php
    echo "<h1>MCA Internal Assessment Result</h1><hr>";

    for( $i=0; $i<3; $i++) {
        if ($i == 0) {
            $name = 'Rohit';
            $Attendance = 90;
            $Marks = 95;
        }
        else if ($i == 1) {
            $name = 'Kajal';
            $Attendance = 85;
            $Marks = 76;
        }
        else {
            $name = 'Sam';
            $Attendance = 50;
            $Marks = 60;
        }

        echo "Student Name: $name</br>";
        echo "Attendance Percentage: $Attendance</br>";
        echo "Internal Marks: $Marks</br>";

        if($Attendance >= 75 ) {
           if($Marks >= 85) {
            echo "Exllent Performance</br> <hr>";
           }
           else if($Marks >= 70 || $Marks < 85) {
            echo "Very good </br><hr>";
           } else if($Marks >=50 || $Marks <70) {
            echo "Average<hr>";
           }
           else {
            echo "Correct Info</br>";
           }
        }
    }


?>
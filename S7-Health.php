<?php
    $cpuUsage = 50;
    $memoryUsage = 50;

    if($cpuUsage >= 85 || $memoryUsage >= 90) {
        echo "Critical";
    } else if(($cpuUsage >= 60 && $memoryUsage >= 70) ) {
        echo "Warning";
    } else if($cpuUsage < 60 && $memoryUsage < 70) {
        echo "Healthy";
    } else {
        echo "Rest";
    }
?>
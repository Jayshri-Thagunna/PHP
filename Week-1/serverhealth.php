<?php
    $cpuUsage = 85;
    $memoryUsage = 95;

    if ($cpuUsage >= 60 || $memoryUsage >=70) {
        echo "Warning";
    } else if ($cpuUsage >=85 || $memoryUsage >=90) {
        echo "Critical";
    } else {
        echo "Healthy";
    }
?>
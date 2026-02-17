<?php
    $name = $_POST['name'];
    $units = $_POST['unit'];
    $bill;

    if ($units < 50) {
        $bill = 100;
    }
    else {
        if ($units <= 100) {
            $bill = $units * 3;
        } elseif ($units <= 200) {
            $bill = (100 * 3) + (($units - 100) * 5);
        } else {
            $bill = (100 * 3) + (100 * 5) + (($units - 200) * 7);
        }
    }

    if ($bill > 1500) {
        $bill += ($bill * 0.10);
    }
?>
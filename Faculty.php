+<?php
    $TotalF = 60;
    $LeaveF = 40;
    $ExtraDutiesF = 10;
    $SmoothF = 30;
    $PresentF;

    $PresentF = $TotalF - ($LeaveF + $ExtraDutiesF);

    if($TotalF == $PresentF) {
        echo "Department is fully operational with complete staff avalability.";
    } else if ($SmoothF <= $PresentF ) {
        echo "Department is operating normally, but staff availability is not!";
    } else {
        echo "Department operations may be impacted due to insufficient staff";
    }
?>
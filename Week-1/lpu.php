<?php
    $totaldays = 90;

    function calcualteAttendance() {
        $attendedDays = 72;
        global $totaldays;
        $ap = ( $attendedDays  / $totaldays ) * 100;

        echo "<h1 style = 'background-color: #71afe4; text-align: center'>LPU Attendance Portal</h1>";
        echo "<h3>Total Working Days: $totaldays</br></h1>";
        echo "<h3>Attended Days: $attendedDays</br></h1>";
        echo "<h3>Attendance Percentage: $ap %</h1>";
    }

    calcualteAttendance();

?>
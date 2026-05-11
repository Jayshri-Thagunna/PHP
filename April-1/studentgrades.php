<?php
// 1. Indexed Array (Student Names)
$students = ["Rahul", "Sneha", "Amit"];
array_push($students, "Priya"); // Adding
unset($students[2]); // Removing Amit

// 2. Associative Array (Subject Marks)
$marks = ["Maths" => 85, "Science" => 90, "English" => 78];
$marks["Hindi"] = 88; // Adding
$marks["Maths"] = 95; // Updating

// Displaying in HTML Table
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Category</th><th>Details</th></tr>";

echo "<tr><td>Students List</td><td>" . implode(", ", $students) . "</td></tr>";

foreach ($marks as $subject => $score) {
    echo "<tr><td>Score in $subject</td><td>$score</td></tr>";
}
echo "</table>";
?>
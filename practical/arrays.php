<?php

//Indexed array
$index_array = array(1, 2, 3, 'Jayshri', 'Thagunna');

//Add an element
$index_array[] = "BCA";

//update an element (change  BCA to MCA)
$index_array[5] = "MCA";

//Remove an element ( remove 3)
unset($index_array[2]);

//print_r($index_array);


//Associative array
$associative_array = [1 => 'Hello', 2 => 'Jayshri', 3 => 'Thagunna'];

//Add a new key value pair
$associative_array['4'] = 'MCA';

//update an exisiting value
$associative_array['1'] = 'Hie';

//Remove a key value pair
unset($associative_array['3']);

//print_r($associative_array);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>PHP Array Operation</h2>

    <h5>Displaying Indexed array</h5>
    
    <table>
    <thead>
    <tr>
        <th>Index</th>
        <th>Value</th>
    </tr>
</thead>
<tbody>
    <?php foreach($index_array as $index => $value): ?>
        <tr>
            <td><?php echo $index; ?></td>
            <td><?php echo $value; ?></td>
    </tr>
    <?php endforeach; ?>
    <tbody>
    </table>
    <hr>
    
    <h5>Displaying Associative array</h5>

    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
    </tr>
    <tbody>
        <?php foreach($associative_array as $key => $value): ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $value; ?></td>
        </tr>
    <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
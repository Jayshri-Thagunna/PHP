<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
        <h1>Shopping Cart</h1>

        <table border="1" style="border-collapse: collapse;">
            <tr>
            <th>Product</th>
                <th>Price</th>
                    <th>Quantity</th>
            </tr>

            <tr>
            <th>Product A</th>
                <th>100</th>
                    <th><input type = "number" name = "Quantity1">
                    </th>
            </tr>

            <tr>
            <th>Product B</th>
                <th>200</th>
                    <th><input type = "number" name = "Quantity2">
                    </th>
            </tr>

            <tr>
            <th>Product C</th>
            <th>300</th>
            <th><input type = "number" name = "Quantity3">
            </th>
            </tr>
        </table>
        
                <input type ="submit">

    </form>

    <?php
    if($_SERVER['REQUEST_METHOD']==='POST') {
        $Quantity1 = $_POST['Quantity1'];
        $Quantity2 = $_POST['Quantity2'];
        $Quantity3 = $_POST['Quantity3'];
        $Price1 = 100;
        $Peice2 = 200;
        $Price3 = 300;

        $Sum = ($Quantity1 * $Price1) + ($Quantity2 * $Peice2) + ($Quantity3 * $Price3);

        echo "<h2>Total Amount: $Sum</h2>";
    }
    ?>


</body>
</html>
<?php
require('connect.php');
    if(isset($_POST['submit'])){
        $num = $_POST['Product'];
        $numa = $_POST['Price'];
        $numb = $_POST['Amount'];
        $numc = $numa * $numb;

        $sql = "INSERT INTO labitf (Product, Price, Amount, Total) value ('$num','$numa', '$numb', '$numc')";

        if(mysqli_query($conn, $sql)){
            echo "New data insert successfully";
            echo "<a href='index.php'>back to home page</a>";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insert.php" method="post">
        <h1>Product</h1>
        <input type="text" name="Product">
        <h1>Price</h1>
        <input type="text" name="Price">
        <h1>Amount</h1>
        <input type="text" name="Amount">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>
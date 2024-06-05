<?php
@include 'connection.php';
if(isset($_POST['submitForAdd'])){
    $pCode = mysqli_real_escape_string($conn, $_POST['p_code']);
    $pName = mysqli_real_escape_string($conn, $_POST['p_name']);
    $dName = mysqli_real_escape_string($conn, $_POST['d_name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    $insert= "INSERT INTO purchese_info(p_code,p_name,d_name,price,quantity,date) VALUES('$pCode','$pName','$dName','$price','$quantity','$date')";
    mysqli_query($conn, $insert);
    header('location:P_I.php');
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchese Info</title>
</head>
<body>
    <form action="" method="post">

    <input type="text" name="p_code" placeholder="prohuct code">
    <br>
    <input type="text" name="p_name" placeholder="Name">
    <br>
    <input type="text" name="d_name" placeholder="diler Name">
    <br>
    <input type="text" name="price" placeholder="Price">
    <br>
    <input type="text" name="quantity" placeholder="Quantity">
    <br>
    <input type="text" name="date" placeholder="Date">
    <br>
    <input type="submit" name="submitForAdd" placeholder="Submit">
    <a href="#">Back</a>

    </form>
</body>
</html>
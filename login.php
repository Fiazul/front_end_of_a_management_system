<?php
@include 'connection.php';
if(isset($_POST['submit'])){
    //$name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $select = "SELECT * FROM a_admin WHERE email='$email' && password='$pass'";

    $result=mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0){
        header('location:adminHome.php');

    }
    else{
        header('location:message.html');
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-login.css">
    <title>Login Form</title>
    <link rel="icon" href="images/logo.png" type="image/gif">
</head>
<body>
    <div class="login-box">
        <img class="avatar" src="images/avatar5.png" >
        <h1>Login Here</h1>
        <form action="" method="post">
            <p>E-mail</p>
            <input type="Email" name="email" placeholder="Enter Email">
            <p>Password </p>
           
            <input type="password" name="pass" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="recover.php">Forgot Password?</a><br>
            <a href="registration.php">Don't Have An Account?</a> 
        </form>
    </div>


    
</body>
</html>
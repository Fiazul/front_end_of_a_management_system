<?php
@include 'connection.php';
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    $insert= "INSERT INTO a_admin(name,email,password) VALUES('$name','$email','$pass')";
    mysqli_query($conn, $insert);
    header('location:login.php');
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-registration.css">
    <title>Registration Form</title>
    <link rel="icon" href="images/logo.png" type="image/gif">
</head>
<body>
    <div class="registration-box">
        <img class="avatar" src="images/avatar5.png" >
        <h1>Register Here</h1>
        

        <form action="" method="post">

         
            <p>Username</p>
            <input type="text" name="name" placeholder="Enter Username">
            
            <p>Email</p>
            <input type="Email" name="email" placeholder="Enter Email">

            <p>Password
            </p>
            <input type="password" name="pass" placeholder="Enter Password" id="myInput"><input type="checkbox" onclick="myFunction()">Show Password


            <input type="submit" name="submit" value="Sing Up">

            <a href="recover.php">Forgot Password?</a><br>
            <a href="login.php">Login now</a> 


            <script>
                function myFunction() {
              var x = document.getElementById("myInput");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
            </script>
        
        </form>
    </div>


    
</body>

</html>
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
    <title>About Automotive</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <!--header section----->
   <section class="about-header">
    <div class="about-banner">
        <div class="navbar">
            <a href=""><img src="images/logo.png" class="logo"></a>
            <div class="nav-link" id="navLink">
                <i class="fa fa-times" aria-hidden="true" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products(2).php">Products</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </div>
        <div class="about-text-box">
            <h1>Our Products</h1>
        </div>
    </div>
   </section>


<section class="products-container">
    <div class="container-product-row">
        <h1>Tyres</h1>
        <div>
            <img src="" alt="">
        </div>
    </div>
</section>

<section class="form">
    

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
</section>



<!--------footer----------->

<section class="footer">
    <h4>About Us</h4>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Lorem ipsum dolor sit amet, 
                     consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit..
    </p>
    <div class="icons">
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-linkedin-in"></i>
    </div>
    <p>Made with <i class="fa-solid fa-heart"></i> by team Outcast</p>
</section>








<!-----------javascript for menu toggle---------->
    <script>
        var navLink = document.getElementById("navLink");
        function showMenu(){
            navLink.style.right="0";
        }
        function hideMenu(){
            navLink.style.right="-200px"
        }
    </script>
</body>
</html>
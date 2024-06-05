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
                    <li><a href="products.php">Products</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </div>
        <div class="about-text-box">
            <h1>About Us</h1>
        </div>
    </div>
   </section>


   <section class="about-us">
    <div class="raw">
        <div class="about-col col-1">
            <h1>Automative Automobile Shop</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever 
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                 five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was 
                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                 desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                 <a href="" class="hero-btn about-button">contact Us</a>
        </div>
        <div class="about-col">
            <img src="images/about-us-2.jpg" alt="">
        </div>
    </div>
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
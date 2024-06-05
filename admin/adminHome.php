<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome to Automotive</title>
    <link rel="icon" href="images/logo.png" type="image/gif">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <!--header section----->
   <section class="header">
    <div class="banner">
        <div class="navbar">
            <a href=""><img src="images/logo.png" class="logo"></a>
            <div class="nav-link" id="navLink">
                <i class="fa fa-times" aria-hidden="true" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products(2).php">Products</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="sells/buy.php">Buy</a></li>
                    <li><a href="sells/sell.php">Sell</a></li>
                    <li><a href="login.php">Logout</a></li>
                    
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </div>
        <div class="text-box">
            <h1>
                Welcome to Automotive
            </h1>
            <p>Our quality is doing it right when nobody is looking. we are automotives, <br> we believe in quality</p>
            <a href="#" class="hero-btn">Visit us to know more</a>
            
        </div>
    </div>
   </section>




   <!----product section-->





<section class="product">
<div class="title-p">
    <h1>
        Popular products
    </h1>
    <p>Available in the store</p>
</div>
    <div class="raw">
            <div class="product-col">
                <img src="images/tyre-tube.jpg">
        <a href="">       
                  <div class="layers">
                 <h3>Tyre , Tube & Flaps</h3>
        </div></a>
    </div>
             <div class="product-col">
                 <img src="images/engine-parts.jpg">
            <a href="">
                <div class="layers">
                    <h3>Engine Parts</h3>
                   </div>
            </a>
            </div>
            <div class="product-col">
                <img src="images/fittings.jpg">
            <a href="">
                <div class="layers">
                    <h3>Fittings</h3>
                </div>
            </a>
            </div>
            <div class="product-col">
             <img src="images/tools.jpg">
            <a href="">
                <div class="layers">
                    <h3>Repair Tools</h3>
                   </div>
            </a>
        </div>
    </div>
</section>



<!------------little paragraphs------------->
<section class="shop-information">
<h1>Lest Us Answer Some of Your Questions</h1>
<p>Customer queries</p>
    <div class="inf">
        <div class="inf-col">
            <h3>Why Do we Exist?</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                 Lorem Ipsum has been the industry's standard dummy text
                 ever since the 1500s, when an unknown printer took a galley
                 of type and scrambled it to make a type specimen book.
                </p>
        </div>
        <div class="inf-col">
            <h3>Why Should You Visit Automotive?</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text
                ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book.
               </p>
        </div>
        <div class="inf-col">
            <h3>Why Automotive Is Better?</h3>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text
                ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book.
            </p>
        </div>
    </div>
</section>




<!-------Map location------>
<section class="map">
    <div class="map-location">
        <h1>Embed Location Map</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3381.584436992868!2d90.41075873056411!3d23.736214025608366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1663463442699!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>





<!----------facilities------->
<section class="facilities">
    <h1>Our Facilities</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
    <div class="raw">
        <div class="facilities-col">
            <img src="images/100.jpg" alt="">
            <h3>100% Original product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="facilities-col">
            <img src="images/option.jpg" alt="">
            <h3>Multiple Options</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
        </div>
        <div class="facilities-col">
            <img src="images/servicing.jpg" alt="">
            <h3>Trusted Customer Service</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>
</section>



<!----customerReview--------->
<section class="review">
    <h1>Cutomer Review</h1>
    <p>Lorem ipsum dolor sit amet</p>
    <div class="review-div">
        <div class="review-col">
            <img src="images/user1.jpg">
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet
                    , consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <h3>David luis</h3>
                <DIV class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <!---<h4>5/5</h4>-->
                </DIV>
            </div>
        </div>
        <div class="review-col">
            <img src="images/user2.jpg" >
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet,
                     consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <h3>David luis</h3>
                <DIV class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>
                    <!----<h4>4.5/5</h4>-->
                </DIV>
            </div>
        </div>
        <div class="review-col">
            <img src="images/user3.jpg">
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet,
                     consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <h3>David luis</h3>
                <DIV class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star-half-stroke"></i>
                    <!--<h4>4.5/5</h4>-->
                </DIV>
            </div>
        </div>
    </div>
</section>

<!------contact----->

<section class="contract">
    <h1>Visit Our shop to Get All the Services We provide</h1>
    <a href="" class="hero-btn">contact Us</a>
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
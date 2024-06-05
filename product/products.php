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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.php">Products</a></li>
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



<section class="tyres">


<div class="cards">
    <div class="name"> <h2>Available Tyres</h2></div>
    <div class="all-products">
        <div class="items">
            <div class="item-row">
            <?php
                @include 'connection.php';
                $qry="SELECT * FROM product_info WHERE p_code='tyre1'";
                $result=mysqli_query($conn,$qry);
                $row=mysqli_fetch_array($result);
                ?>
                <a href="AddProductInfo.php?p_code=<?php echo $row['p_code']; ?>">
                    <img src="images/tyre/71x1eek3oJL._AC_SS450_-removebg-preview.png" alt="">
                   
                </a>
                
                <p><?php echo $row['p_name']; ?></p>
                <p class="price">Price: Tk. <?php echo $row['price']; ?> BDT</p>
            </div>
        </div>

        <div class="items">
            <div class="item-row">
            <?php
                @include 'connection.php';
                $qry="SELECT * FROM product_info WHERE p_code='tyre2'";
                $result=mysqli_query($conn,$qry);
                $row=mysqli_fetch_array($result);
                ?>
                <a href="AddProductInfo.php?p_code=<?php echo $row['p_code']; ?>">
                    <img src="images/tyre/jk-tyre-blaze-bf-32-1661082102-removebg-preview.png" alt="">
                    
                </a>
                
                <p><?php echo $row['p_name']; ?></p>
                <p class="price">Price: Tk. <?php echo $row['price']; ?> BDT</p>
            </div>
        </div>

        <div class="items">
            <div class="item-row">
            <?php
                @include 'connection.php';
                $qry="SELECT * FROM product_info WHERE p_code='tyre3'";
                $result=mysqli_query($conn,$qry);
                $row=mysqli_fetch_array($result);
                ?>
                <a href="AddProductInfo.php?p_code=<?php echo $row['p_code']; ?>">
                    <img src="images/tyre/MRF_160_60_R_17_69H_REVZ_H_TL-1666158998-removebg-preview.png" alt="">

                </a>
                
                <p><?php echo $row['p_name']; ?></p>
                <p class="price">Price: Tk. <?php echo $row['price']; ?> BDT</p>
            </div>
        </div>

        <div class="items">
            <div class="item-row">
            <?php
                @include 'connection.php';
                $qry="SELECT * FROM product_info WHERE p_code='tyre4'";
                $result=mysqli_query($conn,$qry);
                $row=mysqli_fetch_array($result);
                ?>
                <a href="AddProductInfo.php?p_code=<?php echo $row['p_code']; ?>">
                    <img src="images/tyre/mrf2-removebg-preview.png" alt="">

                </a>
                
                <p><?php echo $row['p_name']; ?></p>
                <p class="price">Price: Tk. <?php echo $row['price']; ?> BDT</p>
            </div>
        </div>

        <div class="items">
            <div class="item-row">
            <?php
                @include 'connection.php';
                $qry="SELECT * FROM product_info WHERE p_code='tyre5'";
                $result=mysqli_query($conn,$qry);
                $row=mysqli_fetch_array($result);
                ?>
                <a href="AddProductInfo.php?p_code=<?php echo $row['p_code']; ?>">
                    <img src="images/tyre/tractor-tyer-500x500-removebg-preview.png" alt="">
      
                </a>
                
                <p><?php echo $row['p_name']; ?></p>
                <p class="price">Price: Tk. <?php echo $row['price']; ?> BDT</p>
            </div>
        </div>
        <div class="items">
            <div class="item-row">
            <?php
                @include 'connection.php';
                $qry="SELECT * FROM product_info WHERE p_code='tyre6'";
                $result=mysqli_query($conn,$qry);
                $row=mysqli_fetch_array($result);
                ?>
                <a href="AddProductInfo.php?p_code=<?php echo $row['p_code']; ?>">
                    <img src="images/tyre/MRF_160_60_R_17_69H_REVZ_H_TL-1666158998-removebg-preview.png" alt="">
          
                </a>
                
                <p><?php echo $row['p_name']; ?></p>
                <p class="price">Price: Tk. <?php echo $row['price']; ?> BDT</p>
            </div>
        </div>
        <div class="items">
            <div class="item-row">
            <?php
                @include 'connection.php';
                $qry="SELECT * FROM product_info WHERE p_code='tyre7'";
                $result=mysqli_query($conn,$qry);
                $row=mysqli_fetch_array($result);
                ?>
                <a href="AddProductInfo.php?p_code=<?php echo $row['p_code']; ?>">
                    <img src="images/tyre/perfinza-left_angle.png" alt="">

                </a>
                
                <p><?php echo $row['p_name']; ?></p>
                <p class="price">Price: Tk. <?php echo $row['price']; ?> BDT</p>
            </div>
        </div>
        <div class="items">
            <div class="item-row">
            <?php
                @include 'connection.php';
                $qry="SELECT * FROM product_info WHERE p_code='tyre8'";
                $result=mysqli_query($conn,$qry);
                $row=mysqli_fetch_array($result);
                ?>
                <a href="AddProductInfo.php?p_code=<?php echo $row['p_code']; ?>">
                    <img src="images/tyre/perfinza-left_angle.png" alt="">

                </a>
                
                <p><?php echo $row['p_name']; ?></p>
                <p class="price">Price: Tk. <?php echo $row['price']; ?> BDT</p>
            </div>
        </div>
    </div>
</div>

</section>



<section class="tube">

    
<div class="cards">
    <div class="name"> <h2>Available Tubes</h2></div>
    <div class="all-products">
        <div class="items">
            <div class="item-row">
                <a href="#">
                    <img src="images/tube/1.png" alt="">
                   
                </a>
                <p>Tube Model</p>
                <p class="price">Price: Tk. 2000 BDT</p>
            </div>
        </div>
        <div class="items">
            <div class="item-row">
                <a href="#">
                    <img src="images/tube/2.png" alt="">
                    
                </a>
                <p>Tube Model</p>
                    <p class="price">Price: Tk. 2200 BDT</p>
            </div>
        </div>
        <div class="items">
            <div class="item-row">
                <a href="#">
                    <img src="images/tube/3.png
                    " alt="">

                </a>
                <p>Tube Model</p>
                <p class="price">Price: Tk. 2400 BDT</p>
            </div>
        </div>
        <div class="items">
            <div class="item-row">
                <a href="#">
                    <img src="images/tube/4.png" alt="">

                </a>
                <p>Tube Model</p>
                <p class="price">Price: Tk. 2600 BDT</p>
            </div>
        </div>
        <div class="items">
            <div class="item-row">
                <a href="#">
                    <img src="images/tube/5.png" alt="">
      
                </a>
                <p>Tube Model</p>
                <p class="price">Price: Tk. 2800 BDT</p>
            </div>
        </div>
        <div class="items">
            <div class="item-row">
                <a href="#">
                    <img src="images/tube/6.png" alt="">
          
                </a>
                <p>Tube Model</p>
                <p class="price">Price: Tk. 3000 BDT</p>
            </div>
        </div>
        <div class="items">
            <div class="item-row">
                <a href="#">
                    <img src="images/tube/7.png" alt="">

                </a>
                <p>Tube Model</p>
                <p class="price">Price: Tk. 3200 BDT</p>
            </div>
        </div>
        <div class="items">
            <div class="item-row">
                <a href="#">
                    <img src="images/tube/8.png" alt="">

                </a>
                <p>Tube Model</p>
                <p class="price">Price: Tk. 3400 BDT</p>
            </div>
        </div>
    </div>
</div>


</section>


<section class="Lubricants">

    
    <div class="cards">
        <div class="name"> <h2>Available Lubricants</h2></div>
        <div class="all-products">
            <div class="items">
                <div class="item-row">
                    <a href="#">
                        <img src="images/Lubricants/1.png" alt="">
                       
                    </a>
                    <p>Lubricant Name</p>
                    <p class="price">Price: Tk. 2000 BDT</p>
                </div>
            </div>
            <div class="items">
                <div class="item-row">
                    <a href="#">
                        <img src="images/Lubricants/2.png" alt="">
                        
                    </a>
                    <p>Lubricant Name</p>
                        <p class="price">Price: Tk. 2200 BDT</p>
                </div>
            </div>
            <div class="items">
                <div class="item-row">
                    <a href="#">
                        <img src="images/Lubricants/3.png" alt="">
    
                    </a>
                    <p>Lubricant Name</p>
                    <p class="price">Price: Tk. 2400 BDT</p>
                </div>
            </div>
            <div class="items">
                <div class="item-row">
                    <a href="#">
                        <img src="images/Lubricants/4.png" alt="">
    
                    </a>
                    <p>Lubricant Name</p>
                    <p class="price">Price: Tk. 2600 BDT</p>
                </div>
            </div>
            <div class="items">
                <div class="item-row">
                    <a href="#">
                        <img src="images/Lubricants/5.png" alt="">
          
                    </a>
                    <p>Lubricant Name</p>
                    <p class="price">Price: Tk. 2800 BDT</p>
                </div>
            </div>
            <div class="items">
                <div class="item-row">
                    <a href="#">
                        <img src="images/Lubricants/6.png" alt="">
              
                    </a>
                    <p>Lubricant Name</p>
                    <p class="price">Price: Tk. 3000 BDT</p>
                </div>
            </div>
            <div class="items">
                <div class="item-row">
                    <a href="#">
                        <img src="images/Lubricants/7.png" alt="">
    
                    </a>
                    <p>Lubricant Name</p>
                    <p class="price">Price: Tk. 3200 BDT</p>
                </div>
            </div>
            <div class="items">
                <div class="item-row">
                    <a href="#">
                        <img src="images/Lubricants/8.png" alt="">
    
                    </a>
                    <p>Lubricant Name</p>
                    <p class="price">Price: Tk. 3400 BDT</p>
                </div>
            </div>
        </div>
    </div>
    
    
    </section>





    <section class="Flaps">

    
        <div class="cards">
            <div class="name"> <h2>Available Flaps</h2></div>
            <div class="all-products">
                <div class="items">
                    <div class="item-row">
                        <a href="#">
                            <img src="images/Flaps/1.png" alt="">
                           
                        </a>
                        <p>Flap Model</p>
                        <p class="price">Price: Tk. 2000 BDT</p>
                    </div>
                </div>
                <div class="items">
                    <div class="item-row">
                        <a href="#">
                            <img src="images/Flaps/2.png" alt="">
                            
                        </a>
                        <p>Flap Model</p>
                            <p class="price">Price: Tk. 2200 BDT</p>
                    </div>
                </div>
                <div class="items">
                    <div class="item-row">
                        <a href="#">
                            <img src="images/Flaps/3.png" alt="">
        
                        </a>
                        <p>Flap Model</p>
                        <p class="price">Price: Tk. 2400 BDT</p>
                    </div>
                </div>
                <div class="items">
                    <div class="item-row">
                        <a href="#">
                            <img src="images/Flaps/4.png" alt="">
        
                        </a>
                        <p>Flap Model</p>
                        <p class="price">Price: Tk. 2600 BDT</p>
                    </div>
                </div>
                <div class="items">
                    <div class="item-row">
                        <a href="#">
                            <img src="images/Flaps/5.png" alt="">
              
                        </a>
                        <p>Flap Model</p>
                        <p class="price">Price: Tk. 2800 BDT</p>
                    </div>
                </div>
                <div class="items">
                    <div class="item-row">
                        <a href="#">
                            <img src="images/Flaps/6.png" alt="">
                  
                        </a>
                        <p>Flap Model</p>
                        <p class="price">Price: Tk. 3000 BDT</p>
                    </div>
                </div>
                <div class="items">
                    <div class="item-row">
                        <a href="#">
                            <img src="images/Flaps/7.png" alt="">
        
                        </a>
                        <p>Flap Model</p>
                        <p class="price">Price: Tk. 3200 BDT</p>
                    </div>
                </div>
                <div class="items">
                    <div class="item-row">
                        <a href="#">
                            <img src="images/Flaps/8.png
                            " alt="">
        
                        </a>
                        <p>Flap Model</p>
                        <p class="price">Price: Tk. 3400 BDT</p>
                    </div>
                </div>
            </div>
        </div>
        
        
        </section>













        <section class="engine-parts">

    
            <div class="cards">
                <div class="name"> <h2>Available Engine Parts</h2></div>
                <div class="all-products">
                    <div class="items">
                        <div class="item-row">
                            <a href="#">
                                <img src="images/Engine Parts/1.png" alt="">
                               
                            </a>
                            <p>Engine Part Model</p>
                            <p class="price">Price: Tk. 30000 BDT</p>
                        </div>
                    </div>
                    <div class="items">
                        <div class="item-row">
                            <a href="#">
                                <img src="images/Engine Parts/2.png" alt="">
                                
                            </a>
                            <p>Engine Part Model</p>
                                <p class="price">Price: Tk. 32000 BDT</p>
                        </div>
                    </div>
                    <div class="items">
                        <div class="item-row">
                            <a href="#">
                                <img src="images/Engine Parts/3.png" alt="">
            
                            </a>
                            <p>Engine Part Model</p>
                            <p class="price">Price: Tk. 34000 BDT</p>
                        </div>
                    </div>
                    <div class="items">
                        <div class="item-row">
                            <a href="#">
                                <img src="images/Engine Parts/4.png" alt="">
            
                            </a>
                            <p>Engine Part Model</p>
                            <p class="price">Price: Tk. 36000 BDT</p>
                        </div>
                    </div>
                    <div class="items">
                        <div class="item-row">
                            <a href="#">
                                <img src="images/Engine Parts/5.png" alt="">
                  
                            </a>
                            <p>Engine Part Model</p>
                            <p class="price">Price: Tk. 37000 BDT</p>
                        </div>
                    </div>
                    <div class="items">
                        <div class="item-row">
                            <a href="#">
                                <img src="images/Engine Parts/6.png" alt="">
                      
                            </a>
                            <p>Engine Part Model</p>
                            <p class="price">Price: Tk. 38000 BDT</p>
                        </div>
                    </div>
                    <div class="items">
                        <div class="item-row">
                            <a href="#">
                                <img src="images/Engine Parts/7.png" alt="">
            
                            </a>
                            <p>Engine Part Model</p>
                            <p class="price">Price: Tk. 39000 BDT</p>
                        </div>
                    </div>
                    <div class="items">
                        <div class="item-row">
                            <a href="#">
                                <img src="images/Engine Parts/8.png" alt="">
            
                            </a>
                            <p>Engine Part Model</p>
                            <p class="price">Price: Tk. 35000 BDT</p>
                        </div>
                    </div>
                </div>
            </div>
            
            
            </section>
















            <section class="fittings">

    
                <div class="cards">
                    <div class="name"> <h2>Available Fittings</h2></div>
                    <div class="all-products">
                        <div class="items">
                            <div class="item-row">
                                <a href="#">
                                    <img src="images/Fittings/1.png" alt="">
                                   
                                </a>
                                <p>Fittings Name</p>
                                <p class="price">Price: Tk. 2000 BDT</p>
                            </div>
                        </div>
                        <div class="items">
                            <div class="item-row">
                                <a href="#">
                                    <img src="images/Fittings/2.png" alt="">
                                    
                                </a>
                                <p>Fittings Name</p>
                                    <p class="price">Price: Tk. 2200 BDT</p>
                            </div>
                        </div>
                        <div class="items">
                            <div class="item-row">
                                <a href="#">
                                    <img src="images/Fittings/3.png" alt="">
                
                                </a>
                                <p>Fittings Name</p>
                                <p class="price">Price: Tk. 2600 BDT</p>
                            </div>
                        </div>
                        <div class="items">
                            <div class="item-row">
                                <a href="#">
                                    <img src="images/Fittings/4.png" alt="">
                
                                </a>
                                <p>Fittings Name</p>
                                <p class="price">Price: Tk. 2800 BDT</p>
                            </div>
                        </div>
                        <div class="items">
                            <div class="item-row">
                                <a href="#">
                                    <img src="images/Fittings/5.png" alt="">
                      
                                </a>
                                <p>Fittings Name</p>
                                <p class="price">Price: Tk. 3000 BDT</p>
                            </div>
                        </div>
                        <div class="items">
                            <div class="item-row">
                                <a href="#">
                                    <img src="images/Fittings/6.png" alt="">
                          
                                </a>
                                <p>Fittings Name</p>
                                <p class="price">Price: Tk. 3200 BDT</p>
                            </div>
                        </div>
                        <div class="items">
                            <div class="item-row">
                                <a href="#">
                                    <img src="images/Fittings/7.png" alt="">
                
                                </a>
                                <p>Fittings Name</p>
                                <p class="price">Price: Tk. 3400 BDT</p>
                            </div>
                        </div>
                        <div class="items">
                            <div class="item-row">
                                <a href="#">
                                    <img src="images/Fittings/8.png" alt="">
                
                                </a>
                                <p>Fittings Name</p>
                                <p class="price">Price: Tk. 3600 BDT</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                </section>
















                <section class="tools">

    
                    <div class="cards">
                        <div class="name"> <h2>Available Repair Tools</h2></div>
                        <div class="all-products">
                            <div class="items">
                                <div class="item-row">
                                    <a href="#">
                                        <img src="images/Repair Tools/1.png" alt="">
                                       
                                    </a>
                                    <p>Tool Name</p>
                                    <p class="price">Price: Tk. 2000 BDT</p>
                                </div>
                            </div>
                            <div class="items">
                                <div class="item-row">
                                    <a href="#">
                                        <img src="images/Repair Tools/2.png" alt="">
                                        
                                    </a>
                                    <p>Tool Name</p>
                                        <p class="price">Price: Tk. 2200 BDT</p>
                                </div>
                            </div>
                            <div class="items">
                                <div class="item-row">
                                    <a href="#">
                                        <img src="images/Repair Tools/3.png" alt="">
                    
                                    </a>
                                    <p>Tool Name</p>
                                    <p class="price">Price: Tk. 2400 BDT</p>
                                </div>
                            </div>
                            <div class="items">
                                <div class="item-row">
                                    <a href="#">
                                        <img src="images/Repair Tools/4.png" alt="">
                    
                                    </a>
                                    <p>Tool Name</p>
                                    <p class="price">Price: Tk. 2600 BDT</p>
                                </div>
                            </div>
                            <div class="items">
                                <div class="item-row">
                                    <a href="#">
                                        <img src="images/Repair Tools/5.png" alt="">
                          
                                    </a>
                                    <p>Tool Name</p>
                                    <p class="price">Price: Tk. 2800 BDT</p>
                                </div>
                            </div>
                            <div class="items">
                                <div class="item-row">
                                    <a href="#">
                                        <img src="images/Repair Tools/6.png" alt="">
                              
                                    </a>
                                    <p>Tool Name</p>
                                    <p class="price">Price: Tk. 3000 BDT</p>
                                </div>
                            </div>
                            <div class="items">
                                <div class="item-row">
                                    <a href="#">
                                        <img src="images/Repair Tools/7.png" alt="">
                    
                                    </a>
                                    <p>Tool Name</p>
                                    <p class="price">Price: Tk. 3200 BDT</p>
                                </div>
                            </div>
                            <div class="items">
                                <div class="item-row">
                                    <a href="#">
                                        <img src="images/Repair Tools/8.png" alt="">
                    
                                    </a>
                                    <p>Tool Name</p>
                                    <p class="price">Price: Tk. 3400 BDT</p>
                                </div>
                            </div>
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
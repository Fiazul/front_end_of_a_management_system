<?php
@include 'connection.php';
if(isset($_POST['submit'])){
    
    $pName = mysqli_real_escape_string($conn, $_POST['p_name']);
    $cName = mysqli_real_escape_string($conn, $_POST['c_name']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    

    $insert= "INSERT INTO sell_info(p_name,c_name,date,price,contact,quantity) VALUES('$pName','$cName','$date','$price','$contact','$quantity')";
    mysqli_query($conn, $insert);
    header('location:sell.php');
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleSales.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <a href=""><img src="images/logo.png" class="logo"></a>
        <div class="nav-link" id="navLink">
            <i class="fa fa-times" aria-hidden="true" onclick="hideMenu()"></i>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>







    </div>



<div class="form">

    <form action="" method="post">
        
        <p>Product Name</p>
        <input type="text" name="p_name" placeholder="Product Name">
        <p>Customer Name
        </p>
        <input type="text" name="c_name" placeholder="Customer Name">

        <p>Date
        </p>
        <input type="text" name="date" placeholder="Date">
        
        <p>Price
        </p>

        <input type="text" name="price" placeholder="Price">
        
        <p>Contact
        </p>

        <input type="text" name="contact" placeholder="Contact">
        
        <p>Quantity
        </p>

        <input type="text" name="quantity" placeholder="Quantity">
        
        <input class="hero-btn" type="submit" name="submit" value="Add New">
    </form>

</div>
<h3>View Detais</h3>

<!--     <div class="table-box">
        <div class="table-row">
            <div class="cell first-cell">
                <p class="titleOfTable">Daily Updates</p>
            </div>
            <div class="cell first-cell">
                <p>Product Name</p>
            </div>
            <div class="cell">
                <p>Selling price</p>
            </div>
            <div class="cell">
                <p>Profit</p>
            </div>



        </div> -->


       <!-- 
         <div class="table-row">
            <div class="cell first-cell">
                <p class="titleOfTable">Last 30 Days</p>
            </div>

            <div class="cell first-cell">
                <p>Product Name</p>
            </div>

            <div class="cell">
                <p>Buying price</p>
            </div>

            <div class="cell">
                <p>Selling price</p>
            </div>

            <div class="cell">
                <p>Profit</p>
            </div>

            <div class="cell first-cell">
                
                <p>Total Profit</p>
            </div>



        </div>
        <div class="table-row">
            <div class="cell first-cell">
                <p class="titleOfTable">This Year</p>
            </div>

            <div class="cell">
                <p>Asset</p>
            </div>

            <div class="cell">
                <p>Sales</p>
            </div>

            <div class="cell">
                <p>Profit This year</p>
            </div>



        </div>
        -->




        
        <div class="table-box">

                

            <div class="table-row">

                

                <div class="cell first-cell">
                    <h4 class="titleOfTable">All Selling</h4>
                </div>
                <div class="cell first-cell">
                    <h4>Products Name</h4>

                    <?php
                @include 'connection.php';
                $qry="SELECT * FROM sell_info";
                $result=mysqli_query($conn,$qry);
                ?>

                    <?php
                    while($row=mysqli_fetch_array($result)){
                        ?>
                        <p><?php echo $row['p_name']; ?></p>
                    <?php    
                    }
                    ?>

                </div>
                <div class="cell first-cell">
                    <h4>Customer Name</h4>

                <?php
                @include 'connection.php';
                $qry="SELECT * FROM sell_info";
                $result=mysqli_query($conn,$qry);
                ?>

                    <?php
                    while($row=mysqli_fetch_array($result)){
                        ?>
                        <p><?php echo $row['c_name']; ?></p>
                    <?php    
                    }
                    ?>

                </div>
                <div class="cell">
                    <h4>Date</h4>

                    <?php
                @include 'connection.php';
                $qry="SELECT * FROM sell_info";
                $result=mysqli_query($conn,$qry);
                ?>

                    <?php
                    while($row=mysqli_fetch_array($result)){
                        ?>
                        <p><?php echo $row['date']; ?></p>
                    <?php    
                    }
                    ?>

                </div>
                <div class="cell">
                    <h4>Price</h4>

                    <?php
                @include 'connection.php';
                $qry="SELECT * FROM sell_info";
                $result=mysqli_query($conn,$qry);
                ?>

                    <?php
                    while($row=mysqli_fetch_array($result)){
                        ?>
                        <p><?php echo $row['price']; ?></p>
                    <?php    
                    }
                    ?>

                </div>
                <div class="cell">
                    <h4>Contact</h4>

                    <?php
                @include 'connection.php';
                $qry="SELECT * FROM sell_info";
                $result=mysqli_query($conn,$qry);
                ?>

                    <?php
                    while($row=mysqli_fetch_array($result)){
                        ?>
                        <p><?php echo $row['contact']; ?></p>
                    <?php    
                    }
                    ?>

                </div>
                <div class="cell">
                    <h4>Quantity</h4>

                    <?php
                @include 'connection.php';
                $qry="SELECT * FROM sell_info";
                $result=mysqli_query($conn,$qry);
                ?>

                    <?php
                    while($row=mysqli_fetch_array($result)){
                        ?>
                        <p><?php echo $row['quantity']; ?></p>
                    <?php    
                    }
                    ?>

                </div>

    </div>
    
</body>
</html>
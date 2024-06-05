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

    <form action="">
        
        <p>Product Code</p>
        <input type="text" name="">
        <p>Produce Name
        </p>
        <input type="text" name="">

        <p>Dealer Name
        </p>
        <input type="text" name="">
        
        <p>Price
        </p>

        <input type="text" name="">
        
        <p>Quantity
        </p>

        <input type="text" name="">
        
        <p>Date
        </p>


        <input type="text" name="">
        
        <input class="hero-btn" type="submit" name="" value="Add New">
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
                    <h4 class="titleOfTable">All Purchase</h4>
                </div>
                <div class="cell first-cell">
                    <h4>Products code</h4>

                    <?php
                @include 'connection.php';
                $qry="SELECT * FROM purchese_info";
                $result=mysqli_query($conn,$qry);
                ?>

                    <?php
                    while($row=mysqli_fetch_array($result)){
                        ?>
                        <p><?php echo $row['p_code']; ?></p>
                    <?php    
                    }
                    ?>

                </div>
                <div class="cell first-cell">
                    <h4>Product Name</h4>

                <?php
                @include 'connection.php';
                $qry="SELECT * FROM purchese_info";
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
                <div class="cell">
                    <h4>Dealer Name</h4>

                    <?php
                @include 'connection.php';
                $qry="SELECT * FROM purchese_info";
                $result=mysqli_query($conn,$qry);
                ?>

                    <?php
                    while($row=mysqli_fetch_array($result)){
                        ?>
                        <p><?php echo $row['d_name']; ?></p>
                    <?php    
                    }
                    ?>

                </div>
                <div class="cell">
                    <h4>Price</h4>

                    <?php
                @include 'connection.php';
                $qry="SELECT * FROM purchese_info";
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
                    <h4>Date</h4>

                    <?php
                @include 'connection.php';
                $qry="SELECT * FROM purchese_info";
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
                    <h4>Quantity</h4>

                    <?php
                @include 'connection.php';
                $qry="SELECT * FROM purchese_info";
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
<?php
session_start();
?>

 <!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>home</title>
         
        <!--swiper css link-->
        <link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>



        <!--font awesome cdn link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        <!--custom css file link-->
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--header section starts-->

<section class="header">
    <a href="home.php" class="logo">Details</a>

<nav class="navbar">
<a href="home.php">Home</a>
    <a href="about.php">About</a>
    <?php
if (isset($_SESSION['username'])) {
    echo '<a href="profile.php">' . $_SESSION['username'] . '</a>';
} else {
    echo '<a href="login.php">Login</a>';
}
?>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>


<!--header section ends-->








<section class="home-packages">

<h1 class="heading-title">Categories!</h1>

<div class="box-container">

 <div class="box">
    <div class="image">
         <img src="images/job5.jpg" alt="">
    </div>

    <div class="content">
        <h3>Java</h3>
        <a href="book.php" class="btn">Know more</a>
    </div>
 </div>

 <div class="box">
    <div class="image">
         <img src="images/job6.jpg" alt="">
    </div>

    <div class="content">
        <h3>Sql</h3>
        <a href="book1.php" class="btn">Know more</a>
    </div>
 </div>

 <div class="box">
    <div class="image">
         <img src="images/job7.jpg" alt="">
    </div>

    <div class="content">
        <h3>Php</h3>
        <a href="tourist.php" class="btn">Know more</a>
    </div>
 </div>

 <div class="box">
    <div class="image">
         <img src="images/job8.png" alt="">
    </div>

    <div class="content">
        <h3>Python</h3>
        <a href="tourist.php" class="btn">Know more</a>
    </div>
 </div>

 <div class="box">
    <div class="image">
         <img src="images/job9.jpg" alt="">
    </div>

    <div class="content">
        <h3>Web development</h3>
        <a href="tourist.php" class="btn">Know more</a>
    </div>
 </div>


 <div class="box">
    <div class="image">
         <img src="images/job10.jpg" alt="">
    </div>

    <div class="content">
        <h3>Android development</h3>
        <a href="tourist.php" class="btn">Know more</a>
    </div>
 </div>



</div>

</section>

<!--home packages section ends-->








<!--Footer section starts-->

<section class="footer">

 <div class="box-container">
    <div class="box">
        <h3>Quick Links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
        <h3>Extra Links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
        <h3>Contact</h3>
        <a href="#"><i class="fas fa-phone"></i> +91 9446-7511235</a>
        <a href="#"><i class="fas fa-phone"></i> +91 8765-544478</a>
        <a href="#"><i class="fas fa-envelope"></i> nihongo@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i> Bangalore, India - 530085</a>
        </div>

        <div class="box">
            <h3>Follow</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
        </div>
 </div>

 <div class="credit">created by <span>Designer</span> | all rights reserved!</div>

</section>

<!--Footer section ends-->


<!--swiper js link-->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


<!--custom js file link-->
<script src="js/script.js"></script>

</body>
</html>

<?php
session_start();
?>
<!DOCTYPE html>

 <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>about</title>
         
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


<div class="heading">
    <h1>Which path?</h1>
</div>


<!--packages section starts-->

<section class="home-packages">

<h1 class="heading-title">Career advice</h1>
<div class="box-container">

<div class="box">
    <div class="image">
        <img src="images/career1.jpg" alt="">
    </div>

    <div class="content">
        <h3>10 Tips for technical interview</h3>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis odio quaerat perspiciatis necessitatibus quo aliquam consectetur maiores quasi suscipit, at sequi mollitia tenetur ducimus ipsa!</p>
    </div>
</div>

<div class="box">
    <div class="image">
        <img src="images/career2.jpg" alt="">
    </div>

    <div class="content">
        <h3>How to enjoy your work</h3>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus ab temporibus quo unde voluptatibus, adipisci inventore cupiditate placeat eaque illo?
</p>
    </div>
</div>


<div class="box">
    <div class="image">
        <img src="images/career3.jpg" alt="">
    </div>

    <div class="content">
        <h3>Managing Time effectively</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, nisi debitis, minima quae nostrum ea in porro, eius odit nemo quibusdam labore. Sint, ab? Quis distinctio qui ratione aperiam similique?</p>
    </div>
</div>

</section>

<!--packages section ends-->







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

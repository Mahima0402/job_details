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
<div class="heading" style="background:url(images/header1.webp) no-repeat">
    <h1>about us</h1>
</div>


<!--about section starts-->

<section class="about">

<div class="image">
    <img src="images/job3.jpg" alt="">
</div>

<div class="content">
    <h3>Why choose us?</h3>
    <p>This website helps to explore different domain jobs.Maps can be viewed based on the search and other detials are given for the particular company.
        This helps in knowing the companys and other details about that company so that it helps in getting to know the company better before going there for an interview.
    </p>

</div>


</section>

<!--about section ends-->


<!--review section starts-->

<section class="reviews">

<div class="reviews-slider">

<div class="w">

<div class="slide">
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
    </div>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt officia dicta cum aliquid libero explicabo quidem eos harum sint impedit. Perspiciatis veritatis rem fuga veniam atque, odit in aut velit.</p>
    <h3>Rosie</h3>
    <span>traveler</span>
    <img src="images/review-img5.png" alt="">
</div>

<div class="slide">
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
    </div>
    <p>Lorem ipsum dolor,onsectetur ade, odit in aut velit.</p>
    <h3>Jessica</h3>
    <span>traveler</span>
    <img src="images/review-img2.jpg" alt="">
</div>

<div class="slide">
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, temporibus minus nostrum mollitia incidunt nesciunt! Sapiente excepturi at mollitia sit neque error nulla in, accusamus aliquam provident modi ratione nobis debitis aspernatur, nihil laudantium dolor praesentium. Optio officia laudantium sint!</p>  
  <h3>peter</h3>
    <span>traveler</span>
    <img src="images/review-img4.jpg" alt="">
</div>

<div class="slide">
<div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
    </div>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt officia dicta cum aliquid libero explicabo quidem eos harum sint impedit. Perspiciatis veritatis rem fuga veniam atque, odit in aut velit.</p>
    <h3>Abc</h3>
    <span>traveler</span>
    <img src="images/review-img4.png" alt="">
</div>

<div class="slide">
<div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
    </div>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt officia dicta cum aliquid libero explicabo quidem eos harum sint impedit. Perspiciatis veritatis rem fuga veniam atque, odit in aut velit.</p>
    <h3>Xyz</h3>
    <span>traveler</span>
    <img src="images/review-img5.png" alt="">
</div>



</div>

</div>

</section>



<!--review section ends-->










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

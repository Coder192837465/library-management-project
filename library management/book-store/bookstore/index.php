<?php
    session_start()
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="deed.css">
</head>

<body>


    <!-- header section starts -->
    <header class="header">

        <div class="header-1">

            <a href="#" class="logo"> <i class="fas fa-book"></i> book store </a>
            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <div id="login-btn" class="fas fa-user"></div>
                <div id='username'>
                    
                </div>
            </div>

        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#featured">featured</a>
                <a href="#arrivals">arrivals</a>
                <a href="#reviews">reviews</a>
                <a href="#about us">about us</a>
                
            </nav>
        </div>

    </header>
    <!-- header section ends -->

    <!-- bottom navbar starts -->

    <nav class="bottom-navbar">
        <a href="#Home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-book"></a>
        <a href="#Genre" class="fas fa-list"></a>
        <a href="#Reviews" class="fas fa-comment-dots"></a>
        <a href="#Contact" class="fas fa-phone"></a>
    </nav>

    <!-- bottom navbar ends -->

    <!-- login-form starts-->
    <div class="login-form-container" style="background-image: url(signuppic.webp);">

        <div id="close-login-btn" class="fas fa-times"></div>

        <form action="auth.php" method="post">
            <h3>Log in</h3>
            <span>Username</span>
                <input type="text" name="username" class="box" placeholder="enter your email" id="">
                <span>Password</span>
                <input type="password" name="password" class="box" placeholder="enter your password" id="">
                <div class="checkbox">
                    <input type="checkbox" name="" id="remember-me">
                    <label for="remember-me"> remember me</label>
                </div>
                <input type="submit" name="submit" value="Log in" class="btn">
                <p>Forget password ? <a href="#">click here</a></p>
                <p>Don't have an account ? <a href="signup.php">create one</a></p>
        </form>
    </div>

    <!-- login-form ends-->

    <!-- home section starts -->

    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <p><marquee behavior="" direction="left">explore a wide range of books here in our store.</marquee></p>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide"><img src="book-1.jpg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="book smple.png" alt="" width="160px"></a>
                    <a href="#" class="swiper-slide"><img src="book-3.jpg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="book-4.jpg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="book-5.jpg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="bokk-10.webp" alt=""></a>
                </div>
                <img src="stand.png" class="stand" alt="">
            </div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- icons section starts -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-paper-plane"></i>
            <div class="content">
                <h3>free delivery</h3>
                <p>order over rs 3000</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>secure payment</h3>
                <p>100 secure payment</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-redo-alt"></i>
            <div class="content">
                <h3>easy returns</h3>
                <p>10 days returns</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>24/7 support</h3>
                <p>call us anytime</p>
            </div>
        </div>

    </section>

    <!-- icons section ends -->

    <!-- footer section starts -->

        <section class="footer">

            <div class="box-container">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <div class="credit"> created by <span>prashant.t</span> |<br> all rights reserved!</div>
                </div>

            </div>    

        </section>    

    <!-- footer section ends -->
        

    
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="script.js"></script>

</body>

</html>
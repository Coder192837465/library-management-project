<?php
    session_start();
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
                
                <div id='username'>
                    <?php
                    echo $_SESSION["Name"];
                    ?>
                    <a href="logout.php" style="font-size:1.7rem;">Logout</a>
                </div>
            </div>

        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#featured">featured</a>
                <a href="#arrivals">arrivals</a>
                <a href="#reviews">reviews</a>
                <a href="#aboutus">aboutus</a>
                <?php
                   if ($_SESSION['role']==='admin') {
                    echo "<a href='admin-dashboard.php'>Admin Dashboard</a>";
                   }
                   
                ?>
            </nav>
        </div>

    </header>
    <!-- header section ends -->

    <!-- bottom navbar -->

    <nav class="bottom-navbar">
        <a href="#Home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-book"></a>
        <a href="#Genre" class="fas fa-list"></a>
        <a href="#Reviews" class="fas fa-comment-dots"></a>
        <a href="#Contact" class="fas fa-phone"></a>
    </nav>

    

    <!-- home section starts -->

    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide"><img src="book-1.jpg" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="book smple.png" alt="" width="160px"> </a>
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
                <h3>free shipping</h3>
                <p>order over rs 3000</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>secure payment</h3>
                <p>100% secure payment</p>
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

    <!-- featured section starts -->

        <section class="featured" id="featured">

            <h1 class="heading"> <span>featured books</span></h1>

            <div class="swiper featured-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="book-7.jpg" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>featured books</h3>
                            <div class="price">rs 999</div>
                            <a href="shopbooks.php" class="btn">shop</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="book-8.jpeg" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>featured books</h3>
                            <div class="price">rs 999</div>
                            <a href="#" class="btn">buy</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="book-9.jpg" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>featured books</h3>
                            <div class="price">rs 999</div>
                            <a href="#" class="btn">add to cart</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="book-10.jpg" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>featured books</h3>
                            <div class="price">rs 999</div>
                            <a href="#" class="btn">add to cart</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="book-11.jpg" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>featured books</h3>
                            <div class="price">rs 999</div>
                            <a href="#" class="btn">add to cart</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="book-12.webp" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>featured books</h3>
                            <div class="price">rs 999</div>
                            <a href="#" class="btn">add to cart</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="book-13.jpg" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>featured books</h3>
                            <div class="price">rs 999</div>
                            <a href="#" class="btn">add to cart</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="book-14.jpg" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>featured books</h3>
                            <div class="price">rs 999</div>
                            <a href="#" class="btn">add to cart</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="book-15.jpg" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>featured books</h3>
                            <div class="price">rs 999</div>
                            <a href="#" class="btn">add to cart</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="book-16.jpg" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>featured books</h3>
                            <div class="price">rs 999 </div>
                            <a href="#" class="btn">add to cart</a>
                        </div>
                    </div>

                   </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

        </section>

    <!-- featured section ends -->

    <!-- arrivals section starts -->

        <section class="arrivals" id="arrivals">

            <h1 class="heading"> <span>new arrivals</span> </h1>

            <div class="swiper arrivals-slider">

                <div class="swiper-wrapper">

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="bokk-1.jpg" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">rs 1599</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="bokk-2.jpg" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">rs 1599</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="bokk-3.jpg" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">rs 1599</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="bokk-4.jpg" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">rs 1599</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="bokk-5.jpg" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">rs 1599</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>
                </div>
                    

            </div>

            <div class="swiper arrivals-slider">

                <div class="swiper-wrapper">

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="bokk-6.png" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">rs 1599</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="bokk-7.jpg" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">rs 1599</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="bokk-8.png" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">rs 1599</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="bokk-9.jpg" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">rs 1599</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="bokk-10.webp" alt="" height="200px">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">rs 1599</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>
                </div>
                    

            </div>

        </section>

    <!-- arrivals section ends -->

    <!-- deal section starts -->

        <section class="deal">

            <div class="content">
                <h3>deal of the day</h3>
                <h1>upto 30% off</h1>
                <p>"Time is running out, take your 30 percent off now!"</p>
                       <a href="#" class="btn">shop now</a>
            </div>

            <div class="image">
                <img src="deal.jpg" alt="" height="500px" width="250px">
            </div>

        </section>

    <!-- deal section ends -->

    <!-- reviews section starts -->

        <section class="reviews" id="reviews">

            <h1 class="heading"> <span>customer's reviews</span> </h1>

            <div class="swiper reviews-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide box">
                        <img src="pic-1.jpeg" alt="" height="170px">
                        <h3>vikram</h3>
                       <p>Lorem ipsum dolor sit
                             amet consectetur
                            adipisicing elit. 
                            Eum quo aspernatur 
                            libero non, reiciendis 
                            mollitia quam iure 
                            inventore perspiciatis?
                            Nulla, quae excepturi! 
                            Libero porro inventore
                            et qui sunt explicabo 
                            eveniet!</p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div> 
                    </div>

                    <div class="swiper-slide box">
                        <img src="deeez.jpeg" alt="" height="150px">
                        <h3>devika</h3>
                       <p>Lorem ipsum dolor sit
                             amet consectetur
                            adipisicing elit. 
                            Eum quo aspernatur 
                            libero non, reiciendis 
                            mollitia quam iure 
                            inventore perspiciatis?
                            Nulla, quae excepturi! 
                            Libero porro inventore
                            et qui sunt explicabo 
                            eveniet!</p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div> 
                    </div>

                    <div class="swiper-slide box">
                        <img src="pic-3.jpg" alt="" height="170px" width="160px">
                        <h3>tisa</h3>
                       <p>Lorem ipsum dolor sit
                             amet consectetur
                            adipisicing elit. 
                            Eum quo aspernatur 
                            libero non, reiciendis 
                            mollitia quam iure 
                            inventore perspiciatis?
                            Nulla, quae excepturi! 
                            Libero porro inventore
                            et qui sunt explicabo 
                            eveniet!</p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div> 
                    </div>

                </div>

            </div>

        </section>

    <!-- reviews section ends -->

    <!-- footer section starts -->

        <section class="footer">

            <div class="box-container">

                <div class="box">
                    <h3>our locations</h3>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> jawlakhel </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> kumaripati </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> anamnagar </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> pulchowk </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> boudha </a>
                </div>

                <div class="box">
                    <h3>quick links</h3>
                    <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> arrivals </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> about us </a>
                </div>

                <div class="box">
                    <h3>extra links</h3>
                    <a href="#"> <i class="fas fa-arrow-right"></i> account</a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> ordered items </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> payment methods </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> our services </a>
                </div>

                <div class="box">
                    <h3>contact info</h3>
                    <a href="#"> <i class="fas fa-phone"></i> 012-546-765</a>
                    <a href="#"> <i class="fas fa-phone"></i> 9860555960</a>
                    <a href="#"> <i class="fas fa-envelope"></i> prash45@gmail.com</a>
                    <img src="nepalmap.png" alt="" height="300px" width="500px">
                </div>

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
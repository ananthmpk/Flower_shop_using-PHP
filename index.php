<?php
include("admin/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Shop</title>
    <!-- --------Css Link------- -->
    <link rel="stylesheet" href="css/style.css">

    <!------------- favicon----------- -->
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

    <!-- -------- Bootstrap Css Link ------- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- -------- Font awesome Link ------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- -------preloader-------- -->
    <!-- <section class="preloader" id="preloader">
        <img src="images/spinner.gif" alt=" Preloader" width="200px">
     </section> -->
    <!-- ----------------------- header Section ----------------------------- -->

    <header class="sticky-top py-1 header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="logo"><img src="images/logo.png" alt="icon" width="50px">
                    Flower<span class="span-color">Bot</span>
                </div>
                <div class="d-flex">
                    <div class="nav_icons_left">
                        <div href="#" class="fas fa-shopping-cart me-3"></div>
                        <div href="#" class="fas fa-user me-2" id="login-btntwo"></div>
                    </div>

                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav justify-content-center flex-grow-1">
                        <li class="nav-list  ">
                            <a href="#top" class="nav-link px-3 py-2 ">Home</a>
                        </li>
                        <li class="nav-list  ">
                            <a href="#about_section" class="nav-link px-3 py-2 ">About</a>
                        </li>
                        <li class="nav-list  ">
                            <a href="#product_page" class="nav-link px-3 py-2 ">Products</a>
                        </li>
                        <li class="nav-list  ">
                            <a href="#contact_page" class="nav-link px-3 py-2">Review</a>
                        </li>
                        <li class="nav-list">
                            <a href="#contact_page" class="nav-link px-3 py-2 ">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="nav_icons_right me-2">
                    <div href="#" class="fas fa-shopping-cart me-3"></div>
                    <div href="#" class="fas fa-user " id="login-btn"></div>
                </div>

            </div>
            <form action="" class="login_form">
                <h3>sign in</h3>
                <input type="email" name="" placeholder="enter your email" class="box" required>
                <input type="password" name="" placeholder="enter your password" class="box" required>
                <div class="remember">
                    <input type="checkbox" name="" id="remember-me" required>
                    <label for="remember-me">Remember Me</label>
                </div>
                <input type="submit" value="sign in" class="sign-btn btn py-2 px-4">
                <div class="links">
                    <a href="#">forget password</a>
                    <a href="#">sign up</a>
                </div>
            </form>

        </nav>

    </header>

    <!-- ----------------------- Main Section ----------------------------- -->
    <div id="home_section" class="py-3">

        <div class="container">

            <div class="row">

                <div class="col-md-7 d-flex flex-column justify-content-center ">
                    <h1 class="main_title">Fresh <span class="span-color">flowers</span> & Perfect gifts for your loved ones </h1>
                    <p class="main_info mt-2">Check out our wide selection of flower arrangements to <br>Make your next
                        occasion memorable.</p>
                    <a href="#"><button type="button" class="main_btn btn mt-2 px-3 py-2">SHOP
                            NOW</button></a>
                </div>

                <div class="col-md-5 d-flex justify-content-center align-item-center">
                    <img class="img-fluid main_img " src="images/bouquet-main.png" alt="Main Image" width="450px">
                </div>
            </div>
        </div>
    </div>
    <!-- ----------------------- About Section ----------------------------- -->
    <div id="about_section">
        <div class="row  about_page">
            <div class="col-md-6">
                <img src="images/about-img.jpg" alt="About Img" class="img-fluid">
            </div>
            <div class="col-md-6 d-flex flex-column align-item-center justify-content-center p-2">
                <h4 class="about_head">Welcome to Flower<span class="span-color">Bot</span></h3>
                    <p class="about_info">At FlowerBot, we believe in the power of flowers to brighten lives and create
                        lasting memories.
                        Nestled in Tamilnadu, our online flower boutique offers a curated selection of
                        exquisite floral arrangements for every occasion.</p>
                    <p class="about_info">Each bouquet is crafted with care using the freshest seasonal blooms sourced
                        from trusted local
                        growers.</p>
            </div>
        </div>
    </div>

    <!-- ----------------------- Products Section ----------------------------- -->

    <div id="product_page">
        <div class="container py-5">
            <h2 class="py-4 mb-4 Product_title text-center">Our <span class="span-color">Products</span></h2>
            <div class="row">



                <?php
                $getdatas = mysqli_query($connection, "select * from flower_data");

                while ($arr = mysqli_fetch_array($getdatas)) {


                ?>
                    <div class="col-md-4 mb-4 d-flex justify-content-center">

                        <div class="card ">

                            <div class="card-top">
                                <i class="fa-solid fa-heart card_heart py-4 px-3"></i>
                                <img src="images/<?php echo $arr['image']; ?>" alt="Flower image" class="card-img-top img-fluid"">
                        </div>
                        <div class=" card-body">
                                <h3 class="card-title"><?php echo $arr['bouquet_name'] ?></h3>
                                <div class="price_share d-flex justify-content-between">
                                    <div class="prices d-flex">
                                        <p class="price">&#8377;<?php echo $arr['offer_price']; ?></p>
                                        <p class="old_price ms-1 pt-2">&#8377;<del><?php echo $arr['price'] ?></del></p>
                                    </div>
                                    <i class="fa-solid fa-share-nodes"></i>
                                </div>
                            </div>
                            <div class="buy_cart  d-flex justify-content-between">
                                <a class="buy btn py-3 ms-4" href="#">BUY+</a>
                                <a href="#"><button class="card-btn btn py-3 px-4" type="button">Add to Cart</button></a>
                            </div>



                        </div>


                    </div>
                <?php

                }

                ?>


            </div>
        </div>
    </div>

    <!-- ------------------Conatact page------------------ -->

    <div id="contact_page">
        <div class="container py-5">
            <h2 class="contact_title text-center py-4 ">Contact<span class="span-color"> Us</span></h2>
            <div class="row">
                <div class="col-md-6">
                    <form class=" py-3  mx-4 contact_main">
                        <div class=" input_box">
                            <input class="  p-2 mb-3" type="text" placeholder="Enter your name" required>
                        </div>
                        <div class=" input_box">
                            <input class="  p-2 mb-3" type="email" placeholder="Enter your email address" required>
                        </div>
                        <div class="input_box">
                            <input class="  p-2 mb-3" type="tel" placeholder="Enter your phone number" required>
                        </div>
                        <div class=" input_box">
                            <textarea name="" id="" class="w-100  p-2" rows="5" cols="30" placeholder="Enter your message" required></textarea>
                        </div>
                        <div class="mt-4 pb-3">
                            <input class="contact_btn py-2 px-3" type="submit" value="Send Message">
                        </div>
                    </form>
                </div>

                <div class="col-md-6 d-flex justify-content-center align-item-center">
                    <img src="images/review-img.png" class="girl img-fluid" alt="Girl With Flower">
                </div>
            </div>
        </div>
    </div>

    <!-- ------------------Footer page------------------ -->

    <div id="footer">
        <div class="container pt-5 pb-1">
            <div class="row footer_row">
                <div class="col-md-3 ">
                    <h4 class="mb-3">Quick <span class="span-color">Links</span></h4>
                    <p><a href="#top">Home</a></p>
                    <p><a href="#about_section">About</a></p>
                    <p><a href="#product_page">Products</a></p>
                    <p><a href="#contact_page">Review</a></p>
                    <p><a href="#contact_page">Contact</a></p>
                </div>
                <div class="col-md-3">
                    <h4 class="mb-3">Extra <span class="span-color">Links</span></h4>
                    <p><a href="#">My Account</a></p>
                    <p><a href="#">My orders</a></p>
                    <p><a href="#">My Favorite</a></p>
                </div>
                <div class="col-md-3 none">
                    <h4 class="mb-3">Locations</h4>
                    <p>India</p>
                    <p>USA</p>
                    <p>Japan</p>
                    <p>France</p>
                </div>
                <div class="col-md-3 none">
                    <h4 class="mb-3">Contact <span class="span-color">Info</span></h4>
                    <p>+91 854269724</p>
                    <p>Ananthmpk1999@ gmail.com</p>
                    <p> Tamilnadu, India - 614624</p>
                </div>

            </div>
            <p class="copy_right text-center pt-3">@All Rights Website created By <span class="span-color">Anantharaj</span></p>
        </div>
    </div>

    <button id="BackToTop"> <i class="fa-solid fa-arrow-up arrow_i"></i></i></button>


    <!-- --------Css Link------- -->
    <script src="js/script.js"></script>

    <!-- --------Bootstrap JS Link------- -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- --------Bootstrap JQuary Link------- -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</body>

</html>
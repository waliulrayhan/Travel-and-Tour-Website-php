<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>home</title>';
echo '';
echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>';
echo '';
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">';
echo '';
echo '<link rel="stylesheet" href="css/style.css">';
echo '</head>';
echo '<body>';
echo '<section class="header">';
echo '<a href="home.php" class="logo">travel & tour</a>';
echo '<nav class="navbar">';
echo '<a href="search-page.php">search</a>';
echo '<a href="home.php">home</a>';
echo '<a href="about.php">about</a>';
echo '<a href="places.php">places</a>';
echo '</nav>';
echo '<div id="menu-btn" class="fas fa-bars"></div>';
echo '</section>';
echo '<section class="home">';
echo '<div class="swiper home-slider">';
echo '<div class="swiper-wrapper">';
echo '<div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">';
echo '<div class="content">';
echo '<span>exploer, discover, travel</span>';
echo '<h3>travel around the world</h3>';
echo '<a href="places.php" class="btn">discover more</a>';
echo '</div>';
echo '</div>';
echo '<div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">';
echo '<div class="content">';
echo '<span>exploer, discover, travel</span>';
echo '<h3>discover the new places</h3>';
echo '<a href="places.php" class="btn">discover more</a>';
echo '</div>';
echo '</div>';
echo '<div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">';
echo '<div class="content">';
echo '<span>exploer, discover, travel</span>';
echo '<h3>make your tour worthwhile</h3>';
echo '<a href="places.php" class="btn">discover more</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="swiper-button-next"></div>';
echo '<div class="swiper-button-prev"></div>';
echo '</div>';
echo '</section>';
echo '<section class="services">';
echo '<h1  class="heading-title"> OUR SERVICES </h1>';
echo '<div class="box-container">';
echo '<div class="box">';
echo '<img src="images/icon-1.png" alt="">';
echo '<h3>adventure</h3>';
echo '</div>';
echo '<div class="box">';
echo '<img src="images/icon-2.png" alt="">';
echo '<h3>tour guide</h3>';
echo '</div>';
echo '<div class="box">';
echo '<img src="images/icon-3.png" alt="">';
echo '<h3>tracking</h3>';
echo '</div>';
echo '<div class="box">';
echo '<img src="images/icon-4.png" alt="">';
echo '<h3>camp fire</h3>';
echo '</div>';
echo '<div class="box">';
echo '<img src="images/icon-5.png" alt="">';
echo '<h3>off road</h3>';
echo '</div>';
echo '<div class="box">';
echo '<img src="images/icon-6.png" alt="">';
echo '<h3>camping</h3>';
echo '</div>';
echo '</div>';
echo '</section>';
echo '<section class="home-about">';
echo '<div class="image">';
echo '<img src="images/about-img.jpg" alt="">';
echo '</div>';
echo '<div class="content">';
echo '<h3>about us</h3>';
echo '<p>This is a test project about web programming and designing of Travel and Tour places of Bangladesh.(Only for project showcasing) </p>';
echo '<a href="about.php" class="btn">read more</a>';
echo '</div>';
echo '</section>';
echo '<section class="home-places">';
echo '<h1 class="heading-title">our places</h1>';
echo '<div class="box-container">';
echo '<div class="box" style="border-radius: 10px;">';
echo '<div class="image" style="border-radius: 10px;">';
echo '<img src="images/img-1.jpg" alt="">';
echo '</div>';
echo '<div class="content">';
echo '<h3>adventure & tour</h3>';
echo '<p>there are many places in bangladesh for travel and adventure. </p>';
echo '<a href="details.php" class="btn">view more</a>';
echo '</div>';
echo '</div>';
echo '<div class="box" style="border-radius: 10px;">';
echo '<div class="image" style="border-radius: 10px;">';
echo '<img src="images/img-2.jpg" alt="">';
echo '</div>';
echo '<div class="content">';
echo '<h3>adventure & tour</h3>';
echo '<p>there are many places in bangladesh for travel and adventure. </p>';
echo '<a href="details.php" class="btn">view more</a>';
echo '</div>';
echo '</div>';
echo '<div class="box" style="border-radius: 10px;">';
echo '<div class="image" style="border-radius: 10px;">';
echo '<img src="images/img-3.jpg" alt="">';
echo '</div>';
echo '<div class="content">';
echo '<h3>adventure & tour</h3>';
echo '<p>there are many places in bangladesh for travel and adventure. </p>';
echo '<a href="details.php" class="btn">view more</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="load-more"> <a href="places.php" class="btn">load more</a></div>';
echo '</section>';
echo '<section class="footer">';
echo '<div class="box-container">';
echo '<div class="box">';
echo '<h3>quick links</h3>';
echo '<a href="home.php"><i class="fas fa-angle-right"></i> home</a>';
echo '<a href="about.php"><i class="fas fa-angle-right"></i>about</a>';
echo '<a href="places.php"><i class="fas fa-angle-right"></i>places</a>';
echo '</div>';
echo '<div class="box">';
echo '<h3>extra links</h3>';
echo '<a href="#"><i class="fas fa-angle-right"></i>ask questions</a>';
echo '<a href="#"><i class="fas fa-angle-right"></i>about us</a>';
echo '<a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>';
echo '<a href="#"><i class="fas fa-angle-right"></i>terms & conditions</a>';
echo '</div>';
echo '<div class="box">';
echo '<h3>contact info</h3>';
echo '<a href="#"><i class="fas fa-phone"></i> +8801303654628 </a>';
echo '<a href="#"><i class="fas fa-envelope"></i>asifuzzaman01@hotmail.com </a>';
echo '<a href="#"><i class="fas fa-map"></i> azimpur </a>';
echo '</div>';
echo '<div class="box">';
echo '<h3>follow us</h3>';
echo '<a href="#"><i class="fab fa-facedetails-f"></i> facedetails </a>';
echo '<a href="#"><i class="fab fa-twitter"></i> twitter </a>';
echo '<a href="#"><i class="fab fa-instagram"></i> instagram </a>';
echo '<a href="#"><i class="fab fa-linkedin"></i> linkedin </a>';
echo '</div>';
echo '</div>';
echo '<div class="credit">created by <span>Team SBD</span>| all rights reserved!</div>';
echo '</section>';
echo '<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>';
echo '<script src="js/script.js"></script>';
echo '</body>';
echo '</html>';
?>
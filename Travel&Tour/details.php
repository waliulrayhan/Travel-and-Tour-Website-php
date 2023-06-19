<?php
// Define the DOCTYPE and the language of the document
echo "<!DOCTYPE html>";
echo "<html lang='en'>";

// Define the head section
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Place details</title>";

// Link the external stylesheets
echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css'/>";
echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'>";
echo "<link rel='stylesheet' href='css/style.css'>";

// Close the head section
echo "</head>";

// Define the body section
echo "<body>";

// Define the header section
echo "<section class='header'>";

// Define the logo and the navbar
echo "<a href='home.php' class='logo'>travel & tour</a>";
echo "<nav class='navbar'>";
echo "<a href='search.php'>search</a>";
echo "<a href='home.php'>home</a>";
echo "<a href='about.php'>about</a>";
echo "<a href='places.php'>places</a>";
// echo "<a href='details.php'>book</a>";
echo "</nav>";

// Define the menu button
echo "<div id='menu-btn' class='fas fa-bars'></div>";

// Close the header section
echo "</section>";

// Define the heading section
echo "<div class='heading'>";

// Define the heading text
echo "<h1 style= 'color: black;' >place details</h1>";

// Close the heading section
echo "</div>";

// Define the iframe section
echo "<div>";
echo "<iframe width='500' height='400' frameborder='0' src='https://www.bing.com/maps/embed?h=400&w=500&cp=24.344594295127976~88.60130310058594&lvl=11&typ=d&sty=h&src=SHELL&FORM=MBEDV8' scrolling='no'>";
echo "</iframe>";
echo "<div style='white-space: nowrap; text-align: center; width: 500px; padding: 6px 0;'>";
echo "<a id='largeMapLink' target='_blank' href='https://www.bing.com/maps?cp=24.344594295127976~88.60130310058594&sty=h&lvl=11&FORM=MBEDLD'>View Larger Map</a>   |  ";
echo "<a id='dirMapLink' target='_blank' href='https://www.bing.com/maps/directions?cp=24.344594295127976~88.60130310058594&sty=h&lvl=11&rtp=~pos.24.344594295127976_88.60130310058594____&FORM=MBEDLD'>Get Directions</a>";
echo "</div>";
echo "</div>";

// Close the body section
echo "</body>";

// Close the html tag
echo "</html>";

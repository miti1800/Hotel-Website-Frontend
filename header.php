<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>Hotel Paradise</title>
        <link rel="stylesheet" href="./css/slick.css"/>
        <link rel="stylesheet" href="./css/glightbox.css"/>
        <link rel="stylesheet" href="./css/style.css"/>
    </head>
    <body>
        <script type="text/javascript" src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
        <script type="text/javascript" src="./js/jquery.js"></script>      
        <script type="text/javascript" src="./js/slick.js"></script>
        <script type="text/javascript" src="./js/glightbox.min.js"></script>
        <div class="header-container">        
            <div class="header">
                <div class="hotel-logo">
                    <a href="./index.php"><img src="./images/hotel_logo.png" alt="Hotel logo" title="Hotel logo"></a>
                </div>
                <div class="menu">
                    <ul class="menu-list">
                        <li><a class="hyperlink text-uppercase" href="./index.php">Home</a></li>
                        <li class="sub-menu">
                            <div class="sub-menu-div">
                                <a class="hyperlink text-uppercase" href="./rooms.php">Rooms</a>
                                <button onclick="dropRoomMenu();">
                                    <span class="iconify" data-icon="dashicons:arrow-down" data-inline="false"></span>
                                </button>                           
                            </div>
                            <div class="sub-menu-list">
                                <ul>
                                    <li><a href="./classic-room.php">Classic Room</a></li>
                                    <li><a href="./family-room.php">Family Room</a></li>
                                    <li><a href="./balcony-room.php">Balcony Room</a></li>
                                    <li><a href="./king-room.php">King Room</a></li>
                                    <li><a href="./delux-room.php">Delux Room</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="hyperlink text-uppercase" href="./restaurant.php">Restaurant</a></li>
                        <li><a class="hyperlink text-uppercase" href="./amenities.php">Amenities</a></li>
                        <li><a class="hyperlink text-uppercase" href="./about-us.php">About us</a></li>
                        <li><a class="hyperlink text-uppercase" href="./gallery.php">Gallery</a></li>
                        <li><a class="hyperlink text-uppercase" href="./contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="header-button">
                    <a class="btn" href="./book-now.php">Book Now</a>
                    <div class="responsive hide">
                        <span class="iconify" onclick="showMenu();" data-icon="radix-icons:hamburger-menu" data-inline="false"></span>
                    </div>
                </div>
            </div>

            <div class="responsive_menu">
                <ul class="menu-list">
                    <li><a class="hyperlink text-uppercase" href="./index.php">Home</a></li>
                    <li class="sub-menu">
                            <div class="sub-menu-div">
                                <a class="hyperlink text-uppercase" href="./rooms.php">Rooms</a>
                                <button onclick="dropResponsiveMenu();">
                                    <span class="iconify" data-icon="dashicons:arrow-down" data-inline="false"></span>
                                </button>                            
                            </div>
                            <div class="sub-menu-list">
                                <ul>
                                    <li><a href="./classic-room.php">Classic Room</a></li>
                                    <li><a href="./family-room.php">Family Room</a></li>
                                    <li><a href="./balcony-room.php">Balcony Room</a></li>
                                    <li><a href="./king-room.php">King Room</a></li>
                                    <li><a href="./delux-room.php">Delux Room</a></li>
                                </ul>
                            </div>
                        </li>
                    <li><a class="hyperlink text-uppercase" href="./restaurant.php">Restaurant</a></li>
                    <li><a class="hyperlink text-uppercase" href="./amenities.php">Amenities</a></li>
                    <li><a class="hyperlink text-uppercase" href="./about-us.php">About us</a></li>
                    <li><a class="hyperlink text-uppercase" href="./gallery.php">Gallery</a></li>
                    <li><a class="hyperlink text-uppercase" href="./contact-us.php">Contact Us</a></li>
                    <li><a class="btn" href="./book-now.php">Book Now</a></li>
                </ul>
            </div>
        </div>  
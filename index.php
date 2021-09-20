<?php require_once('./header.php'); ?>
        <div class="body-container">
            <div class="slider">
                <div class="landing-screen background-image-section" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('./images/home_banner1.jpg')">
                    <div class="landing-screen-info">
                        <h2 class="landing-screen-text">Welcome to<br> The Hotel Paradise</h2>
                    </div>                   
                </div>
                <div class="landing-screen background-image-section" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('./images/home_banner2.jpg')">
                    <div class="landing-screen-info">
                        <h2 class="landing-screen-text">Experience luxury<br> in the leap of nature</h2>
                    </div>
                </div>
                <div class="landing-screen background-image-section" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('./images/home_banner3.jpg')">
                    <div class="landing-screen-info">
                        <h2 class="landing-screen-text">A memorable stay<br> with world's best food</h2>
                    </div>
                </div>
            </div>  

            <div class="booking-form">
                <div class="form-container">
                    <form>
                        <div class="form-field">
                            <label class="h5">Arrival On:</label>
                            <input type="date" name="arrivalDate">
                        </div>
                        <div class="form-field">
                            <label class="h5">Departure On:</label>
                            <input type="date" name="departureDate">
                        </div>
                        <div class="small-field">
                            <label class="h5">Adults:</label>
                            <input type="number" placeholder="1" name="adult" min="1" max="4">
                            <hr>
                        </div>
                        <div class="small-field">
                            <label class="h5">Children:</label>
                            <input type="number" placeholder="0" name="children" min="0" max="3">
                            <hr>
                        </div>
                        <div class="small-field">
                            <label class="h5">Rooms:</label>
                            <input type="number" placeholder="1" name="rooms" min="1" max="4">
                            <hr>
                        </div>
                        <input type="submit" value="Book Now" class="btn">                                      
                    </form>
                </div>
            </div>

            <div class="main-container">
                <div class="about-hotel">
                    <div class="about">
                        <div class="heading">
                            <h2 class="about-title extra-large-text text-uppercase">About</h2>
                            <h2 class="extra-large-text text-uppercase">Hotel</h2>
                        </div>                    
                        <div class="about-section">
                            <p class="normal-text small-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="./about-us.php" class="btn">Read More</a>
                        </div>
                    </div>                
                    <div class="abput-image-section">
                        <img src="./images/about_banner.jpg" alt="About Hotel" title="About Hotel">
                    </div>
                </div>
            </div> 

            <?php require_once('./rooms-cards.php');?>

            <div class="home-restaurants white-container">
                <div class="home-restaurant-image">
                    <img src="./images/home_restaurant.jpg" alt="Restaurant" title="Restaurant">
                </div>
                <div class="home-restaurant-info">
                    <h2 class="extra-large-text">Restaurant</h2>
                    <p class="normal-text small-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <a href="./restaurant.php" class="btn">View More</a>
                </div>
            </div>

            <div class="home-amenities-container white-container">
                <div class="home-amenities">
                    <div class="home-amenities-info">
                        <div class="home-amenities-icon">
                            <img src="./images/internet.png" alt="internet" title="internet">
                        </div>
                        <h3>WiFi</h3>
                    </div>
                    <div class="home-amenities-info">
                        <div class="home-amenities-icon">
                            <img src="./images/pool.png" alt="pool" title="pool">                            
                        </div>
                        <h3>Pool</h3>
                    </div>
                    <div class="home-amenities-info">
                        <div class="home-amenities-icon">
                            <img src="./images/spa.png" alt="spa" title="spa">
                        </div>
                        <h3>Spa</h3>
                    </div>
                    <div class="home-amenities-info">
                        <div class="home-amenities-icon">
                            <img src="./images/gym.png" alt="gym" title="gym">
                        </div>
                        <h3>Gym</h3>
                    </div>
                    <div class="home-amenities-info">
                        <div class="home-amenities-icon">
                            <img src="./images/mini_theater.png" alt="theater" title="theater">
                        </div>
                        <h3>Theater</h3>
                    </div>
                </div>
                <div class="home-amenities-desc">
                    <h2 class="extra-large-text">Amenities</h2>
                    <p class="normal-text small-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="./amenities.php" class="btn white-btn">View more</a> 
                </div>                
            </div>

            <div class="home-gallery-container">
                <h2 class="extra-large-text">Gallery</h2>
                <a href="./gallery.php"><u>View Full Gallery >></u></a>
                <div class="home-gallery-slider">
                    <div class="home-gallery-image">
                        <img src="./images/home_gallery1.jpg" alt="gallery_slider1" title="gallery_slider1">
                    </div>
                    <div class="home-gallery-image">
                        <img src="./images/home_gallery2.jpg" alt="gallery_slider2" title="galeery_slider2">
                    </div>
                    <div class="home-gallery-image">
                        <img src="./images/home_gallery3.jpg" alt="gallery_slider3" title="gallery_slider3">
                    </div>
                    <div class="home-gallery-image">
                        <img src="./images/home_gallery4.jpg" alt="gallery_slider4" title="gallery_slider4">
                    </div>
                    <div class="home-gallery-image">
                        <img src="./images/home_gallery5.jpg" alt="gallery_slider5" title="gallery_slider5">
                    </div>               
                </div>
            </div>

            <div class="home-user-reviews container-info white-container">
                <h2 class=extra-large-text>Reviews</h2>
                <div class="home-reviews-container">
                    <div class="home-reviews-desc">
                        <img src="./images/home_review.jpg">
                        <h4>Sara Jacksan</h4>
                        <h6>PR Consultant</h6>
                        <p class="normal-text small-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="home-reviews-desc">
                        <img src="./images/home_review2.jpg">
                        <h4>John Hannman</h4>
                        <h6>Bussinessman</h6>
                        <p class="normal-text small-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="home-reviews-desc">
                        <img src="./images/home_review3.jpg">
                        <h4>Shinny Watson</h4>
                        <h6>Food Blooger</h6>
                        <p class="normal-text small-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
<?php require_once('./footer.php');?>
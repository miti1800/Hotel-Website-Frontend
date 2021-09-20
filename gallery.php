<?php require_once('./header.php');?>
<div class="body-container">
    <div class="landing-screen half-landing-screen background-image-section" style="background-image:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('./images/gallery-banner.jpg');">
        <div class="landing-screen-info">
            <h2 class="landing-screen-text">Gallery</h2>
        </div>
    </div>

    <div class="main-container">
        <div class="main-inner-container">
            <div class="gallery" id="gallery">
                <button class="filter-btn btn active" id="all" onclick="call(this.id)">All</button>
                <button class="filter-btn btn" id="gallery-room" onclick="call(this.id)">Room</button>
                <button class="filter-btn btn" id="restaurants" onclick="call(this.id)">Restaurant</button>
                <button class="filter-btn btn" id="amenities" onclick="call(this.id)">Amenities</button>
                <button class="filter-btn btn" id="Building" onclick="call(this.id)">Building</button>
            </div>

            <div class="gallery-images">
                <a href="./images/classic_room.jpg"
                    class="glightbox filter gallery-room">
                    <img src="./images/classic_room.jpg">
                </a>
                <a href="./images/restaurant-gallery-image1.jpg"
                    class="glightbox filter restaurants">
                    <img src="./images/restaurant-gallery-image1.jpg">
                </a>
                <a href="./images/home_banner1.jpg"
                    class="glightbox filter Building">
                    <img src="./images/home_banner1.jpg">
                </a>
                <a href="./images/restaurant-gallery-image2.jpg"
                    class="glightbox filter restaurants">
                    <img src="./images/restaurant-gallery-image2.jpg">
                </a>
                <a href="./images/home_gallery1.jpg"
                    class="glightbox filter Building">
                    <img src="./images/home_gallery1.jpg">
                </a>
                <a href="./images/home_banner2.jpg"
                    class="glightbox filter amenities">
                    <img src="./images/home_banner2.jpg">
                </a>
                <a href="./images/balcony_room.jpg"
                    class="glightbox filter gallery-room">
                    <img src="./images/balcony_room.jpg">
                </a>
                <a href="./images/about_banner.jpg"
                    class="glightbox filter Building">
                    <img src="./images/about_banner.jpg">
                </a>
                <a href="./images/restaurant-gallery-image3.jpg"
                    class="glightbox filter restaurants">
                    <img src="./images/restaurant-gallery-image3.jpg">
                </a>
                <a href="./images/delux_room.jpg"
                    class="glightbox filter gallery-room">
                    <img src="./images/delux_room.jpg">
                </a>
                <a href="./images/home_gallery3.jpg"
                    class="glightbox filter amenities">
                    <img src="./images/home_gallery3.jpg">
                </a>
                <a href="./images/restaurant-gallery-image4.jpg"
                    class="glightbox filter restaurants">
                    <img src="./images/restaurant-gallery-image4.jpg">
                </a>
                <a href="./images/home_gallery2.jpg"
                    class="glightbox filter Building">
                    <img src="./images/home_gallery2.jpg">
                </a>
                <a href="./images/family_room.jpg"
                    class="glightbox filter gallery-room">
                    <img src="./images/family_room.jpg">
                </a>
                <a href="./images/restaurant-gallery-image5.jpg"
                    class="glightbox filter restaurants">
                    <img src="./images/restaurant-gallery-image5.jpg">
                </a>
                <a href="./images/home_banner3.jpg"
                    class="glightbox filter gallery-room">
                    <img src="./images/home_banner3.jpg">
                </a>
                <a href="./images/home_restaurant.jpg"
                    class="glightbox filter restaurants">
                    <img src="./images/home_restaurant.jpg">
                </a>
                <a href="./images/king_room.jpg"
                    class="glightbox filter gallery-room">
                    <img src="./images/king_room.jpg">
                </a>
                <a href="./images/home_gallery4.jpg"
                    class="glightbox filter gallery-room">
                    <img src="./images/home_gallery4.jpg">
                </a>
                <a href="./images/home_gallery5.jpg"
                    class="glightbox filter gallery-room">
                    <img src="./images/home_gallery5.jpg">
                </a>
            </div>
        </div>
    </div>
</div>
<?php require_once('./footer.php');?>
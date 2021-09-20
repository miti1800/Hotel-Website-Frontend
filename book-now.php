<?php require_once('./header.php') ?>
<div class="body-container">
    <div class="landing-screen half-landing-screen background-image-section" style="background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('./images/book-now-banner.jpg');">
        <div class="landing-screen-info">
            <h2 class="landing-screen-text">Book Now</h2>
        </div>
    </div>

    <div class="main-container">
        <div class="main-inner-container">
            <div class="book-now">
                <form>
                    <div class="form-field">
                        <label class="h5 bold-text">Full Name:</label>
                        <input type="text" name="fullName">
                    </div>
                    <div class="form-field">
                        <label class="h5 bold-text">Your Email:</label>
                        <input type="email" name="email">
                    </div>
                    <div class="form-field">
                        <label class="h5 bold-text">Arrival Date:</label>
                        <input type="date" name="arrivalDate">
                    </div>
                    <div class="form-field">
                        <label class="h5 bold-text">Departure Date:</label>
                        <input type="date" name="departureDate">
                    </div>
                    <div class="form-field">
                        <label class="h5 bold-text">Contact Number:</label>
                        <input type="text" name="contact">
                    </div>
                    <div class="form-field">
                        <label class="h5 bold-text">No of Adults:</label>
                        <input type="number" name="adult" min="1" max="4">
                    </div>
                    <div class="form-field">
                        <label class="h5 bold-text">No of Children:</label>
                        <input type="number" name="children" min="0" max="3">
                    </div>
                    <div class="form-field">
                        <label class="h5 bold-text">No of Room:</label>
                        <input type="number" name="rooms" min="1" max="4">
                    </div>
                    <div class="book-now-button">
                        <button class="btn">Book Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once('./footer.php');?>
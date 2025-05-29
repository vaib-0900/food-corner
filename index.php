<?php
include "header.php";
?>
<!-- Hero Section -->
<section class="bg-dark text-white text-center p-5">
    <div class="container">
        <h1>Welcome to <span class="text-warning">FoodCorner</span></h1>
        <p class="lead">Delicious Food. Friendly Service. Cozy Atmosphere.</p>
        <a href="menu.php" class="btn btn-warning btn-lg mt-3">Explore Our Menu</a>
    </div>
</section>

<!-- About Section -->
<section class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="images/restaurant.jpg" alt="Restaurant" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h2>About FoodCorner</h2>
            <p>FoodCorner is a family-owned restaurant offering a warm and welcoming experience with a wide variety of cuisines. Whether you're craving spicy Indian dishes, cheesy Italian pastas, or classic American burgers, we’ve got something to satisfy your hunger.</p>
            <p>Come dine in, take out, or order online. We’re here to serve you!</p>
        </div>
    </div>
</section>

<!-- Features -->
<section class="bg-light py-5 text-center">
    <div class="container">
        <h2>Why Choose Us</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <i class="fas fa-utensils fa-2x text-warning mb-2"></i>
                <h5>Quality Food</h5>
                <p>Prepared fresh with the best ingredients every single day.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-clock fa-2x text-warning mb-2"></i>
                <h5>Fast Service</h5>
                <p>Your time is valuable. We serve fast without compromising quality.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-star fa-2x text-warning mb-2"></i>
                <h5>Customer Satisfaction</h5>
                <p>Rated 5 stars by hundreds of happy customers.</p>
            </div>
        </div>
    </div>
</section>

<!-- Specials Preview -->
<section class="container my-5 text-center">
    <h2>Today's Specials</h2>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <img src="images/special1.jpg" class="card-img-top" alt="Special 1">
                <div class="card-body">
                    <h5 class="card-title">Grilled Chicken Platter</h5>
                    <p class="card-text">Served with seasoned veggies and rice.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/special2.jpg" class="card-img-top" alt="Special 2">
                <div class="card-body">
                    <h5 class="card-title">Creamy Alfredo Pasta</h5>
                    <p class="card-text">Rich, cheesy, and topped with herbs.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/special3.jpg" class="card-img-top" alt="Special 3">
                <div class="card-body">
                    <h5 class="card-title">Chili Cheese Burger</h5>
                    <p class="card-text">Juicy beef patty with spicy cheese sauce.</p>
                </div>
            </div>
        </div>
    </div>
    <a href="specials.php" class="btn btn-outline-warning mt-4">See All Specials</a>
</section>

<!-- Testimonials Preview -->
<section class="bg-dark text-white py-5">
    <div class="container text-center">
        <h2>What Our Customers Say</h2>
        <div class="row mt-4">
            <div class="col-md-6">
                <blockquote class="blockquote">
                    <p>"Best dining experience I've had in years. Highly recommended!"</p>
                    <footer class="blockquote-footer text-white">Sarah K.</footer>
                </blockquote>
            </div>
            <div class="col-md-6">
                <blockquote class="blockquote">
                    <p>"Amazing food, cozy vibes, and friendly staff. Love this place!"</p>
                    <footer class="blockquote-footer text-white">James M.</footer>
                </blockquote>
            </div>
        </div>
        <a href="reviews.php" class="btn btn-warning mt-3">Read More Reviews</a>
    </div>
</section>


<?php
include "footer.php";
?>


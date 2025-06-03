<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food Corner Specials</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .card-img-top {
            height: 220px;
            object-fit: cover;
        }

        .section-title {
            border-bottom: 3px solid #ffc107;
            display: inline-block;
            padding-bottom: 5px;
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero text-center mb-5">
        <div class="container">
            <h1 class="display-4 fw-bold">About Us</h1>
            
            <a href="#specials" class="btn btn-warning btn-lg">Explore Now</a>
        </div>
    </section>
    <div class="container my-5">
        <div class="container-fluid">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1200&q=80"
                        class="img-fluid rounded shadow w-100" alt="Food Corner HD Photo"
                        style="object-fit: cover; max-height: 400px;">
                </div>
                <div class="col-lg-6">
                    <h2 class="mb-3">About Food Corner</h2>
                    <p>
                        Welcome to Food Corner! We are passionate about serving delicious food made from the freshest
                        ingredients. Our team is dedicated to providing you with a memorable dining experience in a cozy
                        and
                        friendly atmosphere.
                    </p>
                </div>
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-md-6 order-md-2 mb-4 mb-md-0">
                    <img src="https://images.unsplash.com/photo-1467003909585-2f8a72700288?auto=format&fit=crop&w=800&q=80"
                        class="img-fluid rounded shadow w-100" alt="Our Mission"
                        style="object-fit: cover; max-height: 300px;">
                </div>
                <div class="col-md-6 order-md-1">
                    <h3 class="mb-3">Our Mission</h3>
                    <p>
                        To deliver high-quality, tasty, and healthy food to our customers while maintaining the highest
                        standards of hygiene and service.
                    </p>
                </div>
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800&q=80"
                        class="img-fluid rounded shadow w-100" alt="Our Team"
                        style="object-fit: cover; max-height: 300px;">
                </div>
                <div class="col-md-6">
                    <h3 class="mb-3">Our Team</h3>
                    <p>
                        Our talented chefs and friendly staff work together to create a welcoming environment and
                        unforgettable meals for every guest.
                    </p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2 mb-4 mb-md-0">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=800&q=80"
                        class="img-fluid rounded shadow w-100" alt="Why Choose Us"
                        style="object-fit: cover; max-height: 300px;">
                </div>
                <div class="col-md-6 order-md-1">
                    <h3 class="mb-3">Why Choose Us?</h3>
                    <ul>
                        <li>Fresh and quality ingredients</li>
                        <li>Wide variety of veg and non-veg dishes</li>
                        <li>Excellent customer service</li>
                        <li>Comfortable and clean ambiance</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
include("footer.php");
?>
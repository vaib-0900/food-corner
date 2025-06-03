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
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('images/banner.png');
            background-size: cover;
            background-position: center;
            min-height: 60vh;
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
    <section class="hero-section bg-dark text-white d-flex align-items-center">
        <div class="container text-center py-5">
            <h1 class="display-3 fw-bold mb-3"> <span class="text-warning">About Us</span></h1>
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
                        Welcome to Food Corner, where good food and warm hearts meet.
                        We believe in simple pleasures and honest ingredients.
                        Every dish is made with care, just like home.
                        Our kitchen hums with the joy of cooking and sharing.
                        Step inside and find a cozy corner waiting just for you.
                        Here, strangers become friends over a shared meal.
                        Fresh herbs, hearty recipes, and old-fashioned charm fill the air.
                        We serve comfort on a plate, with a smile on the side.
                        Come hungry, leave happy — that’s the Food Corner way.
                        Your table is ready. Let’s eat!


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

                        At Food Corner, our mission is simple and sincere.
                        We aim to serve wholesome, hearty meals made with love.
                        Each dish is crafted with the finest, freshest ingredients.
                        We believe good food should nourish both body and spirit.
                        Clean kitchens and kind smiles are part of our promise.
                        We hold fast to old-fashioned care and modern standards.
                        Every plate tells a story of warmth, health, and home.
                        Our guests are treated like family, always.
                        From our hearts to your table — with gratitude.
                        That’s the Food Corner way, every single day.


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
                        At Food Corner, every smile tells a story.
                        Our chefs stir pots with passion and purpose.
                        Recipes are crafted with care, not just skill.
                        The aroma of home fills the air with each dish.
                        Our friendly staff greet you like an old friend.
                        Laughter and warmth are always on the menu.
                        We believe a meal should feed the soul, too.
                        Every guest is a welcome part of our little family.
                        Together, we create more than food — we create memories.
                        Pull up a chair — there’s always room at our table.
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
                    <ul>At Food Corner, we believe in the beauty of simple, good food.
                        Our ingredients are handpicked, fresh from local markets.
                        From hearty stews to crisp garden salads, there's something for every taste.
                        Whether you fancy a rustic veg delight or a savory non-veg classic, we’ve got you covered.
                        We serve each plate with care and a genuine smile.
                        Kindness and attentiveness are part of our recipe.
                        Our space is warm, clean, and full of charm — just like home.
                        Every corner invites you to relax, unwind, and enjoy.
                        It’s not just a meal — it’s a comforting experience.
                        Come for the food, stay for the feeling.
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
include("footer.php");
?>
<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FoodCorner | Meet Our Chefs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        /* Hero Section */
        .chef-hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('images/banner.png');
            background-size: cover;
            background-position: center;
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }

        .chef-hero h1 span {
            color: #ffc107;
        }

        /* General Layout */
        section {
            padding: 60px 0;
        }

        /* Chef Profiles */
        .chef-img {
            width: 250px;
            height: 250px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .badge.bg-dark {
            background-color: #212529 !important;
        }

        /* Dish Cards */
        .dish-card {
            border: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 16px rgba(0,0,0,0.08);
        }

        .dish-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.15);
        }

        .dish-card img {
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .chef-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            background-color: #ffc107;
            padding: 5px 12px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.85rem;
            color: #212529;
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<section class="chef-hero">
    <div class="container">
        <h1 class="display-4 fw-bold">Meet Our <span>Chefs</span></h1>
        <p class="lead mt-3">Discover the culinary artists behind our exquisite dishes.</p>
    </div>
</section>

<!-- Chef Profiles Section -->
<section class="bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold text-uppercase" style="color: #d4a762;">Our Culinary Team</h2>

        <!-- Chef 1 -->
        <div class="row align-items-center mb-5">
            <div class="col-md-4 text-center">
                <img src="https://via.placeholder.com/300" alt="Chef John Doe" class="chef-img">
            </div>
            <div class="col-md-8">
                <h4 class="fw-bold">Chef John Doe</h4>
                <p class="text-muted">French Cuisine Specialist</p>
                <p>With over a decade of experience in haute cuisine, Chef John is a maestro of French gastronomy. He specializes in sauces, soufflés, and intricate plating that transforms food into art.</p>
                <span class="badge bg-dark">Sauces</span>
                <span class="badge bg-dark">Soufflés</span>
                <span class="badge bg-dark">Plating</span>
            </div>
        </div>

        <!-- Chef 2 -->
        <div class="row align-items-center mb-5 flex-md-row-reverse">
            <div class="col-md-4 text-center">
                <img src="https://via.placeholder.com/300" alt="Chef Jane Smith" class="chef-img">
            </div>
            <div class="col-md-8">
                <h4 class="fw-bold">Chef Jane Smith</h4>
                <p class="text-muted">Italian Cuisine Expert</p>
                <p>Chef Jane is a master of traditional Italian cooking with a modern twist. Her handmade pasta and wood-fired pizzas are full of bold, rustic flavors rooted in tradition.</p>
                <span class="badge bg-dark">Pasta</span>
                <span class="badge bg-dark">Pizza</span>
                <span class="badge bg-dark">Traditional</span>
            </div>
        </div>

        <!-- Chef 3 -->
        <div class="row align-items-center mb-5">
            <div class="col-md-4 text-center">
                <img src="https://via.placeholder.com/300" alt="Chef Arjun Mehra" class="chef-img">
            </div>
            <div class="col-md-8">
                <h4 class="fw-bold">Chef Arjun Mehra</h4>
                <p class="text-muted">Indian Cuisine Master</p>
                <p>Born and raised in Mumbai, Chef Arjun brings the bold and aromatic flavors of Indian cuisine to life. His reimagining of butter chicken and dosa is loved across cultures.</p>
                <span class="badge bg-dark">Tandoori</span>
                <span class="badge bg-dark">Spices</span>
                <span class="badge bg-dark">Fusion</span>
            </div>
        </div>
    </div>
</section>

<!-- Signature Dishes Section -->
<section>
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Featured Signature Dishes</h2>
        <div class="row g-4">
            <!-- Dish 1 -->
            <div class="col-md-4">
                <div class="card dish-card">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/400x250" alt="Truffle Risotto">
                        <span class="chef-badge">Chef John</span>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Truffle Risotto</h5>
                        <p class="card-text">Creamy Arborio rice infused with black truffle and parmesan.</p>
                    </div>
                </div>
            </div>

            <!-- Dish 2 -->
            <div class="col-md-4">
                <div class="card dish-card">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/400x250" alt="Margherita Pizza">
                        <span class="chef-badge">Chef Jane</span>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Margherita Pizza</h5>
                        <p class="card-text">Wood-fired pizza with fresh mozzarella, tomato & basil.</p>
                    </div>
                </div>
            </div>

            <!-- Dish 3 -->
            <div class="col-md-4">
                <div class="card dish-card">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/400x250" alt="Spicy Tuna Roll">
                        <span class="chef-badge">Chef Mike</span>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Spicy Tuna Roll</h5>
                        <p class="card-text">Tuna rolls with wasabi mayo and crispy onions — bold & fresh.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodCorner | Customer Reviews</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        .review-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('images/banner.png');
            background-size: cover;
            background-position: center;
            min-height: 80vh;
            color: white;
            display: flex;
            align-items: center;
            text-align: center;
        }

        .review-hero h1 span {
            color: #ffc107;
        }

        .summary-section, .why-love-section {
            padding: 60px 0;
            background-color: #fff;
        }

        .summary-box {
            background-color: #f9f9f9;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }

        .summary-box h3 {
            color: #ffc107;
            font-size: 3rem;
        }

        .testimonial-section {
            background-color: #f1f1f1;
            padding: 60px 0;
        }

        .testimonial-card {
            border-radius: 15px;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            padding: 30px;
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-8px);
        }

        .testimonial-card img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .testimonial-card .rating {
            color: #ffc107;
        }

        .review-form-section {
            background-color: #fff;
            padding: 60px 0;
        }

        .review-form-section h2 {
            margin-bottom: 30px;
        }

        .review-form-section .form-control {
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }

        .review-form-section .btn {
            border-radius: 10px;
            padding: 12px 24px;
            font-size: 1.1rem;
        }

        .form-label i {
            margin-right: 6px;
            color: #ffc107;
        }

        footer {
            margin-top: 60px;
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<section class="review-hero">
    <div class="container">
        <h1 class="display-4 fw-bold">Customer <span>Reviews</span></h1>
        <p class="lead mt-3 mb-0">See what our customers have to say about their experience with us.</p>
    </div>
</section>

<!-- Average Rating Summary -->
<section class="summary-section text-center">
    <div class="container">
        <div class="summary-box">
            <h2 class="fw-bold">Average Customer Rating</h2>
            <h3>4.7 <i class="fas fa-star text-warning"></i></h3>
            <p class="text-muted">Based on 250+ verified reviews</p>
        </div>
    </div>
</section>

<!-- Why Customers Love Us -->
<section class="why-love-section text-center">
    <div class="container">
        <h2 class="fw-bold mb-4">Why Customers Love FoodCorner</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <i class="fas fa-utensils fa-3x text-warning mb-3"></i>
                <h5>Delicious Food</h5>
                <p>Our meals are crafted with fresh ingredients and packed with flavor.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-truck fa-3x text-warning mb-3"></i>
                <h5>Fast Delivery</h5>
                <p>Get your food delivered hot and on time, every time.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-heart fa-3x text-warning mb-3"></i>
                <h5>Friendly Service</h5>
                <p>Our staff always serves with a smile and personal touch.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonial-section">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">What Our Customers Are Saying</h2>
        <div class="row">
            <?php
            $reviews = [
                ["name" => "John Doe", "img" => "https://via.placeholder.com/80", "rating" => 4.5, "text" => "The food was absolutely delicious and the service was top-notch. Highly recommend!"],
                ["name" => "Jane Smith", "img" => "https://via.placeholder.com/80", "rating" => 3.5, "text" => "A wonderful dining experience. The ambiance was perfect for a family dinner."],
                ["name" => "Michael Lee", "img" => "https://via.placeholder.com/80", "rating" => 5, "text" => "Exceptional quality and taste. Will definitely be coming back for more."]
            ];

            foreach ($reviews as $r) {
                echo '<div class="col-md-4 mb-4">
                    <div class="testimonial-card text-center">
                        <img src="'.$r["img"].'" alt="Customer">
                        <h5 class="fw-bold">'.$r["name"].'</h5>
                        <div class="rating">';
                        $stars = floor($r["rating"]);
                        $half = ($r["rating"] - $stars) >= 0.5;
                        for ($i = 0; $i < $stars; $i++) echo '<i class="fas fa-star"></i>';
                        if ($half) echo '<i class="fas fa-star-half-alt"></i>';
                        for ($i = $stars + $half; $i < 5; $i++) echo '<i class="far fa-star"></i>';
                        echo '</div>
                        <p class="mt-2">"'.$r["text"].'"</p>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Review Form Section -->
<section class="review-form-section">
    <div class="container">
        <h2 class="text-center fw-bold">Share Your Experience</h2>
        <form action="submit_review.php" method="POST" class="mx-auto mt-4" style="max-width: 600px;">
            <div class="mb-3">
                <label for="name" class="form-label"><i class="fas fa-user"></i>Your Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label"><i class="fas fa-star"></i>Rating</label>
                <select class="form-select" id="rating" name="rating" required>
                    <option value="">Select a rating</option>
                    <option value="1">1 Star</option>
                    <option value="2">2 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="5">5 Stars</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="review" class="form-label"><i class="fas fa-comment-dots"></i>Your Review</label>
                <textarea class="form-control" id="review" name="review" rows="4" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-warning">Submit Review</button>
            </div>
        </form>
    </div>
</section>

<?php include('footer.php'); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js

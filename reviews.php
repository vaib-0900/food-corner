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
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #ff6b6b;
            --secondary-color: #ffc107;
            --dark-color: #2c3e50;
            --light-color: #f8f9fa;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
        }
        
        .hero-section {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6)), url('images/banner.png');
            background-size: cover;
            background-position: center;
            min-height: 70vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
     
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
      
        
        .hero-section h1 span {
            color: var(--secondary-color);
            position: relative;
        }
        
        .hero-section h1 span::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 8px;
            background-color: rgba(255, 193, 7, 0.3);
            z-index: -1;
        }
        
        
        
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 50px;
            font-weight: 700;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--secondary-color);
            border-radius: 2px;
        }
        
        .summary-section {
            padding: 80px 0;
            background-color: var(--light-color);
            position: relative;
        }
        
        .summary-box {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .summary-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }
        
        .summary-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .summary-box h3 {
            color: var(--primary-color);
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .summary-box p {
            color: #6c757d;
            font-size: 1.1rem;
        }
        
        .why-love-section {
            padding: 80px 0;
            background: white;
        }
        
        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
            text-align: center;
            border-top: 4px solid var(--secondary-color);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .feature-card i {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
            background: rgba(255, 193, 7, 0.1);
            width: 80px;
            height: 80px;
            line-height: 80px;
            border-radius: 50%;
            display: inline-block;
            transition: all 0.3s ease;
        }
        
        .feature-card:hover i {
            background: var(--secondary-color);
            color: white;
            transform: rotate(10deg) scale(1.1);
        }
        
        .feature-card h5 {
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark-color);
        }
        
        .testimonial-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            position: relative;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
            border: none;
        }
        
        .testimonial-card::before {
            content: '\201C';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 5rem;
            color: rgba(0,0,0,0.05);
            font-family: Georgia, serif;
            line-height: 1;
            z-index: 0;
        }
        
        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        
        .testimonial-card img {
            width: 150px;
            height: 15  0px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            display: block;
            margin: 0 auto 20px;
            position: relative;
            z-index: 1;
        }
        
        .testimonial-card .rating {
            color: var(--secondary-color);
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        
        .testimonial-card h5 {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 5px;
        }
        
        .testimonial-card p {
            font-style: italic;
            color: #555;
            position: relative;
            z-index: 1;
        }
        
        .review-form-section {
            padding: 80px 0;
            background: white;
        }
        
        .review-form {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.05);
            max-width: 700px;
            margin: 0 auto;
        }
        
        .form-control, .form-select {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.25);
        }
        
        .form-label {
            font-weight: 500;
            color: var(--dark-color);
        }
        
        .form-label i {
            margin-right: 8px;
            color: var(--secondary-color);
        }
        
        .btn-submit {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 1px;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
        }
        
        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            color: white;
        }
        
        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-section {
                min-height: 60vh;
            }
            
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .summary-box {
                padding: 30px 20px;
            }
            
            .testimonial-card, .feature-card {
                margin-bottom: 30px;
            }
            
            .review-form {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container hero-content text-center text-white">
        <h1 class="display-3 fw-bold mb-4">Customer <span>Reviews</span></h1>
        <p class="lead">Hear what our valued customers have to say about their delicious experiences with FoodCorner.</p>
    </div>
</section>

<!-- Average Rating Summary -->
<section class="summary-section">
    <div class="container text-center">
        <h2 class="section-title">Our Average Rating</h2>
        <div class="summary-box">
            <h3>4.7 <i class="fas fa-star"></i></h3>
            <p class="fs-5">Based on 250+ verified customer reviews</p>
            <div class="mt-3">
                <i class="fas fa-circle-check text-success me-2"></i>
                <span>98% of customers recommend us</span>
            </div>
        </div>
    </div>
</section>

<!-- Why Customers Love Us -->
<section class="why-love-section">
    <div class="container">
        <h2 class="text-center section-title">Why Customers Love Us</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card">
                    <i class="fas fa-utensils"></i>
                    <h5>Delicious Food</h5>
                    <p>Our chefs use only the freshest ingredients to create mouthwatering dishes that keep customers coming back for more.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <i class="fas fa-bolt"></i>
                    <h5>Fast Service</h5>
                    <p>We pride ourselves on quick service without compromising quality - your food arrives hot and fresh every time.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <i class="fas fa-heart"></i>
                    <h5>Exceptional Care</h5>
                    <p>From our friendly staff to our attention to detail, we treat every customer like family.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonial-section">
    <div class="container">
        <h2 class="text-center section-title">Customer Testimonials</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="testimonial-card text-center">
                    <img src="images/Rohit-Sharma.png" alt="Rohit Sharma">
                    <div class="rating mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h5>Rohit Sharma</h5>
                    <p class="mb-0">"The butter chicken here is divine! Just like my mother makes it. Paired with garlic naan, it's pure heaven. Service was excellent too!"</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card text-center">
                    <img src="images/axar-patel.webp" alt="Axar Patel">
                    <div class="rating mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5>Axar Patel</h5>
                    <p class="mb-0">"Authentic Gujarati thali that took me back to my childhood in Ahmedabad. The dal dhokli was especially memorable. Will bring my family next time!"</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card text-center">
                    <img src="images/shrayash-iyer.webp" alt="shreyash Iyer">
                    <div class="rating mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <h5>Shreyash Iyer</h5>
                    <p class="mb-0">"As a South Indian, I'm very particular about my dosas. FoodCorner's masala dosa with coconut chutney is perfection! The filter coffee is authentic too."</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Review Form Section -->
<section class="review-form-section">
    <div class="container">
        <h2 class="text-center section-title">Share Your Experience</h2>
        <div class="review-form">
            <form action="submit_review.php" method="POST">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label"><i class="fas fa-user"></i> Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label"><i class="fas fa-envelope"></i> Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-12">
                        <label for="rating" class="form-label"><i class="fas fa-star"></i> Rating</label>
                        <select class="form-select" id="rating" name="rating" required>
                            <option value="">How would you rate your experience?</option>
                            <option value="5">5 Stars - Excellent</option>
                            <option value="4">4 Stars - Very Good</option>
                            <option value="3">3 Stars - Good</option>
                            <option value="2">2 Stars - Fair</option>
                            <option value="1">1 Star - Poor</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="review" class="form-label"><i class="fas fa-comment-alt"></i> Your Review</label>
                        <textarea class="form-control" id="review" name="review" rows="5" required placeholder="Tell us about your experience..."></textarea>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <button type="submit" class="btn btn-submit btn-lg">Submit Review</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS for animations -->
<script>
    // Add animation to elements when they come into view
    document.addEventListener('DOMContentLoaded', function() {
        const animateOnScroll = function() {
            const elements = document.querySelectorAll('.summary-box, .feature-card, .testimonial-card');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if (elementPosition < windowHeight - 100) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        };
        
        // Set initial state for animated elements
        const animatedElements = document.querySelectorAll('.summary-box, .feature-card, .testimonial-card');
        animatedElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease-out';
        });
        
        // Run once on load
        animateOnScroll();
        
        // Run on scroll
        window.addEventListener('scroll', animateOnScroll);
    });
</script>
</body>
</html>
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
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('images/banner.png');
            background-size: cover;
            background-position: center;
            min-height: 60vh;
        }

        .chef-hero h1 span {
            color: #ffc107;
        }

        /* General Layout */
        section {
            padding: 80px 0;
        }

        .section-title {
            position: relative;
            margin-bottom: 60px;
        }

        .section-title:after {
            content: "";
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: #ffc107;
        }

        /* Chef Profiles */
        .chef-img {
            width: 280px;
            height: 280px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .badge.bg-dark {
            background-color: #212529 !important;
        }

        /* Why Choose Section */
        .feature-icon {
            font-size: 2.5rem;
            color: #ffc107;
            margin-bottom: 20px;
        }

        .feature-card {
            padding: 30px 20px;
            border-radius: 10px;
            transition: all 0.3s ease;
            height: 100%;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        /* Dish Cards */
        .dish-card {
            border: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            height: 100%;
        }

        .dish-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
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

        .dish-price {
            position: absolute;
            top: 12px;
            right: 12px;
            background-color: #212529;
            color: white;
            padding: 5px 12px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.85rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .chef-img {
                width: 200px;
                height: 200px;
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>

    <!-- Hero Section -->
    <section class="hero-section bg-dark text-white d-flex align-items-center">
        <div class="container text-center py-5">
            <h1 class="display-3 fw-bold mb-3">Meet Our <span class="text-warning">Master Chefs</span></h1>
            <p class="lead mb-4">Premium quality dishes prepared with authentic recipes by culinary experts</p>
            <a href="#chefs" class="btn btn-warning btn-lg px-4">Meet The Team</a>
        </div>
    </section>

    <!-- Why Choose Our Chefs Section -->
    <section class="bg-light">
        <div class="container">
            <h2 class="text-center section-title fw-bold">Why Choose Our Chefs</h2>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h4>Award Winning</h4>
                        <p>Our chefs have won numerous culinary awards and recognitions for their exceptional skills and innovative dishes.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h4>Global Experience</h4>
                        <p>With experience working in top restaurants around the world, our chefs bring international flavors to your plate.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4>Passion for Food</h4>
                        <p>Each chef is deeply passionate about creating memorable dining experiences through exceptional food.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chef Profiles Section -->
    <section id="chefs">
        <div class="container">
            <h2 class="text-center section-title fw-bold">Our Culinary Team</h2>

            <!-- Chef 1 -->
            <div class="row align-items-center mb-5">
                <div class="col-md-4 text-center">
                    <img src="images/chef3.png" alt="Chef Priya Sharma" class="chef-img mb-4 mb-md-0">
                </div>
                <div class="col-md-8">
                    <h3 class="fw-bold">Chef Priya Sharma</h3>
                    <p class="text-muted mb-3">Indian Cuisine Specialist | 15 Years Experience</p>
                    <p class="mb-4">Chef Priya brings the vibrant flavors of India to every plate. Trained in Delhi, she is renowned for her mastery of spices, regional curries, and innovative fusion dishes. Her culinary creations celebrate India's rich food heritage with a modern touch, delighting guests with every bite.</p>
                    <div class="mb-3">
                        <span class="badge bg-dark me-2">Spices</span>
                        <span class="badge bg-dark me-2">Curries</span>
                        <span class="badge bg-dark me-2">Fusion</span>
                        <span class="badge bg-dark">Regional Indian</span>
                    </div>

                </div>
            </div>

            <!-- Chef 2 -->
            <div class="row align-items-center mb-5 flex-md-row-reverse">
                <div class="col-md-4 text-center">
                    <img src="images/chef1.png" alt="Chef Rohan Gupta" class="chef-img mb-4 mb-md-0">
                </div>
                <div class="col-md-8">
                    <h3 class="fw-bold">Chef Rohan Gupta</h3>
                    <p class="text-muted mb-3">Indian Cuisine Expert | 12 Years Experience</p>
                    <p class="mb-4">Chef Rohan specializes in authentic Indian cuisine, blending traditional recipes with innovative techniques. Hailing from Lucknow, he is known for his flavorful biryanis, kebabs, and regional delicacies that capture the essence of India's rich culinary heritage.</p>
                    <div class="mb-3">
                        <span class="badge bg-dark me-2">Biryani</span>
                        <span class="badge bg-dark me-2">Kebabs</span>
                        <span class="badge bg-dark me-2">Traditional</span>
                        <span class="badge bg-dark">Regional Flavors</span>
                    </div>
                </div>
            </div>

            <!-- Chef 3 -->
            <div class="row align-items-center mb-5">
                <div class="col-md-4 text-center">
                    <img src="images/chef2.png" alt="Chef Amit Verma" class="chef-img mb-4 mb-md-0">
                </div>
                <div class="col-md-8">
                    <h3 class="fw-bold">Chef Amit Verma</h3>
                    <p class="text-muted mb-3">Indian Cuisine Maestro | 20 Years Experience</p>
                    <p class="mb-4">Chef Amit Verma, hailing from Jaipur, is celebrated for his mastery of North Indian flavors and innovative takes on traditional recipes. With two decades of experience, he crafts unforgettable dishes that blend heritage with creativity, making every meal a culinary journey.</p>
                    <div class="mb-3">
                        <span class="badge bg-dark me-2">Tandoori</span>
                        <span class="badge bg-dark me-2">Spices</span>
                        <span class="badge bg-dark me-2">North Indian</span>
                        <span class="badge bg-dark">Signature Dishes</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Signature Dishes Section -->
    <section class="bg-light">
        <div class="container">
            <h2 class="text-center section-title fw-bold">Signature Dishes</h2>
            <p class="text-center mb-5 lead">Experience the authentic flavors of India crafted by our master chefs</p>

            <div class="row g-4">
                <!-- Dish 1 - Chicken -->
                <div class="col-lg-4 col-md-6">
                    <div class="card dish-card">
                        <div class="position-relative">
                            <img src="images/chicken-makhani.webp" alt="chicken-makhani">
                            <span class="chef-badge">Chef Priya</span>
                            <span class="dish-price">₹325</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Murg Makhani</h5>
                            <p class="card-text">Classic butter chicken with tandoori roasted chicken in rich tomato gravy, cream, and aromatic spices.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-warning text-dark">North Indian</span>
                                <span class="text-muted">Serves 2</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dish 2 - Biryani -->
                <div class="col-lg-4 col-md-6">
                    <div class="card dish-card">
                        <div class="position-relative">
                            <img src="images/dum-biryani.png" alt="Hyderabadi Dum Biryani">
                            <span class="chef-badge">Chef Rohan</span>
                            <span class="dish-price">₹285</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Hyderabadi Dum Biryani</h5>
                            <p class="card-text">Fragrant basmati rice layered with marinated chicken, saffron, and spices, slow-cooked in dum style.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-warning text-dark">Mughlai</span>
                                <span class="text-muted">Full portion</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dish 3 - Fish -->
                <div class="col-lg-4 col-md-6">
                    <div class="card dish-card">
                        <div class="position-relative">
                            <img src="images/fish-curry.webp" alt="Goan Fish Curry">
                            <span class="chef-badge">Chef Amit</span>
                            <span class="dish-price">₹375</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Goan Fish Curry</h5>
                            <p class="card-text">Pomfret cooked in coconut-based gravy with kokum, tamarind, and traditional Goan spices.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-warning text-dark">Coastal</span>
                                <span class="text-muted">2 pieces</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="menu.php" class="btn btn-warning btn-lg px-4">View Full Menu</a>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-dark text-white text-center">
        <div class="container py-5">
            <h2 class="mb-4">Ready to Experience Our Culinary Excellence?</h2>
            <p class="lead mb-4">Book a table or order online to taste our chefs' creations</p>
            <a href="reservation.php" class="btn btn-warning btn-lg mx-2">Make Reservation</a>
            <a href="order.php" class="btn btn-outline-light btn-lg mx-2">Order Online</a>
        </div>
    </section>

    <?php include('footer.php'); ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
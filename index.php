<?php
include "header.php";
?>
<!-- Hero Section with Full-height Background Image -->
<section class="hero-section bg-dark text-white d-flex align-items-center">
    <div class="container text-center py-5">
        <h1 class="display-3 fw-bold mb-3">Welcome to <span class="text-warning">FoodCorner</span></h1>
        <p class="lead mb-4">Gourmet Dining. Exceptional Service. Unforgettable Atmosphere.</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="menu.php" class="btn btn-warning btn-lg px-4">Explore Our Menu</a>
            <a href="reservation.php" class="btn btn-outline-light btn-lg px-4">Make Reservation</a>
        </div>
    </div>
</section>

<!-- About Section with Modern Layout -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="ratio ratio-16x9">
                    <img src="images/food-corner interial.jpg" alt="FoodCorner Restaurant Interior" class="img-fluid rounded-3 shadow"
                        style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Our Culinary Story</h2>
                <p class="lead">Since 2010, FoodCorner has been serving authentic flavors with a modern twist.</p>
                <p>Founded by Chef Marco and his wife Sophia, our restaurant blends family recipes with contemporary culinary techniques. We source ingredients locally whenever possible and prepare everything fresh daily.</p>
                <div class="d-flex gap-3 mt-4">
                    <div>
                        <i class="fas fa-leaf text-success fs-4"></i>
                        <p class="mb-0 small">Fresh Ingredients</p>
                    </div>
                    <div>
                        <i class="fas fa-heart text-danger fs-4"></i>
                        <p class="mb-0 small">Made with Love</p>
                    </div>
                    <div>
                        <i class="fas fa-award text-warning fs-4"></i>
                        <p class="mb-0 small">Award Winning</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features with Icons -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Why FoodCorner Stands Out</h2>
            <p class="text-muted">Experience the difference in every bite</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-box bg-warning bg-opacity-10 text-warning rounded-circle mx-auto mb-3">
                            <i class="fas fa-utensils fs-3"></i>
                        </div>
                        <h5 class="fw-bold">Seasonal Menus</h5>
                        <p class="text-muted">Our chefs create rotating menus based on the freshest seasonal ingredients available.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-box bg-warning bg-opacity-10 text-warning rounded-circle mx-auto mb-3">
                            <i class="fas fa-clock fs-3"></i>
                        </div>
                        <h5 class="fw-bold">Timely Service</h5>
                        <p class="text-muted">We respect your time with efficient service that never compromises quality.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="icon-box bg-warning bg-opacity-10 text-warning rounded-circle mx-auto mb-3">
                            <i class="fas fa-star fs-3"></i>
                        </div>
                        <h5 class="fw-bold">Consistent Excellence</h5>
                        <p class="text-muted">Rated 4.9/5 by 1,200+ diners across all review platforms.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Specials with Carousel -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Chef's Chicken Specialties</h2>
            <p class="text-muted">Savor our premium chicken creations available for a limited time</p>
        </div>

        <div id="specialsCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#specialsCarousel" data-bs-slide-to="0" class="active bg-dark"></button>
                <button type="button" data-bs-target="#specialsCarousel" data-bs-slide-to="1" class="bg-dark"></button>
                <button type="button" data-bs-target="#specialsCarousel" data-bs-slide-to="2" class="bg-dark"></button>
            </div>

            <div class="carousel-inner">
                <!-- Slide 1 (Active) -->
                <div class="carousel-item active">
                    <div class="row g-4 justify-content-center">
                        <!-- Spicy Chicken Curry -->
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm overflow-hidden hover-effect">
                                <img src="images/fresh-chicken-curry-png.webp" class="card-img-top" alt="Spicy Chicken Curry" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="fw-bold mb-0">Spicy Chicken Curry</h5>
                                        <div>
                                            <span class="badge bg-danger text-white me-1">Hot</span>
                                            <span class="badge bg-success">Best Seller</span>
                                        </div>
                                    </div>
                                    <p class="text-muted">Tender chicken in aromatic curry sauce with traditional spices and basmati rice.</p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <span class="fw-bold text-dark">$16.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Crispy Fried Chicken -->
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm overflow-hidden hover-effect">
                                <img src="images/fried-chicken-png.webp" class="card-img-top" alt="Crispy Fried Chicken" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="fw-bold mb-0">Crispy Fried Chicken</h5>
                                        <div>
                                            <span class="badge bg-warning text-dark me-1">Crunchy</span>
                                            <span class="badge bg-primary">New</span>
                                        </div>
                                    </div>
                                    <p class="text-muted">Golden-fried with secret spices, served with coleslaw and honey mustard.</p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <span class="fw-bold text-dark">$14.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Grilled Chicken Platter -->
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm overflow-hidden hover-effect">
                                <img src="images/Chicken-Grill-Transparent-PNG.png" class="card-img-top" alt="Grilled Chicken Platter" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="fw-bold mb-0">Grilled Chicken Platter</h5>
                                        <div>
                                            <span class="badge bg-success text-white me-1">Healthy</span>
                                            <span class="badge bg-info">Chef's Choice</span>
                                        </div>
                                    </div>
                                    <p class="text-muted">Herb-marinated chicken breast with roasted vegetables and mashed potatoes.</p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <span class="fw-bold text-dark">$18.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row g-4 justify-content-center">
                        <!-- Chicken Tikka Masala -->
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm overflow-hidden hover-effect">
                                <img src="images/chickan-tikka.webp" class="card-img-top" alt="Chicken Tikka Masala" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="fw-bold mb-0">Chicken Tikka Masala</h5>
                                        <div>
                                            <span class="badge bg-danger text-white me-1">Spicy</span>
                                            <span class="badge bg-success">Popular</span>
                                        </div>
                                    </div>
                                    <p class="text-muted">Tandoori chicken in creamy tomato sauce with fragrant spices.</p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <span class="fw-bold text-dark">$17.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Lemon Herb Chicken -->
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm overflow-hidden hover-effect">
                                <img src="images/lemon_chicken.webp" class="card-img-top" alt="Lemon Herb Chicken" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="fw-bold mb-0">Lemon Herb Chicken</h5>
                                        <div>
                                            <span class="badge bg-success text-white me-1">Zesty</span>
                                            <span class="badge bg-info">Light</span>
                                        </div>
                                    </div>
                                    <p class="text-muted">Juicy chicken with lemon-herb marinade and seasonal vegetables.</p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <span class="fw-bold text-dark">$15.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Chicken Parmesan -->
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm overflow-hidden hover-effect">
                                <img src="images/chicken-parmesan.png" class="card-img-top" alt="Chicken Parmesan" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="fw-bold mb-0">Chicken Parmesan</h5>
                                        <div>
                                            <span class="badge bg-primary text-white me-1">Classic</span>
                                            <span class="badge bg-warning text-dark">Crispy</span>
                                        </div>
                                    </div>
                                    <p class="text-muted">Breaded chicken topped with marinara and melted mozzarella.</p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <span class="fw-bold text-dark">$16.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="row g-4 justify-content-center">
                        <!-- BBQ Chicken Wings -->
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm overflow-hidden hover-effect">
                                <img src="images/chicken-wings.png" class="card-img-top" alt="BBQ Chicken Wings" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="fw-bold mb-0">BBQ Chicken Wings</h5>
                                        <div>
                                            <span class="badge bg-danger text-white me-1">Smoky</span>
                                            <span class="badge bg-success">Fan Favorite</span>
                                        </div>
                                    </div>
                                    <p class="text-muted">Crispy wings glazed with our signature BBQ sauce, served with ranch.</p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <span class="fw-bold text-dark">$13.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Chicken Shawarma -->
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm overflow-hidden hover-effect">
                                <img src="images/chicken-shawarma.webp" class="card-img-top" alt="Chicken Shawarma" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="fw-bold mb-0">Chicken Shawarma</h5>
                                        <div>
                                            <span class="badge bg-info text-white me-1">Mediterranean</span>
                                            <span class="badge bg-primary">New</span>
                                        </div>
                                    </div>
                                    <p class="text-muted">Marinated chicken with garlic sauce, pickles, and warm pita bread.</p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <span class="fw-bold text-dark">$15.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Chicken Alfredo Pasta -->
                        <div class="col-md-4">
                            <div class="card h-100 border-0 shadow-sm overflow-hidden hover-effect">
                                <img src="images/chicken-alfredo.webp" class="card-img-top" alt="Chicken Alfredo Pasta" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h5 class="fw-bold mb-0">Chicken Alfredo Pasta</h5>
                                        <div>
                                            <span class="badge bg-warning text-dark me-1">Creamy</span>
                                            <span class="badge bg-success">Comfort Food</span>
                                        </div>
                                    </div>
                                    <p class="text-muted">Fettuccine with grilled chicken in rich Alfredo sauce.</p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <span class="fw-bold text-dark">$17.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#specialsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#specialsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="text-center mt-4">
            <a href="specials.php" class="btn btn-warning px-4 py-2 fw-bold">View All Chicken Specials</a>
        </div>
    </div>
</section>

<style>
    .hover-effect {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-effect:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
    }

    .carousel-indicators button {
        width: 10px;
        height: 10px;
        border-radius: 50%;
    }

    .card-img-top {
        transition: transform 0.5s ease;
    }

    .card:hover .card-img-top {
        transform: scale(1.05);
    }
</style>

<!-- Testimonials with Modern Layout -->
<section class="py-5 bg-dark text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Diner Experiences</h2>
            <p class="text-muted">Hear what our guests say about us</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 bg-dark border-light">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <img src="images/reviewer1.jpg" class="rounded-circle me-3" width="50" height="50" alt="Sarah K.">
                            <div>
                                <h6 class="mb-0 fw-bold">Sarah K.</h6>
                                <div class="text-warning small">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">"The tasting menu was an incredible journey of flavors. Every course was perfectly timed and explained by our knowledgeable server."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 bg-dark border-light">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <img src="images/reviewer2.jpg" class="rounded-circle me-3" width="50" height="50" alt="James M.">
                            <div>
                                <h6 class="mb-0 fw-bold">James M.</h6>
                                <div class="text-warning small">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">"I've dined at FoodCorner three times now, and each experience has been exceptional. The wine pairings are particularly impressive."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 bg-dark border-light">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <img src="images/reviewer3.jpg" class="rounded-circle me-3" width="50" height="50" alt="Priya T.">
                            <div>
                                <h6 class="mb-0 fw-bold">Priya T.</h6>
                                <div class="text-warning small">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">"As a vegetarian, I'm always impressed by the creative plant-based options. The roasted cauliflower steak is divine!"</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="reviews.php" class="btn btn-outline-light px-4">Read More Reviews</a>
            <a href="reservation.php" class="btn btn-warning px-4 ms-2">Reserve Your Table</a>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-5 bg-warning bg-opacity-10">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-3">Join Our Culinary Community</h2>
                <p class="lead mb-4">Subscribe to receive exclusive offers, event invitations, and chef's special recipes</p>
                <form class="row g-2 justify-content-center">
                    <div class="col-md-8">
                        <input type="email" class="form-control form-control-lg" placeholder="Your email address">
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-warning btn-lg w-100">Subscribe</button>
                    </div>
                    <div class="col-12">
                        <p class="small text-muted">We respect your privacy. Unsubscribe at any time.</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<style>
    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('images/banner.png');
        background-size: cover;
        background-position: center;
        min-height: 80vh;
    }

    .icon-box {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card {
        transition: transform 0.5s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }
</style>
<?php
include "footer.php";
?>
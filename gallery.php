<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodCorner | Chicken Specialties Gallery</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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

        .gallery-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }

        .gallery-item {
            margin-bottom: 30px;
            transition: all 0.3s ease;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .gallery-img {
            height: 250px;
            object-fit: cover;
            width: 100%;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover .gallery-img {
            transform: scale(1.05);
        }

        .gallery-content {
            padding: 20px;
            background: white;
        }

        .filter-btn {
            margin: 5px;
            border-radius: 50px;
            padding: 8px 20px;
            font-weight: 500;
        }

        .filter-btn.active {
            background-color: #ffc107;
            color: #212529;
            border-color: #ffc107;
        }

        .badge {
            font-weight: 500;
            padding: 5px 10px;
        }

        .price-tag {
            font-size: 1.2rem;
            font-weight: 700;
            color: #ff6b6b;
        }
    </style>
</head>

<body>

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

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="fw-bold display-4 mb-3">Our Chicken Specialties</h1>
                <p class="lead text-muted">Explore our delicious chicken creations</p>

                <!-- Filter Buttons -->
                <div class="d-flex flex-wrap justify-content-center my-4">
                    <button class="filter-btn btn btn-outline-dark active" data-filter="all">All Dishes</button>
                    <button class="filter-btn btn btn-outline-dark" data-filter="spicy">Spicy</button>
                    <button class="filter-btn btn btn-outline-dark" data-filter="grilled">Grilled</button>
                    <button class="filter-btn btn btn-outline-dark" data-filter="fried">Fried</button>
                    <button class="filter-btn btn btn-outline-dark" data-filter="healthy">Healthy</button>
                </div>
            </div>

            <!-- Gallery Grid -->
            <div class="row">
                <!-- Spicy Chicken Curry -->
                <div class="col-lg-4 col-md-6 gallery-item" data-category="spicy">
                    <div class="card border-0 h-100">
                        <img src="images/fresh-chicken-curry-png.webp" class="gallery-img" alt="Spicy Chicken Curry">
                        <div class="gallery-content">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h3 class="h5 fw-bold mb-0">Spicy Chicken Curry</h3>
                                <span class="badge bg-danger">Hot</span>
                            </div>
                            <p class="text-muted">Tender chicken in aromatic curry sauce with traditional spices and basmati rice.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="price-tag">$16.99</span>
                                <div>
                                    <span class="badge bg-success me-1">Best Seller</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Crispy Fried Chicken -->
                <div class="col-lg-4 col-md-6 gallery-item" data-category="fried">
                    <div class="card border-0 h-100">
                        <img src="images/fried-chicken-png.webp" class="gallery-img" alt="Crispy Fried Chicken">
                        <div class="gallery-content">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h3 class="h5 fw-bold mb-0">Crispy Fried Chicken</h3>
                                <span class="badge bg-warning text-dark">Crunchy</span>
                            </div>
                            <p class="text-muted">Golden-fried with secret spices, served with coleslaw and honey mustard.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="price-tag">$14.99</span>
                                <div>
                                    <span class="badge bg-primary me-1">New</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Grilled Chicken Platter -->
                <div class="col-lg-4 col-md-6 gallery-item" data-category="grilled healthy">
                    <div class="card border-0 h-100">
                        <img src="images/Chicken-Grill-Transparent-PNG.png" class="gallery-img" alt="Grilled Chicken Platter">
                        <div class="gallery-content">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h3 class="h5 fw-bold mb-0">Grilled Chicken Platter</h3>
                                <span class="badge bg-success">Healthy</span>
                            </div>
                            <p class="text-muted">Herb-marinated chicken breast with roasted vegetables and mashed potatoes.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="price-tag">$18.99</span>
                                <div>
                                    <span class="badge bg-info me-1">Chef's Choice</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Update active button
                    filterBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    const filterValue = this.getAttribute('data-filter');

                    // Filter items
                    galleryItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category').includes(filterValue)) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>
<?php
// Include footer   
include 'footer.php';
?>
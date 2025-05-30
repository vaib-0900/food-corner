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
        .gallery-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }
        .gallery-item {
            margin-bottom: 30px;
            transition: all 0.3s ease;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
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
                                <button class="btn btn-sm btn-warning">Order Now</button>
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
                                <button class="btn btn-sm btn-warning">Order Now</button>
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
                                <button class="btn btn-sm btn-warning">Order Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chicken Tikka Masala -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="spicy">
                <div class="card border-0 h-100">
                    <img src="images/chicken-tikka-masala.jpg" class="gallery-img" alt="Chicken Tikka Masala">
                    <div class="gallery-content">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h3 class="h5 fw-bold mb-0">Chicken Tikka Masala</h3>
                            <span class="badge bg-danger">Spicy</span>
                        </div>
                        <p class="text-muted">Tandoori chicken in creamy tomato sauce with fragrant spices.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="price-tag">$17.99</span>
                            <div>
                                <span class="badge bg-success me-1">Popular</span>
                                <button class="btn btn-sm btn-warning">Order Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lemon Herb Chicken -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="grilled healthy">
                <div class="card border-0 h-100">
                    <img src="images/lemon-herb-chicken.jpg" class="gallery-img" alt="Lemon Herb Chicken">
                    <div class="gallery-content">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h3 class="h5 fw-bold mb-0">Lemon Herb Chicken</h3>
                            <span class="badge bg-success">Zesty</span>
                        </div>
                        <p class="text-muted">Juicy chicken with lemon-herb marinade and seasonal vegetables.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="price-tag">$15.99</span>
                            <div>
                                <span class="badge bg-info me-1">Light</span>
                                <button class="btn btn-sm btn-warning">Order Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chicken Parmesan -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="fried">
                <div class="card border-0 h-100">
                    <img src="images/chicken-parmesan.jpg" class="gallery-img" alt="Chicken Parmesan">
                    <div class="gallery-content">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h3 class="h5 fw-bold mb-0">Chicken Parmesan</h3>
                            <span class="badge bg-warning text-dark">Crispy</span>
                        </div>
                        <p class="text-muted">Breaded chicken topped with marinara and melted mozzarella.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="price-tag">$16.99</span>
                            <div>
                                <span class="badge bg-primary me-1">Classic</span>
                                <button class="btn btn-sm btn-warning">Order Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BBQ Chicken Wings -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="fried">
                <div class="card border-0 h-100">
                    <img src="images/bbq-chicken-wings.jpg" class="gallery-img" alt="BBQ Chicken Wings">
                    <div class="gallery-content">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h3 class="h5 fw-bold mb-0">BBQ Chicken Wings</h3>
                            <span class="badge bg-danger">Smoky</span>
                        </div>
                        <p class="text-muted">Crispy wings glazed with our signature BBQ sauce, served with ranch.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="price-tag">$13.99</span>
                            <div>
                                <span class="badge bg-success me-1">Fan Favorite</span>
                                <button class="btn btn-sm btn-warning">Order Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chicken Shawarma -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="grilled">
                <div class="card border-0 h-100">
                    <img src="images/chicken-shawarma.jpg" class="gallery-img" alt="Chicken Shawarma">
                    <div class="gallery-content">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h3 class="h5 fw-bold mb-0">Chicken Shawarma</h3>
                            <span class="badge bg-info">Mediterranean</span>
                        </div>
                        <p class="text-muted">Marinated chicken with garlic sauce, pickles, and warm pita bread.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="price-tag">$15.99</span>
                            <div>
                                <span class="badge bg-primary me-1">New</span>
                                <button class="btn btn-sm btn-warning">Order Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chicken Alfredo Pasta -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="healthy">
                <div class="card border-0 h-100">
                    <img src="images/chicken-alfredo.jpg" class="gallery-img" alt="Chicken Alfredo Pasta">
                    <div class="gallery-content">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h3 class="h5 fw-bold mb-0">Chicken Alfredo Pasta</h3>
                            <span class="badge bg-warning text-dark">Creamy</span>
                        </div>
                        <p class="text-muted">Fettuccine with grilled chicken in rich Alfredo sauce.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="price-tag">$17.99</span>
                            <div>
                                <span class="badge bg-success me-1">Comfort Food</span>
                                <button class="btn btn-sm btn-warning">Order Now</button>
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
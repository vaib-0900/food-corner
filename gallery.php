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
            min-height: 60vh;
        }
        
        .gallery-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }
        
        .gallery-item {
            margin-bottom: 30px;
            transition: all 0.3s ease;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border: none;
        }
        
        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        
        .gallery-img-container {
            height: 250px;
            overflow: hidden;
        }
        
        .gallery-img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover .gallery-img {
            transform: scale(1.1);
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
            transition: all 0.3s ease;
        }
        
        .filter-btn:hover, .filter-btn.active {
            background-color: #ffc107;
            color: #212529;
            border-color: #ffc107;
            transform: scale(1.05);
        }
        
        .badge {
            font-weight: 500;
            padding: 5px 10px;
            border-radius: 5px;
        }
        
        .price-tag {
            font-size: 1.2rem;
            font-weight: 700;
            color: #dc3545;
        }
        
        .dish-title {
            color: #333;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .dish-description {
            color: #6c757d;
            min-height: 60px;
        }
        
        .order-btn {
            border-radius: 50px;
            padding: 8px 20px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .order-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 193, 7, 0.3);
        }
    </style>
</head>

<body>

    <section class="hero-section bg-dark text-white d-flex align-items-center">
        <div class="container text-center py-5">
            <h1 class="display-3 fw-bold mb-3">Chicken Specialties</h1>
            <p class="lead mb-4">Premium quality chicken dishes prepared with authentic recipes</p>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold display-4 mb-3">Our Chicken Creations</h2>
                <p class="lead text-muted">Discover our delicious selection of chicken specialties</p>

                <!-- Filter Buttons -->
                <div class="d-flex flex-wrap justify-content-center my-4">
                    <button class="filter-btn btn btn-outline-dark active" data-filter="all">All Dishes</button>
                    <button class="filter-btn btn btn-outline-dark" data-filter="spicy">Spicy</button>
                    <button class="filter-btn btn btn-outline-dark" data-filter="grilled">Grilled</button>
                    <button class="filter-btn btn btn-outline-dark" data-filter="fried">Fried</button>
                    <button class="filter-btn btn btn-outline-dark" data-filter="healthy">Healthy</button>
                    <button class="filter-btn btn btn-outline-dark" data-filter="popular">Popular</button>
                </div>
            </div>

            <!-- Gallery Grid -->
            <div class="row g-4">
                <!-- Spicy Chicken Curry -->
                <div class="col-lg-4 col-md-6 gallery-item" data-category="spicy popular">
                    <div class="card h-100">
                        <div class="gallery-img-container">
                            <img src="images/fresh-chicken-curry-png.webp" class="gallery-img" alt="Spicy Chicken Curry">
                        </div>
                        <div class="gallery-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3 class="dish-title mb-0">Spicy Chicken Curry</h3>
                                <div>
                                    <span class="badge bg-danger">Hot</span>
                                </div>
                            </div>
                            <p class="dish-description">Tender chicken pieces simmered in rich, aromatic curry sauce with traditional spices and basmati rice.</p>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <span class="price-tag">$16.99</span>
                                <div>
                                    <span class="badge bg-success me-2">Best Seller</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Crispy Fried Chicken -->
                <div class="col-lg-4 col-md-6 gallery-item" data-category="fried popular">
                    <div class="card h-100">
                        <div class="gallery-img-container">
                            <img src="images/fried-chicken-png.webp" class="gallery-img" alt="Crispy Fried Chicken">
                        </div>
                        <div class="gallery-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3 class="dish-title mb-0">Crispy Fried Chicken</h3>
                                <div>
                                    <span class="badge bg-warning text-dark">Crunchy</span>
                                </div>
                            </div>
                            <p class="dish-description">Golden-fried chicken with our secret spice blend, served with coleslaw and honey mustard dipping sauce.</p>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <span class="price-tag">$14.99</span>
                                <div>
                                    <span class="badge bg-primary me-2">New</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Grilled Chicken Platter -->
                <div class="col-lg-4 col-md-6 gallery-item" data-category="grilled healthy">
                    <div class="card h-100">
                        <div class="gallery-img-container">
                            <img src="images/Chicken-Grill-Transparent-PNG.png" class="gallery-img" alt="Grilled Chicken Platter">
                        </div>
                        <div class="gallery-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3 class="dish-title mb-0">Grilled Chicken Platter</h3>
                                <div>
                                    <span class="badge bg-success">Healthy</span>
                                </div>
                            </div>
                            <p class="dish-description">Juicy herb-marinated chicken breast with roasted vegetables and garlic mashed potatoes.</p>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <span class="price-tag">$18.99</span>
                                <div>
                                    <span class="badge bg-info me-2">Chef's Choice</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chicken Tikka Masala -->
                <div class="col-lg-4 col-md-6 gallery-item" data-category="spicy popular">
                    <div class="card h-100">
                        <div class="gallery-img-container">
                            <img src="images/chickan-tikka.webp" class="gallery-img" alt="Chicken Tikka Masala">
                        </div>
                        <div class="gallery-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3 class="dish-title mb-0">Chicken Tikka Masala</h3>
                                <div>
                                    <span class="badge bg-danger">Spicy</span>
                                </div>
                            </div>
                            <p class="dish-description">Tandoori chicken in creamy tomato sauce with fragrant spices, served with naan bread.</p>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <span class="price-tag">$17.99</span>
                                <div>
                                    <span class="badge bg-success me-2">Popular</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lemon Herb Chicken -->
                <div class="col-lg-4 col-md-6 gallery-item" data-category="grilled healthy">
                    <div class="card h-100">
                        <div class="gallery-img-container">
                            <img src="images/lemon_chicken.webp" class="gallery-img" alt="Lemon Herb Chicken">
                        </div>
                        <div class="gallery-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3 class="dish-title mb-0">Lemon Herb Chicken</h3>
                                <div>
                                    <span class="badge bg-success">Zesty</span>
                                </div>
                            </div>
                            <p class="dish-description">Juicy chicken with lemon-herb marinade, served with seasonal vegetables and roasted potatoes.</p>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <span class="price-tag">$15.99</span>
                                <div>
                                    <span class="badge bg-info me-2">Light</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chicken Shawarma -->
                <div class="col-lg-4 col-md-6 gallery-item" data-category="grilled popular">
                    <div class="card h-100">
                        <div class="gallery-img-container">
                            <img src="images/chicken-shawarma.webp" class="gallery-img" alt="Chicken Shawarma">
                        </div>
                        <div class="gallery-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3 class="dish-title mb-0">Chicken Shawarma</h3>
                                <div>
                                    <span class="badge bg-info">Mediterranean</span>
                                </div>
                            </div>
                            <p class="dish-description">Marinated chicken with garlic sauce, pickles, and warm pita bread, served with tahini.</p>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <span class="price-tag">$15.99</span>
                                <div>
                                    <span class="badge bg-primary me-2">New</span>
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
        // Enhanced Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Update active button with animation
                    filterBtns.forEach(b => {
                        b.classList.remove('active');
                        b.style.transform = 'scale(1)';
                    });
                    this.classList.add('active');
                    this.style.transform = 'scale(1.05)';
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    // Filter items with fade effect
                    galleryItems.forEach(item => {
                        item.style.opacity = '0.5';
                        item.style.transition = 'opacity 0.3s ease';
                        
                        setTimeout(() => {
                            if (filterValue === 'all' || item.getAttribute('data-category').includes(filterValue)) {
                                item.style.display = 'block';
                            } else {
                                item.style.display = 'none';
                            }
                            item.style.opacity = '1';
                        }, 300);
                    });
                });
            });
            
            // Add hover effect to order buttons
            const orderBtns = document.querySelectorAll('.order-btn');
            orderBtns.forEach(btn => {
                btn.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px) scale(1.05)';
                });
                btn.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        });
    </script>
</body>

</html>
<?php
include 'footer.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodCorner | Our Menu</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #ff6b6b;
            --secondary: #ffbe0b;
            --dark: #2b2d42;
            --light: #f8f9fa;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
        }
        
        .menu-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            min-height: 300px;
            display: flex;
            align-items: center;
        }
        
        .menu-hero h1 {
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .menu-hero h1 span {
            color: var(--secondary);
        }
        
        .menu-tabs .nav-link {
            color: var(--dark);
            font-weight: 600;
            border: none;
            padding: 12px 25px;
            margin: 0 5px;
            border-radius: 50px;
            transition: all 0.3s;
        }
        
        .menu-tabs .nav-link.active {
            background: var(--primary);
            color: white;
        }
        
        .menu-tabs .nav-link:hover:not(.active) {
            background: rgba(255, 107, 107, 0.1);
        }
        
        .menu-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 25px;
            height: 100%;
            border: none;
        }
        
        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .menu-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        
        .menu-card-body {
            padding: 20px;
        }
        
        .menu-title {
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 10px;
        }
        
        .menu-price {
            font-weight: 700;
            color: var(--primary);
            font-size: 1.2rem;
        }
        
        .menu-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--secondary);
            color: white;
            padding: 5px 15px;
            border-radius: 50px;
            font-weight: 600;
        }
        
        .veg-nonveg {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
        }
        
        .veg {
            background: green;
            border: 1px solid darkgreen;
        }
        
        .nonveg {
            background: red;
            border: 1px solid darkred;
        }
        
        .menu-rating {
            color: var(--secondary);
        }
        
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 40px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--primary);
        }
        
        @media (max-width: 768px) {
            .menu-tabs .nav-link {
                padding: 8px 15px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>

<!-- Navigation -->
<?php include('header.php'); ?>

<!-- Hero Section -->
<section class="menu-hero text-white">
    <div class="container text-center py-5">
        <h1 class="display-4 fw-bold">Our <span>Menu</span></h1>
        <p class="lead">Discover authentic Indian flavors crafted with traditional recipes</p>
    </div>
</section>

<!-- Menu Tabs -->
<section class="py-5">
    <div class="container">
        <ul class="nav menu-tabs justify-content-center mb-5" id="menuTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab">All Items</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="starters-tab" data-bs-toggle="tab" data-bs-target="#starters" type="button" role="tab">Starters</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="maincourse-tab" data-bs-toggle="tab" data-bs-target="#maincourse" type="button" role="tab">Main Course</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="desserts-tab" data-bs-toggle="tab" data-bs-target="#desserts" type="button" role="tab">Desserts</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="beverages-tab" data-bs-toggle="tab" data-bs-target="#beverages" type="button" role="tab">Beverages</button>
            </li>
        </ul>
        
        <div class="tab-content" id="menuTabContent">
            <!-- All Items Tab -->
            <div class="tab-pane fade show active" id="all" role="tabpanel">
                <div class="row">
                    <!-- Item 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card">
                            <span class="menu-badge">Chef's Special</span>
                            <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="menu-img" alt="Paneer Tikka">
                            <div class="menu-card-body">
                                <h5 class="menu-title">Paneer Tikka</h5>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="veg"></span>
                                    <span class="menu-price">₹249</span>
                                </div>
                                <p class="text-muted">Cubes of paneer marinated in spices and grilled in tandoor</p>
                                <div class="menu-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="ms-2">(48)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card">
                            <img src="https://images.unsplash.com/photo-1631515243349-e0cb75fb8d3a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="menu-img" alt="Butter Chicken">
                            <div class="menu-card-body">
                                <h5 class="menu-title">Butter Chicken</h5>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="nonveg"></span>
                                    <span class="menu-price">₹349</span>
                                </div>
                                <p class="text-muted">Tender chicken in rich makhani gravy with butter</p>
                                <div class="menu-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="ms-2">(112)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card">
                            <img src="https://images.unsplash.com/photo-1565557623262-b51c2513a641?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="menu-img" alt="Dal Makhani">
                            <div class="menu-card-body">
                                <h5 class="menu-title">Dal Makhani</h5>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="veg"></span>
                                    <span class="menu-price">₹199</span>
                                </div>
                                <p class="text-muted">Creamy black lentils slow-cooked with butter and spices</p>
                                <div class="menu-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span class="ms-2">(36)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Starters Tab -->
            <div class="tab-pane fade" id="starters" role="tabpanel">
                <div class="row">
                    <!-- Starter 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card">
                            <span class="menu-badge">Bestseller</span>
                            <img src="https://images.unsplash.com/photo-1559847844-5315695dadae?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="menu-img" alt="Paneer Tikka">
                            <div class="menu-card-body">
                                <h5 class="menu-title">Paneer Tikka</h5>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="veg"></span>
                                    <span class="menu-price">₹249</span>
                                </div>
                                <p class="text-muted">Cubes of paneer marinated in spices and grilled in tandoor</p>
                                <div class="menu-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="ms-2">(48)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Starter 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card">
                            <img src="https://images.unsplash.com/photo-1603105037880-880cd4edfb0d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="menu-img" alt="Chicken 65">
                            <div class="menu-card-body">
                                <h5 class="menu-title">Chicken 65</h5>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="nonveg"></span>
                                    <span class="menu-price">₹279</span>
                                </div>
                                <p class="text-muted">Spicy, deep-fried chicken chunks with curry leaves</p>
                                <div class="menu-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="ms-2">(63)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Starter 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card">
                            <img src="https://images.unsplash.com/photo-1603893662172-99ed0cea2a08?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="menu-img" alt="Aloo Tikki">
                            <div class="menu-card-body">
                                <h5 class="menu-title">Aloo Tikki</h5>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="veg"></span>
                                    <span class="menu-price">₹149</span>
                                </div>
                                <p class="text-muted">Crispy potato patties served with chutneys</p>
                                <div class="menu-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span class="ms-2">(42)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Course Tab -->
            <div class="tab-pane fade" id="maincourse" role="tabpanel">
                <div class="row">
                    <!-- Main Course 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card">
                            <img src="https://images.unsplash.com/photo-1631515243349-e0cb75fb8d3a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="menu-img" alt="Butter Chicken">
                            <div class="menu-card-body">
                                <h5 class="menu-title">Butter Chicken</h5>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="nonveg"></span>
                                    <span class="menu-price">₹349</span>
                                </div>
                                <p class="text-muted">Tender chicken in rich makhani gravy with butter</p>
                                <div class="menu-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="ms-2">(112)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Main Course 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card">
                            <span class="menu-badge">Chef's Special</span>
                            <img src="https://images.unsplash.com/photo-1565557623262-b51c2513a641?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="menu-img" alt="Dal Makhani">
                            <div class="menu-card-body">
                                <h5 class="menu-title">Dal Makhani</h5>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="veg"></span>
                                    <span class="menu-price">₹199</span>
                                </div>
                                <p class="text-muted">Creamy black lentils slow-cooked with butter and spices</p>
                                <div class="menu-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span class="ms-2">(36)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Main Course 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card">
                            <img src="https://images.unsplash.com/photo-1589301760014-d929f3979dbc?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="menu-img" alt="Palak Paneer">
                            <div class="menu-card-body">
                                <h5 class="menu-title">Palak Paneer</h5>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="veg"></span>
                                    <span class="menu-price">₹259</span>
                                </div>
                                <p class="text-muted">Soft paneer cubes in creamy spinach gravy</p>
                                <div class="menu-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="ms-2">(78)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Desserts Tab -->
            <div class="tab-pane fade" id="desserts" role="tabpanel">
                <div class="row">
                    <!-- Dessert 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card">
                            <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="menu-img" alt="Gulab Jamun">
                            <div class="menu-card-body">
                                <h5 class="menu-title">Gulab Jamun</h5>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="veg"></span>
                                    <span class="menu-price">₹129</span>
                                </div>
                                <p class="text-muted">Soft khoya balls soaked in rose flavored sugar syrup</p>
                                <div class="menu-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span class="ms-2">(36)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Dessert 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card">
                            <img src="https://images.unsplash.com/photo-1603532648955-039310d9ed75?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="menu-img" alt="Rasmalai">
                            <div class="menu-card-body">
                                <h5 class="menu-title">Rasmalai</h5>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="veg"></span>
                                    <span class="menu-price">₹149</span>
                                </div>
                                <p class="text-muted">Soft cottage cheese patties in sweetened, thickened milk</p>
                                <div class="menu-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="ms-2">(54)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Dessert 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card">
                            <span class="menu-badge">Seasonal</span>
                            <img src="https://images.unsplash.com/photo-1563805042-7684c019e1cb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="menu-img" alt="Gajar Ka Halwa">
                            <div class="menu-card-body">
                                <h5 class="menu-title">Gajar Ka Halwa</h5>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="veg"></span>
                                    <span class="menu-price">₹169</span>
                                </div>
                                <p class="text-muted">Traditional carrot pudding with nuts and khoya</p>
                                <div class="menu-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="ms-2">(41)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Beverages Tab -->
            <div class="tab-pane fade" id="beverages" role="tabpanel">
                <div class="row">
                    <!-- Beverage 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card">
                            <span class="menu-badge">New</span>
                            <img src="https://images.unsplash.com/photo-1551029506-0807df4e2031?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="menu-img" alt="Mango Lassi">
                            <div class="menu-card-body">
                                <h5 class="menu-title">Mango Lassi</h5>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="veg"></span>
                                    <span class="menu-price">₹149</span>
                                </div>
                                <p class="text-muted">Refreshing yogurt drink with sweet mango pulp</p>
                                <div class="menu-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="ms-2">(29)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Beverage 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card">
                            <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="menu-img" alt="Masala Chai">
                            <div class="menu-card-body">
                                <h5 class="menu-title">Masala Chai</h5>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="veg"></span>
                                    <span class="menu-price">₹79</span>
                                </div>
                                <p class="text-muted">Spiced Indian tea with ginger, cardamom and milk</p>
                                <div class="menu-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span class="ms-2">(87)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Beverage 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="menu-card">
                            <img src="https://images.unsplash.com/photo-1600271886742-f049cd5bba08?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="menu-img" alt="Nimbu Pani">
                            <div class="menu-card-body">
                                <h5 class="menu-title">Nimbu Pani</h5>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="veg"></span>
                                    <span class="menu-price">₹59</span>
                                </div>
                                <p class="text-muted">Refreshing lemonade with mint and Indian spices</p>
                                <div class="menu-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <span class="ms-2">(33)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include('footer.php'); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Add animation to menu cards when they come into view
    document.addEventListener('DOMContentLoaded', function() {
        const animateCards = function() {
            const cards = document.querySelectorAll('.menu-card');
            
            cards.forEach(card => {
                const cardPosition = card.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.3;
                
                if(cardPosition < screenPosition) {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }
            });
        };
        
        // Set initial state
        const cards = document.querySelectorAll('.menu-card');
        cards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'all 0.5s ease';
        });
        
        // Run on load and scroll
        animateCards();
        window.addEventListener('scroll', animateCards);
    });
</script>
</body>
</html>
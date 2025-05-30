<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food-Corner</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Favicon -->
    <link rel="icon" href="images/food-corner1.png" type="image/png">
    <style>
        /* Custom styles for header */
        .navbar {
            padding: 15px 0;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.95);
            background-color: rgb(7, 7, 7) !important;
            backdrop-filter: blur(5px);
        }
        
        .navbar-brand img {
            transition: transform 0.3s ease;
        }
        
        .navbar-brand:hover img {
            transform: scale(1.05);
        }
        
        .nav-link {
            font-weight: 500;
            padding: 8px 15px !important;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover, .nav-link:focus {
            background-color: rgba(255, 193, 7, 0.1);
            color: #ffc107 !important;
        }
        
        .btn-outline-warning {
            border-width: 2px;
            font-weight: 500;
        }
        
        @media (max-width: 991.98px) {
            .navbar-collapse {
                padding-top: 15px;
            }
            .nav-link {
                padding: 10px 0 !important;
            }
            .ms-lg-3 {
                margin-top: 15px;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="images/food-corner2.png" alt="FoodCorner Logo" class="d-inline-block align-top mx-1" style="height:130px; width: 370px;">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-3">
                <li class="nav-item"><a class="nav-link active" href="index.php"><i class="fas fa-home me-1"></i> Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php"><i class="fas fa-info-circle me-1"></i> About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-utensils me-1"></i> Menu
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="menu.php#starters"><i class="fas fa-leaf me-2"></i>Starters</a></li>
                        <li><a class="dropdown-item" href="menu.php#mains"><i class="fas fa-drumstick-bite me-2"></i>Main Courses</a></li>
                        <li><a class="dropdown-item" href="menu.php#desserts"><i class="fas fa-ice-cream me-2"></i>Desserts</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="specials.php"><i class="fas fa-star me-2"></i>Daily Specials</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="chefs.php"><i class="fas fa-user-tie me-1"></i> Chefs</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.php"><i class="fas fa-images me-1"></i> Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="reviews.php"><i class="fas fa-star me-1"></i> Reviews</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php"><i class="fas fa-envelope me-1"></i> Contact</a></li>
            </ul>
           
        </div>
    </div>
</nav>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
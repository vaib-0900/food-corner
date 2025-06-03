<?php
include "header.php";
?>

<!-- Hero Section -->
 <section class="hero-section bg-dark text-white d-flex align-items-center">
        <div class="container text-center py-5">
                <h1 class="display-3 fw-bold mb-3">Our <span class="text-warning">Story</span></h1>
                <p class="lead mb-4">A culinary journey of passion, tradition, and innovation</p>
                 <div class="d-flex justify-content-center gap-3">
                    <a href="#our-team" class="btn btn-warning btn-lg px-4">Meet Our Team</a>
                    <a href="#our-values" class="btn btn-outline-light btn-lg px-4">Our Values</a>
                </div>
        </div>
    </section>

<!-- Our Journey Section -->
<section class="py-5" id="our-journey">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-3">From Humble Beginnings</h2>
                <div class="border-top border-warning border-3 mx-auto" style="width: 80px;"></div>
            </div>
        </div>
        
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-year bg-warning rounded-pill">2010</div>
                        <div class="timeline-content">
                            <h4 class="fw-bold">The Dream Begins</h4>
                            <p>Chef Marco and Sophia opened a small 20-seat bistro with a simple mission: serve authentic flavors with love.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year bg-warning rounded-pill">2014</div>
                        <div class="timeline-content">
                            <h4 class="fw-bold">First Expansion</h4>
                            <p>Moved to our current location with 80 seats and received our first culinary award for "Best New Restaurant".</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year bg-warning rounded-pill">2018</div>
                        <div class="timeline-content">
                            <h4 class="fw-bold">Farm Partnership</h4>
                            <p>Established direct relationships with local farms to ensure the freshest ingredients for our dishes.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year bg-warning rounded-pill">2023</div>
                        <div class="timeline-content">
                            <h4 class="fw-bold">Present Day</h4>
                            <p>Now serving over 1,000 guests weekly with a team of 25 dedicated professionals.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ratio ratio-16x9 rounded-3 overflow-hidden shadow">
                    <img src="images/about us 1.jpg" alt="FoodCorner through the years" class="img-fluid" style="object-fit: cover;">
                </div>
                <div class="mt-4 p-4 bg-light rounded-3">
                    <h4 class="fw-bold mb-3">Our Philosophy</h4>
                    <p class="mb-0">"We believe great food starts with respect - for ingredients, for tradition, and for the people we serve. Every dish tells a story of craftsmanship and care."</p>
                    <div class="text-end mt-3">
                        <p class="mb-0 fw-bold">- Chef Marco & Sophia</p>
                        <p class="small text-muted">Founders, FoodCorner</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Team Section -->
<section class="py-5 bg-light" id="our-team">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-3">Meet Our Culinary Team</h2>
                <p class="lead">Dedicated professionals making your experience special</p>
                <div class="border-top border-warning border-3 mx-auto" style="width: 80px;"></div>
            </div>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Chef Marco -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 overflow-hidden team-card">
                    <div class="team-img-container">
                        <img src="images/team 1.jpg" class="card-img-top" alt="Chef Marco">
                    </div>
                    <div class="card-body text-center">
                        <h4 class="fw-bold mb-1">Manish Sharma</h4>
                        <p class="text-warning mb-3">Head Chef & Co-Founder</p>
                        <p class="text-muted">With 25 years of experience, Chef Marco brings Indian and international flavors to your plate.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="text-dark mx-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-dark mx-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-dark mx-2"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sophia -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 overflow-hidden team-card">
                    <div class="team-img-container">
                        <img src="images/team 2.jpg" class="" alt="Sophia Giovanni">
                    </div>
                    <div class="card-body text-center">
                        <h4 class="fw-bold mb-1">Sonia Mehra</h4>
                        <p class="text-warning mb-3">Manager & Co-Founder</p>
                        <p class="text-muted">Sophia’s expertise in hospitality ensures every guest feels at home.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="text-dark mx-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-dark mx-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-dark mx-2"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sous Chef -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 overflow-hidden team-card">
                    <div class="team-img-container">
                        <img src="images/team 3.jpg" class="card-img-top" alt="Sous Chef Anika">
                    </div>
                    <div class="card-body text-center">
                        <h4 class="fw-bold mb-1">Ankita Singh</h4>
                        <p class="text-warning mb-3">Sous Chef</p>
                        <p class="text-muted">Trained in French techniques, Anika adds her Indian touch to every dish.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="text-dark mx-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-dark mx-2"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Values Section -->
<section class="py-5" id="our-values">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-3">Our Core Values</h2>
                <p class="lead">The principles that guide everything we do</p>
                <div class="border-top border-warning border-3 mx-auto" style="width: 80px;"></div>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 bg-light h-100">
                    <div class="card-body text-center p-4">
                        <div class="icon-box bg-warning bg-opacity-10 text-warning rounded-circle mx-auto mb-3">
                            <i class="fas fa-seedling fs-3"></i>
                        </div>
                        <h4 class="fw-bold">Sustainability</h4>
                        <p class="text-muted">We source 85% of ingredients locally and minimize food waste through careful planning.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 bg-light h-100">
                    <div class="card-body text-center p-4">
                        <div class="icon-box bg-warning bg-opacity-10 text-warning rounded-circle mx-auto mb-3">
                            <i class="fas fa-heart fs-3"></i>
                        </div>
                        <h4 class="fw-bold">Passion</h4>
                        <p class="text-muted">Every dish is prepared with genuine care and attention to detail.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 bg-light h-100">
                    <div class="card-body text-center p-4">
                        <div class="icon-box bg-warning bg-opacity-10 text-warning rounded-circle mx-auto mb-3">
                            <i class="fas fa-users fs-3"></i>
                        </div>
                        <h4 class="fw-bold">Community</h4>
                        <p class="text-muted">We support local charities and host monthly community dinners.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 bg-light h-100">
                    <div class="card-body text-center p-4">
                        <div class="icon-box bg-warning bg-opacity-10 text-warning rounded-circle mx-auto mb-3">
                            <i class="fas fa-award fs-3"></i>
                        </div>
                        <h4 class="fw-bold">Excellence</h4>
                        <p class="text-muted">We continuously train our team to maintain the highest standards.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5 bg-warning bg-opacity-10">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-3">What Our Guests Say</h2>
                <div class="border-top border-warning border-3 mx-auto" style="width: 80px;"></div>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-3 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="fst-italic mb-4">"The chicken tikka masala was the best I've had outside of India. Perfectly spiced and incredibly flavorful."</p>
                        <div class="d-flex align-items-center">
                            <img src="images/testimonial1.jpg" class="rounded-circle me-3" width="50" height="50" alt="Guest">
                            <div>
                                <h6 class="fw-bold mb-0">Rahul Sharma</h6>
                                <small class="text-muted">Food Critic, Times of India</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-3 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="fst-italic mb-4">"Our anniversary dinner was magical. The service was impeccable and the grilled chicken platter was divine."</p>
                        <div class="d-flex align-items-center">
                            <img src="images/testimonial2.jpg" class="rounded-circle me-3" width="50" height="50" alt="Guest">
                            <div>
                                <h6 class="fw-bold mb-0">Priya & Amit Patel</h6>
                                <small class="text-muted">Regular Guests Since 2015</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="mb-3 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="fst-italic mb-4">"As a chef myself, I appreciate the technique and quality at FoodCorner. The crispy fried chicken is a must-try!"</p>
                        <div class="d-flex align-items-center">
                            <img src="images/testimonial3.jpg" class="rounded-circle me-3" width="50" height="50" alt="Guest">
                            <div>
                                <h6 class="fw-bold mb-0">Vikram Khanna</h6>
                                <small class="text-muted">Executive Chef, Grand Hyatt</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Visit Us Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Visit FoodCorner</h2>
                <div class="mb-4">
                    <h5 class="fw-bold mb-2"><i class="fas fa-map-marker-alt text-warning me-2"></i> Location</h5>
                    <p>123 Gourmet Street, Food District<br>Mumbai, Maharashtra 400001</p>
                </div>
                <div class="mb-4">
                    <h5 class="fw-bold mb-2"><i class="fas fa-clock text-warning me-2"></i> Hours</h5>
                    <p><strong>Monday - Thursday:</strong> 11:00 AM - 10:00 PM<br>
                    <strong>Friday - Saturday:</strong> 11:00 AM - 11:00 PM<br>
                    <strong>Sunday:</strong> 10:00 AM - 9:00 PM</p>
                </div>
                <div class="mb-4">
                    <h5 class="fw-bold mb-2"><i class="fas fa-phone-alt text-warning me-2"></i> Contact</h5>
                    <p><strong>Phone:</strong> +91 98765 43210<br>
                    <strong>Email:</strong> hello@foodcorner.com</p>
                </div>
                <a href="reservation.php" class="btn btn-warning btn-lg px-4">Reserve a Table</a>
            </div>
            <div class="col-lg-6">
                <div class="ratio ratio-16x9 rounded-3 overflow-hidden shadow">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.264415847686!2d72.82821431490093!3d19.05598868710038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8df6f3a45d9%3A0x7f1a8326f2a5a0a5!2s123%20Gourmet%20St%2C%20Food%20District%2C%20Mumbai%2C%20Maharashtra%20400001!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin" 
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
      .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('images/banner.png');
            background-size: cover;
            background-position: center;
            min-height: 60vh;
        }
    
    .timeline {
        position: relative;
        padding-left: 50px;
    }
    
    .timeline::before {
        content: '';
        position: absolute;
        left: 15px;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #e9ecef;
    }
    
    .timeline-item {
        position: relative;
        margin-bottom: 30px;
    }
    
    .timeline-year {
        position: absolute;
        left: -50px;
        top: 0;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
    }
    
    .timeline-content {
        padding: 20px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    
    .team-card {
        transition: transform 0.3s ease;
    }
    
    .team-card:hover {
        transform: translateY(-10px);
    }
    
    .team-img-container {
        height: 300px;
        overflow: hidden;
    }
    
    .team-img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .team-card:hover .team-img-container img {
        transform: scale(1.1);
    }
    
    .icon-box {
        width: 70px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }
    
    .social-links a {
        transition: color 0.3s ease;
    }
    
    .social-links a:hover {
        color: #ffc107 !important;
    }
</style>

<?php
include "footer.php";
?>
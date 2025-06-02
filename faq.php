<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodCorner | FAQ</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        .faq-hero {
           background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('images/banner.png');
            background-size: cover;
            background-position: center;
            min-height: 60vh;
            color: white;
            display: flex;
            align-items: center;
            text-align: center;
        }

        .faq-hero h1 span {
            color: #ffc107;
        }

        .faq-section {
            padding: 3rem 0;
        }

        .accordion {
            max-width: 800px;
            margin: 0 auto;
        }

        .accordion-button {
            font-weight: 600;
            padding: 1rem 1.25rem;
        }

        .accordion-button:not(.collapsed) {
            background-color: #ffc107;
            color: #000;
        }

        .accordion-body {
            padding: 1rem 1.25rem;
        }

        .faq-icon {
            color: #ffc107;
            margin-right: 10px;
        }

        @media (max-width: 768px) {
            .faq-hero {
                min-height: 30vh;
            }
            
            .faq-hero h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<section class="faq-hero">
    <div class="container">
        <h1 class="display-5 fw-bold">Frequently Asked <span>Questions</span></h1>
        <p class="lead mt-3 mb-0">Find answers to common questions</p>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <h2 class="text-center mb-4">Common Questions</h2>
        <div class="accordion" id="faqAccordion">

            <!-- Question 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                        <i class="fas fa-clock faq-icon"></i> What are your opening hours?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We are open daily from 10:00 AM to 10:00 PM, including weekends and holidays.
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                        <i class="fas fa-truck faq-icon"></i> Do you offer home delivery?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes! We offer fast and reliable home delivery through our website and app.
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                        <i class="fas fa-sliders-h faq-icon"></i> Can I customize my order?
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, you can customize ingredients, spice levels, and more while ordering.
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                        <i class="fas fa-leaf faq-icon"></i> Do you have vegetarian or vegan options?
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, we offer a variety of vegetarian and vegan dishes made with fresh ingredients.
                    </div>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                        <i class="fas fa-headset faq-icon"></i> How can I contact customer support?
                    </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can reach us via phone, email, or our contact form.
                    </div>
                </div>
            </div>

            <!-- Question 6 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq6">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
                        <i class="fas fa-lock faq-icon"></i> Is online payment secure on your site?
                    </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, all transactions are secured using SSL encryption.
                    </div>
                </div>
            </div>

            <!-- Terms and Conditions Section -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq7">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7">
                        <i class="fas fa-file-contract faq-icon"></i> Terms and Conditions
                    </button>
                </h2>
                <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <h5>FoodCorner Terms of Service</h5>
                        <ol>
                            <li><strong>Ordering:</strong> All orders are subject to availability and confirmation.</li>
                            <li><strong>Pricing:</strong> Prices are subject to change without notice.</li>
                            <li><strong>Payment:</strong> We accept all major credit cards and digital payment methods.</li>
                            <li><strong>Delivery:</strong> Delivery times are estimates and not guaranteed.</li>
                            <li><strong>Refunds:</strong> Refund requests must be made within 24 hours of order completion.</li>
                            <li><strong>Privacy:</strong> We respect your privacy and handle data according to our Privacy Policy.</li>
                        </ol>
                        <p>For the complete Terms and Conditions, please visit our <a href="terms-and-conditions.html">dedicated page</a>.</p>
                    </div>
                </div>
            </div>

        </div>
        
        <!-- Help Section -->
        <div class="text-center mt-5">
            <h3 class="mb-3">Need more help?</h3>
            <a href="contact.php" class="btn btn-warning">
                Contact Us
            </a>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
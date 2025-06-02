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
        /* Hero Section */
        .faq-hero {
            background-color: #f8f9fa;
            padding: 100px 20px;
            text-align: center;
        }
        .faq-hero h1 {
            font-size: 2.8rem;
        }
        .faq-hero h1 span {
            color: #ffc107;
        }
        .faq-hero p {
            font-size: 1.1rem;
            color: #6c757d;
            margin-bottom: 30px;
        }

        /* FAQ Section with Background */
        .faq-section {
            position: relative;
            background: url('images/faq1.jpg') no-repeat center center/cover;
            padding: 80px 0;
            z-index: 1;
        }
        .faq-section::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }
        .faq-section .container {
            position: relative;
            z-index: 2;
        }

        /* Accordion */
        .accordion-item {
            background-color: rgba(33, 37, 41, 0.85); /* semi-transparent dark */
            border-radius: 10px;
            overflow: hidden;
        }

        .accordion-button {
            font-size: 1.1rem;
            background-color: #fff;
            color: #000;
            transition: background-color 0.3s ease;
        }

        .accordion-button:not(.collapsed) {
            background-color: rgba(255, 193, 7, 0.2);
            color: #ffc107;
        }

        .accordion-body {
            font-size: 1rem;
            color: #fff;
            padding: 1.25rem;
        }

        .section-title {
            font-size: 2.3rem;
        }

        @media (max-width: 768px) {
            .faq-hero h1 {
                font-size: 2.2rem;
            }
            .section-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<section class="faq-hero">
    <div class="container">
        <h1 class="fw-bold mb-3">Frequently Asked <span>Questions</span></h1>
        <p class="lead">Find answers about our food, delivery, and services—all in one place.</p>
        <a href="contact.php" class="btn btn-warning btn-lg shadow-sm px-4 py-2">Still Have a Question?</a>
    </div>
</section>

<!-- FAQ Accordion Section -->
<section class="faq-section">
    <div class="container">
        <h2 class="text-center text-white mb-5 fw-bold section-title">Your Questions, Answered</h2>

        <div class="accordion accordion-flush" id="faqAccordion">
            <!-- FAQ 1 -->
            <div class="accordion-item mb-3 border-start border-4 border-warning">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        🕒 What are your opening hours?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show"
                     aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We are open from <strong>9 AM to 10 PM</strong> every day, including weekends and holidays.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item mb-3 border-start border-4 border-warning">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        🚚 Do you offer home delivery?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse"
                     aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes! We provide <strong>free delivery</strong> within a 5 km radius for orders over <strong>$20</strong>.
                        Delivery time may vary based on location and time of day.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item mb-3 border-start border-4 border-warning">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        📱 Can I order online?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse"
                     aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Absolutely! You can place an order via our website or mobile app. We support online payments and real-time order tracking.
                    </div>
                </div>
            </div>

            <!-- Existing FAQs... -->

<!-- FAQ 4 -->
<div class="accordion-item mb-3 border-start border-4 border-warning">
    <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            🍽️ Do you offer vegetarian or vegan options?
        </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse"
         aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            Yes, we have a variety of <strong>vegetarian and vegan dishes</strong> available. Look for the green leaf icon 🌿 on our menu.
        </div>
    </div>
</div>

<!-- FAQ 5 -->
<div class="accordion-item mb-3 border-start border-4 border-warning">
    <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            💳 What payment methods do you accept?
        </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse"
         aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            We accept <strong>cash, credit/debit cards, and mobile payments</strong> such as Apple Pay, Google Pay, and PayPal.
        </div>
    </div>
</div>

<!-- FAQ 6 -->
<div class="accordion-item mb-3 border-start border-4 border-warning">
    <h2 class="accordion-header" id="headingSix">
        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            📦 Can I schedule a delivery in advance?
        </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse"
         aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            Definitely! You can <strong>schedule deliveries up to 3 days in advance</strong> through our website or app.
        </div>
    </div>
</div>

<!-- FAQ 7 -->
<div class="accordion-item mb-3 border-start border-4 border-warning">
    <h2 class="accordion-header" id="headingSeven">
        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
            📍 Where are you located?
        </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse"
         aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            We're located at <strong>123 Food Street, Downtown City</strong>. Visit our <a href="contact.php" class="text-warning">Contact Page</a> for directions.
        </div>
    </div>
</div>

<!-- FAQ 8 -->
<div class="accordion-item mb-3 border-start border-4 border-warning">
    <h2 class="accordion-header" id="headingEight">
        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
            👨‍👩‍👧 Do you have a family or group discount?
        </button>
    </h2>
    <div id="collapseEight" class="accordion-collapse collapse"
         aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            Yes, we offer <strong>special discounts</strong> for families and groups of 5 or more. Please check our <a href="offers.php" class="text-warning">Offers Page</a>.
        </div>
    </div>
</div>

<!-- FAQ 9 -->
<div class="accordion-item mb-3 border-start border-4 border-warning">
    <h2 class="accordion-header" id="headingNine">
        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
            📞 How can I contact customer service?
        </button>
    </h2>
    <div id="collapseNine" class="accordion-collapse collapse"
         aria-labelledby="headingNine" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            You can reach us via our <a href="contact.php" class="text-warning">Contact Page</a>, or call us directly at <strong>(123) 456-7890</strong>.
        </div>
    </div>
</div>

        </div>
    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include('footer.php'); ?>

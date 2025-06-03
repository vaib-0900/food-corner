<?php
session_start();
include "header.php";
?>

<!-- Contact Start -->
<div class="container-fluid py-5 bg-light">
    <h1 class="text-warning text-center mb-4">Contact Us</h1>

    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="p-5 bg-white rounded shadow">
                    <form action="" method="post">
                        <input type="text" class="form-control border-0 py-3 mb-3 shadow-sm" placeholder="Your Name"
                            name="contact_name" required>
                        <input type="text" class="form-control border-0 py-3 mb-3 shadow-sm" placeholder="Subject"
                            name="contact_subject" required>
                        <input type="email" class="form-control border-0 py-3 mb-3 shadow-sm" placeholder="Your Email"
                            name="contact_email" required>
                        <textarea class="form-control border-0 py-3 mb-3 shadow-sm" rows="5" placeholder="Your Message"
                            name="contact_message" required></textarea>
                        <button class="btn btn-warning w-100 py-3 shadow" type="submit">Send Message</button>
                    </form>
                </div>
            </div>
            <!-- Google Map -->
            <div class="col-lg-6">
                 <div class="col-lg-6">
                <div class="ratio ratio-16x9 rounded-3 overflow-hidden shadow">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.264415847686!2d72.82821431490093!3d19.05598868710038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8df6f3a45d9%3A0x7f1a8326f2a5a0a5!2s123%20Gourmet%20St%2C%20Food%20District%2C%20Mumbai%2C%20Maharashtra%20400001!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin" 
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?php
include "footer.php";
?>
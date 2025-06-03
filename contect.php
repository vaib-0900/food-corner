<?php
session_start();
include "header.php";
?>
 
<!-- Contact Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="p-5 bg-white rounded shadow">
                    <h1 class="text-warning text-center mb-4">Contact Us</h1>
                    <form action="" method="post">
                        <input type="text" class="form-control border-0 py-3 mb-3 shadow-sm" placeholder="Your Name" name="contact_name" required>
                        <input type="text" class="form-control border-0 py-3 mb-3 shadow-sm" placeholder="Subject" name="contact_subject" required>
                        <input type="email" class="form-control border-0 py-3 mb-3 shadow-sm" placeholder="Your Email" name="contact_email" required>
                        <textarea class="form-control border-0 py-3 mb-3 shadow-sm" rows="5" placeholder="Your Message" name="contact_message" required></textarea>
                        <button class="btn btn-warning w-100 py-3 shadow" type="submit">Send Message</button>
                    </form>
                </div>
            </div>
            <!-- Google Map -->
            <div class="col-lg-6">
                <div class="h-100 rounded shadow overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d60686.875338011545!2d74.75711309999998!3d18.0748085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1744001816619!5m2!1sen!2sin"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?php
include "footer.php";
?>

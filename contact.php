<?php
// Breadcrumb ke liye Title set karein
$pageTitle = "Contact Us"; 
?>

<!-- Include Header -->
<?php include 'includes/header.php'; ?>

<!-- Include Breadcrumb -->
<?php include 'includes/breadcrumb.php'; ?>

<!-- ==============================
     1. CONTACT INFO & FORM SECTION
     ============================== -->
<section class="contact-page-section">
    <div class="container">
        <div class="row">
            
            <!-- Left Side: Contact Information -->
            <div class="col-lg-5 reveal">
                <div class="contact-info-wrapper">
                    <span class="sec-subtitle">Get In Touch</span>
                    <h2 class="sec-title">Let's Discuss Your Export Needs.</h2>
                    <p class="contact-desc">Have questions about our premium spices, bulk pricing, or international shipping? Our dedicated team is ready to assist you. Reach out to us today!</p>
                    
                    <!-- Location Card -->
                    <div class="info-card">
                        <div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="info-content">
                            <h4>Head Office & Processing Unit</h4>
                            <p>BLOCK- J SF-2 J-39 Sector 12, Street No 2, Near Santosh Medical College, Pratap Vihar, Ghaziabad - 201001, U.P, India.</p>
                        </div>
                    </div>

                    <!-- Phone Card -->
                    <div class="info-card">
                        <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="info-content">
                            <h4>Phone Inquiry</h4>
                            <a href="tel:+919717179432">+91 97171 79432</a>
                            <p style="font-size: 12px; margin-top: 5px;">(Available Mon - Sat, 9:00 AM to 6:00 PM IST)</p>
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div class="info-card">
                        <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
                        <div class="info-content">
                            <h4>Email Address</h4>
                            <a href="mailto:info@kisantokitchen.com">info@kisantokitchen.com</a>
                            <a href="mailto:forbrajesh@gmail.com">forbrajesh@gmail.com</a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side: Contact Form -->
            <div class="col-lg-7 reveal">
                <div class="contact-form-box">
                    <h3>Request a Free Quotation</h3>
                    <p>Fill out the form below and our export manager will get back to you within 24 hours.</p>
                    
                    <form action="#" method="POST">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="company" placeholder="Company Name">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="tel" class="form-control" name="phone" placeholder="Phone / WhatsApp No." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <select class="form-select" name="interest">
                                <!-- URL se product name fetch karne ka PHP logic -->
                                <?php $selectedProduct = isset($_GET['product']) ? $_GET['product'] : ''; ?>
                                <option value="" disabled <?php echo ($selectedProduct=='')?'selected':''; ?>>Select Product of Interest</option>
                                <option value="Red Chilli Powder" <?php echo ($selectedProduct=='Red Chilli Powder')?'selected':''; ?>>Premium Red Chilli Powder</option>
                                <option value="Turmeric Powder" <?php echo ($selectedProduct=='Turmeric Powder')?'selected':''; ?>>Organic Turmeric Powder</option>
                                <option value="Black Pepper" <?php echo ($selectedProduct=='Black Pepper')?'selected':''; ?>>Black Pepper Seeds</option>
                                <option value="Whole Spices">Other Whole Spices</option>
                                <option value="Blended Masala">Blended Masalas</option>
                                <option value="General Inquiry">General Business Inquiry</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Tell us about your requirement (Quantity, Destination Port, Packaging preference)..." required></textarea>
                        </div>

                        <button type="submit" class="btn-submit">Send Message <i class="fa-regular fa-paper-plane ms-2"></i></button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==============================
     2. GOOGLE MAP SECTION
     ============================== -->
<section class="map-section reveal">
    <div class="container">
        <div class="map-container">
            <!-- Ghaziabad Location Embed Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112028.98822506727!2d77.35246733221995!3d28.66317765955627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf1bb41c50fdf%3A0xe6f06fd26a7798ba!2sGhaziabad%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<!-- ==============================
     3. SUPPORT / FAQ SECTION
     ============================== -->
<section class="faq-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5 reveal">
            <div class="col-lg-8">
                <span class="sec-subtitle">Customer Support</span>
                <h2 class="sec-title">Common Queries</h2>
            </div>
        </div>

        <div class="row justify-content-center reveal">
            <div class="col-lg-8">
                <div class="accordion faq-accordion" id="contactFaqAccordion">
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                How quickly do you respond to quotation requests?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body">
                                Our international sales team operates round the clock. You can expect a detailed response with pricing, availability, and shipping estimates within 12 to 24 hours of submitting your inquiry.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                Can I request a free sample before placing a bulk order?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body">
                                Yes, we encourage our B2B buyers to check our quality. We provide free product samples; however, the international courier/freight charges must be borne by the buyer.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                Do you arrange logistics and international shipping?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#contactFaqAccordion">
                            <div class="accordion-body">
                                Absolutely. We offer FOB (Free On Board) as well as CIF (Cost, Insurance, and Freight) terms. Our logistics team handles all customs clearance and ensures secure delivery to your destination port.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Scroll Animation Script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const reveals = document.querySelectorAll(".reveal");
        const revealOnScroll = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active");
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        reveals.forEach(reveal => revealOnScroll.observe(reveal));
    });
</script>

<!-- Include Footer -->
<?php include 'includes/footer.php'; ?>
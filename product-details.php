<?php
$pageTitle = "Premium Red Chilli Powder"; 
include 'includes/header.php'; 
include 'includes/breadcrumb.php'; 
?>



<section class="pd-section">
    <div class="container">
        
        <div class="row">
            <!-- Left Column: Image Gallery -->
            <div class="col-lg-5 mb-5 mb-lg-0 reveal">
                <div class="pd-image-gallery">
                    <!-- Main Image -->
                    <div class="pd-main-img">
                        <img id="mainImage" src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=800" alt="Red Chilli Powder">
                    </div>
                    
                    <!-- Thumbnails -->
                    <div class="pd-thumbnails">
                        <div class="pd-thumb active" onclick="changeImage(this, 'https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=800')">
                            <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=400" alt="Thumb 1">
                        </div>
                        <div class="pd-thumb" onclick="changeImage(this, 'https://images.unsplash.com/photo-1615486171448-4228965f7c32?q=80&w=800')">
                            <img src="https://images.unsplash.com/photo-1615486171448-4228965f7c32?q=80&w=400" alt="Thumb 2">
                        </div>
                        <div class="pd-thumb" onclick="changeImage(this, 'https://images.unsplash.com/photo-1599909631717-380d0d84c1f5?q=80&w=800')">
                            <img src="https://images.unsplash.com/photo-1599909631717-380d0d84c1f5?q=80&w=400" alt="Thumb 3">
                        </div>
                        <div class="pd-thumb" onclick="changeImage(this, 'https://images.unsplash.com/photo-1606914501449-5a96b6ce24ca?q=80&w=800')">
                            <img src="https://images.unsplash.com/photo-1606914501449-5a96b6ce24ca?q=80&w=400" alt="Thumb 4">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Product Info -->
            <div class="col-lg-7 ps-lg-5 reveal">
                <span class="pd-category">Blended Spices</span>
                <h1 class="pd-title">Premium Export Quality Red Chilli Powder</h1>
                
                <p class="pd-overview">
                    Experience the fiery heat and vibrant natural red color with K2K's Premium Red Chilli Powder. Sourced directly from the finest farms in India, our chilli powder is hygienically processed with zero human touch to retain its essential oils, pungent aroma, and long shelf life. Perfect for bulk export to international food manufacturers and distributors.
                </p>

                <!-- Quick Specifications -->
                <ul class="pd-quick-specs">
                    <li><span class="label">Product Origin:</span> <span class="value">India</span></li>
                    <li><span class="label">Purity:</span> <span class="value">100% Unadulterated</span></li>
                    <li><span class="label">Certification:</span> <span class="value">ISO, FSSAI, Export Grade</span></li>
                    <li><span class="label">Shelf Life:</span> <span class="value">12 Months</span></li>
                    <li><span class="label">Availability:</span> <span class="value">In Stock for Bulk Orders</span></li>
                </ul>

                <!-- Action Buttons (No Price) -->
                <div class="pd-action-btns">
                    <!-- Quote Button connects to contact/quote page -->
                    <a href="contact.php?product=Red+Chilli+Powder" class="btn-lg-quote">
                        Request a Quote <i class="fa-solid fa-file-invoice ms-2"></i>
                    </a>
                    
                    <!-- Call Button connects directly to phone -->
                    <a href="tel:+919717179432" class="btn-lg-call">
                        <i class="fa-solid fa-phone me-2"></i> Call for Enquiry
                    </a>
                </div>

                <p style="font-size: 13px; color: #888; margin-top: 10px;">
                    <i class="fa-solid fa-shield-check text-success"></i> 100% Secure & Verified Supplier
                </p>
            </div>
        </div>

        <!-- ==============================
             Tabs Section for Deep Details
             ============================== -->
        <div class="row pd-tabs-section reveal">
            <div class="col-12">
                
                <!-- Tab Headers -->
                <ul class="nav nav-tabs custom-tabs" id="productTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="desc-tab" data-bs-toggle="tab" data-bs-target="#desc" type="button" role="tab">Full Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="specs-tab" data-bs-toggle="tab" data-bs-target="#specs" type="button" role="tab">Specifications</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pack-tab" data-bs-toggle="tab" data-bs-target="#pack" type="button" role="tab">Packaging & Delivery</button>
                    </li>
                </ul>

                <!-- Tab Contents -->
                <div class="tab-content" id="productTabsContent">
                    
                    <!-- Description Tab -->
                    <div class="tab-pane fade show active" id="desc" role="tabpanel">
                        <h4>Authentic Indian Spices for Global Markets</h4>
                        <p>Kisan To Kitchen (K2K) takes pride in delivering the highest quality Red Chilli Powder. Our chillies are carefully handpicked, sun-dried, and grounded using advanced cryogenic technology. This process ensures that the natural heat (capsaicin) and color remain intact without the need for any artificial additives or synthetic colors.</p>
                        <p>We cater strictly to B2B clients, including spice blends manufacturers, hotel chains, and international supermarket distributors. Our commitment to quality ensures that every shipment meets the stringent import laws of your destination country.</p>
                    </div>
                    
                    <!-- Specifications Tab -->
                    <div class="tab-pane fade" id="specs" role="tabpanel">
                        <table class="spec-table">
                            <tbody>
                                <tr><th>Product Name</th><td>Red Chilli Powder (Lal Mirch)</td></tr>
                                <tr><th>Form</th><td>Fine Powder</td></tr>
                                <tr><th>Moisture Content</th><td>Below 10%</td></tr>
                                <tr><th>Color/ASTA Value</th><td>High Natural Red (Varies per requirement)</td></tr>
                                <tr><th>Pungency (SHU)</th><td>Medium to High</td></tr>
                                <tr><th>Additives/Colors</th><td>None (0% Adulteration)</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Packaging Tab -->
                    <div class="tab-pane fade" id="pack" role="tabpanel">
                        <h4>Export Standard Packaging</h4>
                        <p>We understand that spices can lose their aroma if not packed correctly. Therefore, we offer custom packaging solutions tailored for sea and air freight.</p>
                        <ul>
                            <li><strong>Standard Bulk Packing:</strong> 10kg, 25kg, 50kg in PP Bags with inner food-grade poly liner.</li>
                            <li><strong>Retail Packing (OEM):</strong> Custom pouches, jars, and boxes for private label brands.</li>
                            <li><strong>Delivery:</strong> 15-20 days from the date of order confirmation (depending on destination port).</li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>

<!-- ==============================
     RELATED PRODUCTS SECTION
     ============================== -->
<section class="related-products" style="padding: 0 0 100px 0; background-color: #ffffff;">
    <div class="container">
        <!-- Reusing Header style from products -->
        <div class="text-center mb-5 reveal">
            <h2 style="font-size: 2rem; font-weight: 800; color: var(--primary-green);">Explore Related Products</h2>
            <div style="width: 60px; height: 3px; background: var(--accent-orange); margin: 15px auto;"></div>
        </div>

        <div class="row g-4 reveal">
            <!-- Related Product 1 -->
            <div class="col-lg-3 col-md-6">
                <!-- Hum same card layout use kar rahe hain jo products.php me banaya tha -->
                <div class="product-card" style="border: 1px solid #f0f0f0; border-radius: 16px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.02);">
                    <a href="product-details.php">
                        <div style="aspect-ratio: 4/3; overflow: hidden; background: #f9f9f9;">
                            <img src="https://images.unsplash.com/photo-1615486171448-4228965f7c32?q=80&w=800" style="width: 100%; height: 100%; object-fit: cover;" alt="Turmeric">
                        </div>
                    </a>
                    <div style="padding: 20px;">
                        <h3 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 15px;"><a href="product-details.php" style="color: #1A1A1A; text-decoration: none;">Organic Turmeric Powder</a></h3>
                        <div style="display: flex; gap: 10px; border-top: 1px solid #f0f0f0; padding-top: 15px;">
                            <a href="contact.php" style="flex-grow: 1; text-align: center; border: 1.5px solid var(--primary-green); color: var(--primary-green); padding: 8px; border-radius: 8px; font-weight: 600; font-size: 13px; text-decoration: none;">Request Quote</a>
                            <a href="tel:+919717179432" style="background: rgba(230,126,34,0.1); color: var(--accent-orange); padding: 8px 12px; border-radius: 8px;"><i class="fa-solid fa-phone"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Product 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="product-card" style="border: 1px solid #f0f0f0; border-radius: 16px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.02);">
                    <a href="product-details.php">
                        <div style="aspect-ratio: 4/3; overflow: hidden; background: #f9f9f9;">
                            <img src="https://images.unsplash.com/photo-1606913084603-3e7702b01627?q=80&w=800" style="width: 100%; height: 100%; object-fit: cover;" alt="Cumin">
                        </div>
                    </a>
                    <div style="padding: 20px;">
                        <h3 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 15px;"><a href="product-details.php" style="color: #1A1A1A; text-decoration: none;">Pure Cumin (Jeera) Seeds</a></h3>
                        <div style="display: flex; gap: 10px; border-top: 1px solid #f0f0f0; padding-top: 15px;">
                            <a href="contact.php" style="flex-grow: 1; text-align: center; border: 1.5px solid var(--primary-green); color: var(--primary-green); padding: 8px; border-radius: 8px; font-weight: 600; font-size: 13px; text-decoration: none;">Request Quote</a>
                            <a href="tel:+919717179432" style="background: rgba(230,126,34,0.1); color: var(--accent-orange); padding: 8px 12px; border-radius: 8px;"><i class="fa-solid fa-phone"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Product 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="product-card" style="border: 1px solid #f0f0f0; border-radius: 16px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.02);">
                    <a href="product-details.php">
                        <div style="aspect-ratio: 4/3; overflow: hidden; background: #f9f9f9;">
                            <img src="https://images.unsplash.com/photo-1599909631717-380d0d84c1f5?q=80&w=800" style="width: 100%; height: 100%; object-fit: cover;" alt="Coriander">
                        </div>
                    </a>
                    <div style="padding: 20px;">
                        <h3 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 15px;"><a href="product-details.php" style="color: #1A1A1A; text-decoration: none;">Coriander Powder</a></h3>
                        <div style="display: flex; gap: 10px; border-top: 1px solid #f0f0f0; padding-top: 15px;">
                            <a href="contact.php" style="flex-grow: 1; text-align: center; border: 1.5px solid var(--primary-green); color: var(--primary-green); padding: 8px; border-radius: 8px; font-weight: 600; font-size: 13px; text-decoration: none;">Request Quote</a>
                            <a href="tel:+919717179432" style="background: rgba(230,126,34,0.1); color: var(--accent-orange); padding: 8px 12px; border-radius: 8px;"><i class="fa-solid fa-phone"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Product 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="product-card" style="border: 1px solid #f0f0f0; border-radius: 16px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.02);">
                    <a href="product-details.php">
                        <div style="aspect-ratio: 4/3; overflow: hidden; background: #f9f9f9;">
                            <img src="https://images.unsplash.com/photo-1610444586938-1ee4b77242ba?q=80&w=800" style="width: 100%; height: 100%; object-fit: cover;" alt="Cardamom">
                        </div>
                    </a>
                    <div style="padding: 20px;">
                        <h3 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 15px;"><a href="product-details.php" style="color: #1A1A1A; text-decoration: none;">Green Cardamom</a></h3>
                        <div style="display: flex; gap: 10px; border-top: 1px solid #f0f0f0; padding-top: 15px;">
                            <a href="contact.php" style="flex-grow: 1; text-align: center; border: 1.5px solid var(--primary-green); color: var(--primary-green); padding: 8px; border-radius: 8px; font-weight: 600; font-size: 13px; text-decoration: none;">Request Quote</a>
                            <a href="tel:+919717179432" style="background: rgba(230,126,34,0.1); color: var(--accent-orange); padding: 8px 12px; border-radius: 8px;"><i class="fa-solid fa-phone"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- ==============================
     SCRIPTS FOR GALLERY & ANIMATION
     ============================== -->
<script>
    // JS for changing main image when thumbnail is clicked
    function changeImage(element, imageSrc) {
        // Change Main Image Source
        document.getElementById('mainImage').src = imageSrc;
        
        // Remove 'active' class from all thumbnails
        let thumbs = document.querySelectorAll('.pd-thumb');
        thumbs.forEach(thumb => thumb.classList.remove('active'));
        
        // Add 'active' class to clicked thumbnail
        element.classList.add('active');
    }

    // Scroll Animation
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
<?php 
include 'config/connect.php';
include ('includes/header.php'); 
?>

<!-- Hero Slider Section -->
<section class="hero-slider">
    <div id="k2kHeroSlider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">
        
        <?php
        // Fetch active banners from database
        $bannerQuery = mysqli_query($conn, "SELECT * FROM banners WHERE status = 0 ORDER BY display_order ASC");
        $bannerCount = mysqli_num_rows($bannerQuery);
        ?>

        <!-- Dynamic Carousel Indicators -->
        <div class="carousel-indicators">
            <?php for($i = 0; $i < $bannerCount; $i++): ?>
                <button type="button" data-bs-target="#k2kHeroSlider" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo ($i == 0) ? 'active' : ''; ?>" aria-current="<?php echo ($i == 0) ? 'true' : 'false'; ?>"></button>
            <?php endfor; ?>
        </div>

        <!-- Dynamic Carousel Inner -->
        <div class="carousel-inner">
            <?php 
            $i = 0;
            while($banner = mysqli_fetch_assoc($bannerQuery)): 
            ?>
            <div class="carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>" data-bs-interval="5000">
                <!-- Using banner_path from DB -->
                <div class="slide-bg" style="background-image: url('<?php echo $banner['banner_path']; ?>');">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="slide-content">
                                    <span class="slide-subtitle animate-box">100% Pure & Authentic</span>
                                    <h1 class="slide-title animate-box"><?php echo $banner['title']; ?></h1>
                                    <p class="slide-text animate-box"><?php echo $banner['description']; ?></p>
                                    <div class="slide-buttons animate-box">
                                        <a href="<?php echo !empty($banner['link_url']) ? $banner['link_url'] : 'products.php'; ?>" class="btn-theme">Explore Products</a>
                                        <a href="quotation.php" class="btn-outline-theme">Get Quotation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            $i++;
            endwhile; 
            ?>
        </div>

        <!-- Left/Right Arrow Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#k2kHeroSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#k2kHeroSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- ABOUT US SECTION -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 reveal">
                <div class="about-img-wrapper">
                    <div class="experience-badge">
                        <h3>10+</h3>
                        <p>Years<br>Trust</p>
                    </div>
                    <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=1000&auto=format&fit=crop" alt="Spices Factory" class="about-img-main">
                    <img src="https://images.unsplash.com/photo-1615486171448-4228965f7c32?q=80&w=800&auto=format&fit=crop" alt="Premium Spices" class="about-img-sub">
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5 reveal">
                <span class="section-subtitle">Welcome to Kisan To Kitchen</span>
                <h2 class="section-title">Bringing Authenticity from Farms to Your Table.</h2>
                <p class="about-text">Formerly known as Harvest2Home, our newly evolved brand <strong>Kisan to Kitchen (K2K)</strong> bridges the gap between hardworking farmers and your kitchen. We specialize in processing, packaging, and exporting premium quality whole and blended spices.</p>
                <ul class="about-features">
                    <li><i class="fa-solid fa-leaf"></i> 100% Pure & Unadulterated Spices</li>
                    <li><i class="fa-solid fa-globe"></i> International Export Quality Standards</li>
                    <li><i class="fa-solid fa-seedling"></i> Directly Sourced from Local Farmers</li>
                </ul>
                <a href="company-profile.php" class="btn-theme mt-2">Discover Our Journey</a>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US SECTION -->
<section class="wcu-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5 reveal">
            <div class="col-lg-7">
                <span class="section-subtitle">Why Choose Us</span>
                <h2 class="section-title">The K2K Quality Promise</h2>
                <p class="about-text">We don't just sell spices; we deliver aroma, health, and tradition. Here is what makes Kisan To Kitchen a trusted global exporter.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 reveal">
                <div class="wcu-card">
                    <div class="wcu-icon"><i class="fa-solid fa-certificate"></i></div>
                    <h4>Export Standard</h4>
                    <p>Our products undergo rigorous quality checks to meet global standards and certifications, ensuring the best for international markets.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 reveal">
                <div class="wcu-card">
                    <div class="wcu-icon"><i class="fa-solid fa-hands-holding-circle"></i></div>
                    <h4>Hygienic Process</h4>
                    <p>Processed in state-of-the-art facilities with zero human touch during final packaging to retain maximum freshness and hygiene.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 reveal">
                <div class="wcu-card">
                    <div class="wcu-icon"><i class="fa-solid fa-tractor"></i></div>
                    <h4>Direct from Farm</h4>
                    <p>By eliminating middlemen, we ensure farmers get fair value while you get raw, authentic, and naturally grown agricultural products.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 reveal">
                <div class="wcu-card">
                    <div class="wcu-icon"><i class="fa-solid fa-box-open"></i></div>
                    <h4>Premium Packaging</h4>
                    <p>Food-grade, moisture-proof packaging that locks in the essential oils, aroma, and color of the spices for a longer shelf life.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DYNAMIC PRODUCTS SECTION -->
<section class="products-section">
    <div class="container">
        <div class="section-header reveal">
            <span class="subtitle">100% Pure & Authentic</span>
            <h2 class="title">Our Premium Products</h2>
        </div>

        <div class="row g-4">
            <?php 
            // Fetch 8 active products from database
            $productQuery = mysqli_query($conn, "SELECT * FROM products WHERE status = 1 ORDER BY id DESC LIMIT 8");
            while($product = mysqli_fetch_assoc($productQuery)): 
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 reveal">
                <div class="product-card">
                    
                    <a href="product-details.php?id=<?php echo $product['id']; ?>" class="product-img-link">
                        <div class="product-img-wrapper">
                            <!-- Assuming images are in an 'uploads' directory -->
                            <img src="uploads/<?php echo $product['pro_img']; ?>" alt="<?php echo $product['pro_name']; ?>">
                            <div class="view-details-overlay">
                                <span>View Details</span>
                            </div>
                        </div>
                    </a>

                    <div class="product-content">
                        <a href="product-details.php?id=<?php echo $product['id']; ?>" class="product-title-link">
                            <h3 class="product-title"><?php echo $product['pro_name']; ?></h3>
                        </a>

                        <div class="product-actions">
                            <a href="quotation.php?product=<?php echo urlencode($product['pro_name']); ?>" class="btn-quote-sm">
                                Request to Quote
                            </a>
                            <a href="tel:+919717179432" class="btn-call-sm" title="Call for Enquiry">
                                <i class="fa-solid fa-phone"></i>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        
        <div class="text-center mt-5 reveal">
            <a href="products.php" class="btn-theme" style="display: inline-block; padding: 12px 35px; border-radius: 50px; background: var(--primary-green); color: white; text-decoration: none; font-weight: 600; box-shadow: 0 10px 20px rgba(43, 94, 44, 0.2);">
                View Full Catalogue <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- BUSINESS STATS SECTION -->
<section class="stats-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="stat-box reveal">
                    <i class="fa-solid fa-earth-americas stat-icon"></i>
                    <div class="stat-number">
                        <span class="counter" data-target="15">0</span><span>+</span>
                    </div>
                    <div class="stat-text">Countries Exported</div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="stat-box reveal">
                    <i class="fa-solid fa-seedling stat-icon"></i>
                    <div class="stat-number">
                        <span class="counter" data-target="50">0</span><span>+</span>
                    </div>
                    <div class="stat-text">Premium Products</div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="stat-box reveal">
                    <i class="fa-solid fa-users stat-icon"></i>
                    <div class="stat-number">
                        <span class="counter" data-target="200">0</span><span>+</span>
                    </div>
                    <div class="stat-text">Happy Global Clients</div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="stat-box reveal">
                    <i class="fa-solid fa-award stat-icon"></i>
                    <div class="stat-number">
                        <span class="counter" data-target="10">0</span><span>+</span>
                    </div>
                    <div class="stat-text">Years Experience</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DYNAMIC PHOTO GALLERY SECTION -->
<section class="gallery-section">
    <div class="container">
        <div class="section-header reveal text-center">
            <span class="subtitle" style="color: var(--accent-orange); font-weight:700; letter-spacing:2px; font-size:14px; display:block; margin-bottom:10px;">See Our Experience</span>
            <h2 class="title" style="font-size:2.5rem; font-weight:800; color:var(--primary-green);">Photo Gallery</h2>
        </div>

        <div class="gallery-grid reveal">
            <?php 
            // Fetch 8 latest gallery images from database
            $galleryQuery = mysqli_query($conn, "SELECT * FROM gallery ORDER BY ID DESC LIMIT 8");
            while($gallery = mysqli_fetch_assoc($galleryQuery)): 
            ?>
            <div class="gallery-item" onclick="openLightbox('<?php echo $gallery['image_path']; ?>')">
                <img src="<?php echo $gallery['image_path']; ?>" alt="<?php echo $gallery['image_name']; ?>">
                <div class="gallery-overlay">
                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<!-- Lightbox Modal Container -->
<div class="k2k-lightbox" id="lightbox">
    <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
    <img id="lightbox-img" src="" alt="Enlarged Gallery Image">
</div>

<!-- DYNAMIC BLOG & INSIGHTS SECTION -->
<section class="blog-section">
    <div class="container">
        <div class="section-header reveal text-center mb-5">
            <span class="subtitle" style="color: var(--accent-orange); font-weight:700; letter-spacing:2px; font-size:14px; display:block; margin-bottom:10px;">News & Insights</span>
            <h2 class="title" style="font-size:2.5rem; font-weight:800; color:var(--primary-green);">Latest From K2K</h2>
        </div>

        <div class="row g-4">
            <?php 
            // Fetch 3 latest active blogs from database
            $blogQuery = mysqli_query($conn, "SELECT * FROM blogs WHERE status = 1 ORDER BY created_at DESC LIMIT 3");
            while($blog = mysqli_fetch_assoc($blogQuery)): 
                // Format the created_at date
                $formattedDate = date('M d, Y', strtotime($blog['created_at']));
                // Create a short excerpt from description
                $excerpt = substr(strip_tags($blog['description']), 0, 120) . '...';
            ?>
            <div class="col-lg-4 col-md-6 reveal">
                <div class="blog-card">
                    <div class="blog-img-wrapper">
                        <span class="blog-category">News</span>
                        <a href="blog-details.php?slug=<?php echo $blog['slug']; ?>">
                            <!-- Assuming images are inside an 'uploads/' folder -->
                            <img src="uploads/<?php echo $blog['image']; ?>" alt="<?php echo $blog['title']; ?>">
                        </a>
                    </div>
                    
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="fa-regular fa-calendar-days"></i> <?php echo $formattedDate; ?></span>
                            <span><i class="fa-regular fa-user"></i> By <?php echo $blog['author']; ?></span>
                        </div>
                        
                        <a href="blog-details.php?slug=<?php echo $blog['slug']; ?>" class="blog-title">
                            <?php echo $blog['title']; ?>
                        </a>
                        
                        <p class="blog-excerpt">
                            <?php echo $excerpt; ?>
                        </p>
                        
                        <a href="blog-details.php?slug=<?php echo $blog['slug']; ?>" class="read-more-btn">
                            Read More <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<!-- NEWSLETTER SECTION -->
<section class="newsletter-section reveal">
    <div class="container">
        <div class="newsletter-wrapper">
            <h2>Subscribe to Our Newsletter</h2>
            <p>Get the latest updates on spice markets, new product launches, and exclusive export quotations directly to your inbox.</p>
            
            <form action="#" method="POST" class="newsletter-form">
                <input type="email" name="email" placeholder="Enter your business email address..." required>
                <button type="submit" class="newsletter-btn">Subscribe Now <i class="fa-regular fa-paper-plane ms-1"></i></button>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- JAVASCRIPT LOGIC (Counter, Lightbox & Scroll) -->
<script>
    // 1. ANIMATED NUMBER COUNTER LOGIC
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll('.counter');
        const options = { threshold: 0.5 };
        
        const counterObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const targetElement = entry.target;
                    const targetNumber = +targetElement.getAttribute('data-target');
                    
                    const updateCount = () => {
                        const current = +targetElement.innerText;
                        const increment = targetNumber / 40; 

                        if (current < targetNumber) {
                            targetElement.innerText = Math.ceil(current + increment);
                            setTimeout(updateCount, 40);
                        } else {
                            targetElement.innerText = targetNumber;
                        }
                    };
                    
                    updateCount();
                    observer.unobserve(targetElement);
                }
            });
        }, options);

        counters.forEach(counter => {
            counterObserver.observe(counter);
        });
    });

    // 2. LIGHTBOX LOGIC
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');

    function openLightbox(imageSrc) {
        lightboxImg.src = imageSrc;
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        lightbox.classList.remove('active');
        document.body.style.overflow = 'auto';
        setTimeout(() => { lightboxImg.src = ''; }, 300);
    }

    lightbox.addEventListener('click', (e) => {
        if(e.target === lightbox) { closeLightbox(); }
    });

    document.addEventListener('keydown', (e) => {
        if(e.key === "Escape" && lightbox.classList.contains('active')) { closeLightbox(); }
    });

    // 3. SCROLL ANIMATION
    document.addEventListener("DOMContentLoaded", function() {
        const reveals = document.querySelectorAll(".reveal");
        const revealOnScroll = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active");
                    observer.unobserve(entry.target); 
                }
            });
        }, {
            root: null,
            threshold: 0.15 
        });

        reveals.forEach(reveal => {
            revealOnScroll.observe(reveal);
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
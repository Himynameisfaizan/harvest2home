<?php
// 1. Breadcrumb ke liye Title set karein
$pageTitle = "Company Profile"; 
?>

<!-- Include Header (Aapke actual file path ke hisaab se adjust karein) -->
<?php include 'includes/header.php'; ?>

<!-- Include Breadcrumb -->
<?php include 'includes/breadcrumb.php'; ?>

<!-- ==============================
     1. ABOUT COMPANY SECTION
     ============================== -->
<section class="inner-about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 reveal">
                <div class="about-image-collage">
                    <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=800&auto=format&fit=crop" alt="K2K Factory" class="about-img-1">
                    <img src="https://images.unsplash.com/photo-1615486171448-4228965f7c32?q=80&w=600&auto=format&fit=crop" alt="Premium Spices" class="about-img-2">
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5 reveal">
                <span class="sec-subtitle">About K2K Brand</span>
                <h2 class="sec-title">From Harvest to Home, Now Kisan To Kitchen.</h2>
                <p class="about-desc">
                    Started as Harvest2Home Industry Pvt Ltd, we have rebranded ourselves to <strong>Kisan To Kitchen (K2K)</strong> to reflect our core philosophy. We eliminate the middlemen and work directly with the heart of agriculture—our local farmers.
                </p>
                <p class="about-desc">
                    As a globally recognized exporter, we specialize in processing, packaging, and exporting the finest whole and blended spices. Our state-of-the-art manufacturing facility ensures that every product reaching your kitchen retains its natural oils, authentic aroma, and export-grade purity.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ==============================
     2. MISSION & VISION SECTION
     ============================== -->
<section class="mv-section">
    <div class="container">
        <div class="row g-4">
            <!-- Mission Card -->
            <div class="col-lg-6 reveal">
                <div class="mv-card">
                    <i class="fa-solid fa-bullseye mv-icon"></i>
                    <h3 class="mv-title">Our Mission</h3>
                    <p class="about-desc">
                        To empower farmers by giving them a global platform and fair value for their produce, while providing international consumers with 100% pure, hygienic, and unadulterated spices that enhance the flavor and health of every meal.
                    </p>
                </div>
            </div>
            <!-- Vision Card -->
            <div class="col-lg-6 reveal">
                <div class="mv-card">
                    <i class="fa-solid fa-eye mv-icon"></i>
                    <h3 class="mv-title">Our Vision</h3>
                    <p class="about-desc">
                        To become the world's most trusted and sustainable exporter of Indian agricultural products, recognized globally for bridging the gap between authentic traditional farming and modern kitchens with uncompromising quality standards.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==============================
     3. WHY CHOOSE US
     ============================== -->
<section class="inner-wcu">
    <div class="container">
        <div class="row text-center mb-5 reveal">
            <div class="col-12">
                <span class="sec-subtitle">The K2K Advantage</span>
                <h2 class="sec-title">Why Partner With Us?</h2>
            </div>
        </div>
        
        <div class="row align-items-center">
            <!-- Left Side Points -->
            <div class="col-lg-4 reveal">
                <div class="wcu-list-item">
                    <div class="wcu-list-icon"><i class="fa-solid fa-leaf"></i></div>
                    <div class="wcu-list-content">
                        <h4>100% Pure & Organic</h4>
                        <p>Our spices are completely free from artificial colors, preservatives, and adulterants.</p>
                    </div>
                </div>
                <div class="wcu-list-item">
                    <div class="wcu-list-icon"><i class="fa-solid fa-certificate"></i></div>
                    <div class="wcu-list-content">
                        <h4>Certified Quality</h4>
                        <p>We adhere to strict international food safety and export quality certifications.</p>
                    </div>
                </div>
            </div>
            
            <!-- Center Image -->
            <div class="col-lg-4 text-center reveal">
                <img src="https://images.unsplash.com/photo-1599909631717-380d0d84c1f5?q=80&w=600&auto=format&fit=crop" alt="Why Choose Us" style="width: 100%; border-radius: 50%; padding: 10px; border: 2px dashed var(--accent-orange);">
            </div>
            
            <!-- Right Side Points -->
            <div class="col-lg-4 reveal">
                <div class="wcu-list-item">
                    <div class="wcu-list-icon"><i class="fa-solid fa-box-open"></i></div>
                    <div class="wcu-list-content">
                        <h4>Moisture-Proof Packaging</h4>
                        <p>Premium packaging that locks in the aroma and essential oils for a longer shelf life.</p>
                    </div>
                </div>
                <div class="wcu-list-item">
                    <div class="wcu-list-icon"><i class="fa-solid fa-truck-fast"></i></div>
                    <div class="wcu-list-content">
                        <h4>Timely Global Delivery</h4>
                        <p>Robust supply chain network ensuring on-time delivery across all international borders.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==============================
     4. HOW WE WORK (WORKING PROCESS)
     ============================== -->
<section class="process-section">
    <div class="container">
        <div class="row text-center mb-4 reveal">
            <div class="col-12">
                <span class="sec-subtitle" style="color: #ffffff;">Our Supply Chain</span>
                <h2 class="sec-title" style="color: #ffffff;">How We Work</h2>
            </div>
        </div>

        <div class="process-grid reveal">
            <!-- Step 1 -->
            <div class="process-step">
                <div class="process-icon"><i class="fa-solid fa-tractor"></i></div>
                <h4>1. Farm Sourcing</h4>
                <p>Procuring the finest raw materials directly from trusted local farmers.</p>
            </div>
            <!-- Step 2 -->
            <div class="process-step">
                <div class="process-icon"><i class="fa-solid fa-gears"></i></div>
                <h4>2. Hygienic Processing</h4>
                <p>Cleaning and grinding in our state-of-the-art, zero-human-touch facility.</p>
            </div>
            <!-- Step 3 -->
            <div class="process-step">
                <div class="process-icon"><i class="fa-solid fa-microscope"></i></div>
                <h4>3. Quality Testing</h4>
                <p>Rigorous lab testing for purity, aroma, and essential oil content.</p>
            </div>
            <!-- Step 4 -->
            <div class="process-step">
                <div class="process-icon"><i class="fa-solid fa-ship"></i></div>
                <h4>4. Global Export</h4>
                <p>Premium packaging and shipping securely to international markets.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==============================
     5. FREQUENTLY ASKED QUESTIONS
     ============================== -->
<section class="section-padding bg-light-gray">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-lg-8 reveal">
                <div class="text-center mb-5">
                    <span class="sec-subtitle">Clear Your Doubts</span>
                    <h2 class="sec-title">Frequently Asked Questions</h2>
                </div>

                <!-- Bootstrap 5 Accordion -->
                <div class="accordion faq-accordion" id="k2kFaqAccordion">
                    
                    <!-- FAQ Item 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                Are your spices certified for international export?
                            </button>
                        </h2>
                        <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#k2kFaqAccordion">
                            <div class="accordion-body">
                                Yes, absolute perfection is our standard. Our products undergo rigorous quality control and hold the necessary certifications required for international export, ensuring they meet the health and safety regulations of destination countries.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                Do you provide bulk purchasing and private labeling?
                            </button>
                        </h2>
                        <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#k2kFaqAccordion">
                            <div class="accordion-body">
                                Yes, we specialize in B2B bulk orders. We also offer private labeling (OEM) services for brands looking to sell our premium spices under their own brand name. Please contact our sales team for customized packaging solutions.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                What makes 'Kisan To Kitchen' different from others?
                            </button>
                        </h2>
                        <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#k2kFaqAccordion">
                            <div class="accordion-body">
                                Our name says it all. We eliminate multiple middlemen by sourcing directly from farmers (Kisan). This not only ensures maximum freshness and 100% unadulterated quality but also provides fair compensation to the growers.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                What is your minimum order quantity (MOQ)?
                            </button>
                        </h2>
                        <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#k2kFaqAccordion">
                            <div class="accordion-body">
                                Our MOQ varies depending on the product type (whole spices vs. blended powders) and the destination country. You can click on "Get Free Quotation" and share your requirements, and our team will get back to you with the exact details.
                            </div>
                        </div>
                    </div>

                </div> <!-- End Accordion -->
            </div>

        </div>
    </div>
</section>

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
        }, { threshold: 0.15 });

        reveals.forEach(reveal => revealOnScroll.observe(reveal));
    });
</script>

<!-- Include Footer -->
<?php include 'includes/footer.php'; ?>
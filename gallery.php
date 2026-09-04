<?php
$pageTitle = "Our Gallery";
include 'includes/header.php';
include 'includes/breadcrumb.php';
?>


<section class="gallery-page-section">
    <div class="container">

        <!-- Gallery Filters -->
        <div class="row reveal">
            <div class="col-12 text-center">
                <div class="gallery-filters">
                    <button class="filter-btn active">All Photos</button>
                    <button class="filter-btn">Farms & Sourcing</button>
                    <button class="filter-btn">Factory Processing</button>
                    <button class="filter-btn">Packaging</button>
                    <button class="filter-btn">Export Deliveries</button>
                </div>
            </div>
        </div>

        <!-- 12 Images Gallery Grid -->
        <div class="gallery-grid reveal">
            <?php
            // Dummy Data array for 12 Gallery Images
            $gallery_items = [
                ["img" => "https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=800", "title" => "Red Chilli Processing"],
                ["img" => "https://images.unsplash.com/photo-1615486171448-4228965f7c32?q=80&w=800", "title" => "Turmeric Farm"],
                ["img" => "https://images.unsplash.com/photo-1599909631717-380d0d84c1f5?q=80&w=800", "title" => "Spices Packaging"],
                ["img" => "https://images.unsplash.com/photo-1606914501449-5a96b6ce24ca?q=80&w=800", "title" => "Export Loading"],
                ["img" => "https://images.unsplash.com/photo-1606913084603-3e7702b01627?q=80&w=800", "title" => "Quality Check"],
                ["img" => "https://images.unsplash.com/photo-1610444586938-1ee4b77242ba?q=80&w=800", "title" => "Green Cardamom"],
                ["img" => "https://images.unsplash.com/photo-1596647271810-67c47d6d59b2?q=80&w=800", "title" => "Raw Material"],
                ["img" => "https://images.unsplash.com/photo-1613214149811-37d457497d39?q=80&w=800", "title" => "Clove Sourcing"],
                ["img" => "https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=800", "title" => "Lab Testing"],
                ["img" => "https://images.unsplash.com/photo-1615486171448-4228965f7c32?q=80&w=800", "title" => "Machine Grinding"],
                ["img" => "https://images.unsplash.com/photo-1599909631717-380d0d84c1f5?q=80&w=800", "title" => "Bulk Storage"],
                ["img" => "https://images.unsplash.com/photo-1606914501449-5a96b6ce24ca?q=80&w=800", "title" => "Finished Product"]
            ];

            foreach ($gallery_items as $item):
            ?>

                <div class="gallery-item" onclick="openLightbox('<?php echo $item['img']; ?>')">
                    <img src="<?php echo $item['img']; ?>" alt="K2K Gallery">
                    <!-- Hover Overlay -->
                    <div class="gallery-overlay">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                        <span><?php echo $item['title']; ?></span>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>

        <!-- Pagination Section -->
        <div class="row reveal">
            <div class="col-12">
                <ul class="k2k-pagination">
                    <li class="prev"><a href="#"><i class="fa-solid fa-arrow-left me-2"></i> Prev</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="next"><a href="#">Next <i class="fa-solid fa-arrow-right ms-2"></i></a></li>
                </ul>
            </div>
        </div>

    </div>
</section>

<!-- Lightbox Modal Container -->
<div class="k2k-lightbox" id="lightbox">
    <div class="lightbox-close" onclick="closeLightbox()">&times;</div>
    <img id="lightbox-img" src="" alt="Enlarged Gallery Image">
</div>

<!-- ==============================
     JAVASCRIPT FOR LIGHTBOX & SCROLL
     ============================== -->
<script>
    // 1. LIGHTBOX LOGIC
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');

    function openLightbox(imageSrc) {
        lightboxImg.src = imageSrc;
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden'; // Disable background scrolling
    }

    function closeLightbox() {
        lightbox.classList.remove('active');
        document.body.style.overflow = 'auto'; // Enable background scrolling
        setTimeout(() => {
            lightboxImg.src = '';
        }, 300); // Clear image after animation
    }

    // Close lightbox if clicked outside the image
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });

    // Close lightbox on 'Escape' key press
    document.addEventListener('keydown', (e) => {
        if (e.key === "Escape" && lightbox.classList.contains('active')) {
            closeLightbox();
        }
    });

    // 2. SCROLL ANIMATION
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
            threshold: 0.1
        });

        reveals.forEach(reveal => revealOnScroll.observe(reveal));
    });
</script>

<!-- Include Footer -->
<?php include 'includes/footer.php'; ?>
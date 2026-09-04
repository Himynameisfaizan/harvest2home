<?php
$pageTitle = "News & Insights"; 
include 'includes/header.php';
include 'includes/breadcrumb.php';
?>

<section class="blog-page-section">
    <div class="container">
        
        <!-- FEATURED POST -->
        <div class="row reveal">
            <div class="col-12">
                <div class="featured-blog">
                    <div class="featured-img-wrapper">
                        <span class="featured-category">Global Export</span>
                        <a href="blog-details.php">
                            <img src="https://images.unsplash.com/photo-1606914501449-5a96b6ce24ca?q=80&w=1200" alt="Featured Post">
                        </a>
                    </div>
                    <div class="featured-content">
                        <div class="featured-meta">
                            <i class="fa-regular fa-calendar-days"></i> Sep 04, 2026
                            <i class="fa-regular fa-user"></i> Admin
                        </div>
                        <a href="blog-details.php" class="featured-title">How K2K Ensures Zero-Adulteration in Spice Export</a>
                        <p class="featured-excerpt">Discover our state-of-the-art processing facility where we employ cryogenic grinding and zero-human-touch packaging to maintain the highest international food safety standards.</p>
                        <a href="blog-details.php" class="btn-theme" style="background: var(--primary-green); color: white; padding: 12px 30px; border-radius: 30px; text-decoration: none; font-weight: 600; align-self: flex-start;">Read Full Article <i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- BLOG GRID -->
        <div class="row g-4 mt-2">
            <?php 
            $blogs = [
                ["title" => "Top 5 Health Benefits of Consuming Pure Turmeric Daily", "date" => "Sep 01, 2026", "cat" => "Health", "img" => "https://images.unsplash.com/photo-1615486171448-4228965f7c32?q=80&w=800"],
                ["title" => "The Journey of Red Chilli: From Farm to Your Kitchen", "date" => "Aug 15, 2026", "cat" => "Farming", "img" => "https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=800"],
                ["title" => "Why Indian Spices Dominate the Global Market", "date" => "Aug 02, 2026", "cat" => "Market Trends", "img" => "https://images.unsplash.com/photo-1599909631717-380d0d84c1f5?q=80&w=800"],
                ["title" => "Understanding the Role of Essential Oils in Spices", "date" => "Jul 20, 2026", "cat" => "Quality", "img" => "https://images.unsplash.com/photo-1606913084603-3e7702b01627?q=80&w=800"],
                ["title" => "The Perfect Packaging for Long Shelf Life", "date" => "Jul 10, 2026", "cat" => "Export", "img" => "https://images.unsplash.com/photo-1613214149811-37d457497d39?q=80&w=800"],
                ["title" => "K2K Expands Operations to European Markets", "date" => "Jun 25, 2026", "cat" => "Company News", "img" => "https://images.unsplash.com/photo-1610444586938-1ee4b77242ba?q=80&w=800"]
            ];

            foreach($blogs as $blog): 
            ?>
            <div class="col-lg-4 col-md-6 reveal">
                <div class="blog-card">
                    <div class="blog-img-wrapper">
                        <span class="featured-category" style="top: 15px; left: 15px; font-size: 10px; padding: 4px 12px;"><?php echo $blog['cat']; ?></span>
                        <a href="blog-details.php">
                            <img src="<?php echo $blog['img']; ?>" alt="Blog Image">
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="featured-meta" style="font-size: 13px;">
                            <i class="fa-regular fa-calendar-days"></i> <?php echo $blog['date']; ?>
                        </div>
                        <a href="blog-details.php" class="blog-title"><?php echo $blog['title']; ?></a>
                        <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
                        <a href="blog-details.php" class="read-more-btn">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- PAGINATION (Reused from products page) -->
        <div class="row reveal mt-5">
            <div class="col-12 text-center">
                <a href="#" class="btn-theme" style="background: transparent; border: 2px solid var(--primary-green); color: var(--primary-green); padding: 12px 40px; border-radius: 30px; font-weight: 700; text-decoration: none;">Load More Articles <i class="fa-solid fa-rotate-right ms-2"></i></a>
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
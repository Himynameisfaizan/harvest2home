<?php
$pageTitle = "Our Products";

include 'includes/header.php';

include 'includes/breadcrumb.php';
?>

<section class="products-page-section">
    <div class="container">

        <!-- Filter & Sorting Bar -->
        <div class="filter-bar reveal">
            <div class="filter-result-count">
                Showing <span>1–12</span> of 24 results
            </div>
            <div class="sort-box">
                <label for="sortBy">Sort by:</label>
                <select id="sortBy">
                    <option value="default">Default sorting</option>
                    <option value="popularity">Popularity</option>
                    <option value="new">Latest Spices</option>
                    <option value="name_asc">Name: A to Z</option>
                </select>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="row g-4">
            <?php
            // 12 Products array for Page 1
            $all_products = [
                ["name" => "Premium Red Chilli Powder", "img" => "https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=800"],
                ["name" => "Organic Turmeric Powder", "img" => "https://images.unsplash.com/photo-1615486171448-4228965f7c32?q=80&w=800"],
                ["name" => "Coriander (Dhaniya) Powder", "img" => "https://images.unsplash.com/photo-1599909631717-380d0d84c1f5?q=80&w=800"],
                ["name" => "Black Pepper Seeds", "img" => "https://images.unsplash.com/photo-1606914501449-5a96b6ce24ca?q=80&w=800"],
                ["name" => "Pure Cumin (Jeera) Seeds", "img" => "https://images.unsplash.com/photo-1606913084603-3e7702b01627?q=80&w=800"],
                ["name" => "Green Cardamom", "img" => "https://images.unsplash.com/photo-1610444586938-1ee4b77242ba?q=80&w=800"],
                ["name" => "K2K Special Garam Masala", "img" => "https://images.unsplash.com/photo-1596647271810-67c47d6d59b2?q=80&w=800"],
                ["name" => "Whole Cloves (Laung)", "img" => "https://images.unsplash.com/photo-1613214149811-37d457497d39?q=80&w=800"],
                ["name" => "Mustard (Sarson) Seeds", "img" => "https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=800"], // Dummy img
                ["name" => "Star Anise (Chakra Phool)", "img" => "https://images.unsplash.com/photo-1615486171448-4228965f7c32?q=80&w=800"], // Dummy img
                ["name" => "Cinnamon (Dalchini) Sticks", "img" => "https://images.unsplash.com/photo-1599909631717-380d0d84c1f5?q=80&w=800"], // Dummy img
                ["name" => "Fennel (Saunf) Seeds", "img" => "https://images.unsplash.com/photo-1606914501449-5a96b6ce24ca?q=80&w=800"] // Dummy img
            ];

            // Loop for 12 Products
            foreach ($all_products as $key => $product):
                // Creating a dummy ID for links
                $id = $key + 1;
            ?>

                <!-- Product Item -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 reveal">
                    <div class="product-card">

                        <a href="product-details.php?id=<?php echo $id; ?>" class="product-img-link">
                            <div class="product-img-wrapper">
                                <img src="<?php echo $product['img']; ?>" alt="<?php echo $product['name']; ?>">
                                <div class="view-details-overlay">
                                    <span>View Details</span>
                                </div>
                            </div>
                        </a>

                        <div class="product-content">
                            <a href="product-details.php?id=<?php echo $id; ?>" class="product-title-link">
                                <h3 class="product-title"><?php echo $product['name']; ?></h3>
                            </a>

                            <div class="product-actions">
                                <a href="quotation.php?product=<?php echo urlencode($product['name']); ?>" class="btn-quote-sm">
                                    Request to Quote
                                </a>
                                <!-- Call icon link -->
                                <a href="tel:+919717179432" class="btn-call-sm" title="Call for Enquiry">
                                    <i class="fa-solid fa-phone"></i>
                                </a>
                            </div>
                        </div>

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
                    <li><a href="#">...</a></li>
                    <li class="next"><a href="#">Next <i class="fa-solid fa-arrow-right ms-2"></i></a></li>
                </ul>
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
        }, {
            threshold: 0.1
        }); // Trigger slightly earlier for grid items

        reveals.forEach(reveal => revealOnScroll.observe(reveal));
    });
</script>

<!-- Include Footer -->
<?php include 'includes/footer.php'; ?>
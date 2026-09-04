<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kisan to Kitchen</title>
</head>
<body>
    
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/style/include.css">
<link rel="stylesheet" href="assets/style/style.css">
<link rel="stylesheet" href="assets/style/about.css">
<link rel="stylesheet" href="assets/style/product.css">
<link rel="stylesheet" href="assets/style/blog.css">
<link rel="stylesheet" href="assets/style/gallery.css">
<link rel="stylesheet" href="assets/style/contact.css">

<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>


<div class="topbar">
    <div class="topbar-left">
        <span><i class="fa-solid fa-envelope"></i> info@kisantokitchen.com</span>
    </div>
    <div class="topbar-right">
        <span><i class="fa-solid fa-phone"></i> +91 97171 79432</span>
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
    </div>
</div>

<header class="main-header" id="header">
    <nav class="navbar">
        <div class="logo">
            <a href="index.php">
                <img src="assets/images/logo/logo.png" alt="Kisan to Kitchen Logo">
            </a>
        </div>

        <ul class="nav-links">
            <li><a href="index.php" class="<?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : ''; ?>">Home</a></li>
            <li><a href="about.php" class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">About Us</a></li>
            <li><a href="products.php" class="<?php echo ($current_page == 'products.php') ? 'active' : ''; ?>">Our Products</a></li>
            <li><a href="blog.php" class="<?php echo ($current_page == 'blog.php') ? 'active' : ''; ?>">Blog</a></li>
            <li><a href="gallery.php" class="<?php echo ($current_page == 'gallery.php') ? 'active' : ''; ?>">Our Gallery</a></li>
            <li><a href="contact.php" class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact Page</a></li>
            <li><a href="contact.php" class="btn-quote">Get Free Quotation</a></li>
        </ul>

        <button class="menu-toggle" id="mobile-menu">
            <i class="fa-solid fa-bars-staggered"></i>
        </button>
    </nav>
</header>

<script>
    const mobileMenuBtn = document.getElementById('mobile-menu');
    const navLinks = document.querySelector('.nav-links');
    const header = document.getElementById('header');
    const menuIcon = document.querySelector('.menu-toggle i');

    // Toggle Mobile Menu
    mobileMenuBtn.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        
        // Change icon from bars to cross
        if(navLinks.classList.contains('active')){
            menuIcon.classList.remove('fa-bars-staggered');
            menuIcon.classList.add('fa-xmark');
        } else {
            menuIcon.classList.remove('fa-xmark');
            menuIcon.classList.add('fa-bars-staggered');
        }
    });

    // Close menu when clicked outside or on a link
    document.querySelectorAll('.nav-links li a').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('active');
            menuIcon.classList.remove('fa-xmark');
            menuIcon.classList.add('fa-bars-staggered');
        });
    });
</script>
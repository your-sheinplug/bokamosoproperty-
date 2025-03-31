<?php
$properties = [
    ["title" => "Luxury Apartment", "price" => "$500,000", "img" => "property1.jpg"],
    ["title" => "Modern Villa", "price" => "$850,000", "img" => "property2.jpg"]
];

$blogs = [
    ["title" => "Real Estate Trends 2025", "img" => "blog1.jpg"],
    ["title" => "Investing in Commercial Properties", "img" => "blog2.jpg"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Consultancy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body { background-color: #222; color: #fff; }
        .hero { background: url('hero-image.jpg') center/cover no-repeat; height: 50vh; display: flex; align-items: center; justify-content: center; text-align: center; }
        .dark-section { background-color: #333; padding: 20px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Property Consultancy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#featured">Featured Properties</a></li>
                    <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="hero text-white">
        <h1>Expert Property Consultancy</h1>
    </div>
    
    <section id="services" class="container my-5">
        <h2>Our Services</h2>
        <p>We offer property investment advice, market analysis, legal assistance, and more.</p>
    </section>
    
    <section id="featured" class="container dark-section">
        <h2>Featured Properties</h2>
        <div class="row">
            <?php foreach ($properties as $property): ?>
                <div class='col-md-6'>
                    <div class='card bg-dark text-white mb-3'>
                        <img src='<?= $property["img"] ?>' class='card-img-top' alt='Property Image'>
                        <div class='card-body'>
                            <h5 class='card-title'><?= $property["title"] ?></h5>
                            <p class='card-text'>Price: <?= $property["price"] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    
    <section id="blog" class="container my-5">
        <h2>Latest Blog Posts</h2>
        <div class="row">
            <?php foreach ($blogs as $blog): ?>
                <div class='col-md-6'>
                    <div class='card bg-dark text-white mb-3'>
                        <img src='<?= $blog["img"] ?>' class='card-img-top' alt='Blog Image'>
                        <div class='card-body'>
                            <h5 class='card-title'><?= $blog["title"] ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    
    <footer class="bg-dark text-center text-white py-3">
        <p>&copy; 2025 Property Consultancy. All rights reserved.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

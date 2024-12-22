<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Leading provider of aftermarket distribution and MRO services.">
    <title>About us</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
    <style>
            /* Hero Section */
.hero {
    background: url('images/product-hero.jpeg') no-repeat center center/cover;
    height: 50vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    padding: 20px;
}

.hero-content h1 {
    font-size: 2.5rem;
    margin: 0;
    color : red;
}

.hero-content p {
    margin-top: 10px;
    font-size: 1.2rem;
}
.container {
    margin: 0 auto;
    padding: 20px;
}
.products-section {
      max-width: 1200px;
      margin: 0 auto;
      padding: 40px 20px;
    }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .product-card {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .product-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .product-details {
      padding: 15px;
      text-align: center;
    }

    .product-name {
      font-size: 1.2rem;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .product-description {
      font-size: 0.9rem;
      color: #666;
      margin-bottom: 15px;
    }

    .product-rating {
      font-size: 1.1rem;
      color: #fdbb1d;
      margin-top: 10px;
    }

    .product-rating i {
      margin: 0 2px;
    }
@media (max-width: 768px) {
    .hero-content h1 {
        font-size: 2rem;
    }

    .hero-content p {
        font-size: 1rem;
    }
}
</style>
</head>
<body>
<?php include 'navbar.php';?>

<!-- Hero Section -->
<section class="hero">
 <div class="hero-content">
     <h1>Our Products</h1>
     <p style="color:white">We are here to help you. Get in touch with us for any inquiries or support.</p>
 </div>
</section>

 <!-- Products Section -->
 <section class="products-section">
    <div class="product-grid">
      <!-- Product 1 -->
      <div class="product-card">
        <img
          src="https://via.placeholder.com/300x200"
          alt="Product 1"
          class="product-image"
        />
        <div class="product-details">
          <h3 class="product-name">Product 1</h3>
          <p class="product-description">
            High-quality product to meet your needs.
          </p>
          <div class="product-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
      </div>

      <!-- Product 2 -->
      <div class="product-card">
        <img
          src="https://via.placeholder.com/300x200"
          alt="Product 2"
          class="product-image"
        />
        <div class="product-details">
          <h3 class="product-name">Product 2</h3>
          <p class="product-description">
            Engineered for optimal performance and durability.
          </p>
          <div class="product-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>

      <!-- Product 3 -->
      <div class="product-card">
        <img
          src="https://via.placeholder.com/300x200"
          alt="Product 3"
          class="product-image"
        />
        <div class="product-details">
          <h3 class="product-name">Product 3</h3>
          <p class="product-description">
            Designed to simplify your life with quality.
          </p>
          <div class="product-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>

      <!-- Product 4 -->
      <div class="product-card">
        <img
          src="https://via.placeholder.com/300x200"
          alt="Product 4"
          class="product-image"
        />
        <div class="product-details">
          <h3 class="product-name">Product 4</h3>
          <p class="product-description">
            Innovative solutions for modern needs.
          </p>
          <div class="product-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
      </div>
            <!-- Product 5 -->
            <div class="product-card">
        <img
          src="https://via.placeholder.com/300x200"
          alt="Product 5"
          class="product-image"
        />
        <div class="product-details">
          <h3 class="product-name">Product 5</h3>
          <p class="product-description">
            Designed to simplify your life with quality.
          </p>
          <div class="product-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
            <!-- Product 6 -->
            <div class="product-card">
        <img
          src="https://via.placeholder.com/300x200"
          alt="Product 6"
          class="product-image"
        />
        <div class="product-details">
          <h3 class="product-name">Product 6</h3>
          <p class="product-description">
            Designed to simplify your life with quality.
          </p>
          <div class="product-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
            <!-- Product 7 -->
            <div class="product-card">
        <img
          src="https://via.placeholder.com/300x200"
          alt="Product 7"
          class="product-image"
        />
        <div class="product-details">
          <h3 class="product-name">Product 7</h3>
          <p class="product-description">
            Designed to simplify your life with quality.
          </p>
          <div class="product-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
            <!-- Product 8 -->
            <div class="product-card">
        <img
          src="https://via.placeholder.com/300x200"
          alt="Product 8"
          class="product-image"
        />
        <div class="product-details">
          <h3 class="product-name">Product 8</h3>
          <p class="product-description">
            Designed to simplify your life with quality.
          </p>
          <div class="product-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
            <!-- Product 9 -->
            <div class="product-card">
        <img
          src="https://via.placeholder.com/300x200"
          alt="Product 9"
          class="product-image"
        />
        <div class="product-details">
          <h3 class="product-name">Product 9</h3>
          <p class="product-description">
            Designed to simplify your life with quality.
          </p>
          <div class="product-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
            <!-- Product 10 -->
            <div class="product-card">
        <img
          src="https://via.placeholder.com/300x200"
          alt="Product 10"
          class="product-image"
        />
        <div class="product-details">
          <h3 class="product-name">Product 10</h3>
          <p class="product-description">
            Designed to simplify your life with quality.
          </p>
          <div class="product-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
    </div>
</section>
<br><hr>
<?php include 'footer.php';?>
    <script src="script.js"></script>
</body>
</html>
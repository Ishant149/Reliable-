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
    background: url('images/about-us.jpeg') no-repeat center center/cover;
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

/* Section Styling */
.mission-section, .story-section {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 40px;
    gap: 20px;
    flex-wrap: wrap;
}

.mission-section img, .story-section img {
    width: 48%;
    border-radius: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.mission-content, .story-content {
    width: 48%;
    padding: 20px;
}

/* Text Styling */
.mission-content h2, .story-content h2 {
    font-size: 24px;
    color: #333;
}

.mission-content p, .story-content p {
    font-size: 16px;
    color: #555;
    line-height: 1.6;
}

/* Image Hover Effect */
img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Button-like Hover for Text Blocks */
.mission-content:hover, .story-content:hover {
    background-color: #f0f0f0;
    border-radius: 10px;
    transition: background-color 0.3s ease;
}
.testimonial-section {
    text-align: center;
    padding: 50px 20px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.testimonial-section h2 {
    font-size: 24px;
    color: #333;
}

.testimonial-section p {
    font-size: 16px;
    color: #555;
    margin-bottom: 30px;
}

.testimonial-slider {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
    overflow: hidden;
}

.testimonial-content {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.testimonial-item {
    min-width: 100%;
    box-sizing: border-box;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #eee;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.testimonial-image img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin-bottom: 20px;
}

blockquote {
    font-size: 16px;
    color: #666;
    font-style: italic;
    line-height: 1.6;
    margin-bottom: 20px;
}

h4 {
    font-size: 18px;
    color: #333;
    margin-bottom: 5px;
}

p {
    font-size: 14px;
    color: #777;
}

/* Slider Buttons */
.slider-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: #fff;
    border: none;
    font-size: 24px;
    cursor: pointer;
    padding: 10px 15px;
    border-radius: 50%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s ease;
    z-index: 10;
}

.slider-btn:hover {
    background-color: #f0f0f0;
}

.prev {
    left: 10px;
}

.next {
    right: 10px;
}

/* Slider Dots */
.slider-dots {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.slider-dots span {
    width: 10px;
    height: 10px;
    background-color: #ddd;
    border-radius: 50%;
    margin: 0 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.slider-dots span.active {
    background-color:rgb(255, 0, 0);
}
.stats-section {
      text-align: center;
      padding: 50px 20px;
      background-color: #ffd1d1;
    }

    .stats-section h2 {
      font-size: 28px;
      margin-bottom: 30px;
      color: #2d3748;
    }

    .stats-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .stats-box {
      background: #ffffff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      padding: 20px;
      width: 280px;
      text-align: center;
      transition: transform 0.3s ease;
    }

    .stats-box:hover {
      transform: translateY(-5px);
    }

    .stats-box img {
      width: 60px;
      margin-bottom: 15px;
    }

    .stats-box h3 {
      font-size: 22px;
      margin-bottom: 10px;
      color: #2d3748;
    }

    .stats-box a {
      color: #3182ce;
      text-decoration: none;
      font-size: 14px;
      font-weight: bold;
      display: inline-block;
      margin-top: 10px;
    }

/* Responsiveness */
@media (max-width: 768px) {
    .mission-section, .story-section {
        flex-direction: column;
    }

    .mission-section img, .story-section img, 
    .mission-content, .story-content {
        width: 100%;
    }

    .mission-content, .story-content {
        padding: 10px;
    }

    .mission-content h2, .story-content h2 {
        font-size: 20px;
    }

    .mission-content p, .story-content p {
        font-size: 14px;
    }
    .hero-content h1 {
        font-size: 2rem;
    }

    .hero-content p {
        font-size: 1rem;
    }
    .testimonial-item {
        padding: 15px;
    }

    blockquote {
        font-size: 14px;
    }

    h4 {
        font-size: 16px;
    }
    .stats-box {
        width: 90%;
      }
}
    </style>
</head>
<body>
<?php include 'navbar.php';?>

<!-- Hero Section -->
<section class="hero">
 <div class="hero-content">
     <h1>About Us</h1>
     <p style="color:white">We are committed to innovation, sustainability, and excellence in everything we do.</p>
 </div>
</section>
    <div class="container">
        <!-- Mission Section -->
        <section class="mission-section">
            <img src="images/about-us.jpeg" alt="Grow Better" class="mission-image">
            <div class="mission-content">
                <h2>Our Mission: Drive Confidently with Reliable Automobile.</h2>
                <p>
                At Reliable Automobile, our mission is to redefine automotive care by providing superior-quality lubricants that enhance performance, extend engine life, and ensure environmental sustainability. We are dedicated to empowering drivers, mechanics, and businesses with innovative solutions that prioritize reliability, efficiency, and excellence. With a commitment to setting new industry standards, we aim to keep every journey smooth, safe, and unstoppable.
                </p>
            </div>
        </section><br>
        <hr><br>
        <!-- Story Section -->
        <section class="story-section">
            <div class="story-content">
                <h2>Who we are</h2>
                <p>
                At Reliable Automobile, we understand that your vehicle’s performance is more than just a need—it’s a passion. As a trusted name in the automotive industry, we specialize in delivering premium-quality lubricants tailored for all types of vehicles. From passenger cars to heavy-duty trucks, we ensure every engine is protected, optimized, and ready to excel.
                </p>
                <p>
                Our products are engineered using cutting-edge technology to meet the highest industry standards. With Reliable Automobile, you get lubricants that deliver beyond expectations.Care for your engine and the environment. Our eco-friendly lubricants are designed to reduce emissions and enhance energy efficiency without compromising on performance.Your satisfaction drives us forward. Our dedicated support team and robust product offerings ensure you always find the right solution for your automotive needs.
                </p>
            </div>
            <img src="images/who-we-are.jpg" alt="Founders" class="story-image">
        </section>
    </div>
    <br>
<hr>
<!-- stats  -->
<section class="stats-section">
    <h2>Reliable Automobile By the Numbers</h2>
    <div class="stats-container">
      <div class="stats-box">
        <img src="images/locations.jpg" alt="Global Offices Icon">
        <h3>10+ States</h3>
      </div>
      <div class="stats-box">
        <img src="images/employee.png" alt="Employees Icon">
        <h3>100+ Employees</h3>
      </div>
      <div class="stats-box">
        <img src="images/customer.png" alt="Customers Icon">
        <h3>38,000+ Customers</h3>
      </div>
    </div>
  </section>
<br>
<hr>
    <!-- testimonial section  -->
    <div class="testimonial-section">
        <h2>What Our Customers Say</h2>
        <p>See how our customers are growing their businesses and getting incredible results.</p>
        <div class="testimonial-slider">
    <button class="slider-btn prev" onclick="changeSlide(-1)">&#8249;</button>
    <div class="testimonial-content" id="testimonial-container">
        <!-- Testimonial 1 -->
        <div class="testimonial-item">
            <div class="testimonial-image">
                <img src="images/review.png" alt="Customer Image">
            </div>
            <blockquote>
                "Reliable Automobile's lubricants have completely transformed my vehicle's performance. The engine runs smoother, and I've noticed improved fuel efficiency. Truly a game-changer for anyone who values their car!"
            </blockquote>
            <h4>Ishant</h4>
            <p>Satisfied Customer</p>
        </div>
        
        <!-- Testimonial 2 -->
        <div class="testimonial-item">
            <div class="testimonial-image">
                <img src="images/review.png" alt="Customer Image">
            </div>
            <blockquote>
                "As a mechanic, I only recommend products I trust, and Reliable Automobile never disappoints. Their lubricants meet the highest standards, and my clients always notice the difference. Highly recommended!"
            </blockquote>
            <h4>Akash Chauhan</h4>
            <p>Automotive Specialist</p>
        </div>
        
        <!-- Testimonial 3 -->
        <div class="testimonial-item">
            <div class="testimonial-image">
                <img src="images/review.png" alt="Customer Image">
            </div>
            <blockquote>
                "I’ve been using Reliable Automobile's products for years, and they’ve always exceeded my expectations. Whether it's for my personal car or my fleet, their lubricants deliver unmatched durability and protection."
            </blockquote>
            <h4>Vansh Singh</h4>
            <p>Fleet Manager</p>
        </div>
        
        <!-- Testimonial 4 -->
        <div class="testimonial-item">
            <div class="testimonial-image">
                <img src="images/review.png" alt="Customer Image">
            </div>
            <blockquote>
                "I’m impressed by Reliable Automobile’s commitment to sustainability. Not only do their lubricants perform exceptionally well, but they also help reduce emissions. It's a win for me and the environment!"
            </blockquote>
            <h4>Anish Chopra</h4>
            <p>Eco-Conscious Driver</p>
        </div>
    </div>
    <button class="slider-btn next" onclick="changeSlide(1)">&#8250;</button>
</div>
<div class="slider-dots" id="slider-dots"></div>

        <div class="slider-dots" id="slider-dots"></div>
    </div>
    <?php include 'footer.php';?>
    <script src="script.js"></script>
</body>
</html>

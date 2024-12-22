<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <style>
        /* General Styling */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    line-height: 1.6;
}

h1, h2, h3 {
    color: #333;
}

/* Hero Section */
.hero {
    background: url('background.jpg') no-repeat center center/cover;
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

/* Contact Section */
.contact-us {
    padding: 50px 20px;
    background-color: #f9f9f9;
}

.contact-us h2 {
    text-align: center;
    margin-bottom: 40px;
    font-size: 2rem;
}

.contact-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.contact-info, .contact-form {
    flex: 1 1 300px;
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.contact-info h3, .contact-form h3 {
    margin-bottom: 20px;
    font-size: 1.5rem;
}

.contact-form .form-group {
    margin-bottom: 15px;
}

.contact-form .form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.contact-form .form-group input,
.contact-form .form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.contact-form .btn {
    padding: 10px 15px;
    background-color: #333;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
}

.contact-form .btn:hover {
    background-color: #555;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-content h1 {
        font-size: 2rem;
    }

    .hero-content p {
        font-size: 1rem;
    }

    .contact-container {
        flex-direction: column;
    }
}

    </style>
</head>
<body>
<?php include 'navbar.php';?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Our Contact Page</h1>
            <p>We are here to help you. Get in touch with us for any inquiries or support.</p>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section class="contact-us">
        <h2>Contact Us</h2>
        <div class="contact-container">
            <!-- Contact Information -->
            <div class="contact-info">
                <h3>Get in Touch</h3>
                <p><strong>Email:</strong> support@example.com</p>
                <p><strong>Phone:</strong> +123 456 7890</p>
                <p><strong>Address:</strong> 1234 Example Street, City, Country</p>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <h3>Send Us a Message</h3>
                <form action="contact_info.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
    <script src="script.js"></script>
    <script>
        // GSAP Animations
        gsap.registerPlugin(ScrollTrigger);

        // Hero Section Animation
        gsap.from(".hero-content h1", {
            opacity: 0,
            y: -50,
            duration: 1,
            ease: "power3.out"
        });

        gsap.from(".hero-content p", {
            opacity: 0,
            y: 50,
            duration: 1,
            delay: 0.5,
            ease: "power3.out"
        });

        // Contact Section Animation
        gsap.from(".contact-container", {
            opacity: 0,
            y: 100,
            duration: 1.5,
            ease: "power3.out",
            scrollTrigger: {
                trigger: ".contact-container",
                start: "top 80%",
                end: "top 30%",
                scrub: true,
            }
        });
    </script>

</body>
</html>

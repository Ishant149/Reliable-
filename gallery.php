<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Leading provider of aftermarket distribution and MRO services.">
    <title>Gallery</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
    <style>
        body {
            margin: 0px;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h1, h2 {
            text-align: center;
            margin: 20px 0;
            font-size: 2.5rem;
            color: #333;
        }

        h2 {
            font-size: 2rem;
            margin-top: 40px;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
            filter: brightness(0.7);
        }

        .gallery-item:hover .overlay {
            opacity: 1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
            opacity: 0;
            transition: opacity 0.3s ease;
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

        @media (max-width: 768px) {
            h1, h2 {
                font-size: 2rem;
            }

            .gallery {
                padding: 10px;
            }

            .overlay {
                font-size: 1.2rem;
            }
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
            <h1>Welcome to Our Gallery Page</h1>
            <p>We are here to help you. Get in touch with us for any inquiries or support.</p>
        </div>
    </section>

    <section>
        <h2>Category 1</h2>
        <div class="gallery">
            <div class="gallery-item">
                <img src="https://via.placeholder.com/250" alt="Category 1 Photo 1">
                <div class="overlay">Photo 1</div>
            </div>
            <div class="gallery-item">
                <img src="https://via.placeholder.com/250" alt="Category 1 Photo 2">
                <div class="overlay">Photo 2</div>
            </div>
            <div class="gallery-item">
                <img src="https://via.placeholder.com/250" alt="Category 1 Photo 3">
                <div class="overlay">Photo 3</div>
            </div>
            <div class="gallery-item">
                <img src="https://via.placeholder.com/250" alt="Category 1 Photo 4">
                <div class="overlay">Photo 4</div>
            </div>
            <div class="gallery-item">
                <img src="https://via.placeholder.com/250" alt="Category 1 Photo 5">
                <div class="overlay">Photo 5</div>
            </div>
        </div>
    </section>

    <section>
        <h2>Category 2</h2>
        <div class="gallery">
            <div class="gallery-item">
                <img src="https://via.placeholder.com/250" alt="Category 2 Photo 1">
                <div class="overlay">Photo 1</div>
            </div>
            <div class="gallery-item">
                <img src="https://via.placeholder.com/250" alt="Category 2 Photo 2">
                <div class="overlay">Photo 2</div>
            </div>
            <div class="gallery-item">
                <img src="https://via.placeholder.com/250" alt="Category 2 Photo 3">
                <div class="overlay">Photo 3</div>
            </div>
            <div class="gallery-item">
                <img src="https://via.placeholder.com/250" alt="Category 2 Photo 4">
                <div class="overlay">Photo 4</div>
            </div>
            <div class="gallery-item">
                <img src="https://via.placeholder.com/250" alt="Category 2 Photo 5">
                <div class="overlay">Photo 5</div>
            </div>
        </div>
    </section>

    <section>
        <h2>Category 3</h2>
        <div class="gallery">
            <div class="gallery-item">
                <img src="https://via.placeholder.com/250" alt="Category 3 Photo 1">
                <div class="overlay">Photo 1</div>
            </div>
            <div class="gallery-item">
                <img src="https://via.placeholder.com/250" alt="Category 3 Photo 2">
                <div class="overlay">Photo 2</div>
            </div>
            <div class="gallery-item">
                <img src="https://via.placeholder.com/250" alt="Category 3 Photo 3">
                <div class="overlay">Photo 3</div>
            </div>
            <div class="gallery-item">
                <img src="https://via.placeholder.com/250" alt="Category 3 Photo 4">
                <div class="overlay">Photo 4</div>
            </div>
            <div class="gallery-item">
                <img src="https://via.placeholder.com/250" alt="Category 3 Photo 5">
                <div class="overlay">Photo 5</div>
            </div>
        </div>
    </section>
    <br><hr>
    <?php include 'footer.php';?>
    <script src="script.js"></script>
</body>
</html>

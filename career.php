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
    background: url('images/career-hero.jpg') no-repeat center center/cover;
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

    .hero-content h1 {
        font-size: 2rem;
    }

    .hero-content p {
        font-size: 1rem;
    }

}
.join-section {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      justify-content: center;
      width: 80%;
      margin: 50px auto;
      max-width: 900px;
    }

    .join-section h2 {
      font-size: 32px;
      font-weight: bold;
      color: #222;
      margin-bottom: 20px;
    }

    .join-section p {
      font-size: 18px;
      color: #646464;
      line-height: 1.6;
      margin-bottom: 30px;
    }
    /* cards */
    .job-cards-section {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: stretch; /* Ensure all cards are of equal height */
  gap: 20px;
  padding: 40px;
  background-color: #f9f9f9;
}

.job-card {
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: center;
  padding: 20px;
  width: 300px;
  display: flex;
  flex-direction: column;
  justify-content: space-between; /* Ensure equal spacing */
  transition: transform 0.3s;
}

.job-card:hover {
  transform: translateY(-10px);
}

.job-card-icon img {
  width: 50px;
  height: 50px; /* Ensure consistent image size */
  object-fit: contain; /* Maintain aspect ratio */
  margin-bottom: 20px;
}

.job-card h3 {
  font-size: 1.5rem;
  color: #333;
  margin: 10px 0;
}

.job-card p {
  font-size: 1rem;
  color: #666;
  margin: 10px 0 20px;
  min-height: 60px; /* Ensure consistent paragraph height */
}

.job-card button {
  background: #fdbb1d;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 1rem;
  color: #fff;
  cursor: pointer;
  transition: background 0.3s;
}

.job-card button:hover {
  background: #eaa517;
}

/* joining process  */
.recruitment-process {
  text-align: center;
  padding: 50px 20px;
  background-color: #fff;
}

.recruitment-process h2 {
  font-size: 2.5rem;
  color: #333;
  margin-bottom: 10px;
}

.recruitment-process p {
  font-size: 1rem;
  color: #666;
  margin-bottom: 40px;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
}

.process-steps {
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
  gap: 70px;
}

.step {
  display: flex;
  align-items: center;
  width: 100%;
  max-width: 1200px;
  position: relative; /* Ensure the step number is positioned relative to each step */
}

.step.reverse {
  flex-direction: row-reverse;
}

.step-content {
  width: 50%;
  padding: 20px;
  text-align: left;
}

.step-content h3 {
  font-size: 1.5rem;
  color: #222;
  margin-bottom: 10px;
}

.step-content p {
  font-size: 1rem;
  color: #666;
  line-height: 1.5;
}

.step-icon {
  width: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.step-icon img {
  max-width: 80%;
  height: auto;
}

.step-number {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 60px;
  height: 60px;
  background: #fdbb1d;
  color: #fff;
  font-size: 1.5rem;
  font-weight: bold;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 2; /* Ensure it appears above other elements */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.step:nth-child(1) .step-number {
  top: 10px;
  left: 50%;
  transform: translate(-50%, -100%);
}

.step:nth-child(2) .step-number {
  top: 0;
  left: 50%;
  transform: translate(-50%, -100%);
}

.step:nth-child(3) .step-number {
  top: 0;
  left: 50%;
  transform: translate(-50%, -100%);
}
/* Contact Icons Section */
.contact-icons {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 30px;
  padding: 40px 20px;
  background-color: #f9f9f9;
}

.contact-icon {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  color: #333;
  background-color: #fff;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}

.contact-icon:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.contact-icon i {
  font-size: 2rem;
  margin-bottom: 10px;
}

.contact-icon span {
  font-size: 0.9rem;
  color: #555;
}

.contact-icon:nth-child(1) {
  color: #007bff; /* Blue for phone */
}

.contact-icon:nth-child(2) {
  color: #28a745; /* Green for email */
}

.contact-icon:nth-child(3) {
  color: #25d366; /* WhatsApp green */
}
    @media (max-width: 768px) {
      .join-section {
        width: 90%;
        padding: 30px 15px;
      }

      .join-section h2 {
        font-size: 28px;
      }

      .join-section p {
        font-size: 16px;
      }
      .contact-icons {
    flex-direction: column;
    gap: 20px;
  }

  .contact-icon {
    width: 80px;
    height: 80px;
  }

  .contact-icon i {
    font-size: 1.8rem;
  }

  .contact-icon span {
    font-size: 0.8rem;
  }
      .card {
    width: 90%;
    margin-bottom: 20px;
  }
  .process-steps {
    gap: 30px;
  }

  .process-steps {
    gap: 50px;
  }

  .step {
    flex-direction: column;
    align-items: center;
  }

  .step.reverse {
    flex-direction: column;
  }

  .step-content {
    text-align: center;
    width: 90%;
  }

  .step-icon {
    width: 90%;
    margin-bottom: 20px;
  }

  .step-number {
    top: -30px;
    left: 50%;
    transform: translate(-50%, 0);
  }
    }
    </style>
</head>
<body>
<?php include 'navbar.php';?>
<!-- Hero Section -->
<section class="hero">
 <div class="hero-content">
     <h1>Career</h1>
     <p style="color:white">We are here to help you. Get in touch with us for any inquiries or support.</p>
 </div>
</section>

<section class="join-section">
    <h2>We are hiring</h2>
    <p> Starlight launches branded products with a proprietary systematic flow that gives you the highest return on investment in the online and advertising super world.</p>
  </section>

  <!-- cards -->
  <section class="job-cards-section">
  <div class="job-card">
    <div class="job-card-icon">
      <img src="icon1.png" alt="Product Design Icon">
    </div>
    <h3>Product Design</h3>
    <p>
      Starlight launches branded products with a proprietary systematic flow
      that gives you the highest return on investment in the online advertising world.
    </p>
    <button>View Openings</button>
  </div>

  <div class="job-card">
    <div class="job-card-icon">
      <img src="icon2.png" alt="Product Development Icon">
    </div>
    <h3>Product Development</h3>
    <p>
      Starlight launches branded products with a proprietary systematic flow
      that gives you the highest return on investment in the online advertising world.
    </p>
    <button>View Openings</button>
  </div>

  <div class="job-card">
    <div class="job-card-icon">
      <img src="icon3.png" alt="Marketing Icon">
    </div>
    <h3>Marketing</h3>
    <p>
      Starlight launches branded products with a proprietary systematic flow
      that gives you the highest return on investment in the online advertising world.
    </p>
    <button>View Openings</button>
  </div>
</section>

<section class="recruitment-process">
  <h2>Our Recruitment Process</h2>
  <p>
    Starlight launches branded products with a proprietary systematic flow that gives you the highest return on investment in the online advertising world.
  </p><br>
  <div class="process-steps">
    <div class="step">
      <div class="step-content">
        <h3>Resume & Cover Letter Submission</h3>
        <p>
          Starlight launches branded products with a proprietary systematic flow
          that gives you the highest return on investment in the online advertising world.
        </p>
      </div>
      <div class="step-icon">
        <img src="images/resume.png" alt="Resume Icon">
      </div>
      <div class="step-number">1</div>
    </div>

    <div class="step reverse">
      <div class="step-content">
        <h3>Phone Call From Starlight Group</h3>
        <p>
          Starlight launches branded products with a proprietary systematic flow
          that gives you the highest return on investment in the online advertising world.
        </p>
      </div>
      <div class="step-icon">
        <img src="images/phone-call.png" alt="Phone Call Icon">
      </div>
      <div class="step-number">2</div>
    </div>

    <div class="step">
      <div class="step-content">
        <h3>Invitation To In-Person Interview</h3>
        <p>
          Starlight launches branded products with a proprietary systematic flow
          that gives you the highest return on investment in the online advertising world.
        </p>
      </div>
      <div class="step-icon">
        <img src="images/interview.png" alt="Handshake Icon">
      </div>
      <div class="step-number">3</div>
    </div>
  </div>
</section>
<h1 style="text-align:center">Contact us for joining</h1>
<section class="contact-icons">
  <a href="tel:+1234567890" class="contact-icon">
    <i class="fas fa-phone"></i>
    <span>Call Us</span>
  </a>
  <a href="mailto:info@example.com" class="contact-icon">
    <i class="fas fa-envelope"></i>
    <span>Email Us</span>
  </a>
  <a href="https://wa.me/6397279328" target="_blank" class="contact-icon">
    <i class="fab fa-whatsapp"></i>
    <span>WhatsApp Us</span>
  </a>
</section>

<br><hr>

<?php include 'footer.php';?>
<script src="script.js"></script>
</body>
</html>
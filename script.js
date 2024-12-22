document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.main-header');
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    // Scroll Event for Header
    const handleScroll = () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    };

    window.addEventListener('scroll', handleScroll);

    // Toggle navigation on hamburger click
    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        hamburger.classList.toggle('active');
    });

    // GSAP Animations
    gsap.registerPlugin(ScrollTrigger);

    // Hero Section Animation
    const heroTimeline = gsap.timeline();
    heroTimeline
        .from(".hero-text h1", {
            opacity: 0,
            y: -50,
            duration: 1,
            ease: "power3.out"
        })
        .from(".hero-text p", {
            opacity: 0,
            y: 50,
            duration: 1,
            ease: "power3.out"
        }, "-=0.5")
        .from(".hero-btn", {
            opacity: 0,
            scale: 0.8,
            duration: 1,
            ease: "elastic.out(1, 0.75)"
        }, "-=0.5")
        .from(".info-box", {
            opacity: 0,
            scale: 0.8,
            duration: 1,
            ease: "elastic.out(1, 0.75)"
        }, "-=0.5");

    // Scroll-triggered animations for .section-image img
    gsap.from(".section-image img", {
        opacity: 0,
        x: -100,
        duration: 1.5,
        ease: "power3.out",
        scrollTrigger: {
            trigger: ".section-image img",
            start: "top 80%",
            end: "top 30%",
            scrub: true,
        }
    });

    // Scroll-triggered animations for .section-content
    gsap.from(".section-content", {
        opacity: 0,
        y: 100,
        duration: 1.5,
        ease: "power3.out",
        scrollTrigger: {
            trigger: ".section-content",
            start: "top 80%",
            end: "top 30%",
            scrub: true,
        }
    });

    // Scroll-triggered animations for .section-container2 (similar to .section-content)
    gsap.from(".section-container2", {
        opacity: 0,
        y: 100,
        duration: 1.5,
        ease: "power3.out",
        scrollTrigger: {
            trigger: ".section-container2",
            start: "top 80%",
            end: "top 30%",
            scrub: true,
        }
    });
    gsap.from(".card", {
        opacity: 0,
        y: 50, // Cards slide up slightly from below
        duration: 1,
        stagger: 0.2, // Adds a delay between animations for each card
        ease: "power3.out",
        scrollTrigger: {
            trigger: ".product-category", // Animation triggers when the product-category section is in view
            start: "top 90%", // Adjust start point: when the top of the section reaches 90% of the viewport
            end: "top 10%", // Adjust end point: when the top of the section reaches 10% of the viewport
            toggleActions: "play none none none", // Animation plays only once
        },
    });
    gsap.from(".card gradient-card", {
        opacity: 0,
        y: 50, // Cards slide up slightly from below
        duration: 1,
        stagger: 0.4, // Adds a delay between animations for each card
        ease: "power3.out",
        scrollTrigger: {
            trigger: ".card gradient-card", // Animation triggers when the product-category section is in view
            start: "top 95%", // Adjust start point: when the top of the section reaches 90% of the viewport
            end: "top 5%", // Adjust end point: when the top of the section reaches 10% of the viewport
            toggleActions: "play none none none", // Animation plays only once
        },
    });
});
let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.testimonial-item');
    const dots = document.querySelectorAll('.slider-dots span');

    if (index >= slides.length) currentSlide = 0;
    if (index < 0) currentSlide = slides.length - 1;

    const offset = -currentSlide * 100;
    document.getElementById('testimonial-container').style.transform = `translateX(${offset}%)`;

    dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === currentSlide);
    });
}

function changeSlide(direction) {
    currentSlide += direction;
    showSlide(currentSlide);
}

function createDots() {
    const slides = document.querySelectorAll('.testimonial-item');
    const dotsContainer = document.getElementById('slider-dots');

    slides.forEach((_, i) => {
        const dot = document.createElement('span');
        dot.addEventListener('click', () => {
            currentSlide = i;
            showSlide(currentSlide);
        });
        dotsContainer.appendChild(dot);
    });

    showSlide(currentSlide);
}

document.addEventListener('DOMContentLoaded', createDots);

 
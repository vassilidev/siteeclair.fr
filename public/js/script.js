// Carousel des témoignages
const testimonials = document.querySelectorAll('.testimonial');
let currentTestimonial = 0;

// setInterval(() => {
//     testimonials[currentTestimonial].classList.remove('active');
//     currentTestimonial = (currentTestimonial + 1) % testimonials.length;
//     testimonials[currentTestimonial].classList.add('active');
// }, 5000);

// Accordéon FAQ
let faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach(item => {
    item.querySelector('.faq-question').addEventListener('click', () => {
        item.classList.toggle('active');
    });
});

// Menu responsive
const menuToggle = document.getElementById('mobile-menu');
const navbarLinks = document.querySelector('.navbar-links');

menuToggle.addEventListener('click', () => {
    navbarLinks.classList.toggle('active');
});
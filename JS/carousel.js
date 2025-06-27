const track = document.querySelector('.carousel-track');
const slides = Array.from(track.children);
const nextButton = document.querySelector('.next');
const prevButton = document.querySelector('.prev');

let currentIndex = 0;

// Calculate width once per render
function updateCarousel() {
    const slideWidth = slides[0].getBoundingClientRect().width;
    track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}

// Button click listeners
nextButton.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % slides.length;
    updateCarousel();
    resetAutoSlide();
});

prevButton.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    updateCarousel();
    resetAutoSlide();
});

// Smooth handling when resizing window
window.addEventListener('resize', () => {
    updateCarousel();
});

// Auto-slide every 5 seconds
let autoSlide = setInterval(() => {
    currentIndex = (currentIndex + 1) % slides.length;
    updateCarousel();
}, 5000);

// Reset timer if user interacts
function resetAutoSlide() {
    clearInterval(autoSlide);
    autoSlide = setInterval(() => {
        currentIndex = (currentIndex + 1) % slides.length;
        updateCarousel();
    }, 5000);
}

// Initialize position
window.addEventListener('load', updateCarousel);


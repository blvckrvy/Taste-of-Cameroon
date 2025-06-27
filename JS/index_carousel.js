const track = document.querySelector('.carousel-track');
const slides = Array.from(track.children);
const dotsContainer = document.querySelector('.carousel-dots');

let currentIndex = 0;

// Create dots dynamically
slides.forEach((_, index) => {
    const dot = document.createElement('span');
    dot.classList.add('dot');
    if (index === 0) dot.classList.add('active');
    dot.addEventListener('click', () => {
        currentIndex = index;
        updateCarousel();
        resetAutoSlide();
    });
    dotsContainer.appendChild(dot);
});

const dots = Array.from(dotsContainer.children);

// Calculate width once per render
function updateCarousel() {
    const slideWidth = slides[0].getBoundingClientRect().width;
    track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

    // --- update dots ---
    dots.forEach(dot => dot.classList.remove('active'));
    dots[currentIndex].classList.add('active');
}

// Smooth handling when resizing window
window.addEventListener('resize', () => {
    updateCarousel();
});

// Auto-slide every 5 seconds
let autoSlide = setInterval(() => {
    currentIndex = (currentIndex + 1) % slides.length;
    updateCarousel();
}, 2500);

// Reset timer if user interacts
function resetAutoSlide() {
    clearInterval(autoSlide);
    autoSlide = setInterval(() => {
        currentIndex = (currentIndex + 1) % slides.length;
        updateCarousel();
    }, 2500);
}

// Initialize position
window.addEventListener('load', updateCarousel);
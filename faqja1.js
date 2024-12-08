const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
let currentIndex = 0;

function autoSlide() {
    currentIndex = (currentIndex + 1) % slides.length;//loopa
    const scrollAmount = slider.scrollWidth / slides.length;
    slider.scrollTo({
        left: currentIndex * scrollAmount,
        behavior: 'smooth'
    });
}

setInterval(autoSlide, 4000); //kohezgjatja
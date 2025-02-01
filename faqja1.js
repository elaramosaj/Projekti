window.onload = function () {
    console.log("DOM fully loaded. Running slider script...");
    
    const slider = document.querySelector(".slider");
    const slides = document.querySelectorAll(".slide");
    let index = 0;
    const intervalTime = 3000;

    function nextSlide() {
        index = (index + 1) % slides.length;
        updateSlider();
    }

    function updateSlider() {
        slider.style.transform = `translateX(-${index * 100}%)`;
        slider.style.transition = "transform 0.5s ease-in-out";
    }

    setInterval(nextSlide, intervalTime);
};

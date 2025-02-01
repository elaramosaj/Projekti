window.onload = function () {
    console.log("DOM fully loaded. Running slider script...");

    const slider = document.querySelector(".slider");
    const slides = document.querySelectorAll(".slide");
    let index = 0;
    const intervalTime = 3000; // 3 seconds

    function nextSlide() {
        if (index < slides.length - 1) {
            index++;
        } else {
            index = 0; // Reset to first slide
        }
        slider.scrollTo({
            left: slider.clientWidth * index,
            behavior: "smooth"
        });
    }

    setInterval(nextSlide, intervalTime);
};

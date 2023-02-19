const slides = document.querySelectorAll(".slide");
let currentSlide = 0;

function showSlide() {
	slides.forEach((slide) => (slide.style.display = "none"));
	slides[currentSlide].style.display = "flex";
}

function nextSlide() {
	currentSlide = (currentSlide + 1) % slides.length;
	showSlide();
}

setInterval(nextSlide, 3000);

var slideIndex = 0;
var timeoutHandler;
autoSlide();

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
	clearTimeout(timeoutHandler);
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");
	if (n > slides.length) {slideIndex = 0} 
	if (n < 1) {slideIndex = slides.length}
	for (i = 0; i < slides.length; i++) {
	  slides[i].style.display = "none";
	  slides[i].className = slides[i].className.replace(" animate", "");
	}
	for (i = 0; i < dots.length; i++) {
	  dots[i].className = dots[i].className.replace(" active", "");
	}

	slides[slideIndex-1].style.display = "block"; 
	slides[slideIndex-1].className += " animate";
	dots[slideIndex-1].className += " active";
	timeoutHandler = setTimeout(autoSlide, 6667);
}

function autoSlide(){
	clearTimeout(timeoutHandler);
	var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
        slides[i].className = slides[i].className.replace(" animate", "");
    }
    for (i = 0; i < dots.length; i++) {
	  dots[i].className = dots[i].className.replace(" active", "");
	}
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
	slides[slideIndex-1].className += " animate";
	dots[slideIndex-1].className += " active"; 
    timeoutHandler = setTimeout(autoSlide, 6667);
}
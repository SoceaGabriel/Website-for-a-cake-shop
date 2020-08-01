/*Functii pentru slideshow*/

var slideIndex = 0;
var nr_poze=3;

function showSlides() {
  var i;
  var ok=1;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  
  if (slideIndex >= slides.length || slideIndex==0) {
  	slideIndex = 0;
	ok=1;
  }
  else{
	ok=0;
  }
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
   
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex].style.display = "block";  
  dots[slideIndex].className += " active";
  slideIndex++;
  if(ok==1)
  {
	  setTimeout(showSlides, 6000); // Change image every 6 seconds
  }
  else
  {
	  setTimeout(showSlides, 3000); // Change image every 3 seconds
  }
  
}

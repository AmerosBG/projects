var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}

		function validate(){
			var p = document.getElementById("pass").value;
			var cp = document.getElementById("cpass").value;
			
			if(p!=cp){
				
				document.getElementById("submit").innerHTML="<p style='color:white;'>Confirm your password correctly</p>";
				document.getElementById("pass").value="";
				document.getElementById("cpass").value="";
				document.getElementById("pass").focus();
				return false;
			}
			return true;
		}
		

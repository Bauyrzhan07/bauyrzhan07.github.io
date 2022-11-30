let slideIndex = 1;
let slideLength = 6;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}
  
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++)
        slides[i].style.display = "none";
    for(i = slideIndex; i < slideIndex + slideLength; i++)
        slides[i-1].style.display = "block";
}
$(function(){

    var curSlideMini = 0;
    var maxSlideMini = $('.banner-singleMini').length - 1;
    
    initSliderMini();
    changeSliderMini();

    function initSliderMini(){
        $('.banner-singleMini').hide();
        $('.banner-singleMini').eq(0).show();
    }
    function changeSliderMini(){
        setInterval(function(){
            $('.banner-singleMini').eq(curSlideMini).fadeOut(2000);
            curSlideMini++;
            if(curSlideMini > maxSlideMini)
            curSlideMini = 0;
            $('.banner-singleMini').eq(curSlideMini).fadeIn(2000);
        }, 5000);
    }
/*
MiniChalé
*/
 
var curSlideChale = 0;
var maxSlideChale = $('.banner-singleChale').length - 1;

initSliderChale();
changeSliderChale();

function initSliderChale(){
    $('.banner-singleChale').hide();
    $('.banner-singleChale').eq(0).show();
}
function changeSliderChale(){
    setInterval(function(){
        $('.banner-singleChale').eq(curSlideChale).fadeOut(2000);
        curSlideChale++;
        if(curSlideChale > maxSlideChale)
        curSlideChale = 0;
        $('.banner-singleChale').eq(curSlideChale).fadeIn(2000);
    }, 5000);
}

/*
Chalé
*/

var curSlide = 0;
var maxSlide = $('.banner-singleOutro').length - 1;

initSlider();
changeSlider();

function initSlider(){
    $('.banner-singleOutro').hide();
    $('.banner-singleOutro').eq(0).show();
}
function changeSlider(){
    setInterval(function(){
        $('.banner-singleOutro').eq(curSlide).fadeOut(2000);
        curSlide++;
        if(curSlide > maxSlide)
        curSlide = 0;
        $('.banner-singleOutro').eq(curSlide).fadeIn(2000);
    }, 5000);
}

/*
Outros
*/
})
        
//modalslides

function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}


document.addEventListener('fullscreenchange', exitHandler);
document.addEventListener('webkitfullscreenchange', exitHandler);
document.addEventListener('mozfullscreenchange', exitHandler);
document.addEventListener('MSFullscreenChange', exitHandler);

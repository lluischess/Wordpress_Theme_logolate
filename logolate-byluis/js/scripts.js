// Slicknav Library initialize
jQuery(document).ready(function($) {
    $('.main-nav .menu').slicknav({
        label: '',
        duration: 700,
        appendTo: '.section-header'
    });
});

// Slider Header
// Slider buttons

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

// Auto Slider

function changeSliader()
{
  cont_s = 0;

  window.setInterval(
    function(){
      if(cont_s == 7){
        plusDivs(1);
        cont_s = 0;
      } else {
        cont_s++;
      }
    }
  ,1000);
}



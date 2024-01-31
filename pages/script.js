let currentSlide = 0;

function showSlide(n) {
    const carouselItems = document.querySelectorAll('.carousel-item');
    if (n >= carouselItems.length) {
        currentSlide = 0;
    } else if (n < 0) {
        currentSlide = carouselItems.length - 1;
    } else {
        currentSlide = n;
    }

    const transformValue = -currentSlide * 100 + '%';
    document.getElementById('imageCarousel').style.transform = 'translateX(' + transformValue + ')';
}

function changeSlide(n) {
    showSlide(currentSlide + n);
}

setInterval(() => {
    changeSlide(1);
}, 5000);


// Timer
var countDownDate = new Date("Feb 28, 2024 10:00:00").getTime();


var x = setInterval(function() {


  var now = new Date().getTime();
    

  var distance = countDownDate - now;
    

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    

  document.getElementById("timer").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "EXPIRED";
  }
}, 1000);
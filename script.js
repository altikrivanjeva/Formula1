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

// Auto advance slides every 3 seconds
setInterval(() => {
    changeSlide(1);
}, 5000);

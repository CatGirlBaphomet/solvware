class Slider {
  constructor(containerSelector) {
    this.container = document.querySelector(containerSelector);
    this.track = this.container.querySelector('.slider-track');
    this.slides = this.container.querySelectorAll('.slide');
    this.slideWidth = this.slides[0].offsetWidth;
    this.currentIndex = 0;

    this.setupEventListeners();
    this.showSlide(this.currentIndex);
  }

  showSlide(index) {
    const newPosition = -index * this.slideWidth;
    this.track.style.transform = `translateX(${newPosition}px)`;
  }

  nextSlide() {
    this.currentIndex = (this.currentIndex + 1) % this.slides.length;
    this.showSlide(this.currentIndex);
  }

  prevSlide() {
    this.currentIndex = (this.currentIndex - 1 + this.slides.length) % this.slides.length;
    this.showSlide(this.currentIndex);
  }


  setupEventListeners() {
    document.querySelector('.slider-container .arrow-left').addEventListener('click', () => {
      this.prevSlide();
    });

    document.querySelector('.slider-container .arrow-right').addEventListener('click', () => {
      this.nextSlide();
    });
  }
}

document.addEventListener('DOMContentLoaded', function () {
  var slider = new Slider('.slider-container');
});

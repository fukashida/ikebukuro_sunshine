function getSlides() {
  if (window.matchMedia('(max-width: 768px)').matches) {
    return document.querySelectorAll('.only-sp');
  } else {
    return document.querySelectorAll('.only-pc');
  }
}

let slides = getSlides();
let wrapper = document.querySelector('.slides-wrapper');
let currentIndex = 1;

function updateSlidePosition() {
  if (slides.length === 0) return;
  const slide = slides[currentIndex];
  const slideOffset = slide.offsetLeft;
  const slideWidth = slide.offsetWidth;
  const containerWidth = document.querySelector('.slideshow-container').offsetWidth;

  const translateX = slideOffset - (containerWidth / 2) + (slideWidth / 2);
  wrapper.style.transform = `translateX(-${translateX}px)`;
}

updateSlidePosition();

let intervalId = setInterval(() => {
  currentIndex++;
  if (currentIndex >= slides.length - 1) {
    currentIndex = 1;
    wrapper.style.transition = 'none';
    updateSlidePosition();
    setTimeout(() => {
      wrapper.style.transition = 'transform 0.6s ease';
    }, 50);
  } else {
    updateSlidePosition();
  }
}, 3000);

window.addEventListener('resize', () => {
  clearInterval(intervalId);
  slides = getSlides();
  currentIndex = 1;
  wrapper.style.transition = 'none';
  updateSlidePosition();
  setTimeout(() => {
    wrapper.style.transition = 'transform 0.6s ease';
  }, 50);
  intervalId = setInterval(() => {
    currentIndex++;
    if (currentIndex >= slides.length - 1) {
      currentIndex = 1;
      wrapper.style.transition = 'none';
      updateSlidePosition();
      setTimeout(() => {
        wrapper.style.transition = 'transform 0.6s ease';
      }, 50);
    } else {
      updateSlidePosition();
    }
  }, 3000);
});

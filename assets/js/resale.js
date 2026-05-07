document.addEventListener('DOMContentLoaded', () => {

  const counters = document.querySelectorAll('.counter');
  const animationDuration = 2000;

  counters.forEach(counter => {
    const target = +counter.getAttribute('data-target');

    const prefix = counter.getAttribute('data-prefix') || '';
    const sufix = counter.getAttribute('data-sufix') || '';

    let startTime = null;

    const animateCount = (currentTime) => {
      if (!startTime) startTime = currentTime;

      const timeElapsed = currentTime - startTime;
      const progress = Math.min(timeElapsed / animationDuration, 1);

      const currentNumber = Math.floor(target * progress);

      counter.innerText = prefix + currentNumber + sufix;

      if (timeElapsed < animationDuration) {
        requestAnimationFrame(animateCount);
      } else {
        counter.innerText = prefix + target + sufix;
      }
    };

    requestAnimationFrame(animateCount);
  });

  const track = document.querySelector('.carousel-track-resale');
  const dots = document.querySelectorAll('.dot-resale');

  const moveToSlide = (index) => {
    track.style.transform = `translateX(-${index * 50}%)`;

    dots.forEach(dot => dot.classList.remove('active'));
    dots[index].classList.add('active');
  };

  dots.forEach(dot => {
    dot.addEventListener('click', (e) => {
      const targetIndex = parseInt(e.target.getAttribute('data-index'));
      moveToSlide(targetIndex);
    });
  });
});
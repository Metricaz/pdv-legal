document.addEventListener('DOMContentLoaded', () => {
  const accordionItems = document.querySelectorAll('.accordion-about-item');

  accordionItems.forEach(item => {
    if (item.classList.contains('active')) {
      const content = item.querySelector('.accordion-about-content');
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });

  accordionItems.forEach(item => {
    const header = item.querySelector('.accordion-about-header');

    header.addEventListener('click', () => {
      const isActive = item.classList.contains('active');
      const content = item.querySelector('.accordion-about-content');

      if (!isActive) {
        item.classList.add('active');
        content.style.maxHeight = content.scrollHeight + "px";
      } else {
        item.classList.remove('active');
        content.style.maxHeight = null;
      }
    });
  });

  const track = document.getElementById("carouselTrack");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");


  const scrollAmount = 340; 

  nextBtn.addEventListener("click", () => {
    track.style.scrollBehavior = 'smooth';
    track.scrollBy({ left: scrollAmount });
  });

  prevBtn.addEventListener("click", () => {
    track.style.scrollBehavior = 'smooth';
    track.scrollBy({ left: -scrollAmount });
  });

  let isDown = false;
  let startX;
  let scrollLeft;

  track.addEventListener('mousedown', (e) => {
    isDown = true;
    startX = e.pageX - track.offsetLeft;
    scrollLeft = track.scrollLeft;

    track.style.scrollBehavior = 'auto'; 
  });

  track.addEventListener('mouseleave', () => {
    isDown = false;
  });

  track.addEventListener('mouseup', () => {
    isDown = false;
  });

  track.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    
    const x = e.pageX - track.offsetLeft;
    const walk = (x - startX) * 1.5;
    track.scrollLeft = scrollLeft - walk;
  });



const counters = document.querySelectorAll('.counter');
const animationDuration = 2000;

const startCounterAnimation = (counter) => {
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
};

const observerOptions = {
  root: null, 
  rootMargin: '0px',
  threshold: 0.1
};

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      startCounterAnimation(entry.target);
      
      observer.unobserve(entry.target);
    }
  });
}, observerOptions);

counters.forEach(counter => {
  const prefix = counter.getAttribute('data-prefix') || ''; 
  const sufix = counter.getAttribute('data-sufix') || ''; 
  counter.innerText = `${prefix}0${sufix}`;

  observer.observe(counter);
});
});
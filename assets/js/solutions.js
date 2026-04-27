document.addEventListener('DOMContentLoaded', function () {
  const toggle = document.querySelector('.menu-toggle');
  const menu = document.querySelector('.main-menu');

  if (!toggle || !menu) return;

  toggle.addEventListener('click', function (e) {
    e.preventDefault();

    menu.classList.toggle('active');
    toggle.classList.toggle('active');
  });
  
  const tabsSolutions = document.querySelectorAll('.tab-solutions');
  const contentsSolutions = document.querySelectorAll('.tab-content-solutions');
  
  tabsSolutions.forEach(tab => {
    tab.addEventListener('click', () => {
      tabsSolutions.forEach(t => t.classList.remove('active'));
      contentsSolutions.forEach(c => c.style.display = 'none');

      tab.classList.add('active');
      
      const target = tab.dataset.tab;
      document.getElementById(target).style.display = 'flex';
    });
  });

  new Typed('#typed', {
    strings: ["Varejo", "Evento", "Franquia"],
    typeSpeed: 30,
    backSpeed: 30,
    backDelay: 2000,
    loop: true
  });

  document.querySelectorAll(".accordion-item").forEach(header => {
    const content = header.children[1].children[1];

    header.addEventListener("click", () => {
      const isOpen = header.classList.contains("active");

      if (isOpen) {
        requestAnimationFrame(() => {
          content.style.removeProperty("max-height");
          header.children[0].style.removeProperty("background");
          header.children[0].children[0].style.removeProperty("background");
          header.children[0].children[0].style.removeProperty("margin-top");
          header.children[0].style.removeProperty("justify-content");

        });
        header.classList.remove("active");
        header.children[0].children[0].style.width = "60px";
        header.children[0].children[0].style.height = "60px";
        setTimeout(() => {
          header.children[2].style.removeProperty("display");
          header.children[0].style.removeProperty("width");
          header.children[0].style.removeProperty("border-top-left-radius");
          header.children[0].style.removeProperty("border-top-right-radius");
          header.children[1].style.removeProperty("padding");
          header.children[1].style.removeProperty("margin-bottom");
        }, 500);
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
        header.children[0].style.background = "linear-gradient(15deg, #3b82f69e 0%, #3b82f678 60%, #3b82f61a 100%)";
        header.children[0].children[0].style.background = "none";
        header.children[0].children[0].style.width = "90px";
        header.children[0].children[0].style.height = "90px";
        header.children[0].children[0].style.marginTop = "-20px";
        header.children[0].style.justifyContent = "center";
        header.children[0].style.width = "100%";
        header.children[0].style.borderTopLeftRadius = "30px";
        header.children[0].style.borderTopRightRadius = "30px";
        header.children[1].style.padding = "0 30px";
        header.children[1].style.marginBottom = "20px";
        header.children[2].style.display = "none";
        header.classList.add("active");

        content.addEventListener("transitionend", function removeHeight() {
          if (header.classList.contains("active")) {
            content.style.maxHeight = "auto";
          }
          content.removeEventListener("transitionend", removeHeight);
        });
      }
    });
  });
});
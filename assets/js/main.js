document.addEventListener('DOMContentLoaded', function () {
  // ========== MENU TOGGLE ORIGINAL ==========

  // Remove qualquer evento anterior e configura do zero
  const toggleBtn = document.querySelector('.menu-toggle');
  const mainMenu = document.querySelector('.main-menu');
  
  // Cria overlay se não existir
  let overlay = document.querySelector('.menu-overlay');
  if (!overlay && toggleBtn) {
    overlay = document.createElement('div');
    overlay.className = 'menu-overlay';
    document.body.appendChild(overlay);
  }
  
  function closeMenu() {
    if (mainMenu) mainMenu.classList.remove('active');
    if (toggleBtn) toggleBtn.classList.remove('active');
    if (overlay) overlay.classList.remove('active');
    document.body.classList.remove('menu-open');
  }
  
  function openMenu() {
    if (mainMenu) mainMenu.classList.add('active');
    if (toggleBtn) toggleBtn.classList.add('active');
    if (overlay) overlay.classList.add('active');
    document.body.classList.add('menu-open');
  }
  
  function toggleMenu() {
    if (mainMenu && mainMenu.classList.contains('active')) {
      closeMenu();
    } else {
      openMenu();
    }
  }
  
  if (toggleBtn) {
    // Remove eventos antigos clonando o elemento
    const newToggle = toggleBtn.cloneNode(true);
    toggleBtn.parentNode.replaceChild(newToggle, toggleBtn);
    
    newToggle.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      toggleMenu();
    });
  }
  
  if (overlay) {
    overlay.addEventListener('click', function(e) {
      e.preventDefault();
      closeMenu();
    });
  }
  
  // Fecha menu ao clicar em qualquer link do menu
  const menuLinks = document.querySelectorAll('.main-menu a');
  menuLinks.forEach(link => {
    link.addEventListener('click', function() {
      closeMenu();
    });
  });
  
  // Fecha menu ao redimensionar para desktop
  window.addEventListener('resize', function() {
    if (window.innerWidth > 768) {
      closeMenu();
    }
  });

  // ========== MENU MOBILE MELHORADO (COM OVERLAY) ==========
  // 🔥 ADIÇÃO: Cria overlay e melhora experiência do menu mobile (sem remover nada)
  (function setupMobileMenu() {
    const mobileToggle = document.querySelector('.menu-toggle');
    const mobileMenu = document.querySelector('.main-menu');
    
    // Cria o overlay se não existir
    let menuOverlay = document.querySelector('.menu-overlay');
    if (!menuOverlay && mobileToggle) {
      menuOverlay = document.createElement('div');
      menuOverlay.className = 'menu-overlay';
      document.body.appendChild(menuOverlay);
    }
    
    function toggleMobileMenu() {
      if (!mobileMenu) return;
      
      mobileMenu.classList.toggle('active');
      if (menuOverlay) menuOverlay.classList.toggle('active');
      document.body.classList.toggle('menu-open');
    }
    
    if (mobileToggle) {
      // Remove eventos antigos para não duplicar
      const newToggle = mobileToggle.cloneNode(true);
      mobileToggle.parentNode.replaceChild(newToggle, mobileToggle);
      
      newToggle.addEventListener('click', function(e) {
        e.preventDefault();
        toggleMobileMenu();
      });
    }
    
    if (menuOverlay) {
      menuOverlay.addEventListener('click', toggleMobileMenu);
    }
    
    // Fecha menu ao clicar em qualquer link do menu
    const menuLinks = document.querySelectorAll('.main-menu a');
    menuLinks.forEach(link => {
      link.addEventListener('click', function() {
        if (mobileMenu && mobileMenu.classList.contains('active')) {
          toggleMobileMenu();
        }
      });
    });
  })();

  const tabs = document.querySelectorAll('.tab');
  const contents = document.querySelectorAll('.tab-content-home');
  const tabsSolutions = document.querySelectorAll('.tab-solutions');
  const contentsSolutions = document.querySelectorAll('.tab-content-solutions');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      contents.forEach(c => c.style.display = 'none');

      tab.classList.add('active');
      
      const target = tab.dataset.tab;
      document.getElementById(target).style.display = 'block';
    });
  });

  
  tabsSolutions.forEach(tab => {
    tab.addEventListener('click', () => {
      tabsSolutions.forEach(t => t.classList.remove('active'));
      contentsSolutions.forEach(c => c.style.display = 'none');

      tab.classList.add('active');
      
      const target = tab.dataset.tab;
      document.getElementById(target).style.display = 'flex';
    });
  });

  new Typed('#typed-home', {
    strings: ["Gestão completa para crescer sem perder o controle.", "Gestão inteligente para negócios que vão além.", "Gestão que cresce junto com você."],
    typeSpeed: 30,
    backSpeed: 30,
    backDelay: 2000,
    loop: true
  });

  document.querySelectorAll(".accordion-item").forEach(header => {
    if (!header.children[1] || !header.children[1].children[1]) return;
    
    const content = header.children[1].children[1];

    header.addEventListener("click", () => {
      const isOpen = header.classList.contains("active");

      if (isOpen) {
        requestAnimationFrame(() => {
          content.style.removeProperty("max-height");
          header.children[0].style.removeProperty("background");
          if (header.children[0].children[0]) {
            header.children[0].children[0].style.removeProperty("background");
            header.children[0].children[0].style.removeProperty("margin-top");
          }
          header.children[0].style.removeProperty("justify-content");

        });
        header.classList.remove("active");
        if (header.children[0].children[0]) {
          header.children[0].children[0].style.width = "60px";
          header.children[0].children[0].style.height = "60px";
        }
        setTimeout(() => {
          if (header.children[2]) header.children[2].style.removeProperty("display");
          header.children[0].style.removeProperty("width");
          header.children[0].style.removeProperty("border-top-left-radius");
          header.children[0].style.removeProperty("border-top-right-radius");
          if (header.children[1]) {
            header.children[1].style.removeProperty("padding");
            header.children[1].style.removeProperty("margin-bottom");
          }
        }, 500);
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
        header.children[0].style.background = "linear-gradient(15deg, #3b82f69e 0%, #3b82f678 60%, #3b82f61a 100%)";
        if (header.children[0].children[0]) {
          header.children[0].children[0].style.background = "none";
          header.children[0].children[0].style.width = "90px";
          header.children[0].children[0].style.height = "90px";
          header.children[0].children[0].style.marginTop = "-20px";
        }
        header.children[0].style.justifyContent = "center";
        header.children[0].style.width = "100%";
        header.children[0].style.borderTopLeftRadius = "30px";
        header.children[0].style.borderTopRightRadius = "30px";
        if (header.children[1]) {
          header.children[1].style.padding = "0 30px";
          header.children[1].style.marginBottom = "20px";
        }
        if (header.children[2]) header.children[2].style.display = "none";
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
  
  // ========== TABS - FEITO PARA O SEU NEGÓCIO ==========
  // 🔥 VERIFICAÇÃO: Só executa se os elementos existirem
  const businessTabs = document.querySelectorAll('.business-tab');
  const businessContents = document.querySelectorAll('.business-content');
  const tabUnderline = document.querySelector('.tab-underline');

  if (businessTabs.length > 0 && businessContents.length > 0) {
    function updateUnderline(activeTab) {
        if (!tabUnderline || !activeTab) return;
        
        const tabWidth = activeTab.offsetWidth;
        const tabLeft = activeTab.offsetLeft;
        const tabsContainer = activeTab.parentElement;
        
        tabUnderline.style.width = tabWidth + 'px';
        tabUnderline.style.left = tabLeft + 'px';
    }

    function switchBusinessTab(tabId) {
        // Troca classe active das tabs
        businessTabs.forEach(tab => {
            tab.classList.remove('active');
        });
        
        // Troca classe active dos conteúdos
        businessContents.forEach(content => {
            content.classList.remove('active');
        });
        
        // Ativa a tab clicada
        const activeTab = document.querySelector(`.business-tab[data-tab="${tabId}"]`);
        if (activeTab) {
            activeTab.classList.add('active');
            updateUnderline(activeTab);
        }
        
        // Ativa o conteúdo correspondente
        const activeContent = document.getElementById(`business-${tabId}`);
        if (activeContent) {
            activeContent.classList.add('active');
        }
    }

    // Adiciona evento de clique nas tabs
    businessTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const tabId = this.getAttribute('data-tab');
            switchBusinessTab(tabId);
        });
    });

    // Inicializa o underline
    const initialActiveTab = document.querySelector('.business-tab.active');
    if (initialActiveTab) {
        updateUnderline(initialActiveTab);
    }

    // Atualiza underline ao redimensionar
    window.addEventListener('resize', function() {
        const currentActive = document.querySelector('.business-tab.active');
        if (currentActive) {
            updateUnderline(currentActive);
        }
    });
  }
});
document.addEventListener('DOMContentLoaded', function () {

const innerItems = [
            { icon: '📱', label: 'Cardápio' },
            { icon: '⭐', label: 'Fidelidade' },
            { icon: '📊', label: 'BI' }
        ];

        const outerItems = [
            { icon: '🏨', label: 'Hotelaria' },
            { icon: '🛡️', label: 'Certificado' },
            { icon: '🧾', label: 'Fiscal' },
            { icon: '💳', label: 'Adquirente' },
            { icon: '🖨️', label: 'Hardware' },
            { icon: '⛽', label: 'Auto' },
            { icon: '📁', label: 'ERP' },
            { icon: '🏍️', label: 'Delivery' }
        ];

        /**
         * Renderiza os cartões dentro do container especificado
         */
        function renderOrbit(items, radius, containerId, wrapperAnimationClass, offsetAngle = 0) {
            const container = document.getElementById(containerId);
            
            // 🔥 ADICIONADO: verifica se o container existe para não dar erro
            if (!container) {
                console.log('Container ' + containerId + ' não encontrado');
                return;
            }
            
            const angleStep = (2 * Math.PI) / items.length;

            items.forEach((item, index) => {
                const angle = (index * angleStep) + offsetAngle;
                
                // Calcula posição inicial
                const x = radius * Math.cos(angle);
                const y = radius * Math.sin(angle);

                // O wrapper lida com a posição e a contra-rotação
                const wrapper = document.createElement('div');
                wrapper.className = `card-wrapper ${wrapperAnimationClass}`;
                wrapper.style.left = `calc(50% + ${x}px)`;
                wrapper.style.top = `calc(50% + ${y}px)`;

                // O card interno lida apenas com o visual e o hover (zoom)
                wrapper.innerHTML = `
                    <div class="card">
                        <div class="icon">${item.icon}</div>
                        <div class="label">${item.label}</div>
                    </div>
                `;

                container.appendChild(wrapper);
            });
        }

        // 🔥 COMENTADO: elementos não existem mais no HTML atual
        // Renderiza as duas órbitas com suas respectivas configurações
        // Outer orbit: Raio 260px, injeta no container 'orbit-outer', e usa a contra-rotação 'counter-cw'
        // renderOrbit(outerItems, 260, 'orbit-outer', 'counter-cw', -Math.PI / 2);
        
        // Inner orbit: Raio 150px, injeta no container 'orbit-inner', e usa a contra-rotação 'counter-ccw'
        // renderOrbit(innerItems, 150, 'orbit-inner', 'counter-ccw', -Math.PI / 1.2);

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

  // new Typed('#typed', {
  //   strings: ["Varejo", "Evento", "Franquia"],
  //   typeSpeed: 30,
  //   backSpeed: 30,
  //   backDelay: 2000,
  //   loop: true
  // });

  //   const data = {
  //     name: "root",
  //     children: [
  //       {
  //         name: "SEO",
  //         children: [
  //           { name: "Palavras-chave", value: 100 },
  //           { name: "Backlinks", value: 80 },
  //           { name: "Conteúdo", value: 120 }
  //         ]
  //       },
  //       {
  //         name: "Marketing",
  //         children: [
  //           { name: "Ads", value: 33.33 },
  //           { name: "Social", value: 33.33 },
  //           {
  //             name: "Email", value: 33.33, children: [
  //               {
  //                 name: 'Bruno', value: 50, children: [
  //                   { name: 'bruno.metricaz', value: 50 }
  //                 ]
  //               },
  //               {
  //                 name: 'Lilian', value: 50, children: [
  //                   { name: 'lilian.metricaz', value: 50 }
  //                 ]
  //               }
  //             ]
  //           }
  //         ]
  //       }
  //     ]
  //   };

  //   const width = document.getElementById("chart").offsetWidth;
  //   const radius = width / 6;

  //   const color = d3.scaleOrdinal(
  //     d3.quantize(d3.interpolateRainbow, data.children.length + 1)
  //   );

  //   const hierarchy = d3.hierarchy(data)
  //     .sum(d => d.value)
  //     .sort((a, b) => b.value - a.value);

  //   const root = d3.partition()
  //     .size([2 * Math.PI, hierarchy.height + 1])(hierarchy);

  //   root.each(d => d.current = d);

  //   const svg = d3.select("#chart")
  //     .append("svg")
  //     .attr("viewBox", [-width / 2, -width / 2, width, width])
  //     .style("width", "100%")
  //     .style("font", "12px sans-serif");

  //   const arc = d3.arc()
  //     .startAngle(d => d.x0)
  //     .endAngle(d => d.x1)
  //     .padAngle(d => Math.min((d.x1 - d.x0) / 2, 0.005))
  //     .padRadius(radius * 1.5)
  //     .innerRadius(d => d.y0 * radius)
  //     .outerRadius(d => Math.max(d.y0 * radius, d.y1 * radius - 1));

  //   const path = svg.append("g")
  //     .selectAll("path")
  //     .data(root.descendants().slice(1))
  //     .join("path")
  //     .attr("fill", d => {
  //       while (d.depth > 1) d = d.parent;
  //       return color(d.data.name);
  //     })
  //     .attr("fill-opacity", d => arcVisible(d.current) ? (d.children ? 0.6 : 0.4) : 0)
  //     .attr("pointer-events", d => arcVisible(d.current) ? "auto" : "none")
  //     .attr("d", d => arc(d.current));

  //   path.filter(d => d.children)
  //     .style("cursor", "pointer")
  //     .on("click", clicked);

  //   const label = svg.append("g")
  //     .attr("pointer-events", "none")
  //     .attr("text-anchor", "middle")
  //     .selectAll("text")
  //     .data(root.descendants().slice(1))
  //     .join("text")
  //     .attr("dy", "0.35em")
  //     .attr("fill-opacity", d => +labelVisible(d.current))
  //     .attr("transform", d => labelTransform(d.current))
  //     .text(d => d.data.name);

  //   const parent = svg.append("circle")
  //     .datum(root)
  //     .attr("r", radius)
  //     .attr("fill", "none")
  //     .attr("pointer-events", "all")
  //     .on("click", clicked);

  //   function clicked(event, p) {
  //     parent.datum(p.parent || root);

  //     root.each(d => d.target = {
  //       x0: Math.max(0, Math.min(1, (d.x0 - p.x0) / (p.x1 - p.x0))) * 2 * Math.PI,
  //       x1: Math.max(0, Math.min(1, (d.x1 - p.x0) / (p.x1 - p.x0))) * 2 * Math.PI,
  //       y0: Math.max(0, d.y0 - p.depth),
  //       y1: Math.max(0, d.y1 - p.depth)
  //     });

  //     const t = svg.transition().duration(750);

  //     path.transition(t)
  //       .tween("data", d => {
  //         const i = d3.interpolate(d.current, d.target);
  //         return t => d.current = i(t);
  //       })
  //       .attr("fill-opacity", d => arcVisible(d.target) ? (d.children ? 0.6 : 0.4) : 0)
  //       .attr("pointer-events", d => arcVisible(d.target) ? "auto" : "none")
  //       .attrTween("d", d => () => arc(d.current));

  //     label.transition(t)
  //       .attr("fill-opacity", d => +labelVisible(d.target))
  //       .attrTween("transform", d => () => labelTransform(d.current));
  //   }

  //   function arcVisible(d) {
  //     return d.y1 <= 3 && d.y0 >= 1 && d.x1 > d.x0;
  //   }

  //   function labelVisible(d) {
  //     return d.y1 <= 3 && d.y0 >= 1 && (d.y1 - d.y0) * (d.x1 - d.x0) > 0.03;
  //   }

  //   function labelTransform(d) {
  //     const x = (d.x0 + d.x1) / 2 * 180 / Math.PI;
  //     const y = (d.y0 + d.y1) / 2 * radius;
  //     return `rotate(${x - 90}) translate(${y},0) rotate(${x < 180 ? 0 : 180})`;
  //   }
  // });

  // solucoes

  // const card = document.getElementById('card');
  // const extraContent = document.getElementById('extraContent');
  // const progressFill = document.getElementById('progressFill');
  // let isOpen = false;

  // card.addEventListener('click', () => {
  //   isOpen = !isOpen;
  //   if (isOpen) {
  //     extraContent.classList.add('show');
  //     progressFill.style.width = '70%';
  //   } else {
  //     extraContent.classList.remove('show');
  //     progressFill.style.width = '0';
  //   }
  // });

  //   const orbit = document.getElementById("orbit");
  // const items = document.querySelectorAll(".item");

  // const radius = 120; // distância do centro
  // const total = items.length;

  // // posiciona os itens em círculo
  // items.forEach((item, i) => {
  //   const angle = (i / total) * 2 * Math.PI;

  //   const x = Math.cos(angle) * radius;
  //   const y = Math.sin(angle) * radius;

  //   item.style.transform = `translate(-50%, -50%) translate(${x}px, ${y}px)`;
  // });

  // // animação de rotação
  // let angle = 0;

  // function animate() {
  //   angle += 0.2; // velocidade
  //   orbit.style.transform = `rotate(${angle}deg)`;
  //   requestAnimationFrame(animate);
  // }

  // animate();

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
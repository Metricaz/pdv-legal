

document.addEventListener('DOMContentLoaded', function () {
    const baseUrl = window.location.origin + '/wp-content/themes/pdv/assets/icons/cases/';

    const innerItems = [
        { icon: 'menu.svg', label: 'Cardápio', segment: 'cardapio' },
        { icon: 'star.svg', label: 'Fidelidade', segment: 'fidelidade' },
        { icon: 'bi.svg', label: 'BI', segment: 'bi' }
    ];

    const outerItems = [
        { icon: 'hotel.svg', label: 'Hotelaria', segment: 'hotelaria' },
        { icon: 'certificate.svg', label: 'Certificado', segment: 'certificado' },
        { icon: 'fiscal.svg', label: 'Fiscal', segment: 'fiscal' },
        { icon: 'purchaser.svg', label: 'Adquirente', segment: 'adquirente' },
        { icon: 'hardware.svg', label: 'Hardware', segment: 'hardware' },
        { icon: 'auto.svg', label: 'Auto', segment: 'auto' },
        { icon: 'erp.svg', label: 'ERP', segment: 'erp' },
        { icon: 'delivery.svg', label: 'Delivery', segment: 'delivery' }
    ];

    function renderOrbit(items, radius, containerId, wrapperAnimationClass, offsetAngle = 0) {
        const container = document.getElementById(containerId);

        const angleStep = (2 * Math.PI) / items.length;

        items.forEach((item, index) => {
            const angle = (index * angleStep) + offsetAngle;

            const x = radius * Math.cos(angle);
            const y = radius * Math.sin(angle);

            const wrapper = document.createElement('div');
            wrapper.className = `card-wrapper ${wrapperAnimationClass}`;
            wrapper.style.left = `calc(50% + ${x}px)`;
            wrapper.style.top = `calc(50% + ${y}px)`;

            wrapper.innerHTML = `
                    <a href="#${item.segment}" class="card" style="text-decoration: none; color: inherit;">
                        <div class="icon"><img src="${baseUrl}${item.icon}" alt="${item.label}"></div>
                        <div class="label">${item.label}</div>
                    </a>
                `;

            container.appendChild(wrapper);
        });
    }

    renderOrbit(outerItems, 230, 'orbit-outer', 'counter-cw', -Math.PI / 2);
    renderOrbit(innerItems, 140, 'orbit-inner', 'counter-ccw', -Math.PI / 1.2);
});
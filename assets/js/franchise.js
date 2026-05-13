document.addEventListener('DOMContentLoaded', function () {
    const mapElement = document.getElementById('franchises-map');

    if (!mapElement || typeof L === 'undefined') {
        return;
    }

    const locations = JSON.parse(mapElement.dataset.locations || '[]');
    const map = L.map('franchises-map');

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    const bounds = [];

    locations.forEach(function (location) {
        const latitude = Number(location.latitude);
        const longitude = Number(location.longitude);

        if (Number.isNaN(latitude) || Number.isNaN(longitude)) {
            return;
        }

        const marker = L.marker([latitude, longitude]).addTo(map);
        const popupText = [location.name, location.state].filter(Boolean).join(' - ');

        if (popupText) {
            marker.bindPopup(popupText);
        }

        bounds.push([latitude, longitude]);
    });

    if (bounds.length === 1) {
        map.setView(bounds[0], 12);
    } else if (bounds.length > 1) {
        map.fitBounds(bounds, { padding: [40, 40] });
    } else {
        map.setView([-23.5505, -46.6333], 5);
    }
});

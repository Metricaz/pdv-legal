document.addEventListener('DOMContentLoaded', function () {
  const mapElement = document.getElementById('franchises-map');
  const stateSelect = document.getElementById('franchise_state');
  const cards = Array.from(document.querySelectorAll('.franchise-card'));

  if (!mapElement || typeof L === 'undefined') {
    return;
  }

  const locations = JSON.parse(mapElement.dataset.locations || '[]');
  const map = L.map('franchises-map');
  const markersLayer = L.layerGroup().addTo(map);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution: '&copy; OpenStreetMap contributors'
  }).addTo(map);

  function normalizeState(value) {
    return String(value || '')
      .normalize('NFD')
      .replace(/[\u0300-\u036f]/g, '')
      .trim()
      .toLowerCase();
  }

  function getFilteredLocations() {
    const selectedState = stateSelect ? stateSelect.value : '';

    if (!selectedState) {
      return locations;
    }

    return locations.filter(function (location) {
      return normalizeState(location.state) === normalizeState(selectedState);
    });
  }

  function updateCards() {
    const selectedState = stateSelect ? stateSelect.value : '';

    cards.forEach(function (card) {
      const shouldShow = !selectedState || normalizeState(card.dataset.state) === normalizeState(selectedState);
      card.classList.toggle('is-hidden', !shouldShow);
    });
  }

  function updateMap(filteredLocations) {
    markersLayer.clearLayers();

    const bounds = [];

    filteredLocations.forEach(function (location) {
      const latitude = Number(location.latitude);
      const longitude = Number(location.longitude);

      if (Number.isNaN(latitude) || Number.isNaN(longitude)) {
        return;
      }

      const marker = L.marker([latitude, longitude]).addTo(markersLayer);
      const popupText = [location.name, location.city, location.state]
        .filter(Boolean)
        .join(' - ');

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
  }

  function render() {
    const filteredLocations = getFilteredLocations();
    updateCards();
    updateMap(filteredLocations);
  }

  if (stateSelect) {
    stateSelect.addEventListener('change', render);
  }

  render();
});

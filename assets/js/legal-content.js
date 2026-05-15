document.addEventListener('DOMContentLoaded', function () {
  const legalMenuItems = document.querySelectorAll('.legal-menu-item');
  const legalContentItems = document.querySelectorAll('[data-legal-content]');

  if (legalMenuItems.length === 0 || legalContentItems.length === 0) {
    return;
  }

  function activateLegalTab(targetId) {
    legalMenuItems.forEach(item => {
      const isActive = item.dataset.legalTab === targetId;
      item.classList.toggle('active', isActive);

      if (isActive) {
        item.setAttribute('aria-current', 'true');
      } else {
        item.removeAttribute('aria-current');
      }
    });

    legalContentItems.forEach(content => {
      const isActive = content.id === targetId;
      content.classList.toggle('active', isActive);
      content.hidden = !isActive;
    });
  }

  legalMenuItems.forEach(item => {
    item.addEventListener('click', function () {
      activateLegalTab(this.dataset.legalTab);
    });
  });
});

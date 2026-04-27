<?php
$icon = $args['icon'] ?? '';
$title = $args['title'] ?? '';
$content = $args['content'] ?? '';
$lastAccordion = $args['last-accordion'] ?? false;
?>

<div class="accordion-item <?php echo $lastAccordion ? esc_html('last-accordion') : esc_html('') ?>">
  <div class="accordion-header">
    <div class="accordion-header-content">
      <img class="icon-accordion" src="<?php echo get_template_directory_uri(); ?>/assets/icons/solutions/<?php echo esc_html($icon) ?>.svg" alt="Ticket">
    </div>
  </div>
  <div class="accordion-body">
    <h4><?php echo esc_html($title) ?></h4>
    <div class="accordion-content">
      <p><?php echo esc_html($content) ?></p>
      <div class="accordion-tags">
        <span class="accordion-tag">Restaurantes</span>
        <span class="accordion-tag">Bares</span>
        <span class="accordion-tag">Padarias</span>
        <span class="accordion-tag">Salões de beleza</span>
      </div>
    </div>
  </div>
  <div class="accordion-toggle">
    <span>+</span>
  </div>
</div>
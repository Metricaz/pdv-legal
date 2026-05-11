<?php
$title = $args['title'] ?? '';
$content = $args['content'] ?? '';
?>

<div class="accordion-about-item">
    <button class="accordion-about-header">
        <h3 class="accordion-about-title"><?php echo esc_html($title); ?></h3>
        <span class="accordion-about-icon"></span>
    </button>
    <div class="accordion-about-content">
        <p><?php echo esc_html($content); ?></p>
    </div>
</div>
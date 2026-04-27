<?php
$url = $args['url'] ?? '#';
$label = $args['label'] ?? 'Botão';
$class = $args['class'] ?? '';
?>

<a href="<?php echo esc_url($url); ?>" class="btn <?php echo esc_attr($class); ?>">
  <?php echo esc_html($label); ?>
</a>
<?php
$title = $args['title'] ?? '';
$description = $args['description'] ?? '';
$image = $args['image'] ?? '';
$typeImage = $args['typeImage'] ?? 'small';
?>

<div class="container-card">
    <img 
      class="img-card-about-system image-card-<?php echo esc_html($typeImage); ?>"
      src="<?php echo get_template_directory_uri(); ?><?php echo esc_html($image); ?>"
      alt=""
    >
    <h3><?php echo esc_html($title); ?></h3>
    <p><?php echo esc_html($description); ?></p>
</div>
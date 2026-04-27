<?php
$title = $args['title'] ?? '';
$description = $args['description'] ?? '';
$image = $args['image'] ?? '';
?>

<div class="content-card-system-modules">
    <h2 class="title-card-system-modules"><?php echo esc_html($title); ?></h2>
    <p class="description-card-system-modules"><?php echo esc_html($description); ?></p>
    <img
        class="img-card-system-modules"
        src="<?php echo get_template_directory_uri(); ?><?php echo esc_html($image); ?>"
        alt="Apresentando o sistema PDV Legal"
    >
</div>
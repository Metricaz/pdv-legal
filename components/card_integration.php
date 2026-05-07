<?php
$title = $args['title'] ?? '';
$description = $args['description'] ?? '';
$icon = $args['icon'] ?? '';
$segment = $args['segment'] ?? '';
$background_icon = $args['background_icon'] ?? '#ffffff';
?>

<div class="container-card-integration" id="<?php echo esc_html(strtolower($segment)); ?>">
    <div class="content-card-infos">
        <img 
            class="img-card-integration"
            style="background-color: <?php echo esc_html($args['background_icon']); ?>; border-radius: 20px;"
            src="<?php echo get_template_directory_uri(); ?><?php echo esc_html($icon); ?>"
            alt="ícone de integração"
        >
        <div>
            <h3><?php echo esc_html($title); ?></h3>
            <p class="segment-card-integration"><?php echo esc_html($segment); ?></p>
        </div>
    </div>
    <p class="description-card-integration"><?php echo esc_html($description); ?></p>
</div>
<?php
$title = $args['title'] ?? '';
$description = $args['description'] ?? '';
$image = $args['image'] ?? '';
$segment = $args['segment'] ?? '';
?>

<div class="container-card-integration">
    <div class="content-card-infos">
        <img 
            class="img-card-integration"
            src="<?php echo get_template_directory_uri(); ?><?php echo esc_html($image); ?>"
            alt=""
        >
        <div>
            <h3><?php echo esc_html($title); ?></h3>
            <p class="segment-card-integration"><?php echo esc_html($segment); ?></p>
        </div>
    </div>
    <p class="description-card-integration"><?php echo esc_html($description); ?></p>
</div>
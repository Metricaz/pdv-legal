<?php
$description = $args['description'] ?? '';
$company_name = $args['company_name'] ?? '';
$id_video = $args['id_video'] ?? '';
$segment = $args['segment'] ?? '';
$uf = $args['uf'] ?? '';
$city = $args['city'] ?? '';
?>

<div class="container-card-video">
    <iframe
        class="card-video"
        id="video-<?php echo esc_attr($id_video); ?>"
        src="https://www.youtube.com/embed/<?php echo esc_attr($id_video); ?>" 
        title="YouTube video player" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
    </iframe>
    <div class="content-card-video">
        <div>
            <p class="company-name-card-video"><?php echo esc_html($company_name); ?></p>
            <p class="segment-card-video"><?php echo esc_html($segment); ?></p>
            <p class="uf-card-video"><?php echo esc_html($city); ?> - <?php echo esc_html($uf); ?></p>
            <p class="description-card-video"><?php echo esc_html($description); ?></p>
        </div>
        <div class="content-button-view-case">
            <button class="btn btn-primary round" type="button" onclick="abrirFullscreen('video-<?php echo esc_attr($id_video); ?>')">
                Ver case
            </button>
        </div>
    </div>
</div>
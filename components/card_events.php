<?php
$title = $args['title'] ?? '';
$description = $args['description'] ?? '';
$city = $args['city'] ?? '';
$date_init = $args['date_init'] ?? '';
$date_end = $args['date_end'] ?? '';
$month = $args['month'] ?? '';
?>

<div class="container-card-events">
    <div class="content-card-infos">
        <div class="content-date-card-events">
            <span><?php echo esc_html($date_init); ?>-<?php echo esc_html($date_end); ?></span>
            <p><?php echo esc_html($month); ?></p>
        </div>
        <div>
            <h3><?php echo esc_html($title); ?></h3>
            <p class="city-card-events"><?php echo esc_html($city); ?></p>
        </div>
    </div>
    <p class="description-card-events"><?php echo esc_html($description); ?></p>
</div>
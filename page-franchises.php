<?php /* Template Name: Franchises */ ?>

<?php get_header(); ?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="">

<?php
$franchises = get_field('json_franchises');
$franchises_decoded = [];

if (is_string($franchises)) {
    $decoded = json_decode($franchises, true);
    $franchises_decoded = is_array($decoded) ? $decoded : [];
} elseif (is_array($franchises)) {
    $franchises_decoded = $franchises;
}

$default_locations = [
    [
        'name' => 'Web Curitiba',
        'city' => 'Curitiba',
        'state' => 'Parana',
        'latitude' => -25.4284,
        'longitude' => -49.2733,
    ],
    [
        'name' => 'Web Sao Paulo',
        'city' => 'Sao Paulo',
        'state' => 'Sao Paulo',
        'latitude' => -23.5505,
        'longitude' => -46.6333,
    ],
];

$states = ['Estado'];
$map_locations = [];

foreach ($franchises_decoded as $franchise) {
    if (!is_array($franchise) && !is_object($franchise)) {
        continue;
    }

    $name = is_array($franchise) ? ($franchise['name'] ?? 'Franquia') : ($franchise->name ?? 'Franquia');
    $city = is_array($franchise) ? ($franchise['city'] ?? '') : ($franchise->city ?? '');
    $state = is_array($franchise) ? ($franchise['state'] ?? '') : ($franchise->state ?? '');
    $latitude = is_array($franchise) ? ($franchise['latitude'] ?? null) : ($franchise->latitude ?? null);
    $longitude = is_array($franchise) ? ($franchise['longitude'] ?? null) : ($franchise->longitude ?? null);

    if ($state !== '') {
        $states[] = $state;
    }

    if (!is_numeric($latitude) || !is_numeric($longitude)) {
        continue;
    }

    $map_locations[] = [
        'name' => $name,
        'city' => $city,
        'state' => $state,
        'latitude' => (float) $latitude,
        'longitude' => (float) $longitude,
    ];
}

if (empty($map_locations)) {
    $map_locations = $default_locations;

    foreach ($default_locations as $location) {
        $states[] = $location['state'];
    }
}

$states = array_values(array_unique($states));

if (count($states) > 1) {
    $available_states = $states;
    unset($available_states[0]);
    sort($available_states);
    $states = array_merge(['Estado'], $available_states);
}
?>

<main class="franchises-page">
    <section class="franchises-hero">
        <div class="header-text">
            <h1>Franquias PDV Legal</h1>
            <p>Encontre a franquia mais proxima de voce e comece a utilizar o sistema de vendas que vai acelerar o seu
                negócio.</p>
        </div>
        <div class="franchises-filter">
            <span class="franchises-filter-label">Filtre por:</span>

            <?php if (!empty($states)): ?>
            <select class="franchises-select" name="franchise_state" id="franchise_state">
                <?php foreach ($states as $state): ?>
                <option value="<?php echo $state === 'Estado' ? '' : esc_attr($state); ?>">
                    <?php echo esc_html($state); ?>
                </option>
                <?php endforeach; ?>
            </select>
            <?php endif; ?>
        </div>
        <div class="franchises-controls">
            <div class="franchises-grid">
                <div class="franchises-list-column">
                    <div class="franchises-cards" id="franchises-cards">
                        <?php foreach ($map_locations as $location): ?>
                        <article class="franchise-card" data-state="<?php echo esc_attr($location['state']); ?>">
                            <h2 class="franchise-card-title"><?php echo esc_html($location['name']); ?></h2>
                            <p class="franchise-card-location">
                                <?php echo esc_html(trim(($location['city'] ?: 'Cidade nao informada') . ' - ' . ($location['state'] ?: 'Estado nao informado'))); ?>
                            </p>
                        </article>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="franchises-map-column">
                    <div class="franchises-map-wrapper">
                        <div id="franchises-map"
                            data-locations="<?php echo esc_attr(wp_json_encode($map_locations)); ?>"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('components/form_footer', null, ['hasBackground' => false]); ?>
</main>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<?php get_footer(); ?>
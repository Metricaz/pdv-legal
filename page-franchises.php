<?php /* Template Name: Franchises */ ?>

<?php get_header(); ?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="">

<?php
$franchises = get_field('json_franchises');
$franchises_decoded = json_decode($franchises, true);

$states = ['Estado'];
$map_locations = [];

foreach ($franchises_decoded as $franchise) {
    $state = $franchise['state'];

    if ($state !== '') {
        $states[] = $state;
    }

    $map_locations[] = [
        'name' => $franchise['name'],
        'state' => $franchise['state'],
        'latitude' => (float) $franchise['latitude'],
        'longitude' => (float) $franchise['longitude'],
    ];
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
            <h1>Franquias Web Automacao</h1>
            <p>Encontre a franquia mais proxima de voce e comece a utilizar o sistema de vendas que vai acelerar o seu
                negocio.</p>
        </div>

        <div class="franchises-controls">
            <?php if (!empty($states)): ?>
            <select class="franchises-select" name="franchise_state" id="franchise_state">
                <?php foreach ($states as $state): ?>
                <option value="<?php echo $state === 'Estado' ? '' : esc_attr($state); ?>">
                    <?php echo esc_html($state); ?>
                </option>
                <?php endforeach; ?>
            </select>
            <?php endif; ?>

            <div class="franchises-map-wrapper">
                <p class="franchises-map-description">O mapa abaixo utiliza latitude e longitude para marcar as
                    franquias. Dois pontos padrao foram adicionados para teste.</p>
                <div id="franchises-map" data-locations="<?php echo esc_attr(wp_json_encode($map_locations)); ?>"></div>
            </div>
        </div>
    </section>

    <?php get_template_part('components/form_footer', null, ['hasBackground' => false]); ?>
</main>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<?php get_footer(); ?>
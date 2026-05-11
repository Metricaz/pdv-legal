<?php /* Template Name: Cases */ ?>

<?php get_header(); ?>

<main>
<section class="hero-section">
        
        <div class="header-text">
            <h1>Integrações do PDV Legal</h1>
            <p>Conecte o sistema com outras ferramentas e<br/>plataformas do seu negócio.</p>
            <a class="content-arrow-down-integrarions" href="#cards-integrations">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/integrations/arrow-down-blue.svg" alt="Seta para baixo">
            </a>
        </div>

        <div class="ecosystem-container">
            <div class="glow-center"></div>
            <div class="center-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo.png" class="img-orbit-center" alt="Logo PDV Legal">
            </div>
            <div class="orbit-ring orbit-outer-ring"></div>
            <div class="orbit-ring-extra"></div>
            <div class="orbit-ring orbit-inner-ring"></div>

            <div id="orbit-outer" class="orbit-container orbit-cw"></div>
            
            <div id="orbit-inner" class="orbit-container orbit-ccw"></div>
        </div>
    </section>
    <section class="cards-integrations" id="cards-integrations">
        <p>Explorar integrações</p>
        <div class="container-cards-integrations">
            <?php
                $cards_integrations = get_field('cards_integrations');

                if ($cards_integrations) {
                    $cards_integrations = preg_replace('/,\s*]$/', ']', $cards_integrations);

                    $cards = json_decode($cards_integrations, true);

                    if ($cards && is_array($cards)) {
                        foreach ($cards as $card) {
                            $args = [
                                'title'   => $card['title'] ?? '',
                                'description'  => $card['description'] ?? '',
                                'icon'       => '/assets/icons/integrations/'.$card['icon'] ?? '',
                                'segment'      => $card['segment'] ?? '',
                                'background_icon' => $card['background_icon'] ?? '#ffffff'
                            ];

                            get_template_part('components/card_integration', null, $args);
                        }
                    } else {
                        echo '<p>Nenhuma integração encontrada.</p>';
                    }
                } else {
                    echo '<p>Nenhuma integração encontrada.</p>';
                }
            ?>
        </div>
        <div class="container-arrow-up-integrations">
            <a class="content-arrow-up-integrarions" href="#cards-integrations">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/integrations/arrow-up-blue.svg" alt="Seta para cima">
            </a>
        </div>
    </section>
    <section class="specialist-integrations">
        <h2>Não encontrou o seu sistema na lista de<br />integrações?</h2>
        <div class="button-specialist">
            <?php get_template_part('components/button', null, [
                'url' => '/#',
                'label' => 'Falar com especialista →',
                'class' => 'btn-primary btn '
            ]); ?>
        </div>
    </section>
    <?php get_template_part('components/form_footer', null, ['hasBackground' => false]); ?>
</main>
<?php get_footer(); ?>

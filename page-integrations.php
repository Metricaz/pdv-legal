<?php /* Template Name: Cases */ ?>

<?php get_header(); ?>

<main>
<section class="hero-section">
        
        <div class="header-text">
            <h1>Integrações do PDV Legal</h1>
            <p>Conecte o sistema com outras ferramentas e plataformas do seu negócio.</p>
        </div>

        <div class="ecosystem-container">
            <div class="glow-center"></div>
            <div class="orbit-ring orbit-outer-ring"></div>
            <div class="orbit-ring orbit-inner-ring"></div>

            <div id="orbit-outer" class="orbit-container orbit-cw"></div>
            
            <div id="orbit-inner" class="orbit-container orbit-ccw"></div>
        </div>
    </section>
    <section class="cards-integrations">
        <?php get_template_part('components/card_integration', null, [
            'title' => 'Delivery VIP',
            'description' => 'Integre o Delivery VIP ao PDV Legal para receber pedidos, gerenciar cardápio digital, autoatendimento (mesa e QR Code) e BOT de atendimento na mesma operação.',
            'image' => '/assets/images/integration/img-integration.png',
            'segment' => 'Delivery'
        ]); ?>
        <?php get_template_part('components/card_integration', null, [
            'title' => 'Delivery VIP',
            'description' => 'Integre o Delivery VIP ao PDV Legal para receber pedidos, gerenciar cardápio digital, autoatendimento (mesa e QR Code) e BOT de atendimento na mesma operação.',
            'image' => '/assets/images/integration/img-integration.png',
            'segment' => 'Delivery'
        ]); ?>
        <?php get_template_part('components/card_integration', null, [
            'title' => 'Delivery VIP',
            'description' => 'Integre o Delivery VIP ao PDV Legal para receber pedidos, gerenciar cardápio digital, autoatendimento (mesa e QR Code) e BOT de atendimento na mesma operação.',
            'image' => '/assets/images/integration/img-integration.png',
            'segment' => 'Delivery'
        ]); ?>
        <?php get_template_part('components/card_integration', null, [
            'title' => 'Delivery VIP',
            'description' => 'Integre o Delivery VIP ao PDV Legal para receber pedidos, gerenciar cardápio digital, autoatendimento (mesa e QR Code) e BOT de atendimento na mesma operação.',
            'image' => '/assets/images/integration/img-integration.png',
            'segment' => 'Delivery'
        ]); ?>
        <?php get_template_part('components/card_integration', null, [
            'title' => 'Delivery VIP',
            'description' => 'Integre o Delivery VIP ao PDV Legal para receber pedidos, gerenciar cardápio digital, autoatendimento (mesa e QR Code) e BOT de atendimento na mesma operação.',
            'image' => '/assets/images/integration/img-integration.png',
            'segment' => 'Delivery'
        ]); ?>
        <?php get_template_part('components/card_integration', null, [
            'title' => 'Delivery VIP',
            'description' => 'Integre o Delivery VIP ao PDV Legal para receber pedidos, gerenciar cardápio digital, autoatendimento (mesa e QR Code) e BOT de atendimento na mesma operação.',
            'image' => '/assets/images/integration/img-integration.png',
            'segment' => 'Delivery'
        ]); ?>
    </section>
    <?php get_template_part('components/form_footer', null, ['hasBackground' => false]); ?>
</main>
<?php get_footer(); ?>

<?php /* Template Name: Home */ ?>

<?php get_header(); ?>
<main class="main-content-home">
  <section class="home-hero" aria-labelledby="hero-title">
    <div class="content-hero-bg">
      <img
      class="hero-bg"
      src="<?php echo get_template_directory_uri(); ?>/assets/images/home/hero.png"
      alt="Apresentando o sistema PDV Legal"
      fetchpriority="high">
      <img
      class="hero-bg-mobile"
      src="<?php echo get_template_directory_uri(); ?>/assets/images/home/hero-mobile.png"
      alt="Apresentando o sistema PDV Legal"
      fetchpriority="high">
    </div>
    <div class="hero-content container">
      <h1 id="hero-title">
        Sistema de Gestão para<br />Varejo e Food Service
      </h1>
      <div class="subtitle-typed">
        <span id="typed-home"></span>
      </div>
      <div>
        <?php get_template_part('components/button', null, [
          'url' => '/#',
          'label' => 'Falar com especialista →',
          'class' => 'btn-primary btn btn-shadow'
        ]); ?>
      </div>
    </div>
    <a class="content-arrow-down" href="#about-system">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/arrow-down.svg" alt="Seta para baixo">
    </a>
  </section>
  <section class="about-system" id="about-system">
    <div class="content-about-system">
      <h1 class="title-about-system">Sistema completo direto na sua maquininha, com emissão fiscal automática e estrutura pronta para crescer com você.</h1>
      <div class="content-partners">
        <div class="partner-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/stone.svg" />
        </div>
        <div class="partner-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/cielo.svg" />
        </div>
        <div class="partner-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/clover.svg" />
        </div>
        <div class="partner-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/getnet.svg" />
        </div>
        <div class="partner-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/sicredi.svg" />
        </div>
        <div class="partner-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/bin.svg" />
        </div>
        <div class="partner-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/sitef.svg" />
        </div>
      </div>
      <div class="content-cards-system">
        <div class="card-system">
          <div class="icon-card-system">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/control.svg" alt="Ícone">
          </div>
          <h2>Controle total</h2>
          <p>
            Acompanhe vendas, estoque e desempenho da operação em tempo real. 
            Tome decisões com base em dados atualizados, sem depender de 
            conferências manuais no fim do dia.
          </p>
        </div>
        <div class="card-system">
          <div class="icon-card-system">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/part.svg" alt="Ícone">
          </div>
          <h2>Solução modular</h2>
          <p>
            Comece com o essencial e expanda conforme sua operação cresce. Os módulos se adaptam à sua realidade, evitando trocas de sistema ou reestruturações complexas no futuro.
          </p>
        </div>
        <div class="card-system">
          <div class="icon-card-system">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/link.svg" alt="Ícone">
          </div>
          <h2>Integração real</h2>
          <p>
            Conecte seu sistema às principais adquirentes e maquininhas do mercado. Reduza retrabalho, automatize conciliações e tenha mais controle sobre seus recebíveis.
          </p>
        </div>
        <div class="card-system">
          <div class="icon-card-system">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/cloud.svg" alt="Ícone">
          </div>
          <h2>Gestão em nuvem</h2>
          <p>
            Gerencie sua empresa com segurança, de qualquer lugar. Visualize relatórios, acompanhe resultados e tome decisões estratégicas sem depender de um único computador.
          </p>
        </div>
      </div>
      <div class="button-view-solutions">
        <?php get_template_part('components/button', null, [
          'url' => '/#',
          'label' => 'Conheça as soluções →',
          'class' => 'btn-primary btn'
        ]); ?>
      </div>
    </div>
  </section>
  <section class="integration-system">
    <h1 class="title-integration-system">Integrado com o que você já funciona pra você.</h1>
    <div class="slider">
      <div class="slide-track">
        
        <!-- ORIGINAL -->
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/google.svg" alt="Logo do google">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/facebook.svg" alt="Logo do facebook">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/youTube.svg" alt="Logo do youTube">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/pinterest.svg" alt="Logo do pinterest">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/twitch.svg" alt="Logo do twitch">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/webflow.svg" alt="Logo do webflow">

        <!-- DUPLICADO (loop infinito) -->
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/google.svg" alt="Logo do google">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/facebook.svg" alt="Logo do facebook">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/youTube.svg" alt="Logo do youTube">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/pinterest.svg" alt="Logo do pinterest">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/twitch.svg" alt="Logo do twitch">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/webflow.svg" alt="Logo do webflow">

        <!-- DUPLICADO (loop infinito) -->
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/google.svg" alt="Logo do google">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/facebook.svg" alt="Logo do facebook">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/youTube.svg" alt="Logo do youTube">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/pinterest.svg" alt="Logo do pinterest">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/twitch.svg" alt="Logo do twitch">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/webflow.svg" alt="Logo do webflow">

        <!-- DUPLICADO (loop infinito) -->
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/google.svg" alt="Logo do google">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/facebook.svg" alt="Logo do facebook">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/youTube.svg" alt="Logo do youTube">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/pinterest.svg" alt="Logo do pinterest">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/twitch.svg" alt="Logo do twitch">
        <img class="item" src="<?php echo get_template_directory_uri(); ?>/assets/icons/home/webflow.svg" alt="Logo do webflow">

      </div>
    </div>
  </section>
  <section class="explore-integrations">
    <div class="bottom-card-explore-integrations">
      <h2>[Imagem aqui]</h2>
    </div>
    <div class="top-card-explore-integrations">
      <h2>Explore todas as possibilidades de integração do PDV Legal e descubra como conectar a solução ao seu cenário.</h2>
      <?php get_template_part('components/button', null, [
          'url' => '/#',
          'label' => 'Explorar integrações',
          'class' => 'btn-outline-dark btn'
        ]); ?>
    </div>
  </section>
  <section class="your-business">
    <h3 class="title-your-business">Feito para o seu negócio</h3>
    <div class="tabs">
      <button class="tab active" data-tab="restaurantes">Restaurantes</button>
      <button class="tab" data-tab="varejo">Varejo</button>
      <button class="tab" data-tab="eventos">Eventos</button>
      <button class="tab" data-tab="servicos">Serviços</button>
    </div>
    <div class="tab-content-home" id="restaurantes">
      <div class="tab-content-dekstop">
        <div class="tab-info-img">
          <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/home/payment.png"
          alt="Image do cliente utilizando o sistema">
        </div>
        <div class="tab-infos">
          <h4 class="description-client">O PDV Legal organiza o fluxo do seu restaurante, garantindo atendimento rápido, controle preciso dos pedidos e uma operação mais eficiente.</h4>
          <ul class="list-assessment">
            <li><strong>Gestão de pedidos em mesas, balcão e delivery.</strong></li>
            <li><strong>Envio automático de pedidos para a cozinha.</strong></li>
            <li><strong>Controle de cardápio e preços.</strong></li>
            <li><strong>Divisão de conta e múltiplas formas de pagamento.</strong></li>
            <li><strong>Controle de estoque de insumos.</strong></li>
          </ul>
          <div class="buttons-actions-your-business">
            <?php get_template_part('components/button', null, [
              'url' => '/#',
              'label' => 'Conheça as soluções →',
              'class' => 'btn-primary btn'
            ]); ?>
            <?php get_template_part('components/button', null, [
              'url' => '/#',
              'label' => 'Falar com especialista',
              'class' => 'btn-outline-dark'
            ]); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-content-home" id="varejo" style="display:none;">
      <div class="tab-content-dekstop">
        <div class="tab-info-img">
          <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/home/payment.png"
          alt="Image do cliente utilizando o sistema">
        </div>
        <div class="tab-infos">
          <h4 class="description-client">O PDV Legal torna o atendimento no varejo mais ágil e moderno, com opções de autoatendimento, frente de caixa eficiente, controle de estoque e recursos pensados para fortalecer o relacionamento com o cliente.</h4>
          <ul class="list-assessment">
            <li><strong>Modelos de autoatendimento e mini mercados.</strong></li>
            <li><strong>Cadastro de clientes com limite de crédito - fiado.</strong></li>
            <li><strong>Gestão de promoções e descontos.</strong></li>
            <li><strong>Histórico de vendas e comportamento de compra.</strong></li>
            <li><strong>Relatórios de vendas por loja, produto e período.</strong></li>
          </ul>
          <div class="buttons-actions-your-business">
            <?php get_template_part('components/button', null, [
              'url' => '/#',
              'label' => 'Conheça as soluções →',
              'class' => 'btn-primary btn'
            ]); ?>
            <?php get_template_part('components/button', null, [
              'url' => '/#',
              'label' => 'Falar com especialista',
              'class' => 'btn-outline-dark'
            ]); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-content-home" id="eventos" style="display:none;">
      <div class="tab-content-dekstop">
        <div class="tab-info-img">
          <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/home/payment.png"
          alt="Image do cliente utilizando o sistema">
        </div>
        <div class="tab-infos">
          <h4 class="description-client">O PDV Legal acompanha o ritmo dos eventos, garantindo vendas rápidas em momentos de alta demanda e controle total do faturamento.</h4>
          <ul class="list-assessment">
            <li><strong>Pontos de atendimento simultâneos.</strong></li>
            <li><strong>Operação adequada para ambientes com internet instável.</strong></li>
            <li><strong>Criação ágil de cardápios para cada evento.</strong></li>
            <li><strong>Conferência rápida ao final do evento ou do dia.</strong></li>
          </ul>
          <div class="buttons-actions-your-business">
            <?php get_template_part('components/button', null, [
              'url' => '/#',
              'label' => 'Conheça as soluções →',
              'class' => 'btn-primary btn'
            ]); ?>
            <?php get_template_part('components/button', null, [
              'url' => '/#',
              'label' => 'Falar com especialista',
              'class' => 'btn-outline-dark'
            ]); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-content-home" id="servicos" style="display:none;">
      <div class="tab-content-dekstop">
        <div class="tab-info-img">
          <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/home/payment.png"
          alt="Image do cliente utilizando o sistema">
        </div>
        <div class="tab-infos">
          <h4 class="description-client">O PDV Legal atende redes e franquias, oferecendo padronização, controle por unidade e visão consolidada da operação.</h4>
          <ul class="list-assessment">
            <li><strong>Padronização de produtos, preços e regras comerciais.</strong></li>
            <li><strong>Gestão centralizada com visão por unidade.</strong></li>
            <li><strong>Relatórios consolidados de vendas.</strong></li>
            <li><strong>Controle de estoque por loja.</strong></li>
            <li><strong>Configuração de perfis e permissões por franquia.</strong></li>
            <li><strong>Facilidade na abertura de novas unidades.</strong></li>
          </ul>
          <div class="buttons-actions-your-business">
            <?php get_template_part('components/button', null, [
              'url' => '/#',
              'label' => 'Conheça as soluções →',
              'class' => 'btn-primary btn'
            ]); ?>
            <?php get_template_part('components/button', null, [
              'url' => '/#',
              'label' => 'Falar com especialista',
              'class' => 'btn-outline-dark'
            ]); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="buttons-actions-your-business-mobile">
      <?php get_template_part('components/button', null, [
        'url' => '/#',
        'label' => 'Conheça as soluções →',
        'class' => 'btn-primary btn'
      ]); ?>
      <?php get_template_part('components/button', null, [
        'url' => '/#',
        'label' => 'Falar com especialista',
        'class' => 'btn-outline-dark'
      ]); ?>
    </div>
  </section>
  <?php get_template_part('components/form_footer'); ?>
</main>

<?php get_footer(); ?>
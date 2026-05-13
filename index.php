<?php /* Template Name: Home */ ?>

<?php get_header(); ?>
<main class="main-content-home">

<section class="home-hero" aria-labelledby="hero-title">
    <div class="content-hero-bg">
        <img 
            class="hero-bg" 
            src="<?php echo get_template_directory_uri(); ?>/assets/images/home/hero.webp" 
            alt="Sistema de Gestão para Varejo e Food Service"
            fetchpriority="high">
        <img 
            class="hero-bg-mobile" 
            src="<?php echo get_template_directory_uri(); ?>/assets/images/home/hero-mobile.webp" 
            alt="Sistema de Gestão para Varejo e Food Service"
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
          'url' => '/solutions',
          'label' => 'Conheça as soluções →',
          'class' => 'btn-primary btn'
        ]); ?>
      </div>
    </div>
  </section>
  <section class="integration-system">
    <h1 class="title-integration-system">O PDV Legal funciona com:</h1>
    <div class="slider">
      <div class="slide-track">

<?php 
$pasta_logos = get_template_directory() . '/assets/icons/home/parceiros/';
$arquivos = scandir($pasta_logos);

$logos = array_filter($arquivos, function($arquivo) {
    return pathinfo($arquivo, PATHINFO_EXTENSION) === 'svg';
});

$logos = array_values($logos);
shuffle($logos);
$repeticoes = 4;

for($rodada = 1; $rodada <= $repeticoes; $rodada++) {
    foreach($logos as $arquivo) {
        $nome_limpo = pathinfo($arquivo, PATHINFO_FILENAME);
        $nome_exibicao = str_replace(['Logo-', '-BRANCO', '-1'], '', $nome_limpo);
        $caminho = get_template_directory_uri() . '/assets/icons/home/parceiros/' . $arquivo;
        echo '<img class="item" src="' . $caminho . '" alt="Logo ' . $nome_exibicao . '">';
    }
}
?>

      </div>
    </div>

        <div class="slider slider-mobile">
      <div class="slide-track">

<?php 
$pasta_logos = get_template_directory() . '/assets/icons/home/parceiros/';
$arquivos = scandir($pasta_logos);

$logos = array_filter($arquivos, function($arquivo) {
    return pathinfo($arquivo, PATHINFO_EXTENSION) === 'svg';
});

$logos = array_values($logos);
shuffle($logos);
$repeticoes = 4;

for($rodada = 1; $rodada <= $repeticoes; $rodada++) {
    foreach($logos as $arquivo) {
        $nome_limpo = pathinfo($arquivo, PATHINFO_FILENAME);
        $nome_exibicao = str_replace(['Logo-', '-BRANCO', '-1'], '', $nome_limpo);
        $caminho = get_template_directory_uri() . '/assets/icons/home/parceiros/' . $arquivo;
        echo '<img class="item" src="' . $caminho . '" alt="Logo ' . $nome_exibicao . '">';
    }
}
?>

      </div>
</div>

  <div class="slider slider-mobile">
      <div class="slide-track">

<?php 
$pasta_logos = get_template_directory() . '/assets/icons/home/parceiros/';
$arquivos = scandir($pasta_logos);

$logos = array_filter($arquivos, function($arquivo) {
    return pathinfo($arquivo, PATHINFO_EXTENSION) === 'svg';
});

$logos = array_values($logos);
shuffle($logos);
$repeticoes = 4;

for($rodada = 1; $rodada <= $repeticoes; $rodada++) {
    foreach($logos as $arquivo) {
        $nome_limpo = pathinfo($arquivo, PATHINFO_FILENAME);
        $nome_exibicao = str_replace(['Logo-', '-BRANCO', '-1'], '', $nome_limpo);
        $caminho = get_template_directory_uri() . '/assets/icons/home/parceiros/' . $arquivo;
        echo '<img class="item" src="' . $caminho . '" alt="Logo ' . $nome_exibicao . '">';
    }
}
?>

      </div>
</div>
  </section>


  <section class="explore-integrations">
    <div class="top-card-explore-integrations">
        <h2>Explore todas as possibilidades de integração do PDV Legal e descubra como conectar a solução ao seu cenário.</h2>
        <a href="/solutions" class="btn-explore">Explorar integrações</a>
    </div>
</section>

    <?php get_template_part('components/section-your-business'); ?>

  
  <?php get_template_part('components/form_footer'); ?>
</main>

<?php get_footer(); ?>

<?php /* Template Name: Soluções */ ?>

<?php get_header(); ?>

<main>
  <section class="our-solutions">
    <div class="content-our-solutions">
      <div>
        <h1>Sistema de vendas para<br/>diferentes formatos de<br/>atendimento</h1>
        <p>Rode o PDV Legal em maquininhas, celulares, tablets e totens.</p>
      </div>
      <div class="animation-our-solutions">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/solutions/gif-solutions.png" alt="Soluções PDV Legal">
      </div>
    </div>
  </section>
  <section class="mode-user">
    <h3 class="title-mode-use">Modos de uso para <span id="typed"></span></h3>
    <?php get_template_part('components/accordion', null, [
      'icon' => 'food',
      'title' => 'Modo Balcão',
      'content' => 'Controle mesas abertas, pedidos por cliente e fechamento da conta de forma organizada e rápida. Lance itens durante o atendimento, envie para produção e acompanhe tudo em tempo real. Permite transferir mesas, separar contas e finalizar com diferentes formas de pagamento.'
    ]); ?>
    <?php get_template_part('components/accordion', null, [
      'icon' => 'coupon',
      'title' => 'Modo Balcão',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit id venenatis pretium risus euismod dictum egestas orci netus feugiat ut egestas ut sagittis tincidunt phasellus elit etiam cursus orci in. Id sed montes. '
    ]); ?>
    <?php get_template_part('components/accordion', null, [
      'icon' => 'ticket',
      'title' => 'Modo Ficha',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit id venenatis pretium risus euismod dictum egestas orci netus feugiat ut egestas ut sagittis tincidunt phasellus elit etiam cursus orci in. Id sed montes. '
    ]); ?>
    <?php get_template_part('components/accordion', null, [
      'icon' => 'robot',
      'title' => 'Modo Auto-Atendimento',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit id venenatis pretium risus euismod dictum egestas orci netus feugiat ut egestas ut sagittis tincidunt phasellus elit etiam cursus orci in. Id sed montes. '
    ]); ?>
    <?php get_template_part('components/accordion', null, [
      'icon' => 'box',
      'title' => 'Modo Para Pedidos',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit id venenatis pretium risus euismod dictum egestas orci netus feugiat ut egestas ut sagittis tincidunt phasellus elit etiam cursus orci in. Id sed montes. ',
    ]); ?>
    <?php get_template_part('components/accordion', null, [
      'icon' => 'hand',
      'title' => 'Modo Comanda',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit id venenatis pretium risus euismod dictum egestas orci netus feugiat ut egestas ut sagittis tincidunt phasellus elit etiam cursus orci in. Id sed montes. ',
    ]); ?>
    <?php get_template_part('components/accordion', null, [
      'icon' => 'phone',
      'title' => 'Modo Balcão + QR Code + Cardápio',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit id venenatis pretium risus euismod dictum egestas orci netus feugiat ut egestas ut sagittis tincidunt phasellus elit etiam cursus orci in. Id sed montes. ',
    ]); ?>
    <?php get_template_part('components/accordion', null, [
      'icon' => 'balance',
      'title' => 'Modo Buffet',
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit id venenatis pretium risus euismod dictum egestas orci netus feugiat ut egestas ut sagittis tincidunt phasellus elit etiam cursus orci in. Id sed montes. ',
      'last-accordion' => true
    ]); ?>
  </section>
  <section class="system-modules">
    <h3 class="title-system-modules">Módulos Do Sistema</h3>
    <div class="tabs-solutions">
      <button class="tab-solutions active" data-tab="retaguarda">Retaguarda</button>
      <button class="tab-solutions" data-tab="estoque">Estoque</button>
      <button class="tab-solutions" data-tab="financeiro">Financeiro</button>
      <button class="tab-solutions" data-tab="fidelidade">Fidelidade</button>
      <button class="tab-solutions" data-tab="delivery">Delivery</button>
    </div>
    <div class="tab-content-solutions" id="retaguarda">
      <div class="tab-infos-solutions">
        <h5 class="description-client-solutions">Acompanhe sua operação em tempo real com relatórios, cadastro de produtos e controle completo.</h5>
        <ul class="list-assessment-solutions">
          <li><strong>Relatórios de vendas</strong></li>
          <li><strong>Cadastro de produtos</strong></li>
          <li><strong>Modificadores</strong></li>
          <li><strong>Controle de usuários</strong></li>
          <li><strong>Fiado</strong></li>
          <li><strong>Tempo real</strong></li>
        </ul>
        <div class="buttons-actions-solutions">
          <?php get_template_part('components/button', null, [
            'url' => '/#',
            'label' => 'Conheça as soluções →',
            'class' => 'btn-primary btn'
          ]); ?>
        </div>
      </div>
      <div class="tab-info-img-solutions">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/home/payment.png"
          alt="Image do cliente utilizando o sistema">
      </div>
    </div>
    <div class="tab-content-solutions" id="estoque" style="display:none;">
      <div class="tab-infos-solutions">
        <h5 class="description-client-solutions">Controle entradas, saídas e consumo automaticamente.</h5>
        <ul class="list-assessment-solutions">
          <li><strong>Controle de estoque</strong></li>
          <li><strong>Baixa automática</strong></li>
          <li><strong>Inventário</strong></li>
          <li><strong>Alertas</strong></li>
          <li><strong>Custo de produto</strong></li>
        </ul>
        <div class="buttons-actions-solutions">
          <?php get_template_part('components/button', null, [
            'url' => '/#',
            'label' => 'Conheça as soluções →',
            'class' => 'btn-primary btn'
          ]); ?>
        </div>
      </div>
      <div class="tab-info-img-solutions">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/home/payment.png"
          alt="Image do cliente utilizando o sistema">
      </div>
    </div>
    <div class="tab-content-solutions" id="financeiro" style="display:none;">
      <div class="tab-infos-solutions">
        <h5 class="description-client-solutions">Tenha visão clara do faturamento e fluxo de caixa.</h5>
        <ul class="list-assessment-solutions">
          <li><strong>Fluxo de caixa</strong></li>
          <li><strong>Contas a pagar</strong></li>
          <li><strong>Contas a receber</strong></li>
          <li><strong>Relatórios financeiros</strong></li>
        </ul>
        <div class="buttons-actions-solutions">
          <?php get_template_part('components/button', null, [
            'url' => '/#',
            'label' => 'Conheça as soluções →',
            'class' => 'btn-primary btn'
          ]); ?>
        </div>
      </div>
      <div class="tab-info-img-solutions">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/home/payment.png"
          alt="Image do cliente utilizando o sistema">
      </div>
    </div>
    <div class="tab-content-solutions" id="fidelidade" style="display:none;">
      <div class="tab-infos-solutions">
        <h5 class="description-client-solutions">Crie programas para aumentar a recorrência.</h5>
        <ul class="list-assessment-solutions">
          <li><strong>Cashback</strong></li>
          <li><strong>Pontuação</strong></li>
          <li><strong>Promoções</strong></li>
          <li><strong>Clientes cadastrados</strong></li>
        </ul>
        <div class="buttons-actions-solutions">
          <?php get_template_part('components/button', null, [
            'url' => '/#',
            'label' => 'Conheça as soluções →',
            'class' => 'btn-primary btn'
          ]); ?>
        </div>
      </div>
      <div class="tab-info-img-solutions">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/home/payment.png"
          alt="Image do cliente utilizando o sistema">
      </div>
    </div>
    <div class="tab-content-solutions" id="delivery" style="display:none;">
      <div class="tab-infos-solutions">
        <h5 class="description-client-solutions">Acompanhe sua operação em tempo real com relatórios, cadastro de produtos e controle completo.Integração com plataformas e gestão dos pedidos.</h5>
        <ul class="list-assessment-solutions">
          <li><strong>Integração delivery</strong></li>
          <li><strong>Pedidos centralizados</strong></li>
          <li><strong>Status automático</strong></li>
          <li><strong>Controle entregas</strong></li>
        </ul>
        <div class="buttons-actions-solutions">
          <?php get_template_part('components/button', null, [
            'url' => '/#',
            'label' => 'Conheça as soluções →',
            'class' => 'btn-primary btn'
          ]); ?>
        </div>
      </div>
      <div class="tab-info-img-solutions">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/home/payment.png"
          alt="Image do cliente utilizando o sistema">
      </div>
    </div>
  </section>
  <section class="view-cases">
    <p class="title-view-cases">GOSTOU DAS SOLUÇÕES?</p>
    <h2 class="description-view-cases">Veja negócios reais utilizando o PDV Legal.</h2>
    <div class="button-view-cases">
      <?php get_template_part('components/button', null, [
        'url' => '/#',
        'label' => 'Ver cases',
        'class' => 'btn-primary btn round'
      ]); ?>
    </div>
  </section>
  <?php get_template_part('components/form_footer', null, ['hasBackground' => true]); ?>
</main>

<?php get_footer(); ?>
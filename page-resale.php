<?php /* Template Name: Revenda */ ?>

<?php get_header(); ?>

<main>
    <section class="resale">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resale/hero-resale.png" alt="Revenda" />
        <div class="text-hero-resale">
            <h1>Cresça no mercado<br />de food service</h1>
            <p>Modelo validado e pronto para escalar</p>
            <div>
                <?php get_template_part('components/button', null, [
                    'url' => '/#',
                    'label' => 'Quero crescer com o PDV Legal →',
                    'class' => 'btn btn-blue'
                ]); ?>
                <?php get_template_part('components/button', null, [
                    'url' => '/#',
                    'label' => 'Ver cases',
                    'class' => 'btn btn-white'
                ]); ?>
            </div>
        </div>
    </section>
    <section class="resale-infos-numbers">
        <div class="container-resale-infos-numbers">
            <div class="content-resale-infos-numbers">
                <h2 class="counter" data-target="11" data-prefix="+" data-sufix=" Mil">+11 Mil</h2>
                <p>Clientes ativos</p>
            </div>
            <div class="content-resale-infos-numbers border-infos-numbers-resale">
                <h2 class="counter" data-target="7" data-prefix="R$ " data-sufix=" Bi">R$ 7 Bi</h2>
                <p>Transacionado por ano</p>
            </div>
            <div class="content-resale-infos-numbers border-infos-numbers-resale">
                <h2>Todos</h2>
                <p>Os estados</p>
            </div>
            <div class="content-resale-infos-numbers border-infos-numbers-resale">
                <h2 class="counter" data-target="35" data-prefix="+" data-sufix=" Mil">+35 Mil</h2>
                <p>leads por ano</p>
            </div>
        </div>
    </section>
    <section class="resale-infos-numbers-mobile">
        <div class="container-resale-infos-numbers-mobile">
            <div class="content-resale-infos-numbers border-infos-numbers-resale-mobile">
                <h2 class="counter" data-target="11" data-prefix="+" data-sufix=" Mil">+11 Mil</h2>
                <p>Clientes ativos</p>
            </div>
            <div class="content-resale-infos-numbers border-infos-numbers-resale-mobile">
                <h2 class="counter" data-target="7" data-prefix="R$ " data-sufix=" Bi">R$ 7 Bi</h2>
                <p>Transacionado por ano</p>
            </div>
            <div class="content-resale-infos-numbers border-infos-numbers-resale-mobile">
                <h2>Todos</h2>
                <p>Os estados</p>
            </div>
            <div class="content-resale-infos-numbers border-infos-numbers-resale-mobile">
                <h2 class="counter" data-target="35" data-prefix="+" data-sufix=" Mil">+35 Mil</h2>
                <p>leads por ano</p>
            </div>
        </div>
    </section>
    <section class="resale-comparative-chart">
        <div class="container-comparative-desktop">
            <h2>Vender tecnologia sozinho é difícil.</h2>
            <p>O PDV Legal possui um ecossistema completo para você crescer com consistência - mesmo sem estrutura
                grande.</p>
            <div class="container-comparative">
                <hr class="line-comparative-one">
                <hr class="line-comparative-two">
                <hr class="line-comparative-three">
                <div class="content-comparative-infos">
                    <p></p>
                    <p>Custo de desenvolvimento</p>
                    <p>Escalabilidade</p>
                    <p>Geração de leads</p>
                    <p>Suporte comercial</p>
                </div>
                <div class="content-comparative-not-pdv">
                    <h3 class="header-comparative">
                        Sem PDV Legal
                        <svg class="icon red" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="10" fill="#dc2626" />
                            <path d="M15 9L9 15M9 9L15 15" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </h3>
                    <p>Alto</p>
                    <p>Limitada</p>
                    <p>Instável</p>
                    <p>Solitário</p>
                </div>
                <div class="content-comparative-pdv">
                    <h3 class="header-comparative">
                        Com PDV Legal
                        <svg class="icon green" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="10" fill="#16a34a" />
                            <path d="M8 12.5L10.5 15L16 9" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </h3>
                    <p>Reduzido</p>
                    <p>Estruturada</p>
                    <p>Contínua</p>
                    <p>Personalizado</p>
                </div>
            </div>
        </div>
        <!-- <div class="container-comparative-mobile">
            <div class="carousel-container-resale">
                <div class="carousel-track-resale">
                    <div class="carousel-slide-resale active">
                        <div class="content-comparative-not-pdv">
                            <h3 class="header-comparative">
                                Sem PDV Legal
                                <svg class="icon red" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="10" fill="#dc2626" />
                                    <path d="M15 9L9 15M9 9L15 15" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </h3>
                            <p>Alto</p>
                            <p>Limitada</p>
                            <p>Instável</p>
                            <p>Solitário</p>
                        </div>
                    </div>
                    <div class="carousel-slide-resale">
                        <div class="slide-content-resale" style="background: #10b981;">Slide 2</div>
                    </div>
                </div>

                <div class="carousel-dots-resale">
                    <button class="dot-resale active" data-index="0" aria-label="Slide 1"></button>
                    <button class="dot-resale" data-index="1" aria-label="Slide 2"></button>
                </div>
            </div>
        </div> -->
    </section>
    <section class="resale-comparative-chart-mobile">
        <div class="container">
            <div class="resale-comparative-chart-header">
                <h2>Vender tecnologia sozinho é difícil.</h2>
                <br>
                <p>O PDV Legal possui um ecossistema completo para você crescer com consistência - mesmo sem estrutura
                    grande.</p>
                    <div class="carousel-container-resale">
                        <div class="carousel-track-resale">
                            <div class="carousel-slide-resale active">
                                <div class="resale-comparative-pdv-header">
                                    <h3 class="header-comparative">Sem PDV Legal
                                        <svg class="icon red" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="10" fill="#dc2626" />
                                            <path d="M15 9L9 15M9 9L15 15" stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        </svg>
                                    </h3>
                                    <br>
                                    <table>
                                        <tr>
                                            <td>Custo de desenvolvimento</td>
                                            <td>Alto</td>
                                        </tr>
                                        <tr>
                                            <td>Escalabilidade</td>
                                            <td>Limitada</td>
                                        </tr>
                                        <tr>
                                            <td>Geração de leads</td>
                                            <td>Instável</td>
                                        </tr>
                                        <tr>
                                            <td>Suporte comercial</td>
                                            <td>Solitário</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="carousel-slide-resale">
                                <div class="resale-comparative-pdv-header">
                                    <h3 class="header-comparative">Com PDV Legal
                                        <svg class="icon green" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="10" fill="#16a34a" />
                                            <path d="M8 12.5L10.5 15L16 9" stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        </svg>
                                    </h3>
                                    <br>
                                    <table>
                                        <tr>
                                            <td>Custo de desenvolvimento</td>
                                            <td>Reduzido</td>
                                        </tr>
                                        <tr>
                                            <td>Escalabilidade</td>
                                            <td>Estruturada</td>
                                        </tr>
                                        <tr>
                                            <td>Geração de leads</td>
                                            <td>Contínua</td>
                                        </tr>
                                        <tr>
                                            <td>Suporte comercial</td>
                                            <td>Personalizado</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-dots-resale">
                            <button class="dot-resale active" data-index="0" aria-label="Slide 1"></button>
                            <button class="dot-resale" data-index="1" aria-label="Slide 2"></button>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <section class="resale-model">
        <div class="container-resale-model">
            <h2>Não é só uma revenda.<br />É um modelo de crescimento.</h2>
            <p>O PDV Legal possui um ecossistema completo para você crescer com<br />consistência - mesmo sem estrutura
                grande.</p>

            <div class="content-resale-model">
                <div class="card-model-resale">
                    <div class="icon-card-model-resale">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/resale/refresh-resale.svg"
                            alt="Ícone">
                    </div>
                    <h4>Produto<br />Completo</h4>
                </div>
                <div class="card-model-resale">
                    <div class="icon-card-model-resale">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/resale/megaphone.svg"
                            alt="Ícone">
                    </div>
                    <h4>Marketing e<br />Demanda</h4>
                </div>
                <div class="card-model-resale">
                    <div class="icon-card-model-resale">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/resale/headset.svg"
                            alt="Ícone">
                    </div>
                    <h4>Suporte e<br />Capacitação</h4>
                </div>
                <div class="card-model-resale">
                    <div class="icon-card-model-resale">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/resale/community.svg"
                            alt="Ícone">
                    </div>
                    <h4>Comunidade e<br />Parcerias</h4>
                </div>
            </div>
            <div class="container-button-model-resale">
                <?php get_template_part('components/button', null, [
                    'url' => '/#',
                    'label' => 'Quero crescer com o PDV Legal →',
                    'class' => 'btn btn-blue'
                ]); ?>
            </div>
        </div>
    </section>
    <section class="growth">
        <div>
            <p>COMO VOCÊ VAI CRESCER</p>
            <div class="container-growth">
                <div class="content-growth">
                    <p class="content-growth-title">Você não começa do zero</p>
                    <p class="content-growth-subtitle">Onboarding + Capacitação + Ajuda</p>
                    <div class="content-growth-checks">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/resale/checked.svg"
                            alt="Ícone de check" />
                        <p>Treinamento e capacitação contínua</p>
                    </div>
                    <div class="content-growth-checks">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/resale/checked.svg"
                            alt="Ícone de check" />
                        <p>Suporte próximo no dia a dia</p>
                    </div>
                    <div class="content-growth-checks">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/resale/checked.svg"
                            alt="Ícone de check" />
                        <p>Universidade com trilhas técnicas, comerciais<br />e de marketing</p>
                    </div>
                </div>
                <div class="content-growth">
                    <p class="content-growth-title">Você cresce com estratégia</p>
                    <p class="content-growth-subtitle">Marketing + Comercial + Parcerias</p>
                    <div class="content-growth-checks">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/resale/checked.svg"
                            alt="Ícone de check" />
                        <p>Suporte e capacitação comercial</p>
                    </div>
                    <div class="content-growth-checks">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/resale/checked.svg"
                            alt="Ícone de check" />
                        <p>Campanhas impulsionadas para geração de demanda</p>
                    </div>
                    <div class="content-growth-checks">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/resale/checked.svg"
                            alt="Ícone de check" />
                        <p>Parcerias com empresas do mercado</p>
                    </div>
                </div>
                <div class="content-growth">
                    <p class="content-growth-title">Você faz parte de algo maior</p>
                    <p class="content-growth-subtitle">Marca + Eventos + Liberdade</p>
                    <div class="content-growth-checks">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/resale/checked.svg"
                            alt="Ícone de check" />
                        <p>Liberdade na gestão dos seus clientes</p>
                    </div>
                    <div class="content-growth-checks">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/resale/checked.svg"
                            alt="Ícone de check" />
                        <p>Presença nas principais feiras do mercado</p>
                    </div>
                    <div class="content-growth-checks">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/resale/checked.svg"
                            alt="Ícone de check" />
                        <p>Marca consolidada e em expansão</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="partners-resale">
        <h2>Veja como nossos parceiros estão<br />crescendo com o PDV Legal.</h2>

        <div class="container-partners-resale">
            <?php get_template_part('components/card_video', null, [
                'description' => 'Reduziu 40% o tempo de atendimento.',
                'company_name' => 'Empresa',
                'segment' => 'Restaurante',
                'id_video' => '',
                'uf' => 'Estado',
                'city' => 'Cidade',
                'view_case' => false
            ]); ?>
            <?php get_template_part('components/card_video', null, [
                'description' => 'Reduziu 40% o tempo de atendimento.',
                'company_name' => 'Empresa',
                'segment' => 'Restaurante',
                'id_video' => '',
                'uf' => 'Estado',
                'city' => 'Cidade',
                'view_case' => false
            ]); ?>
        </div>
    </section>
    <section class="network-resale">
        <div>
            <h2>Comece agora a construir sua revenda com<br />estrutura de verdade</h2>
            <div class="container-button-network-resale">
                <?php get_template_part('components/button', null, [
                    'url' => '/#',
                    'label' => 'Quero entrar para a rede →',
                    'class' => 'btn btn-blue'
                ]); ?>
            </div>
        </div>
    </section>
    <div class="form-resale">
<?php get_template_part('components/form_footer', null, ['hasBackground' => true, 'colorBackground' => '#EAB308']); ?>
    </div>
    
</main>
<?php get_footer(); ?>
<?php /* Template Name: Cases */ ?>

<?php get_header(); ?>

<main>
    <section class="cases">
        <div class="content-cases">
            <h1>Negócios reais que utilizam o<br />sistema em todo Brasil.</h1>
            <p>Veja como diferentes empresas utilizam o PDV Legal no dia a dia.</p>
        </div>
    </section>
    <section class="cases-list">
        <div class="container-open-filters">
            <div class="content-open-filters">
                <span>Filtrar</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cases/filter.svg" alt="Ícone de filtro" />
            </div>
        </div>
        <div class="container-filters-cases">
            <select name="" id="" class="select-filter">
                <option default>Estado</option>
                <option value="xxx">xxx</option>
            </select>
            <select name="" id="" class="select-filter">
                <option default>Segmento</option>
                <option value="xxx">xxx</option>
            </select>
            <select name="" id="" class="select-filter">
                <option default>Modo de Uso</option>
                <option value="xxx">xxx</option>
            </select>
            <select name="" id="" class="select-filter">
                <option default>Integrações</option>
                <option value="xxx">xxx</option>
            </select>
            <select name="" id="" class="select-filter">
                <option default>Equipamentos</option>
                <option value="xxx">xxx</option>
            </select>
        </div>
        <div class="container-cases-list" id="cases-container"></div>
        <div class="refresh-cases">
            <button id="btn-load-more" class="btn-load-more">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cases/refresh.svg" />
            </button>
        </div>
        <!-- <div class="container-cases-list">
           <?php
                $json_videos = get_field('json_videos');

                if ($json_videos) {
                    $json_videos = preg_replace('/,\s*]$/', ']', $json_videos);

                    $videos = json_decode($json_videos, true);

                    if ($videos && is_array($videos)) {
                        foreach ($videos as $video) {
                            $args = [
                                'description'   => $video['description'] ?? '',
                                'company_name'  => $video['company_name'] ?? '',
                                'segment'       => $video['segment'] ?? '',
                                'id_video'      => $video['url_video'] ?? '',
                                'uf'            => $video['state'] ?? '',
                                'city'          => $video['city'] ?? ''
                            ];

                            
                        }
                    } else {
                        echo '<p>Nenhum vídeo encontrado.</p>';
                    }
                } else {
                    echo '<p>Nenhum vídeo encontrado.</p>';
                }
            ?>
        </div>
        <div class="refresh-cases">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cases/refresh.svg" alt="Ícone carregar mais" />
        </div> -->
    </section>
    <section class="specialist">
        <h2>Não encontrou um negócio parecido com o seu?</h2>
        <div class="button-specialist">
            <?php get_template_part('components/button', null, [
                'url' => '/#',
                'label' => 'Fale com o Marketing',
                'class' => 'btn-primary btn round'
            ]); ?>
        </div>
    </section>
  <?php get_template_part('components/form_footer', null, ['hasBackground' => true]); ?>
</main>
<script>
  const videosData = <?php
  $json_videos = get_field('json_videos');
    if ($json_videos) {
        $json_videos = preg_replace('/,\s*]$/', ']', $json_videos);
        echo $json_videos;
    } else {
        echo '[]';
    }
  ?>;
  
  const container = document.getElementById("cases-container");
const botao = document.getElementById("btn-load-more");

let indiceAtual = 0;
const quantidade = 2;

function criarCard(video, index) {
  return `
    <div class="container-card-video">
      <div class="container-video">
            <iframe
                class="card-video"
                id="video-${index}"
                src="https://www.youtube.com/embed/${video.url_video}"
                allowfullscreen>
            </iframe>
            <div class="content-share-video">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cases/share.svg" alt="Ícone de compartilhar" class="share-video-icon" />
            </div>     
      </div>
      <div class="content-card-video">
        <div>
          <p class="company-name-card-video">${video.company_name}</p>
          <p class="segment-card-video">${video.segment}</p>
          <p class="uf-card-video">${video.city} - ${video.state}</p>
          <p class="description-card-video">${video.description}</p>
        </div>

        <div class="content-button-view-case">
          <button class="btn btn-primary btn round"
            onclick="abrirFullscreen('video-${index}')">
            Ver case
          </button>
        </div>
      </div>
    </div>
  `;
}

function renderizar() {
    console.log(videosData);
  const slice = videosData.slice(indiceAtual, indiceAtual + quantidade);

  slice.forEach((video, i) => {
    const html = criarCard(video, indiceAtual + i);
    container.insertAdjacentHTML("beforeend", html);
  });

  indiceAtual += quantidade;

  if (indiceAtual >= videosData.length) {
    botao.style.display = "none";
  }
}

// inicial
renderizar();

botao.addEventListener("click", renderizar);
</script>
<?php get_footer(); ?>
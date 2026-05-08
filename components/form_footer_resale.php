<?php   
  $hasBackground = $args['hasBackground'] ?? false;
  $colorBackground = $args['colorBackground'] ?? '';
?>
  <section class="form-section">
   <img class="background-form-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/resale/women-seeing-tablet-mobile.png" alt="Background form">
    <div class="form" style="background-color: <?php echo $colorBackground; ?>;">
      <img class="background-form" src="<?php echo get_template_directory_uri(); ?>/assets/images/resale/women-seeing-tablet.png" alt="Background form">
    <div class="content-form">
      <h2>Quer começar a vender?</h2>
      <p>Preencha o formulário e descubra como vender software e gerar ganhos mensais.</p>
      <form>
        <div class="content-input">
          <p>Nome</p>
          <input placeholder="Nome">
        </div>
        <div class="content-input">
          <p>Whatsapp</p>
          <input placeholder="Whatsapp">
        </div>
        <div class="content-input">
          <p>E-mail</p>
          <input placeholder="E-mail">
        </div>
        <div class="content-input">
          <p>Estado</p>
          <select>
            <option value="">Selecionar</option>
            <option value="SP">São Paulo</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="MG">Minas Gerais</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="BA">Bahia</option>
            <option value="PR">Paraná</option>
            <option value="SC">Santa Catarina</option>
            <option value="GO">Goiás</option>
            <option value="PE">Pernambuco</option>
            <option value="CE">Ceará</option>
            <option value="PA">Pará</option>
            <option value="AM">Amazonas</option>
            <option value="ES">Espírito Santo</option>
            <option value="MA">Maranhão</option>
            <option value="PB">Paraíba</option>
            <option value="PI">Piauí</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="AL">Alagoas</option>
            <option value="SE">Sergipe</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="DF">Distrito Federal</option>
          </select>
        </div>
        <div class="content-input">
          <p>Trabalha com automação comercial?</p>
          <select>
            <option value="">Selecionar</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
        <div class="content-input">
          <p>Possui CNPJ próprio?</p>
          <select>
            <option value="">Selecionar</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
          </select>
        </div>
        
        <div class="content-input">
          <p>Qual o seu interesse?</p>
          <select>
            <option value="">Selecionar</option>
          </select>
        </div>
        
        <div class="content-input">
          <p>Qual é o seu potencial de investimento?</p>
          <select>
            <option value="">Selecionar</option>
          </select>
        </div>
      </form>
      <div class="button-action-form">
        
<a href="/#" class="btn btn-primary btn round">
  Comece agora →</a>    </div>
  </div></div>
</section>
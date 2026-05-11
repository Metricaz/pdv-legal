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
            <option value="AC">Acre (AC)</option>
            <option value="AL">Alagoas (AL)</option>
            <option value="AP">Amapá (AP)</option>
            <option value="AM">Amazonas (AM)</option>
            <option value="BA">Bahia (BA)</option>
            <option value="CE">Ceará (CE)</option>
            <option value="ES">Espírito Santo (ES)</option>
            <option value="GO">Goiás (GO)</option>
            <option value="MA">Maranhão (MA)</option>
            <option value="MT">Mato Grosso (MT)</option>
            <option value="MS">Mato Grosso do Sul (MS)</option>
            <option value="MG">Minas Gerais (MG)</option>
            <option value="PA">Pará (PA)</option>
            <option value="PB">Paraíba (PB)</option>
            <option value="PR">Paraná (PR)</option>
            <option value="PE">Pernambuco (PE)</option>
            <option value="PI">Piauí (PI)</option>
            <option value="RJ">Rio de Janeiro (RJ)</option>
            <option value="RN">Rio Grande do Norte (RN)</option>
            <option value="RS">Rio Grande do Sul (RS)</option>
            <option value="RO">Rondônia (RO)</option>
            <option value="RR">Roraima (RR)</option>
            <option value="SC">Santa Catarina (SC)</option>
            <option value="SP">São Paulo (SP)</option>
            <option value="SE">Sergipe (SE)</option>
            <option value="TO">Tocantins (TO)</option>
            <option value="DF">Distrito Federal (DF)</option>
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
            <option value="revenda">Revender Soluções PDV e ERP</option>
            <option value="meunegocio">Utilizar o sistema no meu negócio</option>
          </select>
        </div>
        
        <div class="content-input">
          <p>Qual é o seu potencial de investimento?</p>
          <select>
            <option value="">Selecionar</option>
            <option value="ate500">De R$0 a R$500</option>
            <option value="de500a1000">De R$500 a R$1.000</option>
            <option value="de1000a2000">De R$1.000 a R$2.000</option>
            <option value="acima2000">Acima de R$2.000</option>
          </select>
        </div>
      </form>
      <div class="button-action-form">
        
<a href="/#" class="btn btn-primary btn round">
  Comece agora →</a>    </div>
  </div></div>
</section>
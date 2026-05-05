<!--
    <div class="container-footer">
      <div class="content-footer">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo-blue.svg" alt="Logo PDV Legal" />
        <div class="content-links">
          <p>xx</p>
          <p>xx</p>
          <p>xx</p>
          <p>xx</p>
          <p>xx</p>
        </div>
        <div class="container-social-media">
          <div class="content-social-media">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/footer/social-facebook.svg" alt="Facebook" />
          </div>
          <div class="content-social-media">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/footer/social-instagram.svg" alt="Instagram" />
          </div>
          <div class="content-social-media">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/footer/social-twitter.svg" alt="Twitter" />
          </div>
          <div class="content-social-media">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/footer/social-linkedIn.svg" alt="LinkedIn" />
          </div>
        </div>
      </div>
      <hr />
      <p class="copy-right">Copyright © 2026 XXX | All Rights Reserved</p>
    </div>
  </body>
</html>

-->

<footer class="site-footer">
    <div class="container-footer">
        <div class="footer-grid">
            <!-- Coluna 1 - Logo e Redes Sociais -->
            <div class="footer-col footer-col-brand">
                <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo-blue.svg" alt="Logo PDV Legal" />
                <div class="footer-social">
                    <a href="#" class="social-link" aria-label="Facebook">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/footer/social-facebook.svg" alt="Facebook" />
                    </a>
                    <a href="#" class="social-link" aria-label="Instagram">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/footer/social-instagram.svg" alt="Instagram" />
                    </a>
                    <a href="#" class="social-link" aria-label="Twitter">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/footer/social-twitter.svg" alt="Twitter" />
                    </a>
                    <a href="#" class="social-link" aria-label="LinkedIn">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/footer/social-linkedIn.svg" alt="LinkedIn" />
                    </a>
                </div>
            </div>

            <!-- Coluna 2 - Soluções -->
            <div class="footer-col">
                <h4 class="footer-title">Soluções</h4>
                <ul class="footer-links">
                    <li><a href="#">Soluções</a></li>
                    <li><a href="#">Modos de Uso</a></li>
                    <li><a href="#">Módulos</a></li>
                    <li><a href="#">Integrações</a></li>
                    <li><a href="#">Central de Ajuda</a></li>
                </ul>
            </div>

            <!-- Coluna 3 - Cases -->
            <div class="footer-col">
                <h4 class="footer-title">Cases</h4>
                <ul class="footer-links">
                    <li><a href="#">Restaurantes</a></li>
                    <li><a href="#">Varejo</a></li>
                    <li><a href="#">Eventos</a></li>
                    <li><a href="#">Franquias</a></li>
                    <li><a href="#">Delivery</a></li>
                </ul>
            </div>

            <!-- Coluna 4 - Integrações -->
            <div class="footer-col">
                <h4 class="footer-title">Integrações</h4>
                <ul class="footer-links">
                    <li><a href="#">Nossos Clientes</a></li>
                    <li><a href="#">Segmentos</a></li>
                    <li><a href="#">Quero ser um case</a></li>
                </ul>
            </div>

            <!-- Coluna 5 - Empresa -->
            <div class="footer-col">
                <h4 class="footer-title">Empresa</h4>
                <ul class="footer-links">
                    <li><a href="#">Lista completa</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>

            <!-- Coluna 6 - Contato (opcional, pode adicionar mais links) -->
            <div class="footer-col">
                <h4 class="footer-title">Contato</h4>
                <ul class="footer-links">
                    <li><a href="mailto:contato@pdvlegal.com.br">contato@pdvlegal.com.br</a></li>
                    <li><a href="tel:+5511999999999">(11) 99999-9999</a></li>
                </ul>
            </div>
        </div>

        <hr class="footer-divider" />

        <p class="copy-right">Copyright © 2026 PDV Legal | Todos os direitos reservados.</p>
    </div>
</footer>


<style>


/* ========== FOOTER ========== */
.site-footer {
    background: #d2d5e3;
    padding: 60px 0 30px;
    color: #94A3B8;
}

.container-footer {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 40px;
    margin-bottom: 50px;
}

/* Coluna 1 - Logo e Redes Sociais */
.footer-col-brand {
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.footer-logo {
    width: 140px;
    height: auto;
}

.footer-social {
    display: flex;
    gap: 16px;
}

.social-link {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 50%;
    transition: all 0.3s ease;
}

.social-link:hover {
    background: #161616;
    transform: translateY(-3px);
}

.social-link img {
    width: 20px;
    height: 20px;
    transition: all 0.3s ease;
}

.social-link:hover img {
    filter: brightness(0) invert(1);
}

/* Títulos das colunas */
.footer-title {
    color: #161616;
    font-family: 'DM Sans', sans-serif;
    font-weight: 700;
    font-size: 16px;
    margin-bottom: 20px;
    letter-spacing: 0.5px;
}

/* Listas de links */
.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 12px;
}

.footer-links a {
    color: #2C2E36;
    text-decoration: none;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    transition: all 0.3s ease;
}

.footer-links a:hover {
    color: #0a0a0a;
    padding-left: 5px;
}

/* Divisória */
.footer-divider {
    border: none;
    height: 1px;
    background: #1E293B;
    margin: 30px 0 20px;
}

/* Copyright */
.copy-right {
    text-align: center;
    font-family: 'DM Sans', sans-serif;
    font-size: 14px;
    color: #64748B;
    margin: 0;
}

/* ========== RESPONSIVO FOOTER ========== */
@media (max-width: 1024px) {
    .footer-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 40px;
    }
    
    .footer-col-brand {
        grid-column: span 1;
    }
}

@media (max-width: 768px) {
    .site-footer {
        padding: 40px 0 20px;
    }
    
    .footer-grid {
        grid-template-columns: 1fr;
        gap: 32px;
        margin-bottom: 30px;
    }
    
    .footer-col-brand {
        text-align: center;
        align-items: center;
    }
    
    .footer-title {
        text-align: center;
    }
    
    .footer-links {
        text-align: center;
    }
    
    .footer-links a:hover {
        padding-left: 0;
    }
    
    .copy-right {
        font-size: 12px;
    }
}
  </style>
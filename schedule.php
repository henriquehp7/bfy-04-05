<?php include "header.php";  ?>

    <main class="wrapper-schedule">
      <div class="wrapper-header-schedule">
        <div class="container-account"></div>
      </div>
      <div class="wrapper-schedule-content">
        <div class="container">
          <div class="schedule-item schedule-header">
            <h2 class="title"><span>Olá Mariana</span>, confirme os dados do seu agendamento</h2>
          </div>
          <div class="schedule-item schedule-options">
            <div class="option"><span>Serviço escolhido:</span>
              <h3 class="title">Maquiagem simples</h3>
            </div>
            <div class="option"><span>Dia:</span>
              <input type="date">
            </div>
            <div class="option"><span>Horário</span>
              <input type="time">
            </div>
          </div>
          <div class="schedule-item schedule-body">
            <div class="content-schedule">
              <div class="register-address">
                <h3 class="title">Novo endereço:</h3>
                <form class="form-address" action="">
                  <fieldset class="form-field">
                    <input class="form-input" type="text" placeholder="Logradouro">
                  </fieldset>
                  <fieldset class="form-field">
                    <input class="form-input" type="text" placeholder="Número">
                  </fieldset>
                  <fieldset class="form-field">
                    <input class="form-input" type="text" placeholder="Complemento">
                  </fieldset>
                  <fieldset class="form-field">
                    <input class="form-input" type="text" placeholder="Tipo de logradouro">
                  </fieldset>
                  <fieldset class="form-field">
                    <input class="form-input" type="text" placeholder="Bairro">
                  </fieldset>
                  <fieldset class="form-field">
                    <input class="form-input" type="text" placeholder="Digite o CEP">
                  </fieldset><span class="about-address">Por padrão o endereço é salvo automaticamente.</span>
                  <button class="btn" type="submit">Confirmar</button>
                </form>
              </div>
              <div class="registered-address">
                <h3 class="title">Meus endereços:</h3>
                <div class="flex-address">
                  <div class="address active">
                    <div class="address-header">
                      <h4 class="title">Usar este endereço</h4>
                      <div class="options"><a class="address-option edit" href="">editar</a><a class="address-option delete" href="">excluir</a></div>
                    </div>
                    <div class="address-body">
                      <h5 class="title">Minha casa</h5>
                      <p class="description">Rua Maria Candida 358</p>
                      <p class="description">Vila Guilherme</p>
                      <p class="description">11 941847444</p>
                    </div>
                  </div>
                  <div class="address">
                    <div class="address-header">
                      <h4 class="title">Usar este endereço</h4>
                      <div class="options"><a class="address-option edit" href="">editar</a><a class="address-option delete" href="">excluir</a></div>
                    </div>
                    <div class="address-body">
                      <h5 class="title">Minha casa</h5>
                      <p class="description">Rua Maria Candida 358</p>
                      <p class="description">Vila Guilherme</p>
                      <p class="description">11 941847444</p>
                    </div>
                  </div>
                  <div class="address">
                    <div class="address-header">
                      <h4 class="title">Usar este endereço</h4>
                      <div class="options"><a class="address-option edit" href="">editar</a><a class="address-option delete" href="">excluir</a></div>
                    </div>
                    <div class="address-body">
                      <h5 class="title">Minha casa</h5>
                      <p class="description">Rua Maria Candida 358</p>
                      <p class="description">Vila Guilherme</p>
                      <p class="description">11 941847444</p>
                    </div>
                  </div>
                  <div class="address">
                    <div class="address-header">
                      <h4 class="title">Usar este endereço</h4>
                      <div class="options"><a class="address-option edit" href="">editar</a><a class="address-option delete" href="">excluir</a></div>
                    </div>
                    <div class="address-body">
                      <h5 class="title">Minha casa</h5>
                      <p class="description">Rua Maria Candida 358</p>
                      <p class="description">Vila Guilherme</p>
                      <p class="description">11 941847444</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="schedule-item schedule-footer">
            <div class="content-schedule">
              <p class="warn-schedule">
                Estou ciente dos termos e regulamento.Ao clicar em agendar um profissional especializado será agendado e irá ao local escolhido no dia e hora desejado.</p>
              <button class="btn confirm-schedule"><a href="account.html">Agendar</a></button>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="foo footer">
      <div class="container">
        <div class="brand">
          <svg>
            <use xlink:href="images/icons.svg#logo"></use>
          </svg>
        </div>
        <div class="social">
          <p class="description_mini">Conheça nossa plataforma e aproveite as vantagens de utilizar serviços delivery</p>
          <div class="icons"><a class="social-link" href="#" title="Facebook"><img src="images/icons/icon-facebook.svg" alt="Facebook"></a><a class="social-link" href="#" title="Instagram"><img src="images/icons/icon-instagram.svg" alt="Instagram"></a><a class="social-link" href="#" title="Twitter"><img src="images/icons/icon-twitter.svg" alt="Twitter"></a><a class="social-link" href="#" title="Google Plus"><img src="images/icons/icon-google.svg" alt="Google Plus"></a></div><span>Bfy.me - Todos os direitos reservados 2017</span>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.js"></script>
  </body>
</html>
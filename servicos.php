<?php include "header.php";  ?>
    <div class="foo banner_default banner-services">
      <section class="main-banner">
        <h2 class="title_default title_banner">Conheça os nossos serviços de beleza</h2>
        <h3 class="subtitle_default subtitle_banner">Há uma gama de serviços diversificados para você conhecer!</h3>
      </section>
    </div>
    <section class="services">
      <div class="wrapper-foo">
        <div class="container">
          <h3 class="title_default clearflex">Maquiagem</h3>
          <h4 class="subtitle_default clearflex">Descubra nossas opções de serviço</h4>
          <div class="services-filter">
            <form class="services-form" action="buscar" method="GET">
              <fieldset class="field">
                <input class="input-form" type="search" name="buscarServico" placeholder="Digite o serviço que gostaria de buscar">
              </fieldset>
              <button class="btn" type="submit">Procurar</button>
            </form>
          </div>
          <div class="services-box">
            <div class="service-item">
              <div class="service-item-details">
                <h4 class="title">Maquiagem</h4><span class="time">45 minutos</span>
                <p class="text">Festas de casamento, formatura ou aquela ocasião especial pedem destaque para sua beleza e a maquiagem é uma ótima forma de completar o look.</p>
              </div>
              <div class="service-item-price">
                <p class="price">R$ <span>60</span></p>
                <button class="btn"><a href="schedule.html">Agendar</a></button>
              </div>
            </div>
            <div class="service-item">
              <div class="service-item-details">
                <h4 class="title">Maquiagem simples</h4><span class="time">45 minutos</span>
                <p class="text">Precisa de uma maquiagem para aquela festa a fantasia ou até para uma apresentação no teatro? A maquiagem artística é perfeita para essas ocasiões.</p>
              </div>
              <div class="service-item-price">
                <p class="price">R$ <span>30</span></p>
                <button class="btn"><a href="schedule.html">Agendar</a></button>
              </div>
            </div>
            <div class="service-item">
              <div class="service-item-details">
                <h4 class="title">Maquiagem artística</h4><span class="time">45 minutos</span>
                <p class="text">Procedimento que utiliza pelos sintéticos para alongamento de cílios com efeito natural e duradouro. A técnica é pouco evasiva e permite que mesmo pessoas sensíveis façam.</p>
              </div>
              <div class="service-item-price">
                <p class="price">R$ <span>90</span></p>
                <button class="btn"><a href="schedule.html">Agendar</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
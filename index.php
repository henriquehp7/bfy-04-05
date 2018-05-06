<?php include "header.php";  ?>

<?php include_once("index.html");

include "bfyme/functions.php";

    loginUsuario();
?>

    <div class="foo banner banner_default">
      <section class="main-banner">
        <div class="container">
          <div class="wrapper">
            <div class="featured">
              <h1 class="title_default title_banner">A sua beleza a <span>toda hora</span></h1>
            </div>
            <div class="banner-schedule">
              <h2 class="title">Não perca tempo e comece a usar agora</h2>
              <form class="schedule-form">
                <fieldset class="field">
                  <select class="select-default">
                    <option>Qual serviço deseja?</option>
                  </select>
                </fieldset>
                <fieldset class="field">
                  <select class="select-default">
                    <option>Qual dia?</option>
                  </select>
                </fieldset>
                <fieldset class="field">
                  <select class="select-default">
                    <option>Qual o horário?</option>
                  </select>
                </fieldset>
                <button class="btn" type="submit">Agendar</button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
    <section class="foo how_it_works">
      <div class="container">
        <div class="wrapper-flex how_it_works">
          <h3 class="title_default clearflex">Como funciona?</h3>
          <h4 class="subtitle_default clearflex">É mais fácil do que você imagina</h4>
          <div class="flexchild calendar">
            <h5 class="title">Agendamento no mesmo dia</h5>
            <p class="description">Só com o Bfy.me você marcar serviços no mesmo dia de solicitação</p>
          </div>
          <div class="flexchild location">
            <h5 class="title">Atendimento Delivery</h5>
            <p class="description">Você pode agendar seu serviço em qualquer localidade da capital de São Paulo e região</p>
          </div>
          <div class="flexchild professional">
            <h5 class="title">Profissionais qualificados</h5>
            <p class="description">Os profissionais passam por uma triagem para garantir qualidade em seus atendimentos</p>
          </div>
          <div class="flexchild price">
            <h5 class="title">Preços de mercado</h5>
            <p class="description">Praticamos os preços de mercado para que você use cada vez mais nossa plataforma</p>
          </div>
        </div>
      </div>
    </section>
    <section class="foo slider-services">
      <div class="container">
        <h3 class="title_default clearflex">Serviços oferecidos</h3>
        <h4 class="subtitle_default clearflex">Conheça mais os serviços oferecidos</h4>
        <div class="slider-content">
          <div class="item">
            <div class="service-image">
              <picture><img src="images/services/skin.jpg" alt="Massoterapia"></picture>
            </div>
            <div class="service-details">
              <h5 class="subtitle">
                A partir de<br/> R$ <span>140,00</span></h5>
              <h4 class="title">Massoterapia</h4>
              <p class="description">Direcionada de acordo com a necessidade do cliente.</p>
              <button class="btn"><a href="servicos.html">Agendar</a></button>
            </div>
          </div>
          <div class="item">
            <div class="service-image">
              <picture><img src="images/services/makeup.jpg" alt="Maquiagem Simples"></picture>
            </div>
            <div class="service-details">
              <h5 class="subtitle">
                A partir de<br/> R$ <span>30,00</span></h5>
              <h4 class="title">Maquiagem Simples</h4>
              <p class="description">Moderna e com requinte para você curtir qualquer evento.</p>
              <button class="btn"><a href="servicos.html">Agendar</a></button>
            </div>
          </div>
          <div class="item">
            <div class="service-image">
              <picture><img src="images/services/nailmaker.jpg" alt="Manicure Simples"></picture>
            </div>
            <div class="service-details">
              <h5 class="subtitle">
                A partir de<br/> R$ <span>25,00</span></h5>
              <h4 class="title">Manicure Simples</h4>
              <p class="description">Realizado a limpeza das unhas e esmaltação.</p>
              <button class="btn"><a href="servicos.html">Agendar</a></button>
            </div>
          </div>
          <div class="item">
            <div class="service-image">
              <picture><img src="images/services/oil-masseur.jpg" alt="Massagem Relaxante"></picture>
            </div>
            <div class="service-details">
              <h5 class="subtitle">
                A partir de<br/> R$ <span>60,00</span></h5>
              <h4 class="title">Massagem Relaxante</h4>
              <p class="description">Aumenta a circulação sanguínea, alivia o stress e tensão muscular.</p>
              <button class="btn"><a href="servicos.html">Agendar</a></button>
            </div>
          </div>
          <div class="item">
            <div class="service-image">
              <picture><img src="images/services/clean-face.jpg" alt="Limpeza de pele"></picture>
            </div>
            <div class="service-details">
              <h5 class="subtitle">
                A partir de<br/> R$ <span>80,00</span></h5>
              <h4 class="title">Limpeza de pele</h4>
              <p class="description">Para desobstruir os poros, extrair comedões e espinhas</p>
              <button class="btn"><a href="servicos.html">Agendar</a></button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="foo depositions">
      <div class="container">
        <div class="wrapper-flex depositions">
          <h3 class="title_default clearflex">Depoimentos</h3>
          <h4 class="subtitle_default clearflex">O que dizem dos nossos serviços</h4>
          <article class="flexchild item">
            <picture class="profile-img"><img src="images/profiles/beautiful-woman_3.jpg" alt=""></picture>
            <p class="description">Usei o Bfy.me para fazer uma massagem relaxante e depilação. Amei o serviço, pois atendeu na minha casa e a profissional foi competente com seu trabalho.</p>
            <h5 class="author">Mariana Roussef - <span>São Paulo</span></h5>
          </article>
          <article class="flexchild item">
            <picture class="profile-img"><img src="images/profiles/beautiful-woman_2.jpg" alt=""></picture>
            <p class="description">Usei o Bfy.me para fazer uma massagem relaxante e depilação. Amei o serviço, pois atendeu na minha casa e a profissional foi competente com seu trabalho.</p>
            <h5 class="author">Mariana Roussef - <span>São Paulo</span></h5>
          </article>
          <article class="flexchild item">
            <picture class="profile-img"><img src="images/profiles/beautiful-woman_3.jpg" alt=""></picture>
            <p class="description">Usei o Bfy.me para fazer uma massagem relaxante e depilação. Amei o serviço, pois atendeu na minha casa e a profissional foi competente com seu trabalho.</p>
            <h5 class="author">Mariana Roussef - <span>São Paulo</span></h5>
          </article>
        </div>
      </div>
    </section>
    <div class="modal-overlay"></div>
    <div class="modal"></div>
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
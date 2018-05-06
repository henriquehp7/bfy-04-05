<?php

include "bfyme/functions.php";
include "bfyme/db.php";

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Bfy.me</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.css">
  </head>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-118141758-1', 'auto');
    ga('send', 'pageview');
  </script>
  <body>
    <div class="foo">
      <div class="foo-login"></div>
      <div class="container">
        <div class="modal-login">
          <div class="modal-image">
            <h1 class="title">Entre e aproveite nossos serviços</h1>
            <h2 class="subtitle">Sua beleza a toda hora</h2>
          </div>
          <form class="modal-form" action="login.php" method="post">
              
              <?php
                    loginUsuario();

                ?>
            <h3 class="title">Login</h3>
            <fieldset class="login-field">
              <label class="login-label" for="txtUsuario">Usuário</label>
              <input class="login-input" type="text" name="txtUsuario" id="txtUsuario" placeholder="Digite seu usuário" required>
            </fieldset>
            <fieldset class="login-field">
              <label class="login-label" for="senha">Senha</label>
              <input class="login-input" type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
            </fieldset>
            <button class="btn" name="entrar"><a href="account.php">Entrar</a></button><a class="forgot-psw" href="#">Esqueci minha senha!</a><span class="do-account">Ainda não tem cadastro? <a href="cadastro.php">Clique aqui</a></span>
          </form>
        </div>
        <button class="btn btn-back-login"><a href="index.php">Voltar</a></button>
      </div>
    </div>
  </body>
</html>
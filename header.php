<?php include "bfyme/db.php"; ?>
<?php 
    if(!isset($_SESSION)){
        session_start();
    }
?>


<?php
    if(!isset($_SESSION['txtUsuario'])){
        if($_SESSION['txtUsuario'] != $login){
            header('Location: ../index.php');
        }
    }
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
    <header>
      <div class="container-header"><a class="brand" href="index.html">
          <svg>
            <use xlink:href="images/icons.svg#logo"></use>
          </svg></a>
        <input type="checkbox" id="label-login" name="login">
        <label class="label-login" for="label-login"><span class="icon-hamburguer"></span></label>
        <nav class="menu">
          <ul class="menu-navegation">
            <li class="item hidden-lg"> <a href="login.html">Entrar</a></li>
            <li class="item servicos"><a href="#dropdown">Serviços
                <div class="icon-arrow"></div>
                <div id="dropdown"><a class="menu-link-dropdown" href="servicos.html">
                     Maquiagem
                    <svg>
                      <use xlink:href="images/icons.svg#maquiagem"></use>
                    </svg></a><a class="menu-link-dropdown" href="servicos.html">
                     Massagem
                    <svg>
                      <use xlink:href="images/icons.svg#massagem"></use>
                    </svg></a><a class="menu-link-dropdown" href="servicos.html">
                     Manicure
                    <svg>
                      <use xlink:href="images/icons.svg#manicure"> </use>
                    </svg></a><a class="menu-link-dropdown" href="servicos.html">
                     Podologia
                    <svg>
                      <use xlink:href="images/icons.svg#podologia"></use>
                    </svg></a><a class="menu-link-dropdown" href="servicos.html">
                     Penteado
                    <svg>
                      <use xlink:href="images/icons.svg#penteado"></use>
                    </svg></a></div></a></li>
            <li class="item"><a href="duvidas.html">Dúvidas</a></li>
            <li class="item"><a href="profissional.html">Seja um profissional</a></li>
          </ul>
        </nav><a class="btn btn-login" href="login.html">Entrar</a>
      </div>
    </header>
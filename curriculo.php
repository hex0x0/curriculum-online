<?php

  session_start();
  include_once 'acoes/verifica-logado.php';
  include_once 'acoes/consulta-usuario.php';
  //include_once 'acoes/consulta-curso.php';
  //include_once 'acoes/consulta-curso.php';




?>

<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Currículo </title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
  <!-- Icones -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- fonte personalizada -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  
  <!-- estilo do nosso tema -->
  <link rel="stylesheet" href="assets/css/tema-curriculo.css" />
  
</head>
<body>

<!-- barra de navegacao -->
 <nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container">
    <div class="navbar-header">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"><?=$_SESSION['nome']?></a>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav d-flex justify-content-end" id="links">
            <li><a href="#quem">QUEM</a></li>
            <li><a href="#formacao">FORMAÇÃO</a></li>
            <li><a href="#contatos">CONTATOS</a></li>
            <li><a href="painel.php">X</a></li>
        </ul>
    </div>
  </div>
</nav>

<!-- container fluido 100% -->
<div class="container-fluid bg1 text-center" id="quem">
  <h3>Quem sou eu?</h3>
  <img src="assets/img/foto-perfil.jpg" class="img-responsive img-redonda" style="display:inline" alt="Foto" width="200">
  <h4> <?=$nome?> </h4>
  <h4><?=$nacionalidade?>, <?=$estado_civil?>, <?=$idade?></h4>
  <h4> <i class="bi bi-phone"></i> <?=$telefone?> </h4>
  <h4> <i class="bi bi-envelope"></i> <?=$email?> </h4>
  <a href="#" class="btn btn-light btn-lg bt">
    <i class="bi bi-arrow-up-circle"></i> Topo
  </a>
</div>

<!-- container fluido 100% -->
<div class="container-fluid bg2 text-center" id="formacao">
  <h3> <i class="bi bi-easel"></i> Formação </h3>
  <ul class="list-group lista" style="color:#222;">
   <?=
   
    include_once('acoes/consulta-formacao.php');
   
   ?>
  </ul>
  <br>
  <h3> <i class="bi bi-book"></i> Cursos </h3>
  <ul class="list-group lista" style="color:#222;">
   <?=

    include_once('acoes/consulta-curso.php');

   ?>
  </ul>
  <br>
  <a href="#" class="btn btn-light btn-lg bt">
    <i class="bi bi-arrow-up-circle"></i> Topo
  </a>
  
</div>

<!-- container fluido 100% -->
<div class="container-fluid bg3 text-center" id="contatos">
  <h3>Contatos</h3>
  <div class="row" id="contat">
    <div class="col-sm-4">
      <p> <i class="bi bi-geo-alt"></i>  <?= $endereco; ?> </p>
      <img src="assets/img/img1.jpg" class="img-responsive rounded" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4">
      <p> <i class="bi bi-envelope"></i> <?= $email; ?> </a> </p>
      <img src="assets/img/img2.jpg" class="img-responsive rounded" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4">
      <p> <i class="bi bi-phone"></i> <?= $telefone; ?> </p>
      <img src="assets/img/img3.jpg" class="img-responsive rounded" style="width:100%" alt="Image">
    </div>
  </div>
  <br>
  <a href="#" class="btn btn-light btn-lg bt">
    <i class="bi bi-arrow-up-circle"></i> Topo
  </a>
</div>  

<!-- bootstrap.js -->
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
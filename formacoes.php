<?php

  session_start();
  
  require_once 'acoes/verifica-logado.php';

?>


<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Formações </title>

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
      <a class="navbar-brand" href="#"><?= $_SESSION['nome'];?></a>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav d-flex justify-content-end" id="links">
            <li><a href="cadastrar-formacao.php">Cadastrar formação</a></li>
            <li><a href="painel.php">X</a></li>
        </ul>
    </div>
  </div>
</nav>


<div class="container-fluid bg2 text-center" id="div-formacoes">

  <?php include_once 'acoes/escreve-mensagem.php'; ?>

  <h3> <i class="bi bi-easel"></i> Formação </h3>
  <ul class="list-group lista" style="color:#222;">
    <!-- CONSULTAR CURSOS DO USUARIO POR ID -->
    <?php include_once 'acoes/consulta-formacao.php'; ?>
  </ul>
</div>
  <br>
  <a href="#" class="btn btn-light btn-lg bt">
    <i class="bi bi-arrow-up-circle"></i> Topo
  </a>


<!-- <div class="container-fluid bg2 text-center" id="div-formacoes">
  <h3> <i class="bi bi-easel"></i> Formação </h3>
  <ul class="list-group lista" style="color:#222;">
    <li class="list-group-item">
      <a href="editar_formacao.php?id=''"><i class="bi bi-pencil-square"></i></a>
      <a href="apagar_formacao.php?id=''" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="bi bi-trash"></i></a>
      Nome da formação 1
    </li>
    <li class="list-group-item">
      <a href="editar_formacao.php?id=''"><i class="bi bi-pencil-square"></i></a>
      <a href="apagar_formacao.php?id=''" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="bi bi-trash"></i></a>
      Nome da formação 2
    </li>
    <li class="list-group-item">
      <a href="editar_formacao.php?id=''"><i class="bi bi-pencil-square"></i></a>
      <a href="apagar_formacao.php?id=''" data-bs-toggle="modal" data-bs-target="#exampleModal3"><i class="bi bi-trash"></i></a>
      Nome da formação 3
    </li>
  </ul>


<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apagar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Deseja apagar o registro ID ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Apagar</button>
      </div>
    </div>
  </div>
</div>


  <br>
  <a href="#" class="btn btn-light btn-lg bt">
    <i class="bi bi-arrow-up-circle"></i> Topo
  </a>
  
</div> -->

<!-- bootstrap.js -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
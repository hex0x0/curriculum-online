<?php


    include_once 'conexao.php';
    include_once 'verifica-logado.php';


    $id_logado = $_SESSION['idusuarios'];

    
    $sql = "SELECT * FROM usuarios WHERE idusuarios = '$id_logado'";


    $resultado = mysqli_query($con, $sql);

    $dados = mysqli_fetch_assoc($resultado);

    $idusuario = $dados['idusuarios'];
    $nome = $dados['nome'];
    $nacionalidade = $dados['nacionalidade'];
    $estado_civil = $dados['estado_civil'];
    $idade = $dados['idade'];
    $endereco = $dados['endereco'];
    $telefone = $dados['telefone'];
    $email = $dados['email'];
    $foto = $dados['foto'];


    $_SESSION['idusuario'] = $idusuario;
    $_SESSION['nome'] = $nome;
    $_SESSION['nacionalidade'] = $nacionalidade;
    $_SESSION['estado_civil'] = $estado_civil;
    $_SESSION['idade'] = $idade;
    $_SESSION['endereco'] = $endereco;
    $_SESSION['telefone'] = $telefone;
    $_SESSION['email'] = $email;
    $_SESSION['foto'] = $foto;







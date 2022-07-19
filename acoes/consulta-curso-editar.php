<?php

    include_once 'verifica-logado.php';
    include_once 'conexao.php';


    $idlogado = $_SESSION['idusuarios'];

    $sql = "SELECT * FROM cursos WHERE idusuario = '$idlogado'";


    $resultado = mysqli_query($con, $sql);


    if($dados = mysqli_fetch_array($resultado)){
        $idcurso = $dados['idcurso'];
        $nome = $dados['nome'];
        $instituicao = $dados['instituicao'];
        $ano_curso = $dados['ano_curso'];

        

    }

    mysqli_close($con);

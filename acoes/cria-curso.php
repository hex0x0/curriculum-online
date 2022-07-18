<?php

    session_start();
    include_once 'verifica-logado.php';
    include_Once 'conexao.php';

    if(isset($_POST['bt_cadastrar'])){
        $nome_curso = mysqli_real_escape_string($con, $_POST['nome_curso']);
        $instituicao = mysqli_real_escape_string($con, $_POST['instituicao']);
        $ano_curso = mysqli_real_escape_string($con, $_POST['ano_curso']);
        $idusuario = mysqli_real_escape_string($con, $_SESSION['idusuario']);


        $sql = "INSERT INTO cursos (nome, instituicao, ano_curso, idusuario) values ('$nome_curso', '$instituicao', '$ano_curso', '$idusuario')";


        $resultado = mysqli_query($con, $sql);
        
        if($resultado){
            $_SESSION['mensagem'] = 'Curso cadastrado!';
            $_SESSION['status'] = 'Sucess';
            header('Location: ../painel.php');
        }else{
            $_SESSION['mensagem'] = 'Não foi possível cadastrar!';
            $_SESSION['status'] = 'Danger';
            header('Location: ../painel.php');
        }




    }

    mysqli_close($con);
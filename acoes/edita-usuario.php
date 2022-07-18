<?php


    session_start();
    include_once 'verifica-logado.php';
    include_once 'conexao.php';
    
    echo ''. $_SESSION['idusuario'];

    if(isset($_POST['bt_atualizar'])){
        $idusuario = $_SESSION['idusuario'];
        $nome = mysqli_real_escape_string($con, $_POST['nome']);
        $nacionalidade = mysqli_real_escape_string($con, $_POST['nacionalidade']);
        $estado_civil = mysqli_real_escape_string($con, $_POST['estado_civil']);
        $idade = mysqli_real_escape_string($con, $_POST['idade']);
        $endereco = mysqli_real_escape_string($con, $_POST['endereco']);
        $telefone = mysqli_real_escape_string($con, $_POST['telefone']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $foto = mysqli_real_escape_string($con, $_FILES['foto']['name']);
        $tipo = $_FILES['foto']['tmp_name'];

        
        include_once 'upload-imagem.php';

        $sql = "UPDATE usuarios SET 
            nome = '$nome',
            nacionalidade = '$nacionalidade',
            estado_civil = '$estado_civil',
            idade = '$idade',
            endereco = '$endereco',
            telefone = '$telefone',
            email = '$email',
            foto = '$foto'
            WHERE idusuarios = '$idusuario'

        
         ";

         

         //header('Location: ../painel.php');


        if(mysqli_query($con, $sql)){
            $_SESSION['mensagem'] = 'Perfil atualizado!';
            $_SESSION['status'] = 'Sucess';
            header('Location: ../painel.php');
        }else{
            $_SESSION['mensagem'] = 'Não foi possível atualizar!';
            $_SESSION['status'] = 'Danger';
            header('Location: ../painel.php');
        }



    }else{
        echo 'deu ruim';
    }
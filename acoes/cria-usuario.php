<?php
    //Inicia uma nova sessão

    session_start();

    //Invoca o arquivo de conexão

    include_once 'conexao.php';

    if(isset($_POST['bt_cadastrar'])){
        //Pega os dados

        $nome = mysqli_real_escape_string($con, $_POST['nome']);
        $nacionalidade = mysqli_real_escape_string($con, $_POST['nacionalidade']);
        $estado_civil = mysqli_real_escape_string($con, $_POST['estado_civil']);
        $idade = mysqli_real_escape_string($con, $_POST['idade']);
        $endereco = mysqli_real_escape_string($con, $_POST['endereco']);
        $telefone = mysqli_real_escape_string($con, $_POST['telefone']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $senha = md5(mysqli_real_escape_string($con, $_POST['senha']));

        //Sql

        $sql = "INSERT INTO usuarios (nome, nacionalidade, estado_civil, idade, endereco, telefone, email, senha ) 
        VALUES ('$nome', ' $nacionalidade', '$estado_civil', '$idade', '$endereco', '$celular', ' $email', '$senha')";
        

        //se true
        if(mysqli_query($con, $sql)){
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            $_SESSION['status'] = 'Sucess';
            header('Location: ../index.php');
        }else{
            $_SESSION['mensagem'] = "Cadastro falhou!";
            $_SESSION['status'] ='Danger';
            header('Location: ../index.php');
        }

        //fechar conexão

        mysqli_close($con);

    }   
    
    

?>
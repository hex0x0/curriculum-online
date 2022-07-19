<?php

    session_start();
    include_once 'verifica-logado.php';
    include_once 'conexao.php';

    

    //echo '' . $idusuario_logado;


    if(isset($_POST['bt_editar'])){
        $idcurso = mysqli_real_escape_string($con, $_POST['idcurso']);
        $nome = mysqli_real_escape_string($con, $_POST['nome']);
        $instituicao = mysqli_real_escape_string($con, $_POST['instituicao']);
        $ano_curso = mysqli_real_escape_string($con, $_POST['ano_curso']);
        $idusuario_logado = mysqli_real_escape_string($con, $_SESSION['idusuario']);


        //echo '' .$idcurso;


        $sql = "UPDATE cursos SET
        
            nome = '$nome', instituicao = '$instituicao', ano_curso = '$ano_curso'


            WHERE idcurso = '$idcurso'

        ";


        $resultado = mysqli_query($con, $sql);

        if($resultado){
            echo 'Certo!';
            header('Location: ../painel.php');
        }else{
            echo 'erro';
        }







    }
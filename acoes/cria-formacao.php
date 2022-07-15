<?php

    session_start();


    include_once 'conexao.php';


    if(isset($_POST['bt_cadastrar_formacao'])){

        $nivel = mysqli_real_escape_string($con, $_POST['nivel']);
        $nome_curso = mysqli_real_escape_string($con, $_POST['nome_curso']);
        $instituicao = mysqli_real_escape_string($con, $_POST['instituicao']);
        $ano_inicio = mysqli_real_escape_string($con, $_POST['ano_inicio']);
        $ano_termino = mysqli_real_escape_string($con, $_POST['ano_termino']);
        $situacao = mysqli_real_escape_string($con, $_POST['situacao']);
        $idusuario = mysqli_real_escape_string($con, $_SESSION['idusuarios']);

        //INSERT

        $sql = "INSERT INTO formacoes (nivel, nome_curso, instituicao, ano_inicio, ano_termino, situacao, idusuario) VALUES ('$nivel', '$nome_curso', '$instituicao', '$ano_inicio', '$ano_termino', '$situacao', '$idusuario')";


        $resultado = mysqli_query($con, $sql);

        if($resultado){
            $_SESSION['mensagem'] = 'Formacao cadastrada!';
            $_SESSION['erro'] = 'Algum problema ocorreu!';
            header('Location: ../painel.php');
        }

    }

    //Não se esqueça de fechar a conexão. 
    mysqli_close($con);

?>
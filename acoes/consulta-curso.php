<?php

    include_once 'verifica-logado.php';
    include_once 'conexao.php';


    $idlogado = $_SESSION['idusuario'];

    

    $sql = "SELECT * FROM cursos WHERE idcurso = '$idlogado'";

    
    $resultado = mysqli_query($con, $sql);

    if($dados = mysqli_fetch_array($resultado)){
        echo 'bom';
    }else{
        echo 'ruim';
    }





    // while($dados = mysqli_fetch_assoc($resultado)){
    //     $idcurso = $dados['idcurso'];
    //     $nome = $dados['nome'];
    //     $instituicao = $dados['instituicao'];
    //     $ano_curso = $dados['ano_curso'];



    //     echo "
        
    //         <li class='list-group-item'>
    //             $idcurso - $nome - $instituicao - $ano_curso
    //         </li>
        
    //     ";
    // }
    
   

    mysqli_close($con);
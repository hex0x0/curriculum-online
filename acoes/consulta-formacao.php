<?php

 

  
    include_once 'verifica-logado.php';
    include_once 'conexao.php';
    
    $idusuario = $_SESSION['idusuarios'];

    $sql = "SELECT * FROM formacoes WHERE idusuario = '$idusuario'";

    //Lança a query

    $resultado = mysqli_query($con, $sql);

    while($dados = mysqli_fetch_array($resultado)){

        $idformacao = $dados['idformacoes'];
        $nivel = $dados['nivel'];
        $nome_curso = $dados['nome_curso'];
        $instituicao = $dados['instituicao'];
        $ano_inicio = $dados['ano_inicio'];
        $ano_termino = $dados['ano_termino'];
        $situacao = $dados['situacao'];


        echo "
        
        <li class='list-group-item'>
            <a href='editar-formacao.php?id={$idformacao}'><i class='bi bi-pencil-square'></i></a>
            <a href='apagar-formacao.php?id={$idformacao}' data-bs-toggle='#cool_modal{$idformacao}'><i class='bi bi-trash'></i></a>

            $idformacao -  $nome_curso - $instituicao - $ano_inicio -$ano_termino - $situacao

        </li> 
        
        <!-- little modal -->
        
        <div class='modal fade' id='cool_modal{$idformacao}' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Apagar</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>


                    <div class='body'>
                        Deseja apagar a formação {$idformacao} ?
                    </div>

                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancelar</button>
                        <form action='apaga-formacao.php' method='POST'>
                            <input type='hidden' name='informacao' value='{$idformacao}'/>
                            <button type='submit' class='btn btn-primary' name='bt_apagar_formacao'>Sim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>    
        
        ";



    }







?>
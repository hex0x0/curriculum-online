<?php


    session_start();
    include_once 'verifica-logado.php';
    require_once 'conexao.php';


    if(isset($_POST['bt_apagar'])){
        echo 'certo';
    }else{
        echo 'erro';
    }





    
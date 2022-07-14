<?php


session_start();
require_once 'conexao.php';


if(isset($_POST['bt_entrar'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $senha = md5(mysqli_real_escape_string($con, $_POST['senha']));


    echo $email . '<br>';
    echo md5('123456');
    echo '<br>'. $senha;


    // $email = $_POST['email'];
    // $senha = md5($_POST['senha']);


    //echo $senha;


    //Realiza a consulta no banco

    //$sql = sprintf("SELECT * FROM usuarios where email = '%s' AND senha='%s'", $email, $senha);

    $sql = "SELECT * FROM usuarios WHERE email = ' $email' AND senha = '$senha'";

   

   

    

    // $valid = password_verify($senha, $pwd);

    // if($valid){
    //     if(password_needs_rehash($pwd, PASSWORD_DEFAULT)){
    //         $newHash = password_hash($senha, PASSWORD_DEFAULT);
        
    //     }

    //     header('Location: ../painel.php');
        
    // }


    $resultado = mysqli_query($con, $sql);


    // $dados = mysqli_fetch_array($resultado);

    // if(!$dados){
    //     echo 'Deu ruim';
    // }else{
    //     echo $dados['idusuarios'];
    //     echo $dados['nome'];
    //     echo $dados['nacionalidade'];
    //     echo $dados['senha'];
        
    // }

    // $rows = mysqli_num_rows($resultado);


    // if($rows == 1){
    //     $data = mysqli_fetch_assoc($resultado);

    //     $emailx = $data['email'];
        

    //     header('Location: ../painel.php');

    // }
    


    if(mysqli_affected_rows($con) > 0){
        //Cria um array associativo

        $dados = mysqli_fetch_assoc($resultado);
        

        


        //Cria variáveis de sessão


        $_SESSION['mensagem'] = 'Usuário logado com sucesso!';
        $_SESSION['status'] = 'Sucesso!';
        $_SESSION['idusuario'] = $dados['idusuarios'];
        $_SESSION['email'] = $dados['email'];
        header('Location: ../painel.php');


    }else{
         // CRIAR VARIAVEIS DE SESSAO
         $_SESSION['mensagem'] = "Erro no login! E-mail ou senha incorretos";
         $_SESSION['status'] = "danger";
         header('Location: ../index.php'); // REDIRECIONAR PARA O INDEX
    }

    mysqli_close($con);

}
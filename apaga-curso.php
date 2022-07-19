<?php

    session_start();
    //Faz uma cópia do arquivo na linha em que foi invocado 
    include_once 'acoes/verifica-logado.php';
    
    // const TRAJETO = 5;

    // echo ' ' . TRAJETO;


    //var_dump exibe informações sobre a variável
    //var_dump(TRAJETO);

    // $valor = 3.9932432;

    // $formatado = number_format($valor, 2, ',');

    //forma antiga de se declarar arrays
    //$array = array("Edson", "Shirley");

    //nova forma
    //var_dump mostra a quantidade de elementos, o tipo dos dados e a posição dentro do array
    // $array = ['lucas', 'pedro'];

    // var_dump($array);


    // $bebidas = [


    //     'sucos' => ['acerola', 'cupuaçu'],
    //     'bebidas' => ['budweiser']


    // ];

    // echo "<pre>";

    //     var_dump($bebidas);

    // echo "</pre>";


    // array_push($bebidas['sucos'], 'manga');

   
    // array_unshift($bebidas, ['pedro', 'ana']);

    //Apaga no final
    // array_pop($array);

    // var_dump($bebidas);

    //apaga no início
    //array_shift($array);

    // $bebidas = sort($bebidas);

    //retorna um booleano se não acontecer um erro
    // var_dump($bebidas);

    // $variable = 1.2;

    // switch($variable){

    //     case '1':
    //         echo 'Coisa feia';
    //         break;
    //     case '1.2':
    //     case '2':
    //         echo 'perfeito';
    //         break;
    //     default:
    //         echo 'Opcao invalida';
    //         break;


    // }


    // $nomes = ['lucas', 'pedro'];

    // $cont = count($nomes);


    // for($i = 0; $i < $cont; $i++){
    //     echo "<p> $nomes[$i]<p>";
    // }

    // foreach($nomes as $ind => $nome){
    //     echo "<p> $nome<p>";
    // 
    


    
    //GET é uma variável superglobal

    // if(isset($_GET['Enviar'])){
    //     $produto = $_GET['pesquisa'];

    //     echo "<p>$produto</p>";
    // }

    //validação e sanitização
    //com filter_input e filter_sanitize


    // $erros = [];

    // $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

    // echo $nome . "<br>";

    // $email = filter_input(INPUT_GET,'email', FILTER_SANITIZE_EMAIL);

    // echo $email . "<br>";


    // $idade = filter_input(INPUT_GET, 'idade', FILTER_SANITIZE_NUMBER_INT);

    // echo $idade;

    // if($email = filter_input(INPUT_GET, 'nome', FILTER_VALIDATE_EMAIL)){
    //     echo 'deu certo';
    // }else{
    //    $erros = "Email invalido";
    // }
    
    // if(!empty($erros)){
    //     foreach($erros as $valor){
    //         echo $valor;
    //     }
    // }else{
    //     echo 'vazio';
    // }
    
    
    // function soma(int $a, int $b):int{
    //     return $a + $b;
    // }



    // echo soma(2, 4);
   
    
   
    // $_SESSION['gay'] = 'feliz';


    // echo "Vc eh {$_SESSION['gay']}";
    //Fecha a sessão
    // session_unset();
    // session_destroy();

    //criptografia


    // $senha = 123;


    // $senha_base64 = base64_encode($senha);
    // $backToNormal = base64_decode($senha_base64);

    // echo $senha_base64 . "<br>";
    // echo $backToNormal . "<br>";

    // $md5senha = md5(123);

    // echo $md5senha . "<br>";


    // $sha1Pwd = sha1(123);

    // echo $sha1Pwd . "<br>";


    // $value = password_hash(123, 3);

    // echo $value;



?>

<!-- para arquivos multiplos -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" >

<form action="upload-multiplo.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <input  class="form-control" type="file" name="file[]" multiple>
    </div>

    <button  class="btn btn-primary" type="submit" name="enviar">Enviar</button>


</form>


   
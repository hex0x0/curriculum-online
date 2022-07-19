<?php

    if(isset($_POST['enviar'])){
        $tipos = ['jpg', 'png', 'gif'];

        //Obter informação acerca da extensão

        

        //Ver se no array de tipos existe a extensão do arquivo enviado

        //Conta a quantidade de arquivos enviados
        $quantos = count($_FILES['file']['name']);

        $contador = 0;


        // echo $quantos;

        // $extensao = pathinfo($_FILES['file']['name'][$contador], PATHINFO_EXTENSION);
        
        // $nome_temporario = $_FILES['file']['tmp_name'][$contador];

        // echo $extensao . "<br>";
        // echo $nome_temporario;

        while($contador < $quantos){


            $extensao = pathinfo($_FILES['file']['name'][$contador], PATHINFO_EXTENSION);

            if(in_array($extensao, $tipos)){
                //Processo de upload
                $pasta = "assets/img/";
                $nome_temporario = $_FILES['file']['tmp_name'][$contador];
                //uniqid -> gera um id único
                $novo_nome = uniqid() .".$extensao";
    
                //Inicia o processo de upload de fato
                
                
                if(move_uploaded_file($nome_temporario, $pasta.$novo_nome)){
                    echo "<p> Upload realizado</p>";
                }else{
                    echo "<p> Deu ruim </p>";
                }
    
            }

            $contador++;
        }

       

    }else{
    echo "Deu ruim x 2";
    }
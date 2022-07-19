<?php

    if(isset($_POST['enviar'])){
        $tipos = ['jpg', 'png', 'gif'];

        //Obter informação acerca da extensão

        $extensao = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

        //Ver se no array de tipos existe a extensão do arquivo enviado

        if(in_array($extensao, $tipos)){
            //Processo de upload
            $pasta = "assets/img/";
            $nome_temporario = $_FILES['file']['tmp_name'];
            //uniqid -> gera um id único
            $novo_nome = uniqid() .".$extensao";

            //Inicia o processo de upload de fato
            
            
            if(move_uploaded_file($nome_temporario, $pasta.$novo_nome)){
                echo "<p> Upload realizado</p>";
            }else{
                echo "<p> Deu ruim </p>";
            }

            


        }

    }else{
    echo "Deu ruim x 2";
    }
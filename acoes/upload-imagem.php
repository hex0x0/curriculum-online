<?php

    //session_start();

    if($_FILES['foto']['name'] != '' || $_FILES['foto']['name'] != null){
        $tipos_permitidos = ['image/jpg', 'image/jpeg', 'image/gif', 'image/png'];

        $extensao = mime_content_type($tipo);
        $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

        if(in_array($extensao, $tipos_permitidos)){
            $pasta = "../assets/img/";
            $temporario = $_FILES['foto']['tmp_name'];
            $novo_nome = uniqid() . ".$ext";


            if(move_uploaded_file($temporario, $pasta.$novo_nome)){
                $foto = $novo_nome;
            }


        }else{
            $foto = $_SESSION['foto'];
            $_SESSION['msg_upload'] = "Foto em formato $ext invalido";
        }

    }else {
        $foto = $_SESSION['foto']; // manter a foto anterior
        $_SESSION['msg_upload'] = "Foto não foi modificada";

    }
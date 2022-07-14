<?php

    if(!isset($_SESSION['idusuarios']) || !isset($_SESSION['email'])){
        header('Location: ../index.php');
    }



?>
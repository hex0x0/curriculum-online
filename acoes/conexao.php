<?php

$host = 'localhost';
$database = 'curriculo';
$user = 'root';
$pwd = 'admin123';

$con = new \MySQLi($host, $user, $pwd, $database);

//$con  = mysqli_connect($host, $user, $pwd, $database);


if(mysqli_connect_error()){
    echo "<p>ERRO: (" . mysqli_connect_errno($con) . ") " . mysqli_connect_error($con) . "</p>";
    exit;
}else{

}

?>

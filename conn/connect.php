<?php 

$host = "localhost";
$database = "tiphpdb01";
$user = "root";
$pass = "";
$charset = "utf8";
$port = "3306";

try{
$conn = new mysqli($host, $user, $pass, $database, $port);
mysqli_set_charset($conn, $charset);
} catch (\Throwable $th){
    echo "Atenção ERRO: ".$th;
}

//http://127.0.0.1/tiphpnt/conn/connect.php
?>
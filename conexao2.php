<?php

session_start();

$localhost = "127.0.0.1";
$banco  = "projeto-pet";
$user = "root";
$pass = "";


global $pdo;

try{

    //orientada a objetos com pdo
    $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}

?>
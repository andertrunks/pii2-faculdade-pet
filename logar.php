<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require 'conexao.php';
    require 'Usuario.class.php';

    $u = new Usuario();

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $emailAdm = addslashes($_POST['email']);
    $senhaAdm = addslashes($_POST['senha']);

    if($u->loginAdm($emailAdm, $senhaAdm) ==  true){
        if(($email=="admin@admin.com") && ($senha=="123456789")){
            header("Location: area_admin.php");

        }else{
            header("Location: inicio.php");
        }
    }else{
        header("Location: login.php");
    }
}

?>
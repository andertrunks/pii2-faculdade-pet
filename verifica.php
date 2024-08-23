<?php

require "conexao.php";

if(isset($_SESSION['id']) && !empty($_SESSION['id'])){

    require_once 'Usuario.class.php';
    $u = new Usuario();

    $listLogado = $u->logado($_SESSION['id']);
    $nomeUser = $listLogado['nome'];

}else{
    header("Location: login.html");
}

?>
<?php

require "verifica.php";

if(isset($_SESSION['id']) && !empty($_SESSION['id'])); 

?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projeto</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        
        <section id="header">
            <a href="#"><img src="img/logo.webp" width="90" class="logo" alt="logo"></a>

            <div>
                <ul id="navbar">
                    <li><a href="index.html">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Institucional</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="about.html">Sobre</a>
                          <a class="dropdown-item" href="help.html">Como posso ajudar?</a>
                        </div>
                    </li>
                    <li><a href="ong.html">ONG´s</a></li>
                    <li><a href="adote2.html">Quero Adotar</a></li>
                    <li><a href="form_adote.html">Anunciar</a></li>
                    <li  class="nav-item dropdown">
                        <a id="active" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Denuncia</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="denuncia.html">Denunciar</a>
                          <a class="dropdown-item" href="ver_denuc.html">Denuncias</a>
                        </div>
                    </li>
                    <li><a href="index.html"><i class="far fa-sign-out-alt"></i></a></li>
                    <a href="#" id="close"><i class="far fa-times"></i></a>
                </ul>
            </div>
        </section>

        <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/banner1.jpg" alt="Primeiro Slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/banner2.jpg" alt="Segundo Slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/banner4.webp" alt="Terceiro Slide">
                    <div class="carousel-caption d-md-block">   <br />
                      <a href="adote2.html" class="main-btn">ADOTE!</a>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Próximo</span>
                </a>
              </div>
        </section>

        <?php

        $SendAddRel = filter_input(INPUT_POST, 'SendAddRel', FILTER_SANITIZE_STRING);
        if($SendAddRel){
            //Receber os dados do formulário
            $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
            $desc = filter_input(INPUT_POST, 'desc', FILTER_SANITIZE_STRING);
            $data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
            $foto = filter_input(INPUT_POST, 'foto', FILTER_SANITIZE_STRING);
            
            //Inserir no BD
            $result_rel = "INSERT INTO denuncia (titulo, desc, data, foto) VALUES (:titulo, :desc, :data, :foto)";
            
            $insert_rel = $pdo->prepare($result_rel);
            $insert_rel->bindParam(':titulo', $titulo);
            $insert_rel->bindParam(':desc', $desc);
            $insert_rel->bindParam(':data', $data);
            $insert_rel->bindParam(':foto', $foto);
            
            if($insert_rel->execute()){
                echo "<br/><br/><br/><div class='mainbox'>
                <div class='msg'><p>Relato enviado com sucesso para verificação! Assim que o seu relato foi verificado ele será postado na página de relatos, por favor aguarde.<br/> 
                <a href='faca_relato.php'>Voltar</a> ou <a href='relatos.php'>Ver relatos</a></p></div>
                <i class='far fa-check-circle'></i>
                </div>
                <center><img width='500' height='500' src = 'img/sucesso.gif' /></center>";
            
            }
        }


?>
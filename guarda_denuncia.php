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
        <script>
          window.onload = function() {
              var elementBody = document.querySelector('body');
              var elementBtnIncreaseFont = document.getElementById('increase-font');
              var elementBtnDecreaseFont = document.getElementById('decrease-font');
              // Padrão de tamanho, equivale a 100% do valor definido no Body
              var fontSize = 100;
              // Valor de incremento ou decremento, equivale a 10% do valor do Body
              var increaseDecrease = 10;

              // Evento de click para aumentar a fonte
              elementBtnIncreaseFont.addEventListener('click', function(event) {
                  fontSize = fontSize + increaseDecrease;
                  elementBody.style.fontSize = fontSize + '%';
              });

              // Evento de click para diminuir a fonte
              elementBtnDecreaseFont.addEventListener('click', function(event) {
                  fontSize = fontSize - increaseDecrease;
                  elementBody.style.fontSize = fontSize + '%';
              });
          }
        </script>
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
                          <a class="dropdown-item" href="about2.html">Sobre</a>
                          <a class="dropdown-item" href="help2.html">Como posso ajudar?</a>
                        </div>
                    </li>
                    <li><a href="ong2.html">ONG´s</a></li>
                    <li><a href="adote2.html">Quero Adotar</a></li>
                    <li><a href="form_adote.php">Anunciar</a></li>
                    <li  class="nav-item dropdown">
                        <a id="active" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Denuncia</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="denuncia.php">Denunciar</a>
                          <a class="dropdown-item" href="sdenuncia.html">Denuncias</a>
                        </div>
                    </li>
                    <li><a href="index.html"><i class="far fa-sign-out-alt"></i></a></li>
                    <a href="#" id="close"><i class="far fa-times"></i></a>
                    <div class="btn-container">
                      <button class="btn btn-primary btn-sm" name="increase-font" id="increase-font" title="Aumentar fonte">A +</button>
                      <button class="btn btn-primary btn-sm" name="decrease-font" id="decrease-font" title="Diminuir fonte">A -</button>
                    </div>
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
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $dat = filter_input(INPUT_POST, 'dat', FILTER_SANITIZE_STRING);
    
    //Inserir no BD
    $result_rel = "INSERT INTO denuncia (titulo, descricao, dat) VALUES (:titulo, :descricao, :dat)";
    
    $insert_rel = $pdo->prepare($result_rel);
    $insert_rel->bindParam(':titulo', $titulo);
    $insert_rel->bindParam(':descricao', $descricao);
    $insert_rel->bindParam(':dat', $dat);
    
    if($insert_rel->execute()){
        echo "<div class='jumbotron'>
          <h1 class='display-4'>Denúncia enviada com sucesso!</h1>
          <p class='lead'>Sua denúncia passará pelo processo de validação por nossa equipe, assim que validada será postada em nosso site.</p>
          <hr class='my-4'>
          <p>Enviaremos o processo de sua denúncia pelo e-mail.</p>
          <a class='btn btn-primary btn-lg' href='sdenuncia.html' role='button'>Veja outras denúncias</a>
        </div>";
       
    }
  }

?>
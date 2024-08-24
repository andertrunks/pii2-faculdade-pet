<?php

require "verifica.php";

if(isset($_SESSION['id']) && !empty($_SESSION['id'])); ?>

<?php

// definições de host, database, usuário e senha
$host = "127.0.0.1";
$db   = "projeto-pet";
$user = "root";
$pass = "";
// conecta ao banco de dados
//$conexao = mysql_pconnect($host, $user, $senha) or trigger_error(mysql_error(),E_USER_ERROR);
// seleciona a base de dados em que vamos trabalhar
//mysql_select_db($db, $conexao);
// cria a instrução SQL que vai selecionar os dados
//$query = sprintf("SELECT nome FROM usuario");
// executa a query
//$dados = mysql_query($query, $conexao) or die(mysql_error());
// transforma os dados em um array
//$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
//$total = mysql_num_rows($dados);
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
            <a href="#"><img src="img/logo.webp" width="142" class="logo" alt="logo"></a>

            <div>
                <ul id="navbar">
                    <li><a id="active" href="index.html">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Institucional</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="about.html">Sobre</a>
                          <a class="dropdown-item" href="help.html">Como posso ajudar?</a>
                        </div>
                    </li>
                    <li><a href="contact.html">ONG´s</a></li>
                    <li><a href="adote2.html">Quero Adotar</a></li>
                    <li><a href="form_adote.html">Anunciar</a></li>
                    <li  class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Denuncia</a>
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
                    <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Terceiro Slide" alt="Terceiro Slide">
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

        <section id="feature" class="section-p1">
          <div class="fe-box">
              <img src="img/features/denuncia_icone.webp" alt="denuncia">
              <h6>Denuncie Maus Tratos</h6>
          </div>
          <div class="fe-box">
            <img src="img/features/validacao_icone.webp" alt="validacao">
            <h6>Avaliamos seu Perfil</h6>
          </div>
          <div class="fe-box">
            <img src="img/features/pet1_icone.webp" alt="">
            <h6>Ache seu Pet</h6>
          </div>
          <div class="fe-box">
            <img src="img/features/pet2_icone.webp" alt="">
            <h6>Adoção Completa</h6>
          </div>
        </section>

        <section id="prod1" class="section-p1">
          <h2> Pets para Adoção</h2>
          <p> Pets Recém Anunciados para Adoção</p>
          <div class="pro-container">
            <div class="pro">
              <img src="img/prod/a1.jpeg" alt="">
              <div class="des">
                <span>São Paulo, SP</span>
                <h5>Thomas</h5>
                <h4>6 meses</h4>
              </div>
            </div>
            <div class="pro">
              <img src="img/prod/a2.jpg" alt="">
              <div class="des">
                <span>Araraquara, SP</span>
                <h5>Zoro</h5>
                <h4>1 ano</h4>
              </div>
            </div>
            <div class="pro">
              <img src="img/prod/a3.jpg" alt="">
              <div class="des">
                <span>Rio de Janeiro, RJ</span>
                <h5>Snow</h5>
                <h4>9 meses</h4>
              </div>
            </div>
            <div class="pro">
              <img src="img/prod/a4.avif" alt="">
              <div class="des">
                <span>Rincão, SP</span>
                <h5>Pudim</h5>
                <h4>6 meses</h4>
              </div>
            </div>
            <div class="pro">
              <img src="img/prod/a5.jpeg" alt="">
              <div class="des">
                <span>São Carlos, SP</span>
                <h5>Lua</h5>
                <h4>4 meses</h4>
              </div>
            </div>
            <div class="pro">
              <img src="img/prod/a6.jpg" alt="">
              <div class="des">
                <span>Fortaleza, CE</span>
                <h5>Bolinha</h5>
                <h4>1 ano</h4>
              </div>
            </div>
            <div class="pro">
              <img src="img/prod/a7.jpg" alt="">
              <div class="des">
                <span>São Paulo, SP</span>
                <h5>Bobby</h5>
                <h4>1 ano</h4>
              </div>
            </div>
            <div class="pro">
              <img src="img/prod/a8.jpg" alt="">
              <div class="des">
                <span>Rio de Janeiro, RJ</span>
                <h5>Chico</h5>
                <h4>1 ano e 3 meses</h4>
              </div>
            </div>
          </div>
        </section> 

        <section id="banner" class="section-m1">
          <h4>AJUDE DA SUA MANEIRA</h4>
          <h2>Além de adotar, você também pode <span>ajudar</span> de outras meneiras</h2>
          <button class="normal">VEJA COMO</button>
        </section>

        <section id="prod1" class="section-p1">
          <h2> ONG's de Proteção Animal</h2>
          <p> ONG's para Apoiar</p>
          <div class="pro-container">
            <div class="pro">
              <img src="img/ong/suipa.webp" alt="suipa">
              <div class="des">
                <span>Rio de Janeiro - RJ</span>
                <h5>SUIPA</h5>
              </div>
            </div>
            <div class="pro">
              <img src="img/ong/ampara.webp" alt="ampara animal">
              <div class="des">
                <span>São Paulo - SP</span>
                <h5>Ampara Animal</h5>
              </div>
            </div>
            <div class="pro">
              <img src="img/ong/caosemdono.webp" alt="cao sem dono">
              <div class="des">
                <span>São Paulo - SP</span>
                <h5>Cão sem dono</h5>
              </div>
            </div>
            <div class="pro">
              <img src="img/ong/viralata.webp" alt="vira lata e dez">
              <div class="des">
                <span>São Paulo</span>
                <h5>Vira Lata é Dez</h5>
              </div>
            </div>
            <div class="pro">
              <img src="img/ong/inst_caramelo.webp" alt="instituto caramelo">
              <div class="des">
                <span>São Paulo - SP</span>
                <h5>instituto Caramelo</h5>
              </div>
            </div>
            <div class="pro">
              <img src="img/ong/focinhos.webp" alt="focinhos de luz">
              <div class="des">
                <span>Sepetiba - RJ</span>
                <h5>Focinhos de Luz</h5>
              </div>
            </div>
            <div class="pro">
              <img src="img/ong/amg_sfrancisco.webp" alt="amigos de sao francisco">
              <div class="des">
                <span>São Paulo</span>
                <h5>Amigos de São Francisco</h5>
              </div>
            </div>
            <div class="pro">
              <img src="img/ong/gatopoles.webp" alt="gatopoles">
              <div class="des">
                <span>São Paulo - SP</span>
                <h5>Gatópoles - Adoção de Gatinhos</h5>
              </div>
            </div>
          </div>
        </section>

        <section id="adote" class="section-p1 section-m1">
          <div class="adotetext">
              <h4>Adote um amiguinho</h4>
              <p>Eles estão esperando por você!</p>
          </div>
      </section>

        <footer class="section-p1">
          <div class="col">
              <img class="logo" src="img/logo2.png" width="142" alt="">
              <h4>Contato</h4>
              <p><strong>Endereço:</strong> Rincão, SP</p>
              <p><strong>Telefone:</strong>+55169999-9999 | +55169999-9999</p>
              <div class="follow">
                  <h4>Nos siga</h4>
                  <div class="icon">
                      <i class="fab fa-facebook"></i>
                      <i class="fab fa-twitter"></i>
                      <i class="fab fa-instagram"></i>
                  </div>
              </div>
          </div>

          <div class="col">
              <h4>Sobre</h4>
              <a href="#">Sobre Nós</a>
              <a href="#">Perguntas Frequentes</a>
              <a href="#">Política de Privacidade</a>
              <a href="#">Termos & Condições</a>
              <a href="#">Entre em contato</a>
          </div>

          <div class="col">
              <h4>Colabore</h4>
              <a href="#">Doe qualquer valor</a>
              <a href="#">Seja uma Empresa Parceira</a>
          </div>

          <div class="copyright">
              <p>&copy 2024, Todos os direitos reservados - Naju</p>
          </div>
      </footer>

      <script src="script.js"></script>
    </body>

</html>
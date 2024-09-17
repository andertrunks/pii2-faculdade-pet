<?php
include_once './conexao_pdo.php';
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
    
        function limpa_formulário_cep() {
                //Limpa valores do formulário de cep.
                document.getElementById('rua').value=("");
                document.getElementById('bairro').value=("");
                document.getElementById('cidade').value=("");
                document.getElementById('uf').value=("");
        }
    
        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('rua').value=(conteudo.logradouro);
                document.getElementById('bairro').value=(conteudo.bairro);
                document.getElementById('cidade').value=(conteudo.localidade);
                document.getElementById('uf').value=(conteudo.uf);
            } //end if.
            else {
                //CEP não Encontrado.
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        }
            
        function pesquisacep(valor) {
    
            //Nova variável "cep" somente com dígitos.
            var cep = valor.replace(/\D/g, '');
    
            //Verifica se campo cep possui valor informado.
            if (cep != "") {
    
                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;
    
                //Valida o formato do CEP.
                if(validacep.test(cep)) {
    
                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('rua').value="...";
                    document.getElementById('bairro').value="...";
                    document.getElementById('cidade').value="...";
                    document.getElementById('uf').value="...";
    
                    //Cria um elemento javascript.
                    var script = document.createElement('script');
    
                    //Sincroniza com o callback.
                    script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
    
                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);
    
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        };
    
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
                    <li><a id="active" href="form_adote.php">Anunciar</a></li>
                    <li  class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Denuncia</a>
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

        <section id="prod1" class="section-p1">
            <h2> Adoção Responsável </h2>
        </section>

        <section id="prod1" class="section-p1">
          <div class="limiter">
            <div class="container-login100" style="background-color: #fff;">
              <div class="wrap-login100">
                <form action="guarda_anuncio.php" method="POST" class="login100-form validate-form">
                  <div class="alert alert-light" role="alert">
                    <strong>Olá <?php echo $nomeUser;  ?>!</strong> Quer anunciar um pet para adoção responsável?
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
        
                  <div class="form-group">
                  <label for="exampleInputEmail1">Nome do pet</label> 
                    <input class="form-control" type="text" name="nome_pet" placeholder="Nome do pet...">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                  </div>
        
                  <div class="form-group">
                  <label for="exampleInputEmail1">Idade do pet</label> 
                    <input class="form-control" type="text" name="idade_pet" placeholder="Idade do pet...">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                  </div>
        
                  <div class="form-group">
                  <label for="exampleInputEmail1">Nome para Contato</label> 
                    <input class="form-control" type="text" name="nome_contato" placeholder="Seu nome para contato...">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                  </div>
        
                  <div class="form-group">
                  <label for="exampleInputEmail1">Telefone para Contato</label>  
                    <input class="form-control" type="tel" name="telefone" placeholder="(DD) XXXXX-XXXX">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                  </div>
        
                  <div class="form-group">
                  <label for="exampleInputEmail1">Email para Contato</label>
                    <input class="form-control" type="text" name="email" placeholder="seuemail@gmail.com...">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                  </div>
        
                  <div class="form-group">
                  <label for="exampleInputEmail1">CEP</label>
                  <input class="form-control" type="text" name="cep" placeholder="00000-000"
                      onblur="pesquisacep(this.value);" /> 
                      </div>
                  </div>
        
                  <div class="form-group">
                  <label for="exampleInputEmail1">Cidade</label>
                  <input class="form-control" name="cidade" type="text" id="cidade" size="40" placeholder="Cidade"> </div>
                  </div>
        
                  <div class="form-group">
                  <label for="exampleInputEmail1">Estado</label>
                  <input class="form-control" name="uf" type="text" id="uf" size="2" placeholder="UF"> </div>
                  </div>
        
                  <div class="form-group">
                  <label for="exampleInputEmail1">Sobre o pet:</label> 
                    <div data-validate="Descrição..."> 
                      <textarea class="form-control" name="sobre" ></textarea>
                      <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>
                    <br><br>
                    <div class="container-login100-form-btn">
                    <input type="submit" name="SendAddRel" value="Enviar" class="btn btn-primary" >
                      </button>
                    </div>
      </form>
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
                <img class="logo" src="img/logo.webp" width="90" alt="">
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
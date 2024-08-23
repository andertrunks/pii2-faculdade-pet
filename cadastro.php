<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script>
    
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

        <title>Projeto</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="login.css">
    </head>

    <body>
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
                <div class="panel border bg-white">
                    <div class="panel-heading">
                        <h3 class="pt-3 font-weight-bold">Bem-vindo(a)</h3>
                    </div>
                    <div class="panel-body p-3">
                        <form action="efetuar_login.php" method="POST">
                        <input type="hidden" name="hidden" value="1">
                            <div class="form-group py-2">
                                <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" name="nome" placeholder="Digite seu nome..."> </div>
                            </div>
                            <div class="form-group py-2">
                                <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" name="email" placeholder="Digite seu email..."> </div>
                            </div>
                            <div class="form-group py-1 pb-2">
                                <div class="input-field"> <span class="fas fa-lock px-2"></span> <input type="password" name="senha" placeholder="Digite sua senha..." required> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
                            </div>
                            <div class="form-group py-1 pb-2">
                                <div class="input-field"> <span class="fas fa-lock px-2"></span> <input type="password" name="confirma_senha" placeholder="Digite sua senha novamente..." required> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
                            </div>
                            <div class="form-group py-2">
                                <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" name="cep" placeholder="00000-000"
                                    onblur="pesquisacep(this.value);" /> 
                                </div>
                            </div>
                            <div class="form-group py-2">
                                <div class="input-field"> <span class="far fa-user p-2"></span> <input name="rua" type="text" id="rua" size="60" placeholder="Rua"> </div>
                            </div>
                            <div class="form-group py-2">
                                <div class="input-field"> <span class="far fa-user p-2"></span> <input name="bairro" type="text" id="bairro" size="40" placeholder="Bairro"> </div>
                            </div>
                            <div class="form-group py-2">
                                <div class="input-field"> <span class="far fa-user p-2"></span> <input type="number" name="numero" placeholder="..."> </div>
                            </div>
                            <div class="form-group py-2">
                                <div class="input-field"> <span class="far fa-user p-2"></span> <input name="cidade" type="text" id="cidade" size="40" placeholder="Cidade"> </div>
                            </div>
                            <div class="form-group py-2">
                                <div class="input-field"> <span class="far fa-user p-2"></span> <input name="uf" type="text" id="uf" size="2" placeholder="UF"> </div>
                            </div>
                            <div class="form-inline"> <input type="checkbox" name="remember" id="remember"> <label for="remember" class="text-muted">Concordo com a Lei...</label></div>
                            <button class="btn btn-block mt-3 normal">Cadastrar</button>
                            <div class="text-center pt-4 text-muted">Já tem uma conta? <a href="login.html">Sign in</a> </div>
                        </form>
                    </div>
                    <div class="mx-3 my-2 py-2 bordert">
                        <div class="text-center py-3"> <a href="https://wwww.facebook.com" target="_blank" class="px-2"> <img src="https://www.dpreview.com/files/p/articles/4698742202/facebook.jpeg" alt=""> </a> <a href="https://www.google.com" target="_blank" class="px-2"> <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png" alt=""> </a> <a href="https://www.github.com" target="_blank" class="px-2"> <img src="https://www.freepnglogos.com/uploads/512x512-logo-png/512x512-logo-github-icon-35.png" alt=""> </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    
    </html>
<?php

include('conexao.php');

    $hidden=$_POST['hidden'];

    if($hidden==1){
        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $senha=$_POST['senha'];
        $confirma_senha=$_POST['confirma_senha'];
        $rua=$_POST['rua'];
        $numero=$_POST['numero'];
        $bairro=$_POST['bairro'];
        $cidade=$_POST['cidade'];
        $uf=$_POST['uf'];
        $cep=$_POST['cep'];


        $stmt=$pdo->query("SELECT email FROM cadastro WHERE email='$email'");
        $qtd=$stmt->rowCount();

        if($qtd>0){
            header('Location: erro_cadastro.php');
        }else{
            $sql=$pdo->query("INSERT INTO cadastro (nome, email, senha, confirma_senha, rua, numero, bairro, cidade, uf, cep) VALUE ('$nome', '$email', '$senha', '$confirma_senha', '$rua', '$numero', '$bairro', '$cidade', '$uf', '$cep')");
            $sql->execute();

            if($sql){
                header("Location: inicio.php");
            }else{
                header('Location: erro.php');
            }
        }

    }else{
        $email=$_POST['email'];
        $senha=$_POST['senha'];

        $sql="SELECT * FROM cadastro";

        $query=mysqli_query($conexao, $sql);

        if(mysqli_num_rows($query)>0){
            while(($cadastro=mysqli_fetch_assoc($query))!=NULL){
                if((($email==$cadastro['email']) && ($email=="admin@admin.com")) && (($senha==$cadastro['senha']) && ($senha=="123456789"))){
                    setcookie('ADM', 1, time()+600);
                    header("Location: area_admin.php");
                }else if(($email==$cadastro['email']) && ($senha==$cadastro['senha'])){
                    setcookie('USER', $cadastro['id'], time()+600);
                    header("Location: inicio.php");
                }
            }
        }
    }
 ?>
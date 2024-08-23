<?php

class Usuario{

    public function loginAdm($emailAdm, $senhaAdm){
        global $pdo;

        $sql = "SELECT * FROM cadastro WHERE email = :email AND senha = :senha ";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $emailAdm);
        $sql->bindValue("senha", $senhaAdm); 
        $sql->execute();
        $emailAdm='admin@admin.com';
        $senhaAdm='123456789';

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
        
                $_SESSION['id'] = $dado['id'];
            

            return true;
        }else{
            return false;
        }
    }

    public function login($email, $senha){
        global $pdo;

        $sql = "SELECT * FROM cadastro WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha); 
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

            $_SESSION['id'] = $dado['id'];

            return true;
        }else{
            return false;
        }
    }

    public function logado($cod){
        global $pdo;

        $array = array();

        $sql = "SELECT nome FROM cadastro WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("id", $cod);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }
}

?>
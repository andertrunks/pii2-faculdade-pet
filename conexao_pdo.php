<?php 
//credenciais de acesso ao BD

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'projeto-pet');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);
?>
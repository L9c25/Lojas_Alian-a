<?php 
session_start();

$host = 'localhost';
$banco = 'alianca';
$user = 'root';
$pass = '';
$porta = '3307';

try {
$pdo = new PDO("mysql:dbname=".$banco.";port=".$porta.";host=".$host,$user,$pass);

} catch (Exception $e) {
    die("erro: ".$e->getMessage()."deu merda!");
}

/*$nome = 'nome';
$email = 'email';

$sql = $pdo->prepare("INSERT into usuario (nome,email) values (:nome,:email)");
$sql->bindParam(":nome",$nome);
$sql->bindParam(":email",$email);
$nome = 'novo nome';
$sql->execute();*/

?>
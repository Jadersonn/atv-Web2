<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=projetoweb2","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$nome = $_POST['nome'];

try{
    $sql = "insert into area (nomeArea) values ('$nome')";
    $conexao->exec($sql);
    echo "Salvo com sucesso !!!";
   
}catch(PDOException $e){
    die("Ocorreu um erro " . $e->getMessage());
}
header('Location: ../../view/area/buscarArea.php');
?>
<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=projetoweb2","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$nome = $_POST['nome'];
$cep = $_POST['nota'];
$area = (int)$_POST["area"];
$campus = (int)$_POST["campus"];

try{
    $sql = "insert into curso (notaCurso, nomeCurso, idArea, idCampus) values ('$cep','$nome', '$area', '$campus')";
    $conexao->exec($sql);
    echo "Salvo com sucesso !!!";
}catch(PDOException $e){
    die("Ocorreu um erro " . $e->getMessage());
}

?>
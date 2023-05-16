<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=projetoweb2","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$idCurso = $_POST['identidade'];
$nome = $_POST['nome'];
$cep = $_POST['nota'];
$area = (int)$_POST["area"];
$campus = (int)$_POST["campus"];

try{
    $sql = "update curso set nomeCurso='$nome', notaCurso='$cep', idArea='$area', idCampus='$campus' where idCurso=".$idCurso ;
    $conexao->exec($sql);
    echo "Editado com sucesso !!!";
}catch(PDOException $e){
    die("Ocorreu um erro " . $e->getMessage());
}

header('Location: ../../view/cursos/buscarCurso.php');
?>
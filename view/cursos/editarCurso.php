<!DOCTYPE html>
<html lang="en">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/devweb2023'; ?>

<head>
    <meta charset="UTF-8">
    <title>Editar Campus</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="<?php echo $path; ?>/arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo $path; ?>/arquivos/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>/arquivos/js/busca.cep.js"></script>
</head>

<body>
    <?php include("../../menu.php") ?>
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="alert alert-light" role="alert">
                <h1>Editar Curso</h1>
            </div>
        </div>

        <form action="<?php echo $path; ?>/repositorio/cursos/editarCuso.php" method="POST">
            <div class="row mb-3">

                <?php
        try{
            $conexao = new PDO("mysql:host=localhost; dbname=projetoweb2","root","");
        }catch(PDOException $e){
            die("Ocorreu um erro inesperado " . $e->getMessage());
        }
        
        $idCurso = $_GET['idCurso'];
        
        try{
            $sql = "select * from curso where idCurso = " . $idCurso;
            $resultado = $conexao->query($sql);
            if($resultado->rowCount() > 0){
                $linha = $resultado->fetch();
                
                ?>
                <input value="<?php echo $linha['idCurso'] ?>" type="text" name="identidade" id="idCurso" hidden>

                <div class="col col-md-6">
                    <label class="form-label" for="idnome">Nome do Curso</label>
                    <input class="form-control" value="<?php echo $linha['nomeCurso'] ?>" type="text" name="nome"
                        id="idnome">
                </div>
                <div class="col col-md-6">
                    <label class="form-label" for="idnome">Nota</label>
                    <input class="form-control" value="<?php echo $linha['notaCurso'] ?>" type="text" name="nota"
                        id="idnota">
                </div>

                <?php 
                }
            }catch(PDOException $e){
                die("Ocorreu um erro " . $e->getMessage());
            }
            ?>

            </div>

            <div class="row mb-3">

                <?php
try{
$conexao = new PDO("mysql:host=localhost; dbname=projetoweb2", "root", "");
}catch(PDOException $e){
die('aconteceu um erro: ' . $e->getMessage());
}

try{
$sql = "select * from campus";
$resultado = $conexao->query($sql);
if($resultado->rowCount() > 0){
    ?>

                <div class="col col-md-6">


                    <?php
    while($linha = $resultado->fetch()){

     echo  "<input type='checkbox' class='radio form-check-input' id='idcampus' name='campus' value='". $linha['idCampus'] ."'>
       <label class='form-check-label' for='vehicle1'> ". $linha['nome'] ."</label><br>";
   

    }
    ?>


                </div>

                <?php
}
}catch(PDOException $e){
die('aconteceu um erro: ' . $e->getMessage());
}
?>

                <?php
try{
$conexao = new PDO("mysql:host=localhost; dbname=projetoweb2", "root", "");
}catch(PDOException $e){
die('aconteceu um erro: ' . $e->getMessage());
}

try{
$sql = "select * from area";
$resultado = $conexao->query($sql);
if($resultado->rowCount() > 0){
    ?>

                <div class="col col-md-6">


                    <?php
    while($linha = $resultado->fetch()){

      echo  "<input type='checkbox' class='radio form-check-input' id='idarea' name='area' value='". $linha['idArea'] ."'>
        <label class='form-check-label' for='idarea'> ". $linha['nomeArera'] ."</label><br>";
   


    }
    ?>

                </div>

                <?php
}
}catch(PDOException $e){
die('aconteceu um erro: ' . $e->getMessage());
}
?>

            </div>

            <input class="btn btn-primary" type="submit" value="Salvar">
        </form>


    </div>
    </div>
</body>

</html>
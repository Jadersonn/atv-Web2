<?php
$path = 'http://' . $_SERVER["HTTP_HOST"] . '/devweb2023';
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary mt-3">
    <div class="container-fluid">
        <a href="<?php echo $path; ?>/index.php"><img src="<?php echo $path; ?>/arquivos/imagens/ifmscb.png" width="150" height="40" alt="Logomarca do IFMS"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $path; ?>/index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Cursos</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item"
                                href="<?php echo $path; ?>/view/cursos/cadastroDeCurso.php">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="<?php echo $path; ?>/view/cursos/buscarCurso.php">Buscar</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Campus
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item"
                                href="<?php echo $path; ?>/view/campus/cadastroDeCampus.php">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="<?php echo $path; ?>/view/campus/buscarCampus.php">Buscar</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Area
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item"
                                href="<?php echo $path; ?>/view/area/cadastroDeArea.php">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="<?php echo $path; ?>/view/area/buscarArea.php">Buscar</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        
                    </ul>
                </li>
                
            </ul>
            <form class="d-flex" role="search">
                <a class="btn btn-outline-primary me-2" id="linkDeslogar" href="#">Deslogar</a>
                <a class="btn btn-outline-primary" id="linkLogar" href="#">Logar</a>
            </form>
        </div>
    </div>
</nav>
<?php
//trava de login
date_default_timezone_set('America/Sao_Paulo');
(!isset($_SESSION) ? session_start() : "");

if ($_SESSION['acesso'] != 'b8d66a4634503dcf530ce1b3704ca5dfae3d34bb') {
    header('location:logout.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php include_once 'cabecalho.php'; ?>
    </head>
    <body>
        <?php include_once 'navbar.php'; ?>
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12 col-sm-12">
                    <?php
                    $pagina = filter_input(INPUT_GET, 'p');

                    if (isset($pagina) || !empty($pagina)) {
                        include_once $pagina . '.php';
                    } else {
                        include_once 'home.php';
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php include_once 'plugins.php'; ?>
    </body>
</html>
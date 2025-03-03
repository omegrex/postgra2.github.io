<?php require_once './inc/session_start.php';?>

<!DOCTYPE html>
<html lang="es">
<head>
<?php
include_once './inc/head.php';?>
</head>

<body>
        <?php
            if(!isset($_GET['vista']) || $_GET['vista']==""){
                $_GET['vista']="login";
        }
            if(is_file("./vistas/".$_GET['vista'].".php") && $_GET['vista']!="login" &&
            $_GET['vista']!="404"){

                if((!isset($_SESSION['usuario']) || $_SESSION['usuario']=="")){
                    include "./php/cerrarsesion.php";
                    exit();
                }
            include './inc/detect_navbar.php';
            include "./vistas/".$_GET['vista'].".php";

        }else{
            if($_GET['vista']=="login"){

                include "./vistas/login.php";

            }else{
                include "./vistas/404.php";
            }
        }
        ?>
</body>
</html>
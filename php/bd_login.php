<?php
include_once '../php/main.php';
// Conectar a la base de datos
$db = conexion();

session_start();
// Realiza la conexión con la base de datos


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizar entrada de usuario
    $usuario = htmlspecialchars(trim($_POST['usuario']));
    $clave = $_POST['clave'];

    // Preparar la consulta SQL
    $sql = "SELECT * FROM usuarios WHERE usuario = ?";
    $stmt = $db->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Verificar la contraseña
            $row = $result->fetch_assoc();
            if (password_verify($clave, $row['clave'])) {
                // Almacenar el usuario y el estado en la sesión
                $_SESSION['usuario'] = $usuario;
                $_SESSION['status'] = $row['status'];

                header("Location: /index.php?vista=home");

                // Redireccionar según el estado del usuario
               /* if ($row['status'] == '1') {
                    header("Location: /index.php?vista=seccion1"); // Para usuarios administrador
                } else {
                    header("Location: /index.php?vista=seccion2"); // Para usuarios normales
                }
                exit();*/
            } else {
                echo "Usuario o contraseña incorrectos.";
            }
        } else {
            echo "Usuario o contraseña incorrectos.";
        }
        $stmt->close();
    } else {
        echo "Error en la consulta: " . $db->error;
    }
}

$db->close();

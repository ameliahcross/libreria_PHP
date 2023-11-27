<?php

    include "contacto.php";

    $fecha_actual = date('Y-m-d H:i:s');
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    try {
         // Conexión y consulta SQL
        include "conexion.php";
        $mi_insert = "insert into contacto(Fecha, Correo, Nombre, Asunto, Comentario) 
                    values (:fecha_actual, :email, :nombre, :asunto, :mensaje)";
        $consulta = $conexion -> prepare($mi_insert);

        $consulta->bindParam(':fecha_actual', $fecha_actual);
        $consulta->bindParam(':email', $email);
        $consulta->bindParam(':nombre', $nombre);
        $consulta->bindParam(':asunto', $asunto);
        $consulta->bindParam(':mensaje', $mensaje);

        if ($consulta -> execute()) {
            echo '<script>
                    alertarEnvioExitoso();
                 </script>';
        } else { 
            echo '<script>
                    alertarEnvioFallido();
                </script>';
        }
    } catch (PDOException $e) {
        echo '<script>
                alertarEnvioFallido();
            </script>';
    }
?>


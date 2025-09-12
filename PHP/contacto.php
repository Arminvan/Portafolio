<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    $para = "sebastian.sotop@outlook.com"; 
    $titulo = "Nuevo mensaje de contacto: $asunto";
    $contenido = "De: $nombre <$email>\n\nMensaje:\n$mensaje";
    $cabeceras = "From: $email";

    if (mail($para, $titulo, $contenido, $cabeceras)) {
        echo "OK";
    } else {
        echo "ERROR";
    }
}
?>

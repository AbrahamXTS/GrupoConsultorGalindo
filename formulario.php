<?php

if (isset($_POST['enviar'])) {

    if (!empty($_POST['nombre']) && !empty($_POST['e-mail']) && !empty($_POST['mensaje'])) {

        $destino = "abraham.espinosa@gcgalindo.mx";
        $nombre = $_POST["nombre"];
        $email = $_POST["e-mail"];
        $mensaje = $_POST["mensaje"];
    
        $contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nAsunto: " . $mensaje;
        mail($destino, "Contacto", $contenido);
    }
}

?>
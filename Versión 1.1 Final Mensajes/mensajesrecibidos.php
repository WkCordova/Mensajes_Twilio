<?php
// Verifica si se ha enviado un mensaje
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['mensaje'])) {
    // Lee el mensaje enviado desde el formulario
    $mensaje = $_POST['mensaje'] . "\n"; // Agrega un salto de línea al final del mensaje

    // Define el archivo donde se guardarán los mensajes
    $file = 'mensajes_recibidos.txt';

    // Abre el archivo en modo append (añadir contenido al final)
    if ($handle = fopen($file, 'a')) {
        // Escribe el mensaje en el archivo
        fwrite($handle, $mensaje);
        fclose($handle);
        echo "Mensaje enviado correctamente.";
    } else {
        echo "No se pudo abrir el archivo para escribir.";
    }
} else {
    echo "No se recibió ningún mensaje.";
}
?>
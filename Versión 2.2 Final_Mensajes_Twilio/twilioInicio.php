<?php
    // Update the path below to your autoload.php,
    // see https://getcomposer.org/doc/01-basic-usage.md
require_once 'twilio-php-main/src/Twilio/autoload.php';
    
    
    use Twilio\Rest\Client;

    $sid    = "AC20a4f865ecac473cc9f2474db7f4893e";
    $token  = "7a3d1ad284187ea33fd66684f237bb4f";
    $twilio = new Client($sid, $token);

    $to_number = 'whatsapp:+593983404747'; // Número de teléfono de WhatsApp del cliente

if(isset($_POST['mensaje'])) {
    $message = $_POST['mensaje'];

    // Envía el mensaje de WhatsApp
    $twilio->messages->create(
        $to_number,
        array(
            "from" => "whatsapp:+14155238886",
            "body" => $message
        )
    );

    echo 'Mensaje enviado exitosamente';
} else {
    echo 'Error: Mensaje no proporcionado';
}
print($message->sid);
?>
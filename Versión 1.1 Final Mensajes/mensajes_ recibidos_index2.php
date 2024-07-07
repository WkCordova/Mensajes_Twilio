<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css" >
    
    <title>Mensajes mensajes_recibidos_index2</title>
</head>
<body>
    
    <aside class="vertical-menu">
    <ul>
        <img src="imagenes/PROGRACADEMY.jpg" alt="Logo de Progracademy" class="logo">
        <li class="dropdown">
            <a href="mensajes_ recibidos_index2.html">Mensajes Twilio</a>
            </li>
    </ul>
</aside>
    <main>
        <div class="dashboard-header">
            <h1>Tablero</h1>
        </div>
        <div class="main-content">

            <div class="horizontal-menu ul li a">

               
                <div class="dashboard-header">
                    <h1>Mensajes recibidos</h1>
                
                    <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'MensajeRecibidos')">Mensaje Recibidos</button>
  <button class="tablinks" onclick="openCity(event, 'MensajesEnviados')">Mensajes enviados</button>
  <button class="tablinks" onclick="openCity(event, 'CrearNuevo')">Crear mensaje</button>
</div>
<br>
<hr>

<div id="MensajeRecibidos" class="tabcontent">
  <h3>Mensajes recibidos</h3>
  
          
            <?php
            // Ruta del archivo donde se guardan los mensajes
            $file = 'mensajes_recibidos.txt';
        
            // Verifica si el archivo existe y puede ser leído
            if (file_exists($file) && is_readable($file)) {
                // Lee todo el contenido del archivo
                $messages = file_get_contents($file);
        
                // Divide el contenido en líneas
                $lines = explode("\n", $messages);
        
                // Muestra los mensajes en la página
                foreach ($lines as $line) {
                    if (!empty($line)) {
                        echo '<div class="mensaje">' . htmlspecialchars($line) . '</div>';
                    }
                }
            } else {
                echo '<p>No se encontraron mensajes.</p>';
            }
            ?>
        
           
           
          
            
        </div>
 
</div>

<div id="MensajesEnviados" class="tabcontent">
  <h3>Mensajes Enviados</h3>
  <?php
            // Ruta del archivo donde se guardan los mensajes
            $file = 'mensajesescribir.txt';
        
            // Verifica si el archivo existe y puede ser leído
            if (file_exists($file) && is_readable($file)) {
                // Lee todo el contenido del archivo
                $messages = file_get_contents($file);
        
                // Divide el contenido en líneas
                $lines = explode("\n", $messages);
        
                // Muestra los mensajes en la página
                foreach ($lines as $line) {
                    if (!empty($line)) {
                        echo '<div class="mensaje">' . htmlspecialchars($line) . '</div>';
                    }
                }
            } else {
                echo '<p>No se encontraron mensajes.</p>';
            }
            ?>
        
           
           
          
            
        </div>
</div>

<div id="CrearNuevo" class="tabcontent">
  <h3>Crear Nuevo</h3>
  <form action="mensajesescribir.php" method="post">
            <div class="input">
                <input type="text" name="mensaje" required>
                <label></label>
            </div>
            
            <div class="botoncito">
                <button type="submit" class="bnt" >Enviar mensaje</button>
            </div>
        </form>


</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   



        
    </div>
    </main>
</body>
</html>
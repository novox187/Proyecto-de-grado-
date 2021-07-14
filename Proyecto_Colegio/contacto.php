<?php

$destino = "novox187@gmail.com";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {?>
  <?php
  $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde la pagina de la Unidad Ecucativa Francisco de Orellana ";
    $mensajeCompleto = "\n Nombre: " . $nombre . "\n" . "Email: " . $email . "\n" . "Télefono :" . $telefono . "\n" . "Mensaje :" . $mensaje;
    mail($destino, $asunto, $mensajeCompleto, $header);
    ?>
    <script>
    alert('Enviado exitosamente');
    location.href = "index.php";
</script>

<?php } 

require "view/contacto.view.php";
?>


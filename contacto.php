<?php 

$pg = "contacto";
if ($_POST){
  $nombre = $_REQUEST["txtNombre"];
  $correo = $_REQUEST["mail"];
  $mensaje = $_REQUEST["txtNombre"];
  $telefono = $_REQUEST["tel"];

  $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  $cabeceras .= 'To: mary@example.com' . "\r\n";
  $cabeceras .= 'From: Admin <cumples@example.com>' . "\r\n";

  $para = "mary@example.com";
  $asunto = "Se contactaron desde tu sitio web";
  $mensaje = "
  Nombre = $nombre<br>
  Correo = $correo<br>
  Tel&eacute;fono = $telefono<br>
  Mensaje = <br>$mensaje<br>
  ";

  mail($para, $asunto, $mensaje, $cabeceras);
  header ("Location: confirmacion-envio.php");



}




?>



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
      rel="stylesheet">

    <title>Contacto</title>


  </head>
<body id="contacto">
  <?php include_once ("header.php"); ?>
  <main class="container">
    <div class="row">
        <div class="col-12 mt-4">
          <h1>Contacto</h1>
        </div>        
        <div class="row">  
          <div class="col-12 col-sm-6">
            <H6>Te invito a que te contactes enviandome un mensaje o bien por Whatsapp</H6>
          </div>
              <div class="col-12 col-sm-6">
                <form action="" method="POST">
                  <div>
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control mb-3" placeholder="Nombre" required ="">
                  </div>
                  <div>
                    <input type="email" name="mail" id="mail" class="form-control mb-3" placeholder="nombre@ejemplo.com" required ="">
                  </div>
                  <div>
                    <input type="tel" name="tel" id="tel" class="form-control mb-3" placeholder="011-1234-5678" required ="">
                  </div>
                  <div>
                    <textarea name="txtMensaje" id="txtMensaje" cols="30" rows="10" class="form-control" required =""></textarea>
                  </div>
                  <div>
                    <button type="submit" name="btnEnviar" id="btnEnviar" class="btn mt-4">ENVIAR</button>
                  </div>
                </form>
              </div>
            </div>

    </div>

  </main>
  <footer class="footer mt-auto py-3">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-3">
            <a href="https://github.com" target="_blank" title="github"><i class="fab fa-github"></i></a>
            <a href="https://linkedin.com" target="_blank" title="linkedin"><i class="fab fa-linkedin"></i></a>
          </div>
          <div class="col-12 col-sm-3">
            Sponsor <a href="https://depcsuite.com">Depcsuite</a>
          </div>
          <div class="col-12 col-sm-3">
            <a href="mailto:martin.callipo6@gmail.com">martin.callipo6@gmail.com</a>
          </div>  
        </div>
      </div>
  </footer>
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
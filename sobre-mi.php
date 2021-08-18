<?php 

$pg = "sobre-mi";
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

  <title>Sobre mi</title>


</head>

<body id="sobremi">
<?php include_once ("header.php"); ?>
  <main class="container pt-4">
    <div class="row">
      <div class="col-12 col-sm-6 pt-4">
        <div>
          <h3>Sobre Mi</h3>
        </div>
        <div>
          <H6>Estudiante de ciencias informaticas, tecnicatura en informatica y desarrollo FullStack. </H6>
        </div>
        <div pt-4>
          <a href="contacto.php" class="btn btnmensaje">ENVIAR MENSAJE</a>
        </div>
      </div>
      <div class="col-12 col-sm-6 px-4">
        <img src="imagenes/yo.JPG" alt="foto" class="img-fluid img-circle">
      </div>
    </div>
  </main>
  <main class="container-fluid py-4 sectionstack">
    <div class="row">
      <div class="col-12">
        <img src="icons/fondo.png" class="img-fluid" width="500" weidth="200">
        <h4>Stack tecnológico</h4>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-12 col-sm-3 text-center mt-3">
        <img class="img-fluid d-block mx-auto" src="icons/html.png" alt="HTML5" width="100" tittle="HTML">
        <h5>HTML5</h5>
      </div>
      <div class="col-12 col-sm-3 text-center mt-3">
        <img class="img-fluid d-block mx-auto" src="icons/logo-2582747_960_720.png" alt="CSS" width="100"
          tittle="CSS">
        <h5>CSS</h5>
      </div>
      <div class="col-12 col-sm-3 text-center mt-3">
        <img class="img-fluid d-block mx-auto" src="icons/25231.png" alt="Github" width="100" tittle="GitHub">
        <h5>GitHub</h5>
      </div>
      <div class="col-12 col-sm-3 text-center mt-3">
        <img class="img-fluid d-block mx-auto" src="icons/autocad.png" alt="Autocad" width="100" tittle="Autocad">
        <h5>Autocad</h5>
      </div>
      <div class="row my-4">
        <div class="col-6 col-sm-3 text-center">
          <img class="img-fluid d-block mx-auto" src="icons/bootstrap-icon-css.png" alt="Bootstrap" width="100">
          <h5>Bootstrap</h5>
        </div>
        <div class="col-6 col-sm-3 text-center">
          <img class="img-fluid d-block mx-auto" src="icons/blender-3d.png" alt="Blender" width="100">
          <h5>Blender</h5>
        </div>
        <div class="col-6 col-sm-3 text-center">
            <img class="img-fluid d-block mx-auto" src="icons/iconphoto.png" alt="Bootstrap" width="100">
            <h5>Photoshop</h5>
        </div>
        <div class="col-6 col-sm-3 text-center">
            <img class="img-fluid d-block mx-auto" src="icons/php.png" alt="Blender" width="100">
            <h5>Php</h5>        
        </div>
    </div>
  </main>
  <main id="sectionformacion" class="container-fluid pt-4">
    <div class="row">
      <div class="col-12 col-sm-6 pt-4">
        <img src="icons/bannerblanco.png" class="img-fluid" width="500" weidth="200">
        <h3 id="tituloformacion" py-4>Formacion Academica</h3>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-12 col-sm-2 text-center mb-2">
        <img src="icons/unsam.jpg" width="100" class="icono">
      </div>           
        <div class="col-12 col-sm-3 mt-1 text-center">
            <div class="row">
              <div class="col-12">
                <h6>Universidad Nacional de San Martin</h6>
              </div>
                <div class="col-12">
                  <h6> tecnicatura en Programacion</h6>
                </div>
                  <div class="col-12">
                    <h6> Año de ingreso:2019 - Estado:En Curso</h6>
                  </div>
            </div>
        </div>  
          <div class="col-12 col-sm-2 text-center mb-2">
            <img src="icons/1519891802651.png" width="100" class="icono">
          </div>
          <div class="col-12 col-sm-3 text-center">
            <div class="row">
              <div class="col-12">
                <h6>UTN centro de e-Learning</h6>
              </div>
                <div class="col-12">
                  <h6> Universitario experto en programacion con espacializacion en Java</h6>
                </div>
                  <div class="col-12">
                    <h6> Año de ingreso:2020 - Estado:En Curso</h6>
                  </div>
  
  
      </main>
  <footer class="footer mt-auto py-3">
    <div class="container mt-5 py-3" >
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
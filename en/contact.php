<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
      rel="stylesheet">

    <title>Contact</title>


  </head>
<body id="contacto">
  <header>
    <nav class="navbar navbar-expand-md">
      <div class="container">
        <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>

        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2">
            <li class="nav-item">
              <a class="nav-link px-4 py-1 " aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 py-1 " aria-current="page" href="about_me.php">About me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 py-1 " aria-current="page" href="projects.php">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 py-1 active" aria-current="page" href="contact.php">Contact</a>
            </li>
          </ul>
          <form class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="../contacto.php">ES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link activado" aria-current="page" href="">EN</a>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </nav>
  </header> 
  <main class="container">
    <div class="row">
        <div class="col-12 mt-4">
          <h1>Contact</h1>
        </div>        
        <div class="row">  
          <div class="col-12 col-sm-6">
            <p>I invite you to contact me sending a message or by WhatsApp</p>
          </div>
              <div class="col-12 col-sm-6">
                <form action="" method="POST">
                  <div>
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control mb-3" placeholder="Name">
                  </div>
                  <div>
                    <input type="email" name="mail" id="mail" class="form-control mb-3" placeholder="name@example.com">
                  </div>
                  <div>
                    <input type="tel" name="tel" id="tel" class="form-control mb-3" placeholder="011-1234-5678">
                  </div>
                  <div>
                    <textarea name="txtMensaje" id="txtMensaje" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div>
                    <button type="submit" name="btnEnviar" id="btnEnviar" class="btn mt-4">SUBMIT</button>
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
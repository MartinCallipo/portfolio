<?php 

$pg = "projects";
?>



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

    <title>Projects</title>


</head>

<body id="index">
  <?php include_once ("headeren.php"); ?>
  <main class="container">
    <div class="row">
      <div class="col-12 mt-4">
        <h1>Projects</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6>The following are some of the work I have done:</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="../imagenes/abmclientes.png" alt="abm clientes" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiente py-3">
                        <h2>ABM CUSTOMERS</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Registration, cancellation and modification of a customer record. Made in HTML, CSS, PHP, Bootstrap and Json.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="sistema/abmclientes" class="btn btn-rojo" target="_blank">See online</a>
                        </div>
                        <div class="col-6 link-rojo text-center">
                            <a href="">Source code</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="../imagenes/abmventas.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiente py-3">
                        <h2>SALES MANAGEMENT SYSTEM</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Customer, product and sales management system. Made in HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery and MySQL database.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="sistema/login" class="btn btn-rojo" target="_blank">See online</a>
                        </div>
                        <div class="col-6 link-rojo text-center">
                            <a href="">Source code</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="../images/proyecto-integrador.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiente py-3">
                        <h2>INTEGRATING PROJECT</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Full Stack project developed in PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago with administrator panel, user manager, permission module and functionalities at the end.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="" class="btn btn-rojo">See online</a>
                        </div>
                        <div class="col-6 link-rojo text-center">
                            <a href="">Source code</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
  <footer class="footer mt-5 py-3 mb-0 text-center">
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
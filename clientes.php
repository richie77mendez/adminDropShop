<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DROP SHOP - Inicio</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Firebise -->
  <script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-firestore.js"></script>


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="login.php">DROP-SHOP</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="index.php">Home</a></li>
              <li class="active"><a href="#transporte">Mis Clientes</a></li>
            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1>DROPSHOP - GESTION DE MIS CLIENTES</h1>
  </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Sesion Section ======= -->
  <section id="transporte" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Mis Clientes</h2>
        <p>Gestion de clientes</p>
      </div>
    </div>
    <div class="container">

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form  method="post" role="form" autocomplete="off" class="php-email-form">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <div class="section-title">
                  <p>Nombre</p>
                </div>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:6" data-msg="Porfavor ingresa al menos 6 caracteres" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <div class="section-title">
                  <p>Correo</p>
                </div>
                <input type="text" name="correo" class="form-control" id="correo" placeholder="Correo" data-rule="minlen:10" data-msg="Porfavor ingresa al menos 25 caracteres" />
                <div class="validate"></div>
              </div>
            <div class="container">
              <button type="submit" id="botonF" onclick="guardarFabricante()">Guardar</button>
            </div>
          </form>

        </div>

      </div>

    </div>
    <div class="container">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Puntos</th>
                <th scope="col">Email</th>
                <th scope="col">Direccion</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Pais</th>
                <th scope="col">Estado</th>
                <th scope="col">Creacion</th>
                <th scope="col">Eliminar</th>
                <th scope="col">Editar</th>
              </tr>
            </thead>
            <tbody id="tabla" >
            </tbody>
          </table>

        </div>

      </div>
      <form method="post" role="form" autocomplete="off" class="php-email-form my-2">

        <div class="container">
          <button type="submit" id="boton1"  onclick="exportTableToCSV('clientes.csv')">Descargar (CSV)</button>
        </div>
      </form>
    </div>
  </section><!-- End Sesion Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>DROP-SHOP</h3>
      <p>Llenando de alegria y diversion tu casa con nuestros innovadores productos de tecnlogia.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>DROP-SHOP</span></strong>. Derechos Reservados
      </div>
      <div class="credits">
        Designed by
        <a href="https://www.facebook.com/RichieMendezzz/">Ricardo Mendez</a>
        <a href="https://www.facebook.com/juanpablo.valiente2">Juan Pablo Valiente</a>
        <a href="https://www.facebook.com/fabricio.racancoj">Fabricio Racancoj</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="clientes.js"></script>
  <script src="exportar.js"></script>
</body>

</html>

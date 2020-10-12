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
              <li class="active"><a href="#transporte">Nuevo Transporte</a></li>
              <li class="active"><a href="#pedidos">Metodos de Envio </a></li>

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
          <h1>DROPSHOP - GESTION DE TRANSPORTE DE PEDIDOS</h1>
  </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Sesion Section ======= -->
  <section id="transporte" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Nuevo Transporte</h2>
        <p>Gestiona tus metodos de transporte</p>
      </div>
    </div>

    <div class="container">

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form method="post">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <div class="section-title">
                  <p>Nombre</p>
                </div>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" data-rule="minlen:6" data-msg="Porfavor ingresa un nombre valido." />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <div class="section-title">
                  <p>Precio</p>
                </div>
                <input type="number" min=0.05 step="1.0" name="precio" class="form-control" id="precio" placeholder="Precio del Produto" data-rule-number data-msg="Porfavor ingresa un precio valido" />
                <div class="validate"></div>
              </div>

            <div class="text-center" >
              <button type="submit"  >
                Ingresar
              </button>
            </div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Sesion Section -->

  <!-- ======= Sesion Section ======= -->
  <section id="pedidos" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Gestion de Envios</h2>
      </div>
    </div>

    <div class="container">

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form method="post"  role="form" class="php-email-form">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <div class="section-title">
                  <p>Servicio Numero 1           Q. 125.00 <input type="checkbox" id="cbox1" value="second_checkbox"></p>
                  <p>Servicio Numero 2           Q. 115.00 <input type="checkbox" id="cbox2" value="second_checkbox"></p>
                  <p>Servicio Numero 3           Q. 135.00 <input type="checkbox" id="cbox3" value="second_checkbox"></p>
                  <p>Servicio Numero 4           Q. 120.00 <input type="checkbox" id="cbox4" value="second_checkbox"></p>
                </div>
                <div class="text-center"><button type="submit">Validar Transporte</button></div>
              </div>

          </form>

        </div>

      </div>

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
  <script src="Registro.js"></script>
</body>

</html>

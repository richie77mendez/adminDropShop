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
  <link href="assets/css/customStyles.css" rel="stylesheet">

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
              <li class="active"><a href="#transporte">Nuevo Transporte</a></li>
              <!-- <li class="active"><a href="#pedidos">Metodos de Envio </a></li> -->
              <li class="active"><a href="#agregarMetodoEnvio">Agregar Metodo</a></li>
              <li class="active"><a href="#zonaGeograficaEnvio">Zonas de Envío</a></li>
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

        <form method="post" role="form" autocomplete="off" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <div class="section-title">
                <p>Nombre</p>
              </div>
              <input type="text" name="nombre" class="form-control" id="nameTransport" placeholder="Nombre" data-msg="Porfavor ingresa un nombre valido." />
              <div class="validate" id="validateNameTransport"></div>
            </div>
            <div class="col-md-6 form-group">
              <div class="section-title">
                <p>Descripcion</p>
              </div>
              <input type="text" name="nombre" class="form-control" id="descriptionTransport" placeholder="Descripcion" data-msg="Porfavor ingresa una descripcion valida." />
              <div class="validate" id="validateDescriptionTransport"></div>
            </div>

            <div class="text-center">
              <button type="submit" onclick="saveTransportista()">
                Agregar
              </button>
            </div>
          </div>
        </form>

      </div>

    </div>

    </div>
  </section><!-- End Sesion Section -->

  <!-- ======= Sesion Section ======= -->
  <!-- <section id="pedidos" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Gestion de Envios</h2>
      </div>
    </div>

    <div class="container">

      <div class="col-lg-8 mt-5 mt-lg-0">

        <form method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <div class="section-title">
                <p>Servicio Numero 1 Q. 125.00 <input type="checkbox" id="cbox1" value="second_checkbox"></p>
                <p>Servicio Numero 2 Q. 115.00 <input type="checkbox" id="cbox2" value="second_checkbox"></p>
                <p>Servicio Numero 3 Q. 135.00 <input type="checkbox" id="cbox3" value="second_checkbox"></p>
                <p>Servicio Numero 4 Q. 120.00 <input type="checkbox" id="cbox4" value="second_checkbox"></p>
              </div>
              <div class="text-center"><button type="submit">Validar Transporte</button></div>
            </div>

        </form>

      </div>

    </div>

    </div>
  </section> -->
  <!-- End Sesion Section -->

  <section id="agregarMetodoEnvio" class="contact">

    <div class="container">
      <div class="section-title">
        <h2>Agregar nuevo método de envio</h2>
      </div>
    </div>

    <div class="container">

      <form method="post" role="form" autocomplete="off" class="php-email-form">
        <div class="form-row">
          <div class="form-group input-field">
            <label for="exampleInputEmail1">Transporte</label>
            <select class="form-control custom-select" id="nombreTransporte"></select>
          </div>
          <div class="form-group input-field">
            <label>Nombre</label>
            <input type="text" name="nombreMetodoEnvio" class="form-control" id="nombreMetodoEnvio" placeholder="Nombre del método" data-rule="minlen:6" data-msg="Porfavor ingresa un nombre valido." />
          </div>
          <div class="form-group input-field">
            <label for="exampleInputEmail1">Descripción</label>
            <input type="text" name="descripcionMetodoEnvio" class="form-control" id="descripcionMetodoEnvio" placeholder="Descripción del método" data-rule="minlen:6" data-msg="Porfavor ingresa un nombre valido." />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group input-field">
            <label for="exampleInputEmail1">Horario disponible</label>
            <div class="form-row">
              <div class="form-group input-time-medium">
                <input class="form-control" id="inicioHorario" type="time" name="appt-time" value="09:00">
              </div>
              <div class="form-group label-margin">
                <label>a</label>
              </div>
              <div class="form-group input-time-medium">
                <input class="form-control" id="finHorario" type="time" name="appt-time" value="18:00">
              </div>
            </div>
          </div>
          <div class="form-group input-field">
            <label for="exampleInputEmail1">Disponibilidad</label>
            <div class="dowPicker">
              <div class="dowPickerOption">
                <input type="checkbox" id="dow1">
                <label class="labelPicker" onclick="setStateToDay('sunday')" for="dow1">D</label>
              </div>
              <div class="dowPickerOption">
                <input type="checkbox" id="dow2">
                <label class="labelPicker" onclick="setStateToDay('monday')" for="dow2">L</label>
              </div>
              <div class="dowPickerOption">
                <input type="checkbox" id="dow3">
                <label class="labelPicker" onclick="setStateToDay('tuesday')" for="dow3">M</label>
              </div>
              <div class="dowPickerOption">
                <input type="checkbox" id="dow4">
                <label class="labelPicker" onclick="setStateToDay('wednesday')" for="dow4">M</label>
              </div>
              <div class="dowPickerOption">
                <input type="checkbox" id="dow5">
                <label class="labelPicker" onclick="setStateToDay('thursday')" for="dow5">J</label>
              </div>
              <div class="dowPickerOption">
                <input type="checkbox" id="dow6">
                <label class="labelPicker" onclick="setStateToDay('friday')" for="dow6">V</label>
              </div>
              <div class="dowPickerOption">
                <input type="checkbox" id="dow7">
                <label class="labelPicker" onclick="setStateToDay('saturday')" for="dow7">S</label>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center">
          <button type="submit" id="botonP" onclick="saveMetodoEnvio()">Agregar Método</button>
        </div>
      </form>

    </div>

  </section>

  <section id="zonaGeograficaEnvio" class="contact">

    <div class="container">
      <div class="section-title">
        <h2>Zonas geógraficas de envío</h2>
      </div>
    </div>

    <div class="container">

      <form method="post" role="form" autocomplete="off" class="php-email-form">
        <div class="form-row">
          <div class="form-group input-field">
            <label for="exampleInputEmail1">Metodo de Envío</label>
            <select class="form-control custom-select" id="nombresMetodoEnvio"></select>
          </div>
          <div class="form-group input-field">
            <label>Pais</label>
            <select class="form-control custom-select" id="nombresPaises"></select>
          </div>
          <div class="form-group input-field">
            <label for="exampleInputEmail1">Ciudad</label>
            <select class="form-control custom-select" id="nombresCiudades"></select>
          </div>
          <div class="form-group input-field">
            <label for="exampleInputEmail1">Costo</label>
            <input type="number" min=0.0 step="1.0" name="precio" class="form-control" id="precioZona" placeholder="Precio del Produto" data-rule-number data-msg="Porfavor ingresa un precio valido" />
          </div>
        </div>
        <div class="text-center">
          <button type="submit" id="botonP" onclick="saveZonaEnvio()">Agregar Nueva Zona</button>
        </div>
      </form>

    </div>

  </section>

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
  <script type="text/javascript" src="Registro.js"></script>
  <script type="text/javascript" src="assets/js/registrarEnvio.js"></script>
</body>

</html>
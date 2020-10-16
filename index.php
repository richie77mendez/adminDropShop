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
          <h1 class="logo"><a href="index.php">DROP-SHOP</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="#about">Nosotros</a></li>
              <li><a href="#services">Nuevo Producto</a></li>
              <li><a href="#portfolio">Gestion Producto</a></li>
              <li><a href="#Proveedor">Proveedores</a></li>
              <li><a href="#fabricante">Fabricantes</a></li>
              <li><a href="#tags">Tags</a></li>
              <li><a href="#counts">Estadisticas</a></li>
              <li><a href="transporte.php">Transporte</a></li>
            </ul>
          </nav><!-- .nav-menu -->

          <a href="login.php" class="get-started-btn scrollto">Cerrar Sesion</a>
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h1>DROPSHOP - Gestiona tu tienda desde la comodidad de un ordenador</h1>
          <a href="https://www.youtube.com/watch?v=09h2MXWS29o" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Nosotros</h2>
          <p>Somos un grupo de tres estudiantes del curso de Analisis y Diseño de Sistemas 1 de la carrera de Ingenieria en Ciencias y Sistemas
            de la Tricentenaria Universidad de San Carlos de Guatemala.</p>
        </div>
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Product Section ======= -->
    <section id="services" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Nuevo Producto</h2>
          <p>Seccion para crear un nuevo producto para la tienda</p>
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
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre Produto" data-rule="minlen:6" data-msg="Porfavor ingresa al menos 6 caracteres" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Estado</p>
                  </div>
                  <input type="text" name="estado" class="form-control" id="estado" list="listValue" placeholder="Estado del Produto" data-rule="minlen:6" data-msg="Porfavor ingresa al menos 6 caracteres" />
                  <datalist id="listValue">
                   <option value="Activo">
                   <option value="Inactivo">
                  </datalist>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Descripcion</p>
                  </div>
                  <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="Descripcion del Produto" data-rule="minlen:25" data-msg="Porfavor ingresa al menos 25 caracteres" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Precio: Q.</p>
                  </div>
                  <input type="number" min=0.01 step="0.01" name="precio" class="form-control" id="precio" placeholder="Precio del Produto" data-rule-number data-msg="Porfavor ingresa un precio valido" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Valor: Q.</p>
                  </div>
                  <input type="number" min=0.01 step="0.01" name="valor" class="form-control" id="valor" placeholder="Valor del Produto" data-rule-number data-msg="Porfavor ingresa un valor valido" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Galeria</p>
                  </div>
                  <input type="url" name="galeria" class="form-control" id="galeria" placeholder="Galeria del Produto" data-rule="minlen:1" multiple data-msg="Porfavor ingresa al menos 1 caracter" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Stock</p>
                  </div>
                  <input type="number" min=0 step="1" name="stock" class="form-control" id="stock" placeholder="Stock del Produto" data-rule-number data-msg="Porfavor ingresa un valor valido" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Creado el</p>
                  </div>
                  <input type="date" name="created" class="form-control" id="created" placeholder="Fecha de creacion del Produto" data-rule-date="true" data-msg="Porfavor ingresa una fecha valida" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Modifado el</p>
                  </div>
                  <input type="date" name="updated" class="form-control" id="updated" placeholder="Fecha de actualizacion del Produto" data-rule-date="true" data-msg="Porfavor ingresa una fecha valida" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Categoria</p>
                  </div>
                  <input type="text" name="categoria" class="form-control" id="categoria" placeholder="Categoria del Produto" data-rule="minlen:1" data-msg="Porfavor ingresa al menos 1 caracter" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Proveedor</p>
                  </div>
                  <input type="text" name="Proveedor" class="form-control" id="Proveedor" placeholder="Proveedor del Produto" data-rule="minlen:1" data-msg="Porfavor ingresa al menos 1 caracter" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Fabricante</p>
                  </div>
                  <input type="text" name="Fabricante" class="form-control" id="Fabricante" placeholder="Fabricante del Produto" data-rule="minlen:1" data-msg="Porfavor ingresa al menos 1 caracter" />
                  <div class="validate"></div>
                </div>
              <div class="text-center">
                <button type="submit" id="boton" onclick="guardar()">Agregar Producto</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Product Section -->

    <!-- ======= Proveedor Section ======= -->
    <section id="Proveedor" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Nuevo Proveedor</h2>
          <p>Seccion para crear un nuevo proveedor de productos para la tienda</p>
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
                  <input type="text" name="nameP" class="form-control" id="nameP" placeholder="Nombre Proveedor" data-rule="minlen:6" data-msg="Porfavor ingresa al menos 6 caracteres" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Descripcion</p>
                  </div>
                  <input type="text" name="descripcionP" class="form-control" id="descripcionP" placeholder="Descripcion del Proveedor" data-rule="minlen:10" data-msg="Porfavor ingresa al menos 25 caracteres" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Creado el</p>
                  </div>
                  <input type="date" name="createdP" class="form-control" id="createdP" placeholder="Fecha de creacion del Proveedor" data-rule-date="true" data-msg="Porfavor ingresa una fecha valida" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Actualizado el</p>
                  </div>
                  <input type="date" name="updatedP" class="form-control" id="updatedP" placeholder="Fecha de actualizacion del Proveedor" data-rule-date="true" data-msg="Porfavor ingresa una fecha valida" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Estado</p>
                  </div>
                  <input type="text" name="estadoP" class="form-control" id="estadoP" list="listValue" placeholder="Estado del proveedor" data-rule="minlen:2" data-msg="Porfavor ingresa al menos 6 caracteres" />
                  <div class="validate"></div>
                  <datalist id="listValue">
                   <option value="Activo">
                   <option value="Inactivo">
                  </datalist>
                </div>
              <div class="text-center">
                <button type="submit" id="botonP" onclick="guardarProveedor()">Agregar Proveedor</button>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Proveedor Section -->

    <!-- ======= Fabricante Section ======= -->
    <section id="fabricante" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Nuevo Fabricante</h2>
          <p>Seccion para crear un nuevo Fabricante de productos para la tienda</p>
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
                  <input type="text" name="nameF" class="form-control" id="nameF" placeholder="Nombre Proveedor" data-rule="minlen:6" data-msg="Porfavor ingresa al menos 6 caracteres" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Descripcion</p>
                  </div>
                  <input type="text" name="descripcionF" class="form-control" id="descripcionF" placeholder="Descripcion del Fabricante" data-rule="minlen:10" data-msg="Porfavor ingresa al menos 25 caracteres" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Creado el</p>
                  </div>
                  <input type="date" name="createdF" class="form-control" id="createdF" placeholder="Fecha de creacion del Proveedor" data-rule-date="true" data-msg="Porfavor ingresa una fecha valida" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Actualizado el</p>
                  </div>
                  <input type="date" name="updatedF" class="form-control" id="updatedF" placeholder="Fecha de actualizacion del Proveedor" data-rule-date="true" data-msg="Porfavor ingresa una fecha valida" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Estado</p>
                  </div>
                  <input type="text" name="estadoF" class="form-control" id="estadoF" placeholder="Estado del fabricante" data-rule="minlen:2" data-msg="Porfavor ingresa al menos 6 caracteres" />
                  <div class="validate"></div>
                </div>
              <div class="text-center">
                <button type="submit" id="botonF" onclick="guardarFabricante()">Agregar Fabricante</button>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Fabricante Section -->

    <!-- ======= Tags Section ======= -->
    <section id="tags" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Nueva Etiqueta</h2>
          <p>Seccion para crear una nueva etiqueta</p>
        </div>
      </div>

      <div class="container">

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form method="post" role="form" autocomplete="off"  class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Nombre</p>
                  </div>
                  <input type="text" name="nameT" class="form-control" id="nameT" placeholder="Nombre Categoria" data-rule="minlen:6" data-msg="Porfavor ingresa al menos 6 caracteres" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Descripcion</p>
                  </div>
                  <input type="text" name="descripcionT" class="form-control" id="descripcionT" placeholder="Descripcion de la Categoria" data-rule="minlen:15" data-msg="Porfavor ingresa al menos 25 caracteres" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Creado el</p>
                  </div>
                  <input type="date" name="createdT" class="form-control" id="createdT" placeholder="Fecha de creacion" data-rule-date="true" data-msg="Porfavor ingresa una fecha valida" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Actualizado el</p>
                  </div>
                  <input type="date" name="updatedT" class="form-control" id="updatedT" placeholder="Fecha de actualizacion" data-rule-date="true" data-msg="Porfavor ingresa una fecha valida" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Estado</p>
                  </div>
                  <input type="text" name="estadoT" class="form-control" id="estadoT" placeholder="Estado de la etiqueta" data-rule="minlen:3" data-msg="Estado de la etiqueta no valido" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <div class="section-title">
                    <p>Portada</p>
                  </div>
                  <input type="text" name="portadaT" class="form-control" id="portadaT" placeholder="Portada de la Categoria" data-rule="minlen5" data-msg="Porfavor ingresa al menos 5 caracteres" />
                  <div class="validate"></div>
                </div>
              <div class="text-center">
                <button type="submit" id="botonT" onclick="guardarTag()">Agregar Tag</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Tags Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Gestion de Productos</h2>
          <p>Edicion de productos y visibilidad en tienda.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Apple</li>
              <li data-filter=".filter-card">Juegos</li>
              <li data-filter=".filter-web">Android</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="text-center title">
          <h3>Datos generales de DROP-SHOP</h3>
          <p>Estadisticas de la actividad de la tienda.</p>
        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Clientes</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Productos</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Ventas</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Ganancias</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->





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

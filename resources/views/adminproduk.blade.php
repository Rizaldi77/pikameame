<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Moderna Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/86fe40f660.js" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.8.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Pikameame</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('index')}}">Home</a></li>
          <li><a href="{{route('profil')}}">Profil</a></li>
          <li><a class="active" href="{{route('product')}}">Produk</a></li>
          <li><a href="{{route('artikel')}}">Artikel</a></li>
          <li><a href="{{route('agen')}}">Agen</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Product Section ======= -->
  <main id="main">
  <section class="product" data-aos="fade-up" data-aos-easing="ease-in-out" date-aos-delay="200">
    <div class="container">
      <div class="section-title">
        <h2>Daftar Produk</h2>
        <div class="d-flex justify-content-between">
            <div>
                <form action="" method="post">
                    <input type="email" name="email" placeholder="Cari Apa Saja"><input type="submit" value="Search">
                </form>
            </div>
            <div class="read-more">
                <a href="{{route('daftaragen')}}"><i class="fa-solid fa-plus"></i> Tambah Produk</a>
            </div>
        </div>
      </div>

      <div class="row">

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box icon-box-orange">
            <img src="../assets/img/Profil/WhatsApp Image 2022-06-23 at 04.09.37.jpeg" class="img-fluid" alt="">
            <div class="icon"></div>
            <h4 class="title"><a href="{{route('detailproduct')}}">Magni Dolores</a></h4>
            <div class="align-self-end my-2 mx-1 row">
                <div class="col-6">
                    <button class="edit">Edit</button>
                </div>
                <div class="col-6">
                    <button class="delete">Delete</button>
                </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box icon-box-orange">
            <img src="../assets/img/Profil/WhatsApp Image 2022-06-23 at 04.09.37.jpeg" class="img-fluid" alt="">
            <div class="icon"></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <div class="align-self-end my-2 mx-1 row">
                <div class="col-6">
                    <button class="edit">Edit</button>
                </div>
                <div class="col-6">
                    <button class="delete">Delete</button>
                </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box icon-box-orange">
            <img src="../assets/img/Profil/WhatsApp Image 2022-06-23 at 04.09.37.jpeg" class="img-fluid" alt="">
            <div class="icon"></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <div class="align-self-end my-2 mx-1 row">
                <div class="col-6">
                    <button class="edit">Edit</button>
                </div>
                <div class="col-6">
                    <button class="delete">Delete</button>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box icon-box-orange">
            <img src="../assets/img/Profil/WhatsApp Image 2022-06-23 at 04.09.37.jpeg" class="img-fluid" alt="">
            <div class="icon"></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box icon-box-orange">
            <img src="../assets/img/Profil/WhatsApp Image 2022-06-23 at 04.09.37.jpeg" class="img-fluid" alt="">
            <div class="icon"></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box icon-box-orange">
            <img src="../assets/img/Profil/WhatsApp Image 2022-06-23 at 04.09.37.jpeg" class="img-fluid" alt="">
            <div class="icon"></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box icon-box-orange">
            <img src="../assets/img/Profil/WhatsApp Image 2022-06-23 at 04.09.37.jpeg" class="img-fluid" alt="">
            <div class="icon"></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box icon-box-orange">
            <img src="../assets/img/Profil/WhatsApp Image 2022-06-23 at 04.09.37.jpeg" class="img-fluid" alt="">
            <div class="icon"></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box icon-box-orange">
            <img src="../assets/img/Profil/WhatsApp Image 2022-06-23 at 04.09.37.jpeg" class="img-fluid" alt="">
            <div class="icon"></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
        </div>
      </div>

      <div class="blog-pagination">
        <ul class="justify-content-center">
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ul>
      </div>

    </div>
  </section>

</main>

<!-- ======= Footer ======= -->
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

  <div class="footer-newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>PIKAMEAME FROZEN FOOD</h4>
          <p>Copyright 2022 SG Corp - All Rights reserved.</p>
        </div>
        <div class="col-lg-12">
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Search">
          </form>
        </div>
        <div class="col-lg-12">
          <p>All trademarks, asdasdbaondasmdk a sd anskda asdljak jasdn asdklas adaskda jd</p>
        </div>
      </div>
    </div>
  </div>

</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 <!-- Vendor JS Files -->
 <script src="assets/vendor/purecounter/purecounter.js"></script>
 <script src="assets/vendor/aos/aos.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
 <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
 <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
 <script src="assets/vendor/php-email-form/validate.js"></script>

 <!-- Template Main JS File -->
 <script src="assets/js/main.js"></script>

</body>

</html>

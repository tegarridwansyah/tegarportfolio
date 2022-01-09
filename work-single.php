<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyPortfolio Bootstrap Template - Work Single</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyPortfolio - v4.7.0
  * Template URL: https://bootstrapmade.com/myportfolio-bootstrap-portfolio-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Navbar ======= -->
  <div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
    <div class="container py-2 py-md-5">
      <div class="row align-items-start">
        <div class="col-md-2">
          <ul class="custom-menu">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="index.php">Works</a></li>
            <li><a href="https://www.linkedin.com/in/tegar-ridwansyah/" target="blank_">LinkedIn</a></li>
            <li><a href="https://www.kaggle.com/tegarridwansyah" target="blank_">Kaggle</a></li>
          </ul>
        </div>
        <div class="col-md-10 d-none d-md-block  mr-auto">
          <h3>Summary Profile</h3>
          <p>I am currently studying Mathematics at Padjadjaran University. Have programming skills using programming languages 
            ​​such as C++, Python, Java, PHP. Have experience in making Web, Desktop, and Android-based application projects. 
            In addition, I have skills in graphic design and was responsible for the design of 3 social media in 2021. 
            While studying in Mathematics, I became interested in data, how data is processed to predict an event in the future, 
            and I am currently studying the required knowledge to become a Data Scientist. Thank you.<br> <a href="mailto:tegar.ridwan7@gmail.com">tegar.ridwan7@gmail.com</a></p>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Tegar's Portfolio</a>
      <a href="#" class="burger" data-bs-toggle="collapse" data-bs-target="#main-navbar">
        <span></span>
      </a>
    </div>
  </nav>

  <main id="main">
  <?php
    include( "Connection.php" );
    $id = $_GET['id'];

    $sql = "SELECT * FROM portfolio WHERE id = '$id'";
    $query = $dbConn->prepare($sql);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);
  ?>
    <section class="section">
      <div class="container">
        <div class="row mb-4 align-items-center">
          <div class="col-md-6" data-aos="fade-up">
            <h2><?php echo $row['tag'] ?></h2>
          </div>
        </div>
      </div>

      <div class="site-section pb-0">
        <div class="container">
          <div class="row align-items-stretch">
            <div class="col-md-8" data-aos="fade-up">
              <img src="<?php echo $row['img'] ?>" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-3 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="sticky-content">
                <h3 class="h3"><?php echo $row['judul'] ?></h3>
                <p class="mb-4"><span class="text-muted"><?php echo $row['jenis'] ?></span></p>

                <div class="mb-5">
                  <p><?php echo $row['deskripsi'] ?></p>

                </div>

                <h4 class="h4 mb-3">Tools : </h4>
                <p><?php echo $row['tools'] ?></p>
                <?php
                  if ($row['src'] != "#") {
                ?>
                <p><a href="<?php echo $row['src'] ?>" class="readmore" target='blank_'>Source</a></p>
                <?php
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p class="mb-1">&copy; Copyright Tegar Ridwansyah. All Rights Reserved</p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MyPortfolio
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-sm-6 social text-md-end">
          <a href="https://www.instagram.com/tegar_1802/" target="blank_"><span class="bi bi-instagram"></span></a>
          <a href="https://www.linkedin.com/in/tegar-ridwansyah/" target="blank_"><span class="bi bi-linkedin"></span></a>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
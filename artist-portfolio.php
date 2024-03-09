<!DOCTYPE html>
<html lang="en">

<?php
  $title = "Afro Arts Gallery | Blog Details"
?>

<?php include_once("./partials/head.php") ?>

<body>

  <!-- ======= Header ======= -->
  <?php include_once("./partials/header.php") ?><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <?php 
    $name = "Tosin Iwayemi";
    include_once ("./partials/member-breadcrumb.php") 
    
    ?>
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->

    <?php
    
    include_once ("./partials/member-portfolio.php") ?>
    <!-- End Blog Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include_once("./partials/footer.php") ?>
  
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
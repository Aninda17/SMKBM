<?php 

session_start();
if(!isset($_SESSION['login'])) {
  
;

 ?>


<!DOCTYPE html>
<html>
<head>
  <title>login</title>
      <!-- Favicons -->
  <link href="../img/logo.png" rel="icon">
  <link href="../img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../panel_admin/assets/img/favicon.png" rel="icon">
  <link href="../panel_admin/assets/img/apple-touch-icson.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../panel_admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../panel_admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../panel_admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../panel_admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../panel_admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../panel_admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../panel_admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../panel_admin/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="../" class=" d-flex align-items-center w-100">
                  <img src="../img/smk/logo.png" alt="">
                  <span class="d-none d-lg-block"></span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">SMK Budi Mulia Pakisaji</h5>
                    <p class="text-center small">Login Admin Website</p>
                  </div>

                   <?php   
                  @session_start();
                  if (isset ($_SESSION['info']))
                    {
                        ?>
 <div class="alert alert-danger alert-dismissible fade show" role="alert" style="font-size: 10px;">
                <i class="bi bi-exclamation-triangle me-1"></i>
                <?php   echo $_SESSION['info']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

                        <?php   
                    }unset($_SESSION['info']);
                 ?>

                  <form  class="row g-3 needs-validation" action="../sistem/validasi.php" method="post" novalidate>

                    <div class="col-12">

                      <label for="user" class="form-label">Username</label>
                      <div class="input-group has-validation"> 
                      <input type="text" name="user" class="form-control" id="user">                  
                      </div>
                    </div>


                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password">
                    </div>

                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                   
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Development & Design by <a href="https://bootstrapmade.com/"> SMKBM TEAM </a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../panel_admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../panel_admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../panel_admin/assets/vendor/chart.js/chart.min.js"></script>
  <script src="../panel_admin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="../panel_admin/assets/vendor/quill/quill.min.js"></script>
  <script src="../panel_admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../panel_admin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../panel_admin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../panel_admin/assets/js/main.js"></script>


</body>

</html>

</body>
</html>
<?php

 }else{
 header("Location: ../panel_admin");

}
 ?>


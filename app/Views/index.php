<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Bina Safety Indonesia</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('frontend/public/assets/img/favicons/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('frontend/public/assets/img/favicons/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('frontend/public/assets/img/favicons/favicon-16x16.png') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('frontend/public/assets/img/favicons/favicon.ico') ?>">
    <link rel="manifest" href="<?= base_url('frontend/public/assets/img/favicons/manifest.json') ?>">
    <meta name="msapplication-TileImage" content="frontend/public/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="<?= base_url('frontend/public/assets/css/theme.css') ?>" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><img src="<?= base_url('frontend/images/logo.png') ?>" height="45" alt="logo" />
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="<?= base_url() ?>">Beranda</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="<?= base_url() ?>#services">Menu</a></li>
        
            </ul>
          </div>
        </div>
      </nav>
      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url(<?= base_url('frontend/public/assets/img/gallery/hero-header-bg.png') ?>);background-position:top center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="<?= base_url('frontend/images/index.png') ?>" alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-8">
              <h1 class="fw-normal fs-6 fs-xxl-7">BSI</h1>
              <h1 class="fw-bolder fs-6 fs-xxl-7 mb-2">"PT. Bina Safety Indonesia"</h1>
              
          </div>
        </div>
      </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-7" id="services" container-xl="container-xl">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 text-center mb-1">
              <h4 class="text-danger">LISENSI</h4>
            </div>
          </div>

          <div class="row h-100 justify-content-center">
              <?php foreach($data_pekerjaan as $data): ?>
            <div class="col-md-3 pt-2 px-md-2 px-lg-2">
              <div class="card h-100 px-lg-5 card-span">
                <div class="card-body d-flex flex-column justify-content-around">
                  <div class="text-center pt-3"><img class="img-fluid" src="<?= base_url('frontend/public/assets/img/icons') . "/" . $data->link?>" alt="..." />
                    <h5 class="my-2"><?= $data->nama_pekerjaan ?></h5>
                  </div>
                  <div class="text-center my-3">
                    <div class="d-grid">
                      <a href="<?= base_url('cari-pekerja') . "/" . $data->id_pekerjaan ?>"><button class="btn btn-outline-danger" type="submit">Lihat Detail</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach ?>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->





     




      <!-- ============================================-->
      <!-- <section> begin ============================-->

<section class="py-0 bg-1000">

        <div class="container">
          <div class="row justify-content-md-between justify-content-evenly py-4">
            <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
              <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; Bina Safety Indonesia, 2021</p>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="<?= base_url('frontend/public/vendors/@popperjs/popper.min.js') ?>"></script>
    <script src="<?= base_url('frontend/public/vendors/bootstrap/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('frontend/public/vendors/is/is.min.js') ?>"></script>
    <script src="<?= base_url('frontend/public/https://polyfill.io/v3/polyfill.min.js?features=window.scroll') ?>"></script>
    <script src="<?= base_url('frontend/public/vendors/fontawesome/all.min.js') ?>"></script>
    <script src="<?= base_url('frontend/public/assets/js/theme.js') ?>"></script>

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  </body>

</html>
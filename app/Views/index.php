<?php 
	echo view('header.php');
?>
      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url(frontend/public/assets/img/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="frontend/images/index.png" alt="hero-header" /></div>
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
                  <div class="text-center pt-3"><img class="img-fluid" src="frontend/public/assets/img/icons/<?= $data->link ?>" alt="..." />
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

<?php 
	echo view('footer.php');
?>
<?php 
	echo view('header.php');
?>
<?php foreach ($data_pekerjaan as $data): ?>
<section class="py-9" id="services" container-xl="container-xl">

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-5 text-center mb-1">
            <h4 class="text-danger">Cari Personel <?= $data->nama_pekerjaan ?></h4>
          </div>
        </div>
        <div class="row h-100 justify-content-center">
          <div class="col-md-7 pt-2 px-md-2 px-lg-5">
            <div class="card h-100 px-lg-5 card-span">
              <div class="card-body d-flex flex-column justify-content-around">
                <div class="text-center pt-3">
                  <div class="row">
                    <form action="<?= base_url('search-pekerja') . "/" . $data->id_pekerjaan ?>" method="POST" class="form-check-label">
                      <div class="col-md-12">
                        <label for="nama">Nama</label>
                      </div>
                      <div class="col-md-12">
                        <input type="text" name="nama" id="nama" class="form-control" required>
                      </div>
                      <div class="col-md-12">
                        <label for="ttl">Tanggal Lahir</label>

                      </div>
                      <div class="col-md-12">
                        <input type="date" name="tgl_lahir" id="ttl" class="form-control" required>

                      </div>
                  </div>
                </div>
                <div class="text-center my-2">
                  <div class="d-grid">
                    <button class="btn btn-outline-danger" name="btnCari" type="submit">Cari</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
<?php  endforeach ?>

<?php 
	echo view('footer.php');
?>
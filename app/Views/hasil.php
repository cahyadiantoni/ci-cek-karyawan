<?php 
	echo view('header.php');
?>
<?php foreach ($data_pekerja as $data) : ?>
<section class="py-9" id="services" container-xl="container-xl">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-5 text-center mb-1">
               <img src="<?= base_url('frontend/images/logo.png') ?>" height="75" alt="logo" />
              <h4 class="text-danger">Data <?php foreach ($data_pekerjaan as $pekerjaan){ echo $pekerjaan->nama_pekerjaan; } ?> </h4>
            </div>
          </div>
          <div class="row h-100 justify-content-center">
            <div class="col-md-8 pt-2 px-md-2 px-lg-8">
              <div class="card h-100 px-lg-5 card-span">
                <div class="card-body d-flex flex-column justify-content-around">
                    <table>
                        <th width="170px">Nama </th>
                        <td><?= $data->nama ?></td>
                        <tr>
                          <th>Tanggal Lahir </th>
                          <td><?php echo $data->tgl_lahir ?></td>
                        </tr>
                        <tr>
                          <th>Pekerjaan </th>
                          <td><?php echo $data->operator ?></td>
                        </tr>
                        <tr>
                          <th>Nomor NPWP </th>
                          <td><?php echo $data->npwp ?></td>
                        </tr>
                        <tr>
                          <th align="left" valign="top">Nama Perusahaan </th>
                          <td><?php echo $data->nama_pt ?></td>
                        </tr>
                        <tr>
                          <th align="left" valign="top">Alamat Perusahaan </th>
                          <td><?php echo $data->alamat_pt ?></td>
                        </tr>
                    </table>
                    <!-- </div> -->
                  <!-- <div class="text-center my-5"> -->
                   <div class="d-grid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
<?php endforeach ?>

<?php 
	echo view('footer.php');
?>
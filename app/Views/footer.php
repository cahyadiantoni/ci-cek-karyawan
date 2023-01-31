<script type='text/javascript'> 
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<section class="py-0 bg-1000" style="position:fixed;bottom:0;width:100%">

      <div class="container">
        <div class="row justify-content-md-between justify-content-evenly py-4">
          <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
            <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; Bina Safety, 2023</p>
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

  <!-- jQuery 2.2.3 -->
  <script src="<?= base_url('plugins/jQuery/jquery-2.2.3.min.js')?>"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?= base_url('bootstrap/js/bootstrap.min.js')?>"></script>

  <script src="<?= base_url('plugins/select2/select2.full.min.js')?>"></script>
  <!-- DataTables -->
  <script src="<?= base_url('plugins/datatables/jquery.dataTables.min.js')?>"></script>
  <script src="<?= base_url('plugins/datatables/dataTables.bootstrap.min.js')?>"></script>

  <!-- AdminLTE App -->
  <script src="<?= base_url('dist/js/app.min.js')?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('dist/js/demo.js')?>"></script>
  <!-- page script -->


  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>

  <script>
    $(function() {
      //Initialize Select2 Elements
      $(".select2").select2();
    });
  </script>
</body>


</html>
<?= view('head') ?>

<?= view('nav') ?>

<?= view('header') ?>

    <!-- ########## END: RIGHT PANEL ########## --->
<script src="<?= base_url('js/jquery.min.js') ?>" type="text/javascript"></script>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Bracket</a>
          <a class="breadcrumb-item" href="#">Forms</a>
          <span class="breadcrumb-item active">Text Editor</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
        <div>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">KRS Online</h6>
          <p class="br-section-text">Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $data2['nama']; ?><br>NIM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $data2['nim']; ?><br>Tahun Ajar &nbsp;: <?= $data3['tahun_akademik']; ?></p>

          <form>
          <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
              <div class="col-lg-12">
              <button type="button" class="btn btn-info" id="btn-tambah-form">Tambah Form</button>
              <br><br>
                <div class="form-group">
                  <label class="form-control-label"><b>Matakuliah ke 1:</b> <span class="tx-danger">*</span></label>

                  <select class="form-control select2-show-search" required name="mk[]" >
                    <option label="Pilih Matakuliah"></option>
                           <?php foreach($cities as $city){?>
                              <option value="<?php echo $city->id_matakuliah;?>"><span style="text-transform:uppercase"><?php echo $city->matakuliah;?> - <?php echo $city->kode;?></span></option>"
                           <?php }?>
                  </select>
                  <input value="<?= $data2['nim']; ?>" name="nim" hidden>
                  <input value="<?= $data3['id_priode']; ?>" name="priode" hidden>
                  <!-- Kita buat textbox untuk menampung jumlah data form -->
                  <input hidden id="jumlah-form" value="1">
  
                </div>
                     <div id="insert-form"></div>
              </div><!-- col-4 -->
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info">Simpan</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>
        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
      </div><!-- br-pagebody -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="<?= base_url('temp/lib/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('temp/lib/jquery-ui/ui/widgets/datepicker.js') ?>"></script>
    <script src="<?= base_url('temp/lib/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('temp/lib/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('temp/lib/moment/min/moment.min.js') ?>"></script>
    <script src="<?= base_url('temp/lib/peity/jquery.peity.min.js') ?>"></script>
    <script src="<?= base_url('temp/lib/highlightjs/highlight.pack.min.js') ?>"></script>
    <script src="<?= base_url('temp/lib/echarts/echarts.min.js') ?>"></script>
    <script src="<?= base_url('temp/lib/raphael/raphael.min.js') ?>"></script>
    <script src="<?= base_url('temp/lib/morris.js/morris.min.js') ?>"></script>
    <script src="<?= base_url('temp/lib/jquery.flot/jquery.flot.js') ?>"></script>
    <script src="<?= base_url('temp/lib/jquery.flot/jquery.flot.pie.js') ?>"></script>
    <script src="<?= base_url('temp/lib/jquery.flot/jquery.flot.resize.js') ?>"></script>
    <script src="<?= base_url('temp/lib/flot-spline/js/jquery.flot.spline.js') ?>"></script>

    <script src="<?= base_url('temp/js/bracket.js') ?>"></script>
    <script src="<?= base_url('temp/js/ResizeSensor.js') ?>"></script>
    <script src="<?= base_url('temp/js/chart.echarts.js') ?>"></script>
    <script src="<?= base_url('temp/js/chart.morris.js') ?>"></script>
    <script src="<?= base_url('temp/lib/select2/js/select2.min.js') ?>"></script>
    <script src="<?= base_url('temp/lib/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('temp/lib/datatables.net-dt/js/dataTables.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('temp/lib/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?= base_url('temp/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('temp/lib/rickshaw/vendor/d3.min.js') ?>"></script>
    <script src="<?= base_url('temp/lib/rickshaw/vendor/d3.layout.min.js') ?>"></script>
    <script src="<?= base_url('temp/lib/rickshaw/rickshaw.min.js') ?>"></script>
  <script>
  $(document).ready(function(){ // Ketika halaman sudah diload dan siap
    $("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik
      var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
      var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
      
      // Kita akan menambahkan form dengan menggunakan append
      // pada sebuah tag div yg kita beri id insert-form

      $("#insert-form").append("<b>Matakuliah ke " + nextform + " :</b>" +
        "<div class='form-group'>" +
        "<label class='form-control-label'>Mata Kuliah: <span class='tx-danger'>*</span></label>" +
        "<select class='form-control select2-show-search' required name='mk' >" +
        "<option label='Pilih Matakuliah'></option>" +
        "<?php foreach($cities as $city){?>" +
        "<option value='<?php echo $city->id_matakuliah;?>'><span style='text-transform:uppercase'><?php echo $city->matakuliah;?></span></option>" +
        "<?php }?>" +
        "</select>" +
        "</div>");
      
      $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
    });
    
    // Buat fungsi untuk mereset form ke semula
    $("#btn-reset-form").click(function(){
      $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
      $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
    });
  });
  </script>

    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: false,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>


  </body>
</html>

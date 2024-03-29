<?= view('head') ?>

<?= view('nav') ?>

<?= view('header') ?>

    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <div>
          
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Tambahkan Nilai</h6><hr>
          <div class="table-wrapper">
          <form method="post" action="<?= base_url('Nilai/simpan');?>">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-5p">No</th>
                  <th class="wd-5p">NIM</th>
                  <th class="wd-5p">Nama</th>
                  <th class="wd-5p">Absen</th>
                  <th class="wd-5p">UTS</th>
                  <th class="wd-5p">UAS</th>
                  <th class="wd-5p">Nilai</th>
                  <th class="wd-5p">Hasil</th>
                </tr>
              </thead>
              
              <tbody><?php $no=1; foreach ($data as $b) { ?>
                <tr>
                  <td><?= $no;?></td>
                  <td><?= $b['nim'];?></td>
                  <td><?= $b['nama'];?></td>
                  <td><input class="form-control" type="text" value="<?= $b['absen'];?>" name="" placeholder="Absen"></td>
                  <td><input class="form-control" type="text" value="<?= $b['uts'];?>" name="" placeholder="UTS"></td>
                  <td><input class="form-control" type="text" value="<?= $b['uas'];?>" name="" placeholder="UAS"></td>
                  <td><?= $b['hasil'];?></td>
                  <td><?php if (round($b['hasil']) >= 85) {
                echo "A";
              }elseif (round($b['hasil']) >= 80 && round($b['hasil']) < 85) {
                echo "A-";
              } elseif (round($b['hasil']) >= 75 && round($b['hasil']) < 80) {
                echo "B+";
              } elseif (round($b['hasil']) >= 70 && round($b['hasil']) < 75) {
                echo "B";
              } elseif (round($b['hasil']) >= 65 && round($b['hasil']) < 70) {
                echo "B-";
              } elseif (round($b['hasil']) >= 60 && round($b['hasil']) < 65) {
                echo "C+";
              } elseif (round($b['hasil']) >= 55 && round($b['hasil']) < 60) {
                echo "C";
              } elseif (round($b['hasil']) >= 50 && round($b['hasil']) < 55) {
                echo "C-";
              } elseif (round($b['hasil']) >= 40 && round($b['hasil']) < 50) {
                echo "D";
              } elseif (round($b['hasil']) < 40) {
                echo "E";
              } ?></td>
                    </td>
                </tr><?php $no++; } ?>
              </tbody>
            </table>
            <div class="form-layout-footer">
              <button class="btn btn-info">Simpan</button>
              <input class="btn btn-secondary" type="button" value="Go Back" onclick="history.back(-1)" />
            </div><!-- form-layout-footer -->

          </form>
          </div><!-- table-wrapper -->          


      </div><!-- br-pagebody -->

      <?= view('footer') ?>
    </div><!-- br-mainpanel -->
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

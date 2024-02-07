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
          <h6 class="br-section-label">Data Transkip Nilai</h6><hr>
          <a href="/khs/print_t/<?= $data2['nim']; ?>"><button class="btn btn-warning">Cetak Transkip </button></a>||                  
          <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      KHS
                    </button>
            <div class="dropdown-menu">
                      <?php foreach ($datapriode as $news) {    ?>
                      <a class="dropdown-item" href="<?= base_url('Khs/view/'.$data2['nim'].'/'.$news['id_priode'].'') ?>"><?= $news['tahun_akademik'];?> - <?= $news['smt'];?></a>
                    <?php  } ?> 
            </div>
          </div>
<hr>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-5p">No</th>
                  <th class="wd-20p">Kode</th>
                  <th class="wd-5p">Matakuliah</th>
                  <th class="wd-5p">SKS</th>
                  <th class="wd-5p">Semester</th>
                  <th class="wd-5p">Nilai</th>
                </tr>
              </thead>
              
              <tbody><?php $no=1; foreach ($data as $b) { ?>
                <tr>
                  <td><?= $no;?></td>
                  <td><?= $b['kode'];?></td>
                  <td><?= $b['matakuliah'];?></td>
                  <td><?= $b['sks'];?></td>
                  <td><?= $b['semester'];?></td>
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
                </tr><?php $no++; } ?>
              </tbody>
            </table>

          </div><!-- table-wrapper -->          


      </div><!-- br-pagebody -->
          <!-- SMALL MODAL -->
          <div id="modaldemo2" class="modal fade">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
              <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Notice</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
                  <p class="mg-b-5">Apakah yakin data ingin dihapus?</p>
                </div>
                <div class="modal-footer justify-content-center">
                  <a href="<?= base_url('variabel/hapus/'.$b['id_matakuliah'].'') ?>"><button type="button" class="btn btn-danger tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Hapus</button></a>
                  <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->

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

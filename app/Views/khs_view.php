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
          <h6 class="br-section-label">Data KHS</h6><hr>
          <a href="/khs/print/<?= $data2['nim']; ?>/<?= $data2['id_priode']; ?>"><button class="btn btn-warning">Cetak KHS </button></a><hr>
        <?php  foreach ($data as $d) { 
             if (round($d['hasil']) >= 85) {
                $hasill ="A";
              }elseif (round($d['hasil']) >= 80 && round($d['hasil']) < 85) {
                $hasill ="A-";
              } elseif (round($d['hasil']) >= 75 && round($d['hasil']) < 80) {
                $hasill ="B+";
              } elseif (round($d['hasil']) >= 70 && round($d['hasil']) < 75) {
                $hasill ="B";
              } elseif (round($d['hasil']) >= 65 && round($d['hasil']) < 70) {
                $hasill ="B-";
              } elseif (round($d['hasil']) >= 60 && round($d['hasil']) < 65) {
                $hasill ="C+";
              } elseif (round($d['hasil']) >= 55 && round($d['hasil']) < 60) {
                $hasill ="C";
              } elseif (round($d['hasil']) >= 50 && round($d['hasil']) < 55) {
                $hasill ="C-";
              } elseif (round($d['hasil']) >= 40 && round($d['hasil']) < 50) {
                $hasill ="D";
              } elseif (round($d['hasil']) < 40) {
                $hasill ="E";
              } 
                    if ($hasill =='A') {
                    $total= "4.00";
                } elseif ($hasill =='A-') {
                    $total= "3.70";
                }elseif ($hasill =='B+') {
                    $total= "3.30";
                }elseif ($hasill =='B') {
                    $total= "3.00";
                }elseif ($hasill =='B-') {
                    $total= "2.70";
                }elseif ($hasill =='C+') {
                    $total= "2.30";
                }elseif ($hasill =='C') {
                    $total= "2.00";
                }elseif ($hasill =='C-') {
                    $total= "1.70";
                }elseif ($hasill =='D') {
                    $total= "1.00";
                }else{
                    $total= "0";
                }
                          $satu = $d['sks']; 
                          $gol = $satu*$total;
                          
            $jumlah[] =$d['sks'];
            $jumlah_nilai[] =$gol;
         } 
        ?>
        
              <div class="row">
                <div class="col-sm-4">
                  <h6 class="card-title tx-uppercase tx-16">Indeks Prestasi Kumulatif (IPK)</h6>
                  <center><p class="display-4 tx-medium tx-inverse mg-b-5 tx-lato"><?php  echo round(array_sum($jumlah_nilai)/array_sum($jumlah),2,PHP_ROUND_HALF_DOWN);?></p></center><br>
                </div><!-- col-6 -->
                <div class="col-sm-4">
                  <h6 class="card-title tx-uppercase tx-16">Jumlah SKS Sudah Ditempuh</h6>
                  <center><p class="display-4 tx-medium tx-inverse mg-b-5 tx-lato"><?php  echo round(array_sum($jumlah),2,PHP_ROUND_HALF_DOWN);?> SKS</p></center><br>
                </div><!-- col-6 -->
                <div class="col-sm-4 mg-t-20 mg-sm-t-0 d-flex align-items-center justify-content-center">
                </div><!-- col-6 -->
              </div><!-- row -->

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
              } elseif (round($b['hasil']) < 40 && round($b['hasil']) > 0) {
                echo "E";
              } elseif (!$b['hasil']){
                echo "-";
              } ?></td>
                </tr><?php $no++; } ?>
              </tbody>
            </table>

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

        <?php  foreach ($data2 as $d) { 
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
<head>
  <title><?php echo $result['nama']?></title>
</head>

<table width="100%">
<tr>

</tr>
<tr>    <td width="1%" align="right"><img src="<?= base_url('logo_its.jpg') ?>" width="60"></td>

<td  align="center"><h4 style='font-family:"Times New Roman"'>PERKUMPULAN NAHDLATUL ULAMA <br>INSTITUT TEKNOLOGI DAN SAINS NAHDLATUL ULAMA KALIMANTAN <br> (Kepmendikbudristek RI No. 71/E/O/2022) <br><font size="2" style='font-family:"Times New Roman"'>Jl. RTA Milono km.3,5, Kel. Langkai, Kec. Pahandut, Palangka Raya, 73111, e-mail: itsnukalimantan@gmail.com</font></h4>
</td>
</tr>
</table>
<hr size="2" width="100%" align="center" color="black">
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;line-height:10.0pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;line-height:10.55pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-right:3.0pt;text-align:center;'><strong><span style='font-size:16px;font-family:"Times New Roman",sans-serif;'>KARTU HASIL STUDI (KHS) MAHASISWA</span></strong></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;line-height:18.35pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<table style="border: none;border-collapse:collapse;">
    <tbody>
        <tr>
            <td style="width: 38pt;padding: 0cm;height: 12.65pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:3.0pt;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>Nama</span></p>
            </td>
            <td style="width: 16pt;padding: 0cm;height: 12.65pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:14px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td colspan="2" style="width: 211pt;padding: 0cm;height: 12.65pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:37.0pt;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>: <?php echo $result['nama']?></span></p>
            </td>
            <td style="width: 100pt;padding: 0cm;height: 12.65pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:22.0pt;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>Fakultas</span></p>
            </td>
            <td colspan="5" style="width: 174pt;padding: 0cm;height: 12.65pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:10.0pt;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>: TEKNIK</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 38pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:3.0pt;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>N.I.M</span></p>
            </td>
            <td style="width: 16pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td colspan="2" style="width: 211pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:37.0pt;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>: <?php echo $result['nim']?></span></p>
            </td>
            <td style="width: 100pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:22.0pt;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>Jurusan/Prodi</span></p>
            </td>
            <td colspan="5" style="width: 135pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:10.0pt;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>: <?php echo $result['nama_jurusan']?> - S1</span></p>
            </td>
            <td style="width: 40pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="width: 54pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:3.0pt;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>Semester</span></p>
            </td>
            <td style="width: 211pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:37.0pt;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>: Ganjil</span></p>
            </td>
            <td style="width: 151pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 100pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:22.0pt;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>Total SKS</span></p>
            </td>
            <td colspan="2" style="width: 84pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:10.0pt;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>: <?php  echo array_sum($jumlah);?> SKS</span></p>
            </td>
            <td style="width: 5pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 46pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 40pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="width: 265pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:3.0pt;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>Tahun Akademik : 2023/2024</span></p>
            </td>
            <td style="width: 100pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:22.0pt;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>IP</span></p>
            </td>
            <td style="width: 46pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:10.0pt;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>: <?php  echo round(array_sum($jumlah_nilai)/array_sum($jumlah),2,PHP_ROUND_HALF_DOWN);?></span></p>
            </td>
            <td style="width: 38pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 5pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 46pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 40pt;padding: 0cm;height: 19.85pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 38pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm;height: 18.25pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 16pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm;height: 18.25pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 60pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm;height: 18.25pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td colspan="2" style="width: 251pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm;height: 18.25pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 46pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm;height: 18.25pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 38pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm;height: 18.25pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 5pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm;height: 18.25pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 46pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm;height: 18.25pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td colspan="4"  style="width: 40pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm;height: 18.25pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 38pt;background: rgb(229, 229, 229);padding: 0cm;height: 19.1pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:7.0pt;'><strong><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>No</span></strong></p>
            </td>
            <td style="width: 16pt;background: rgb(229, 229, 229);padding: 0cm;height: 19.1pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 60pt;background: rgb(229, 229, 229);padding: 0cm;height: 19.1pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-right:20.5pt;text-align:center;'><strong><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>Kode</span></strong></p>
            </td>
            <td colspan="2" style="width: 251pt;background: rgb(229, 229, 229);padding: 0cm;height: 19.1pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:87.0pt;'><strong><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>Nama Mata Kuliah</span></strong></p>
            </td>
            <td style="width: 46pt;background: rgb(229, 229, 229);padding: 0cm;height: 19.1pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:21.0pt;'><strong><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>SKS</span></strong></p>
            </td>
            <td style="width: 38pt;background: rgb(229, 229, 229);padding: 0cm;height: 19.1pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:7.0pt;'><strong><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>Nilai</span></strong></p>
            </td>
            <td style="width: 5pt;background: rgb(229, 229, 229);padding: 0cm;height: 19.1pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td  style="width: 46pt;background: rgb(229, 229, 229);padding: 0cm;height: 19.1pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>Bobot</span></strong></p>
            </td>
            <td colspan="4"  style="width: 40pt;background: rgb(229, 229, 229);padding: 0cm;height: 19.1pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;text-align:center;'><strong><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>Nilai SKS</span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 38pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 8.25pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:9px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td colspan="2" style="width: 76pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 8.25pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:9px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td colspan="2" style="width: 251pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 8.25pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:9px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 46pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 8.25pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:9px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 38pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 8.25pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:9px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 5pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 8.25pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:9px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 46pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 8.25pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:9px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td colspan="4"  style="width: 40pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 8.25pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:9px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <?php  foreach ($data2 as $d) {
             $no=1;
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
                          
            $jumlah2[] =$d['sks'];
            $jumlah_nilai2[] =$gol;

        ?>
        <tr>
            <td style="width: 38pt;padding: 0cm;height: 14.75pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-right:3.5pt;text-align:center;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'><?php echo $no; ?></span></p>
            </td>
            <td colspan="2" style="width: 76pt;padding: 0cm;height: 14.75pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-right:4.5pt;text-align:center;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'><?php echo $d['kode']; ?></span></p>
            </td>
            <td colspan="2" style="width: 251pt;padding: 0cm;height: 14.75pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:3.0pt;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif; text-transform:uppercase'>
                    <?php echo $d['matakuliah']; ?></span></p>
            </td>
            <td style="width: 46pt;padding: 0cm;height: 14.75pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:12.5pt;text-align:center;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'><?php echo $d['sks']; ?></span></p>
            </td>
            <td style="width: 38pt;padding: 0cm;height: 14.75pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if (round($d['hasil']) >= 85) {
                echo "A";
              }elseif (round($d['hasil']) >= 80 && round($d['hasil']) < 85) {
                echo "A-";
              } elseif (round($d['hasil']) >= 75 && round($d['hasil']) < 80) {
                echo "B+";
              } elseif (round($d['hasil']) >= 70 && round($d['hasil']) < 75) {
                echo "B";
              } elseif (round($d['hasil']) >= 65 && round($d['hasil']) < 70) {
                echo "B-";
              } elseif (round($d['hasil']) >= 60 && round($d['hasil']) < 65) {
                echo "C+";
              } elseif (round($d['hasil']) >= 55 && round($d['hasil']) < 60) {
                echo "C";
              } elseif (round($d['hasil']) >= 50 && round($d['hasil']) < 55) {
                echo "C-";
              } elseif (round($d['hasil']) >= 40 && round($d['hasil']) < 50) {
                echo "D";
              } elseif (round($d['hasil']) < 40) {
                echo "E";
              }  ?></span></p>
            </td>
            <td colspan="2" style="width: 51pt;padding: 0cm;height: 14.75pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;text-align:center;'><span style='font-size:15px;font-family:  "Times New Roman",sans-serif;'><?php 
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
                    echo "4.00";
                } elseif ($hasill =='A-') {
                    echo "3.70";
                }elseif ($hasill =='B+') {
                    echo "3.30";
                }elseif ($hasill =='B') {
                    echo "3.00";
                }elseif ($hasill =='B-') {
                    echo "2.70";
                }elseif ($hasill =='C+') {
                    echo "2.30";
                }elseif ($hasill =='C') {
                    echo "2.00";
                }elseif ($hasill =='C-') {
                    echo "1.70";
                }elseif ($hasill =='D') {
                    echo "1.00";
                }else{
                    echo "0";
                }
                 ?></span></p>
            </td>
            <td colspan="2"  style="width: 40pt;padding: 0cm;height: 14.75pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;text-align:center;'><span style='font-size:15px;font-family:  "Times New Roman",sans-serif;'>
                    <?php 
              
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
                          echo $satu*$total; 
                    ?>
                        
                    </span></p>
            </td>
        </tr>
        <?php $no++; } ?>

        <tr>
            <td style="width: 38pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm;height: 4.1pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:5px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 16pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm;height: 4.1pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:5px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 60pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm;height: 4.1pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:5px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 151pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm;height: 4.1pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:5px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 100pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm;height: 4.1pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:5px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 46pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm;height: 4.1pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:5px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 38pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm;height: 4.1pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:5px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 5pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm;height: 4.1pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:5px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 46pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm;height: 4.1pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:5px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td colspan="4" style="width: 40pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;padding: 0cm;height: 4.1pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:5px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 38pt;background: rgb(229, 229, 229);padding: 0cm;height: 16.2pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 16pt;background: rgb(229, 229, 229);padding: 0cm;height: 16.2pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 60pt;background: rgb(229, 229, 229);padding: 0cm;height: 16.2pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 151pt;background: rgb(229, 229, 229);padding: 0cm;height: 16.2pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:48.0pt;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>JUMLAH</span></p>
            </td>
            <td style="width: 100pt;background: rgb(229, 229, 229);padding: 0cm;height: 16.2pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 46pt;background: rgb(229, 229, 229);padding: 0cm;height: 16.2pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:12.5pt;text-align:center;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'><?php  echo array_sum($jumlah2);?></span></p>
            </td>
            <td style="width: 38pt;background: rgb(229, 229, 229);padding: 0cm;height: 16.2pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 5pt;background: rgb(229, 229, 229);padding: 0cm;height: 16.2pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 46pt;background: rgb(229, 229, 229);padding: 0cm;height: 16.2pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td colspan="4" style="width: 40pt;background: rgb(229, 229, 229);padding: 0cm;height: 16.2pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;text-align:center;'><span style='font-size:15px;font-family:  "Times New Roman",sans-serif;'><?php  echo array_sum($jumlah_nilai2);?></span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 38pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 5.5pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:6px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 16pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 5.5pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:6px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 60pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 5.5pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:6px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 151pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 5.5pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:6px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 100pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 5.5pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:6px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 46pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 5.5pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:6px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 38pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 5.5pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:6px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td colspan="2" style="width: 51pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 5.5pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:6px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td colspan="4" style="width: 40pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 5.5pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:6px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 38pt;background: rgb(229, 229, 229);padding: 0cm;height: 16.2pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 16pt;background: rgb(229, 229, 229);padding: 0cm;height: 16.2pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 60pt;background: rgb(229, 229, 229);padding: 0cm;height: 16.2pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 151pt;background: rgb(229, 229, 229);padding: 0cm;height: 16.2pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:30.0pt;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'>Indeks Prestasi (IP)</span></p>
            </td>
            <td style="width: 100pt;background: rgb(229, 229, 229);padding: 0cm;height: 16.2pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 46pt;background: rgb(229, 229, 229);padding: 0cm;height: 16.2pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 38pt;background: rgb(229, 229, 229);padding: 0cm;height: 16.2pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td colspan="2" style="width: 51pt;background: rgb(229, 229, 229);padding: 0cm;height: 16.2pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-right:22.5pt;text-align:right;'><span style='font-size:15px;font-family:"Times New Roman",sans-serif;'><?php  echo round(array_sum($jumlah_nilai)/array_sum($jumlah),2,PHP_ROUND_HALF_DOWN);?></span></p>
            </td>
            <td colspan="4" style="width: 40pt;background: rgb(229, 229, 229);padding: 0cm;height: 16.2pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 38pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 5.5pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:6px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 16pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 5.5pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:6px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 60pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 5.5pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:6px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 151pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 5.5pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:6px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 100pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 5.5pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:6px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 46pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 5.5pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:6px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 38pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 5.5pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:6px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 5pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 5.5pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:6px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td style="width: 46pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 5.5pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:6px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
            <td colspan="4" style="width: 40pt;border-top: none;border-right: none;border-left: none;border-image: initial;border-bottom: 1pt solid windowtext;background: rgb(229, 229, 229);padding: 0cm;height: 5.5pt;vertical-align: bottom;">
                <p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;'><span style='font-size:6px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
            </td>
        </tr>
    </tbody>
</table>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;line-height:10.0pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;line-height:10.5pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:380.0pt;'><span style='font-family:"Times New Roman",sans-serif;'>Palangka Raya, <?php setlocale(LC_TIME, 'id_ID.utf8'); date_default_timezone_set('Asia/Jakarta');  echo date('d F Y');; ?></span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;line-height:2.65pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;line-height:2.65pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:380.0pt;'><span style='font-family:"Times New Roman",sans-serif;'>Ketua Program Studi,</span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;line-height:10.0pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;line-height:10.0pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;line-height:10.0pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;line-height:10.0pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;line-height:10.85pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:380.0pt;'><span style='font-family:"Times New Roman",sans-serif;'><?php echo $result['nama_dosen']?></span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;line-height:2.65pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:380.0pt;'><span style='font-family:"Times New Roman",sans-serif;'>NIDN.<?php echo $result['nip']?></span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;line-height:5.15pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:3.0pt;'><strong><span style='font-size:11px;font-family:"Times New Roman",sans-serif;'>Catatan :</span></strong></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;line-height:.85pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:3.0pt;'><span style='font-size:11px;font-family:"Times New Roman",sans-serif;'>Jumlah maksimum SKS yang dapat diambil pada semester berikutnya berdasarkan indeks prestasi (IP)</span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;line-height:5.05pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p><span style='font-size:11px;font-family:"Times New Roman",sans-serif;'><br>&nbsp;</span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;line-height:5.75pt;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:"Times New Roman",sans-serif;margin-left:128.0pt;'><em><span style='font-size:10px;font-family:"Courier New";'>KHS ini resmi setelah mendapatkan tanda-tangan dari Ketua Program Studi</span></em></p>
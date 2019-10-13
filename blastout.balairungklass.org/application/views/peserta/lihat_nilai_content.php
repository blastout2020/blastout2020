<ul>
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-md-10">
          <?php

            if($dataPeserta){

          ?>
        <h3> DATA PRIBADI </h3>
        <table class="table table-bordered table-stripped table-hover table-condensed " border="1">
        <tr>
          <td width="400px" valign="middle" class="judul">Nomor Peserta</td>
          <td id="row_no_pes"><?php echo $dataPeserta->no_pes; ?></td>
        </tr>
        <tr>
          <td class="judul">Nama Peserta</td>
          <td id="row_nama"><?php echo $dataPeserta->nama; ?></td>
        </tr>
        <tr>
          <td class="judul">Jumlah Total</td>
          <td id="row_nama"><?php echo $dataPeserta->jtotal; ?></td>
        </tr>
        <tr>
          <td class="judul">Nilai Nasional</td>
          <td id="row_nama"><?php echo $dataPeserta->n_nasional; ?></td>
        </tr>
        <tr>
          <td class="judul">Ranking Klaten</td>
          <td id="row_nama"><?php echo $dataPeserta->rank_w; ?></td>
        </tr>
        <tr>
          <td class="judul">Ranking Nasional</td>
          <td id="row_nama"><?php echo $dataPeserta->rank_nas; ?></td>
        </tr>
        </table>  

        <h3> SESI 1 </h3>
        <table class="table table-bordered table-stripped table-hover table-condensed " border="1">
        <tr>
          <td width="400px" valign="middle" class="judul">Nilai TPA</td>
          <td id="row_nilai_tpa"><?php echo $dataPeserta->tpa; ?></td>
        </tr>
        <tr>
          <td class="judul">Nilai Matematika Dasar</td>
          <td id="row_nilai_mat_das"><?php echo $dataPeserta->md; ?></td>
        </tr>
        <tr>
          <td class="judul">Nilai Bahasa Indonesia</td>
          <td id="row_nilai_bahasa_ind"><?php echo $dataPeserta->ind; ?></td>
        </tr>
        <tr>
          <td class="judul">Nilai Bahasa Ingggris</td>
          <td id="row_nilai_bahasa_ing"><?php echo $dataPeserta->eng; ?></td>
        </tr>
        <tr>
          <td class="judul">Jumlah TKPA</td>
          <td id="row_jum_tkpa"><?php echo $dataPeserta->jum_tkpa; ?></td>
        </tr>


        </table>  
        <h3> SESI 2 </h3>
        <table class="table table-bordered table-stripped table-hover table-condensed " border="1">
        <tr>
          <td width="400px" valign="middle" class="judul"><?php if (substr($dataPeserta->no_pes, 0,3) == "714") {
            echo "Nilai Matematika";
          }else echo "Nilai Sejarah"; ?> </td>
          <td id="row_nilai_mat"><?php echo $dataPeserta->mat_sej; ?></td>
        </tr>
        <tr>
          <td class="judul"><?php if (substr($dataPeserta->no_pes, 0,3) == "714") {
            echo "Nilai Fisika";
          }else echo "Nilai Sosiologi"; ?></td>
          <td id="row_nilai_fisika"><?php echo $dataPeserta->fis_sos; ?></td>
        </tr>
        <tr>
          <td class="judul"><?php if (substr($dataPeserta->no_pes, 0,3) == "714") {
            echo "Nilai Kimia";
          }else echo "Nilai Geografi"; ?> </td>
          <td id="row_nilai_kimia"><?php echo $dataPeserta->kim_geo; ?></td>
        </tr>
        <tr>
          <td class="judul"><?php if (substr($dataPeserta->no_pes, 0,3) == "714") {
            echo "Nilai Biologi";
          }else echo "Nilai Ekonomi"; ?></td>
          <td id="row_nilai_biologi"><?php echo $dataPeserta->bio_eko; ?></td>
        </tr>
        <tr>
          <td class="judul"><?php if (substr($dataPeserta->no_pes, 0,3) == "714") {
            echo "Jumlah SAINTEK";
          }else echo "Jumlah SOSHUM"; ?></td>
          <td id="row_jum_saintek"><?php echo $dataPeserta->jum_sain_sos; ?></td>
        </tr>
        </table>  
       

      <?php
          }else{
            ?>

            <h1> DATA NILAI HASIL UJIAN TIDAK ADA</h1>
            <h1> SILAHKAN MENGECEKNYA DI <a href="http://ugm.id/HasilTryOut">SINI</a></h1>


            <?php
          }
      ?>
      </div>
    </div>
  </ul>

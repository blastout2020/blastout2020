<!DOCTYPE html>
<html >
  <head>
    <title>Kartu Peserta Blastout 2017</title>
    <link href="<?php echo base_url() ?>assets/cetak/kartu.css" rel="stylesheet">
    </head>
    <body>
      <div class="container">
        <img src="<?php echo base_url() ?>assets/cetak/tes.png" alt="gambar" class="bg" />
          <!-- tambahan content -->
          <div class=" datadiri">
            <table >
              <tr>
                <td>No Peserta</td>
                <td>:</td>
                <td>
                  <?php echo $isi->no_peserta ?>
                </td>
              </tr>
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                  <?php echo $isi->nama?>
                </td>
              </tr>
              <tr>
                <td>Nama LJU</td>
                <td>:</td>
                <td>
                  <?php echo substr($isi->nama,0,18) ?>
                </td>
              </tr>
              <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td>
                  <?php echo $isi->sekolah?>
                </td>
              </tr>
              <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                  <?php echo $isi->jurusan?>
                </td>
              </tr>
              <tr>
                <td>No Kursi</td>
                <td>:</td>
                <td>
                  <?php echo $isi->no_meja?>
                </td>
              </tr>
              <tr>
                <td>Ruang</td>
                <td>:</td>
                <td>
                  <?php echo $isi->ruang?>
                </td>
              </tr>
               <tr>
                  <td>Sekolah</td>
                  <td>:</td>
                  <td>
                    <?php echo $isi->lokasi_tes?>
                  </td>
                </tr>
            </table>
            <img class="qrcode_image" src="<?php echo base_url()?>assets/cetak/qrcode/BO00015.png">
          </div>
          <div class="progstud">
            <p>Pilihan Program Studi :</p>
              <table>
                <tr>
                  <td>1. </td>
                  <td><?php echo $isi->kode_pil1." - ".$isi->nama_pil1; ?></td>
                </tr>
                <tr>
                  <td>2. </td>
                  <td><?php 
                        if (isset($isi->kode_pil2)) {
                          echo $isi->kode_pil2." - ".$isi->nama_pil2;       
                        }else echo "-";
                  ?></td>
                </tr>
                <tr>
                  <td>3. </td>
                  <td><?php 
                  if (isset($isi->kode_pil3)) {
                          echo $isi->kode_pil3." - ".$isi->nama_pil3;         
                        }else echo "-";
                  ?></td>
                </tr>
              </table>
          </div>
      </div>
      </body>
    </html>
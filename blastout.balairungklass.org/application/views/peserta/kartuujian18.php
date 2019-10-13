<!DOCTYPE html>
<html >
  <head>
    <title>Kartu Peserta Blastout 2019</title>
    <link href="<?php echo base_url() ?>assets/cetak/kartu.css" rel="stylesheet">
    </head>
    <body>
      <div class="container">
        <img src="<?php echo base_url() ?>assets/cetak/kartupeserta.png" alt="gambar" class="bg" />
          <!-- tambahan content -->
          <div class=" datadiri">
            <table >
              <tr>
                <td>
                  <?php echo $isi->no_peserta ?>
                </td>
              </tr>
              <tr>
                <td style="padding-top: 4px;">
                  <?php echo $isi->nama?>
                </td>
              </tr>
              <tr>
                <td style="padding-top: 3px;">
                  <?php echo strtoupper(substr($isi->nama,0,18))  ?>
                </td>
              </tr>
              <tr>
                <td style="padding-top: 3px;">
                  <?php echo $isi->sekolah?>
                </td>
              </tr>
              <tr>
                <td style="padding-top: 4px;">
                  <?php echo $isi->jurusan?>
                </td>
              </tr>
              

            </table>
            <img class="qrcode_image" src="<?php echo base_url();?>/assets/cetak/qrcode/<?php echo $user;?>.jpg">
          </div>
          <div class="progstud">
              <table>
                <tr>
                  <td>PILIHAN 1 : <?php echo $isi->kode_pil1." - ".$isi->nama_pil1; ?></td>
                </tr>
                <tr>
                  <td style="padding-top: 2px;">PILIHAN 2 : <?php 
                        if (isset($isi->kode_pil2)) {
                          echo $isi->kode_pil2." - ".$isi->nama_pil2 ;        
                        }else echo "-";
                  ?></td>
                </tr>
                <tr>
                  <td style="padding-top: 2px">PILIHAN 3 : <?php 
                  if (isset($isi->kode_pil3)) {
                          echo $isi->kode_pil3." - ".$isi->nama_pil3 ;        
                        }else echo "-";
                  ?></td>
                </tr>
              </table>
          </div>
          <div class="lokasi">
             <table>
                 <tr>
                  <td>SEKOLAH</td>
                  <td>:</td>
                  <td>
                    <?php echo $isi->lokasi_tes?>
                  </td>
              </tr>
              <tr>
                <td>RUANG</td>
                <td>:</td>
                <td>
                  <?php echo $isi->ruang?>
                </td>
              </tr>
              <tr>
                <td>NO KURSI</td>
                <td>:</td>
                <td>
                  <?php echo $isi->no_meja?>
                </td>
              </tr>
              
             </table>
          </div>
      </div>
    </body>
    </html>
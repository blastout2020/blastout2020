<ul>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <center>
          <h3>Kartu bisa di unduh mulai tanggal 18 Januari 2019</h3>
         <!-- <button class="btn-lg btn-success">Download</button> --><br>
          <?php
          if ($isi != 0) {
            echo "<a id='klikdown' class='btn-lg btn-success'>Download Kartu</a>";
          }else
            echo "<button class='btn-lg btn-success' onclick='blm_siap()'>Download Kartu</button>";
           ?>
        </center>
      </div>
      <div class="col-md-2"></div>
    </div>
  </ul>
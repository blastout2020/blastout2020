<ul>
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-md-10">
       <center>
        <h3>Denah Ruangan Ujian</h3>
       </center>
       <?php 
       		foreach ($denah as$value) {
       		?>
       		<img src="<?php echo base_url()?>/assets/denah/<?php echo $value->nama_foto ?>" class="img-responsive">
       		<br>
       		<?php
       		}
        ?>
       
      </div>
    </div>
</ul>

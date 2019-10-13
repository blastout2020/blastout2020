<ul>
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-md-10">
        <table class="table table-bordered">
        <tr>
          <td class="judul">Nama</td>
          <td id="row_nama"><?php echo $biodata->nama; ?></td>
        </tr>
        <tr>
          <td class="judul">No HP</td>
          <td id="row_nohp"><?php echo $biodata->no_hp; ?></td>
        </tr>
        <tr>
          <td class="judul">E-Mail</td>
          <td id="row_email"><?php echo $biodata->email; ?></td>
        </tr>
        <tr>
          <td class="judul">Sekolah</td>
          <td id="row_sekolah"><?php echo $biodata->sekolah; ?></td>
        </tr>
        <tr>
          <td class="judul">Jurusan</td>
          <td ><?php echo $biodata->jurusan; ?></td>
        </tr>
      </table>  
      <button class="btn btn-info cstm" data-toggle="modal" data-target="#ModalBiodata">Edit</button>
      </div>
    </div>
  </ul>

  <div class="modal fade" id="ModalBiodata" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ubah Biodata</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" id="form_bio">
              <div class="form-group">
                <label class="control-label col-sm-2">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?php echo $biodata->nama; ?>" name="nama" id="nama">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">No HP</label>
                <div class="col-sm-10"> 
                  <input type="tel" class="form-control" value="<?php echo $biodata->no_hp; ?>" name="nohp" id="nohp">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">E-Mail</label>
                <div class="col-sm-10"> 
                  <input type="email" class="form-control" value="<?php echo $biodata->email; ?>" name="email" id="email">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">Sekolah</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="sekolah" value="<?php echo $biodata->sekolah; ?>" id="sekolah" required>
                </div>
              </div>
             <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" onclick="edit()" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
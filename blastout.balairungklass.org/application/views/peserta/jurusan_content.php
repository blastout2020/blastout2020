<ul>
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-md-10">
        <table class="table table-bordered">
        <tr>
          <td class="judul">Pilihan 1</td>
          <td id="row_pil1"><?php if(isset($jurusan->nama_pil1)) echo $jurusan->kode_pil1." - ".$jurusan->nama_pil1; ?></td>
        </tr>
        <tr>
          <td class="judul">Pilihan 2</td>
          <td id="row_pil2"><?php if(isset($jurusan->nama_pil2)) echo $jurusan->kode_pil2." - ".$jurusan->nama_pil2; ?></td>
        </tr>
        <tr>
          <td class="judul">Pilihan 3</td>
          <td id="row_pil3"><?php if(isset($jurusan->nama_pil3)) echo $jurusan->kode_pil3." - ".$jurusan->nama_pil3; ?></td>
        </tr>
      </table>  
      <button class="btn btn-info cstm" data-toggle="modal" data-target="#ModalJurusan">Edit</button>
      </div>
    </div>
  </ul>



   <!-- Modal -->
  <div class="modal fade" id="ModalJurusan" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ubah Pilihan Jurusan</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" id="form_jur">
              <div class="form-group">
                <label class="control-label col-sm-3">Pilihan 1</label>
                <div class="col-sm-4">
                  <select name="pilihan1" class="form-control" onchange="getval1(this)">
                  <option>---Universitas---</option>
                    <?php foreach ($univ as $value) {
                      echo "<option value='$value[univ]'>".$value['univ']."</option>";
                    } ?>
                  </select>
                </div>
                <div class="col-sm-5">
                  <select name="pilihan11" id="prodi1" class="form-control"></select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3">Plihan 2</label>
                <div class="col-sm-4"> 
                  <select name="pilihan2" class="form-control" onchange="getval2(this)">
                    <option>---Universitas---</option>
                    <?php foreach ($univ as $value) {
                      echo "<option value='$value[univ]'>".$value['univ']."</option>";
                    } ?>
                  </select>
                </div>
                <div class="col-sm-5">
                  <select name="pilihan22" id="prodi2" class="form-control"></select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3">Pilihan 3</label>
                <div class="col-sm-4">
                  <select name="pilihan3" class="form-control" onchange="getval3(this)">
                  <option>---Universitas---</option>
                    <?php foreach ($univ as $value) {
                      echo "<option value='$value[univ]'>".$value['univ']."</option>";
                    } ?>
                  </select>
                </div>
                <div class="col-sm-5">
                  <select name="pilihan33" id="prodi3" class="form-control"></select>
                </div>
              </div>
              <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" onclick="save()" class="btn btn-primary">Save</button>
          <button type="button" onclick="reset()" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
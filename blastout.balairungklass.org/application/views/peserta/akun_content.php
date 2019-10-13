<ul>
    <div class="row">
      <div class="col-md-2" style="position: absolute;top: 0;right: 0 ;margin-top:1%"> <a href="<?php echo base_url('home/logout'); ?>" class="btn btn-warning">Log Out</a> </div>
      <div class="col-md-6">
        <h5 style="font-size: 18px;margin-bottom: 5%">Ubah Password</h5>
        <form class="form-horizontal" id="form_password" >
          <div class="form-group">
            <label class="control-label col-sm-5" for="email">Password Baru</label>
            <div class="col-sm-7">
              <input type="password" name="password" class="form-control" id="pass" required placeholder="Masukan Password Baru">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-5" for="pwd">Ulang Password</label>
            <div class="col-sm-7"> 
              <input type="password" class="form-control" onkeyup ="cekPass()" id="pass1" placeholder="Ulangi Password Baru">
              <p id="psn_pswd" style="color: red"></p>
            </div>
          </div>
          <div class="form-group"> 
            <div class="col-sm-12">
              <button type="button" id="savepswd" class="btn btn-info cstm">Submit</button>
            </div>
          </div>
          <?php echo  form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash());  ?>
        </form>
      </div>
    </div>
  </ul>
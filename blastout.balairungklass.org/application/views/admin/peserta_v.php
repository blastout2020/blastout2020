<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>PESERTA</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <!--  <p class="text-muted font-13 m-b-30">
                Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
            </p> -->
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Jurusan</th>
                        <th>Sekolah</th>
                        <th>Username</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                   foreach ($query as $row) {
                        $no++;
                        $aksi =  '
                    <center>
                        <button type="button"  onclick="edit_peserta_v('.$row['id_peserta'].')" class="btn btn-info">Edit</button>
                        <button type="button"  onclick="cek_peserta_v('.$row['id_peserta'].')" class="btn btn-warning">Cek</button>
                        <button type="button" onclick="delete_peserta('.$row['id_peserta'].')" class="btn btn-danger">Hapus</button>
                    </center>';
                        // $link_edit = anchor('admint/edit/'.$row['id_peserta'], 'Edit');
                        // $link_delete = anchor('admin/delete/' .$row['id_peserta'], 'Hapus', "onclick='return confirm(\"Data yakin dihapus?\")'");
                        echo "
                    <tr>
                        <td>" . $no . "</td>
                        <td>" . $row['nama'] . "</td>
                        <td>" . $row['no_hp'] . "</td>
                        <td>" . $row['jurusan'] . "</td>
                        <td>" . $row['sekolah'] . "</td>
                        <td>" . $row['u_user'] . "</td>
                        <td>" . $aksi . "</td>
                    </tr>";
                    }
                    echo "
                </tbody>";
                    echo "
            </table>";
                    ?>
        </div>
    </div>
</div>

    <div class="modal fade" id="myModal_peserta" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Form Edit Peserta</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal " id="formd">                     
                    <input type="text"  name="id_pes" hidden="" readonly="">
                    <div class="form-group">
                        <label class="control-label col-sm-2">Nama
                        </label>
                        <div class="col-sm-10" >
                            <input type="text"  name="nama_pes"  class="form-control " readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Sekolah</label>
                        <div class="col-sm-10" >
                            <input  class="form-control " type="text" name="sekolah_pes" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Jurusan
                        </label>
                        <div class="col-sm-10" >
                            <select class="form-control" name="jurusan_pes">
                                <option value="SAINTEK">Saintek</option>
                                <option value="SOSHUM">Soshum</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">No Hp
                        </label>
                        <div class="col-sm-10" >
                            <input  class=" form-control" type="text" name="no_hp_pes" readonly>
                        </div>
                    </div>
                    <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" id="butSave" class="btn btn-info">Save</button>
              <button type="button" onclick="resetM()" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
          </div>
          
        </div>
    </div>

    <div class="modal fade" id="myModalInfoP" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Info User</h4>
                </div>
                <div class="modal-body text-center">
                    <div class="row">
                        <div class="col-lg-4">
                            <p>Nama</p>
                        </div>
                        <div class="col-lg-6" >
                            <p id="nama_info"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <p>Username</p>
                        </div>
                        <div class="col-lg-6" >
                            <p id="user_info"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <p>Password</p>
                        </div>
                        <div class="col-lg-6" >
                            <p id="pass_info"></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
                

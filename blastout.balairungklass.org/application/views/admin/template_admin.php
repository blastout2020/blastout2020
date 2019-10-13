<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/bo.png">
    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/admin/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url()?>assets/admin/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()?>assets/admin/js/custom.min.js"></script>
    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets/admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url()?>assets/admin/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/admin/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/admin/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/admin/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/admin/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/admin/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>assets/admin/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <!-- Datatables -->
    <script>
        $(document).ready(function () {
            tableIsi();
        });
        function tableIsi() {
              var handleDataTableButtons = function() {
                  if ($("#datatable-buttons").length) {
                      $("#datatable-buttons").DataTable({
                          dom: "Bfrtip",
                          buttons: [{
                                  extend: "copy",
                                  className: "btn-sm"
                              },
                              {
                                  extend: "csv",
                                  className: "btn-sm"
                              },
                              {
                                  extend: "excel",
                                  className: "btn-sm"
                              },
                              {
                                  extend: "pdfHtml5",
                                  className: "btn-sm"
                              },
                              {
                                  extend: "print",
                                  className: "btn-sm"
                              },
                          ],
                          responsive: true
                      });
                  }
              };

              TableManageButtons = function() {
                  "use strict";
                  return {
                      init: function() {
                          handleDataTableButtons();
                      }
                  };
              }();

              $('#datatable').dataTable();

              $('#datatable-keytable').DataTable({
                  keys: true
              });

              $('#datatable-responsive').DataTable();

              $('#datatable-scroller').DataTable({
                  ajax: "js/datatables/json/scroller-demo.json",
                  deferRender: true,
                  scrollY: 380,
                  scrollCollapse: true,
                  scroller: true
              });

              $('#datatable-fixed-header').DataTable({
                  fixedHeader: true
              });

              var $datatable = $('#datatable-checkbox');

              $datatable.dataTable({
                  'order': [
                      [1, 'asc']
                  ],
                  'columnDefs': [{
                      orderable: false,
                      targets: [0]
                  }]
              });
              $datatable.on('draw.dt', function() {
                  $('input').iCheck({
                      checkboxClass: 'icheckbox_flat-green'
                  });
              });

              TableManageButtons.init();
        };
    </script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a  class="site_title"><i class="fa fa-home"></i> <span>TIM IT 2019</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?php echo base_url()?>assets/admin/images/picture.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata('adminLoginAdminKlaten');?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

              <div class="menu_section">
                <h3> . </h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url()?>Admin"><i class="fa fa-home"></i> Pendaftar</a>
                  <li><a href="<?php echo base_url()?>Admin/peserta"><i class="fa fa-edit"></i> Peserta</a>
                  
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
                <a href="<?php echo base_url()?>Admin/logout"data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
                
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <?php echo $body;?>  
            </div>
            
          </div>
            
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by Colorlib
          </div>
          <div class="clearfix"></div>
        </footer>
      </div>
    </div>
  </body>
  <footer>
    <script type="text/javascript">
      function ref() {
        location.reload();
      }
      function reload() {
        $.ajax({
            url: "<?php echo base_url("Admin/reload")?>",
            type: "get", // To protect sensitive data            
            dataType: "JSON",
            success:function(data){
                var x = (data.data);
                $("#datatable-responsive > tbody:last").children().remove();
                for(var i in x){
                    var rn = $('<tr class=""></tr>');
                   //first approach to add data (not flexible)
                    rn.append('<td>'+(parseInt(i)+1)+'</td>');
                    rn.append('<td>'+x[i].nama+'</td>');
                    rn.append('<td>'+x[i].no_hp+'</td>');
                    rn.append('<td>'+x[i].jurusan+'</td>');
                    rn.append('<td>'+x[i].sekolah+'</td>');
                    rn.append('<td>'+x[i].waktudaftar+'</td>');
                    rn.append('<td>'+x[i].aksi+'</td>');
                    // here add all columns
                    $('#datatable-responsive').append(rn);
               }                 
               
            }
        });
      }

      function resetM() {
        $('#formd')[0].reset();
      }

      function detail_data(id) {
        $.ajax({
                url : "<?php echo base_url('Admin/detail_data/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    if (data.status == true) {
                      var val = data.data;
                      $('input[name="id_pes"]').val(val.id_peserta);
                      $('input[name="nama_pes"]').val(val.nama);
                      $('select[name="jurusan_pes"]').val(val.jurusan);
                      $('input[name="no_hp_pes"]').val(val.no_hp);
                      $('input[name="sekolah_pes"]').val(val.sekolah);
                    }         
                }
        });
      }

      function getUsername() {
        $.ajax({
                url : "<?php echo base_url('Admin/getUsername/')?>",
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                  $('select[name="username"]').empty();
                  $('select[name="username"]').append('<option>---Pilih Username---</option>');
                  for(var i in data){
                    $('select[name="username"]').append('<option value="' + data[i].username + '">' + data[i].username + '</option>');
                  }     
                }
        });
      }

      function edit_peserta(id) {
        $('#butSave').attr("onclick","update_data("+id+")");
        $('#myModal').modal('show');
        detail_data(id);
        getUsername();
      }

      function edit_peserta_v(id) {
        $('#butSave').attr("onclick","update_data1("+id+")");
        $('#myModal_peserta').modal('show');
        detail_data(id);
      }
      function cek_peserta_v(id) {
        if(confirm('Apakah kamu benar benar ingin melihat password ?')){
          $.ajax({
                  url : "<?php echo base_url('Admin/userInfo/')?>",
                  type: "POST",
                  data : {'id' : id,'<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>'},
                  dataType: "JSON",
                  success: function(data)
                  {
                      $('#nama_info').text(data.data.nama);
                      $('#user_info').text(data.data.username);
                      $('#pass_info').text(data.data.hash);
                      $('#myModalInfoP').modal('show');
                  }
          });
        }
      }
      function update_data1(id) {
        $.ajax({
            url : "<?php echo base_url("Admin/update_data_j"); ?>",
            type: "POST",
            data:  $('#formd').serialize(),
            dataType: "JSON",
            success: function(data)
            {
                if (data.status == true) {
                    $('#myModal_peserta').modal('hide');
                    reload();
                    alert("data berhasil di ubah!");
                    location.reload();
                }else{
                  alert("Perubahan Gagal dilakukan!");
                } 

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert(errorThrown);
            }
        }); 
      }

      function update_data(id) {
        $.ajax({
            url : "<?php echo base_url("Admin/update_data"); ?>",
            type: "POST",
            data:  $('#formd').serialize(),
            dataType: "JSON",
            success: function(data)
            {
                if (data.status == true) {
                    $('#myModal').modal('hide');
                    reload();
                    $('#nama_info').text(data.data.nama);
                    $('#user_info').text(data.data.username);
                    $('#pass_info').text(data.data.hash);
                    $('#myModalInfo').modal('show');

                    
                }else{
                  alert("Username baru saja dipakai, silahkan coba lagi!");
                } 

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert(errorThrown);
            }
        }); 
      }
      function delete_peserta(id) {
        if(confirm('Are you sure delete this data?')){
            // ajax delete data to database

            $.ajax({
                url : "<?php echo base_url('Admin/delete')?>/"+ id,
                type: "DELETE",
                dataType: "JSON",
                success: function(data)
                {
                    //if success reload ajax table
                    if (data.status == true) {
                        alert("Data berhasil di hapus");
                        location.reload();
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });
     
        }
      }
    </script>
  </footer>
</html>
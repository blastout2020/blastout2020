<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $tittle; ?></title>

    <link rel="stylesheet" href="<?php echo base_url()?>/assets/csss/reset.min.css">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/bo.png">
      <link rel='stylesheet prefetch' href='<?php echo base_url()?>/assets/csss/yyrzgp.css'>
      <link rel="stylesheet" href="<?php echo base_url()?>/assets/csss/style.css">
      <link rel="stylesheet" href="<?php echo base_url()?>/assets/csss/bootstrap.css">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url()?>assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url()?>assets/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Blastout 2019</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">                       
                        <li><a href="<?php echo base_url('peserta/akun'); ?>"><i class="fa fa-gear fa-fw"></i> Settings Akun</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('home/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <h2>Menu</h2>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url('home/'); ?>"><i class="glyphicon glyphicon-info-sign"></i> Info </a>
                        </li>
                         <li>
                            <a href="<?php echo base_url('peserta/biodata'); ?>"><i class="glyphicon glyphicon-user"></i> Biodata </a>
                        </li>
                         <li>
                            <a href="<?php echo base_url('peserta/jurusan'); ?>"><i class="glyphicon glyphicon-circle-arrow-up"></i> Jurusan </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('peserta/kartu_ujian'); ?>"><i class="glyphicon glyphicon-credit-card"></i> Kartu Ujian </a>
                        </li>
                         <li>
                            <a href="<?php echo base_url('peserta/lihat_denah'); ?>"><i class="glyphicon glyphicon-map-marker"></i> Denah Ruangan </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('peserta/maps'); ?>"><i class="glyphicon glyphicon-map-marker"></i> Lokasi Ujian </a>
                        </li>
                        <!-- <li>
                            <a href="<?php echo base_url('peserta/lihat_nilai'); ?>"><i class="glyphicon glyphicon-eye-open"></i> Nilai Peserta </a>
                        </li> -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><center>Selamat Datang Peserta Blastout 2019</center></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <?php
                echo $body;
            ?>

            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>

    <!-- /#wrapper -->
</body>
<footer>
<script src="<?php echo base_url()?>assets/jss/jquery.min.js"></script>
<script  src="<?php echo base_url()?>assets/jss/index.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>assets/js/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url()?>assets/js/raphael.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/morris.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>assets/js/sb-admin-2.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        valid();
        $('#savepswd').click(function (e) {
            e.preventDefault();
            $.ajax({
                type:'POST',
                url :"<?php echo site_url("peserta/editpass"); ?>",
                data :$('#form_password').serialize(),
                dataType:'JSON',
                success:function (data) {
                    if (data.status == true) {
                        alert('Password anda telah berhasil di ubah !');
                        $('#form_password')[0].reset();
                        $('#savepswd').prop('disabled',true)
                    }
                }
            })
        });

        $("#klikdown").click(function(e) {
            $.ajax({
            type:"get",
            url: "<?php echo base_url('peserta/cekDataDulu') ?>",
            success:function(data){
                data = JSON.parse(data);
                if (data.status == false) {
                    alert(data.pesan);
                    e.preventDefault();
                    return false;
                    //sampe sini cek data lalu ke donwload
                }else
                    location.href ='<?php echo base_url('peserta/download') ?> '
            }
            });
        })
    })

    function valid() {
        var a = $('#pass').val();
        var b = $('#pass1').val();
        if (a =='' && b =='') {
            $('#savepswd').prop('disabled',true)
        }
    }

    function edit() {
        var a = $('#nohp').val();
        var b = $('#nama').val();
        var c = $('#sekolah').val();
        var d = $('#email').val();
        
        if (a =='' || b =='' || c =='' || d =='') {
            alert('Data harus di isi semuannya!');
        }else{
            $.ajax({
                url : "<?php echo site_url("peserta/editbio"); ?>",
                type: "POST",
                data: $('#form_bio').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    var d = data.data;
                    if (data.status == true) {
                        alert("Data berhasil diubah !");
                        $('#row_nama').text(d.nama);
                        $('#row_nohp').text(d.no_hp);
                        $('#row_sekolah').text(d.sekolah);
                        $('#row_email').text(d.email);
                        $('#ModalBiodata').modal('hide');
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });            
        }

    }

    function save() {
        var a = $('#prodi1').val();
        if (a == null || a == 0) {
            alert("Minimal Pilihan SATU diisi!");
        }else{
            $.ajax({
                url : "<?php echo site_url("peserta/editjur"); ?>",
                type: "POST",
                data: $('#form_jur').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    var d = data.data;
                    if (data.status == true) {
                        alert(data.pesan);
                        $('#row_pil1').text(d.kode_pil1+' - '+d.nama_pil1);
                        $('#row_pil2').text(d.kode_pil2+' - '+d.nama_pil2);
                        $('#row_pil3').text(d.kode_pil3+' - '+d.nama_pil3);
                        $('#ModalJurusan').modal('hide');
                        $('#form_jur')[0].reset();
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert(errorThrown);
                }
            });
        }
            
    }
    function reset(){
       $('#form_jur')[0].reset(); 
    }

    function getval1(sel) {
        $.ajax({
        type:"POST",
        url: "<?php echo base_url('peserta/ajaxjurusan') ?>",
        data:{
            func : 'ajaxjurusan',
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>','id':sel.value
        },
        success:function(data){
            $("#prodi1").html(data);
        }
        });
    }
    function getval2(sel) {
        $.ajax({
        type:"POST",
        url: "<?php echo base_url('peserta/ajaxjurusan') ?>",
        data:{
            func : 'ajaxjurusan',
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>','id':sel.value
        },
        success:function(data){
            $("#prodi2").html(data);
        }
        });
    }
    function getval3(sel) {
        $.ajax({
        type:"POST",
        url: "<?php echo base_url('peserta/ajaxjurusan') ?>",
        data:{
            func : 'ajaxjurusan',
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>','id':sel.value
        },
        success:function(data){
            $("#prodi3").html(data);
        }
        });
    }
    function cekPass() {
        var a = $('#pass');
        var b = $('#pass1');
        if (a.val() != '') {
            if (a.val() != b.val()) {
                $('#psn_pswd').text('password belum sama');
                $('#savepswd').prop('disabled',true);
            }else{
                $('#psn_pswd').text('');
                $('#savepswd').prop('disabled',false);
            } 
                
        }else{
            $('#psn_pswd').text('');
            $('#savepswd').prop('disabled',false);
        }
            

    }

    function cekdata(e) {
        $.ajax({
        type:"get",
        url: "<?php echo base_url('peserta/cekDataDulu') ?>",
        success:function(data){
            data = JSON.parse(data);
            if (data.status == false) {
                alert(data.pesan);
                return false;
                //sampe sini cek data lalu ke donwload
            }
        }
        });
    }
    function blm_siap() {
        alert('Kartu anda belum siap, mohon bersabar!.');
    }
</script>
</footer>
</html>

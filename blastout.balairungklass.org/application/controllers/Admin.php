<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Admin extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
        $this->load->model('admin_m');
        $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
		
	}
	function index() {
        if ($this->admin_m->check_logged() === true)
            redirect('Admin/dasbor');
        $data['login_failed'] = '';
        if ($this->input->post('submit_login')) {
            $this->form_validation->set_rules('username', 'username', 'trim|required');
            $this->form_validation->set_rules('password', 'password', 'trim|required');
            $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/login_v', $data);
            } else {
                $login_array = array(
                    $this->input->post('username'),
                    $this->input->post('password'),
                );
                if ($this->admin_m->process_login($login_array)) {
                    //login successfull
                    redirect('Admin/dasbor');
                } else
                    $data['login_failed'] = "<div style='color:red;'>Invalid username or password</div>";
                    $this->load->view('admin/login_v', $data);
            }
        } else {
            $this->load->view('admin/login_v',$data);
        }
    }
    function dasbor(){
    	if ($this->admin_m->check_logged() === FALSE)
            redirect('Admin');
        $this->data['query'] = $this->admin_m->pendaftar();
        $data['body'] = $this->load->view('admin/dasbor_v', $this->data, true);
        $this->load->view('admin/template_admin', $data);
    }

    function reload()
    {
        if ($this->admin_m->check_logged() === FALSE)
            redirect('Admin');
        $data = $this->admin_m->pendaftar();
        for ($i=0; $i < count($data) ; $i++) { 
            $data[$i] += array(
                "aksi" => '<center><button type="button"  onclick="edit_peserta('.$data[$i]['id_peserta'].')" class="btn btn-info">Edit</button> <button type="button" onclick="delete_peserta('.$data[$i]['id_peserta'].')" class="btn btn-danger">Hapus</button></center>'
            ); 
        }
        echo json_encode(array('data'=>$data));
    }

    function peserta(){
    	if ($this->admin_m->check_logged() === FALSE)
            redirect('Admin');
     	$this->data['query'] = $this->admin_m->peserta();
        $data['body'] = $this->load->view('admin/peserta_v', $this->data, true);
        $this->load->view('admin/template_admin', $data);   
    }
    function delete($id) {
        if ($this->admin_m->check_logged() === FALSE)
            redirect('Admiin');

        $this->db->where('id_peserta', $id);
        $delete = $this->db->delete('peserta');
        if ($delete) {
            echo json_encode(array("status" => true));
        }     
    }
    function detail_data($id){
        if ($this->admin_m->check_logged() === FALSE)
            redirect('Admin');
        $this->db->where('id_peserta',$id);
        $query = $this->db->get('peserta')->row();
        if ($query) {
           echo json_encode(array('data'=>$query,'status' =>true));
        }
    }

    function update_data(){
        if ($this->admin_m->check_logged() === FALSE)
            redirect('Admin');
        
        $usr= $this->input->post('username');
        $id_pes = $this->input->post('id_pes');
        
        $data = array('u_user' => $usr );
        $cek = $this->db->query("SELECT u_user from peserta  where u_user = '$usr'")->num_rows();
        
        if ($cek > 0) {
            echo json_encode(array('status' =>false));
        }else{
            $this->db->where('id_peserta',$id_pes);
            $update = $this->db->update('peserta',$data);
            $query = $this->db->query("SELECT nama,username,hash from user , peserta  where user.username = peserta.u_user and peserta.id_peserta ='$id_pes'")->row();
            echo json_encode(array('data'=>$query,'status' =>true));
        }
        
    }
    function update_data_j(){
        if ($this->admin_m->check_logged() === FALSE)
            redirect('Admin');
        
        $data = array('jurusan' => $this->input->post('jurusan_pes'));
        $id_pes = $this->input->post('id_pes');
        $this->db->where('id_peserta',$id_pes);
        $update = $this->db->update('peserta',$data);
        echo json_encode(array("status" => true));
    }

    function userInfo()
    {
        $id = $this->input->post('id');
        $query = $this->db->query("SELECT nama,username,hash from user , peserta  where user.username = peserta.u_user and peserta.id_peserta ='$id'")->row();
        echo json_encode(array('data'=>$query,'status' =>true));
    }

    public function getUsername()
    {
        $query = $this->db->query("SELECT username from user WHERE username not in ( SELECT peserta.u_user FROM peserta WHERE u_user != 'NULL') AND level = 'user' LIMIT 10")->result();
        echo json_encode($query);
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('Admin');
    }

    public function uploadUser(){
        $this->load->helper('file');
        $fileName = time().$_FILES['file']['name'];
         
        $config['upload_path'] = './assets'; //buat folder dengan nama assets di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 100000;
         
        $this->load->library('upload');
        $this->upload->initialize($config);
         
        if(! $this->upload->do_upload('file') )
        $this->upload->display_errors();
        
        $inputFileName = './assets/'.$fileName;
         
        try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }
 
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();
            $judul = $sheet->rangeToArray('A' . 1 . ':' . $highestColumn . 1,NULL,TRUE,FALSE);
            unlink($inputFileName);
            $jum=0;
            if ($judul[0][0]=="no" && $judul[0][1]=="username" && $judul[0][2]=="password") {
                for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
                    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                                    NULL,
                                                    TRUE,
                                                    FALSE);
                                                     
                    //Sesuaikan sama nama kolom tabel di database                                
                     $data = array(
                        // "idimport"=> $rowData[0][0],
                        "username"=> $rowData[0][1],
                        "password"=> sha1(md5($rowData[0][2])),
                        "level"=> "user",
                        "hash"=> $rowData[0][2]
                    );
                     
                    //sesuaikan nama dengan nama tabel
                    $insert = $this->db->insert("user",$data);
                    $jum++;
                         
                }
                $highestRow--;
                echo "<script>alert('".$jum." data berhasil dimasukan dari total ".$highestRow." data!');document.location='../excel'</script>";
               // redirect('Admin/excel');
            }else
                echo "<script>alert('Gagal import excel, colomn tidak sesuai!');document.location='../excel'</script>";   
    }

    public function uploadKartu(){
        $this->load->helper('file');
        $fileName = time().$_FILES['file']['name'];
         
        $config['upload_path'] = './assets'; //buat folder dengan nama assets di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 100000;
         
        $this->load->library('upload');
        $this->upload->initialize($config);
         
        if(! $this->upload->do_upload('file') )
        $this->upload->display_errors();
        
        $inputFileName = './assets/'.$fileName;
         
        try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }
 
            $sheet = $objPHPExcel->getSheet(0);
            
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();
            $judul = $sheet->rangeToArray('A' . 1 . ':' . $highestColumn . 1,NULL,TRUE,FALSE);
            unlink($inputFileName);
            if ($judul[0][0]=="no" && $judul[0][1]=="nomer_peserta" && $judul[0][2]=="nomer_meja" && $judul[0][3]=="ruang" && $judul[0][4]=="lokasi_tes" && $judul[0][5]=="username") {
                $jum=0;
                for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
                $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                                NULL,
                                                TRUE,
                                                FALSE);
                                                 
                //Sesuaikan sama nama kolom tabel di database                                
                 $data = array(
                    // "idimport"=> $rowData[0][0],
                    "no_peserta"=> $rowData[0][1],
                    "no_meja"=> $rowData[0][2],
                    "ruang"=> $rowData[0][3],
                    "lokasi_tes"=> $rowData[0][4],
                    "username"=>$rowData[0][5]
                );
                 
                //sesuaikan nama dengan nama tabel
                $insert = $this->db->insert("kartu",$data);
                $jum++;
                     
                 }
                //kasih info sblm redirect
                $highestRow--;
                echo "<script>alert('".$jum." data berhasil dimasukan dari total ".$highestRow." data!');document.location='../excel'</script>";
               // redirect('Admin/excel');
            }else
                echo "<script>alert('Gagal import excel, colomn tidak sesuai!');document.location='../excel'</script>";
            
    }

    public function uploadHasil(){
        $this->load->helper('file');
        $fileName = time().$_FILES['file']['name'];
         
        $config['upload_path'] = './assets'; //buat folder dengan nama assets di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 100000;
         
        $this->load->library('upload');
        $this->upload->initialize($config);
         
        if(! $this->upload->do_upload('file') )
        $this->upload->display_errors();
        
        $inputFileName = './assets/'.$fileName;
         
        try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }
 
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();
            $judul = $sheet->rangeToArray('A' . 1 . ':' . $highestColumn . 1,NULL,TRUE,FALSE);
            unlink($inputFileName); 
            $jum=0;

            if ($judul[0][0]=="no" && $judul[0][1]=="username" && $judul[0][2]=="nopes" && $judul[0][3]=="nama" && $judul[0][4]=="rank_klaten" && $judul[0][5]=="rank_nasional" && $judul[0][6]=="tpa" && $judul[0][7]=="matdas" && $judul[0][8]=="bindo" && $judul[0][9]=="bing" && $judul[0][10]=="jml_tkpa" && $judul[0][11]=="mtk/sejarah" && $judul[0][12]=="fisika/sosiologi" && $judul[0][13]=="kimia/geografi" && $judul[0][14]=="biologi/ekonomi" && $judul[0][15]=="jmlsaintek/soshum" && $judul[0][16]=="jmltotal" && $judul[0][17]=="nilainasional" && $judul[0][18]=="pilihan1" && $judul[0][19]=="pilihan2" && $judul[0][20]=="pilihan3" && $judul[0][21]=="nama_pil1" && $judul[0][22]=="nama_pil2" && $judul[0][23]=="nama_pil3" ) {
                for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
                    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                                    NULL,
                                                    TRUE,
                                                    FALSE);
                                                     
                    //Sesuaikan sama nama kolom tabel di database                                
                     $data = array(
                        // "idimport"=> $rowData[0][0],
                        // "no"=> $rowData[0][0],
                        "username"=> $rowData[0][1],
                        "no_pes"=> $rowData[0][2],
                        "nama"=> $rowData[0][3],
                        "rank_w"=> $rowData[0][4],
                        "rank_nas"=> $rowData[0][5],
                        "tpa"=> $rowData[0][6],
                        "md"=> $rowData[0][7],
                        "ind"=> $rowData[0][8],
                        "eng"=> $rowData[0][9],
                        "jum_tkpa"=> $rowData[0][10],
                        "mat_sej"=> $rowData[0][11],
                        "fis_sos"=> $rowData[0][12],
                        "kim_geo"=> $rowData[0][13],
                        "bio_eko"=> $rowData[0][14],
                        "jum_sain_sos"=> $rowData[0][15],
                        "jtotal"=> $rowData[0][16],
                        "n_nasional"=> $rowData[0][17],
                        "pil_1"=> $rowData[0][18],
                        "pil_2"=> $rowData[0][19],
                        "pil_3"=> $rowData[0][20],
                        "pil1_n"=> $rowData[0][21],
                        "pil2_n"=> $rowData[0][22],
                        "pil3_n"=> $rowData[0][23]
                    );
                    //sesuaikan nama dengan nama tabel
                    $insert = $this->db->insert("hasil",$data);
                    $jum++;
                }
                $highestRow--;
                echo "<script>alert('".$jum." data berhasil dimasukan dari total ".$highestRow." data!');document.location='../excel'</script>";
            }else
                echo "<script>alert('Gagal import excel, colomn tidak sesuai!');document.location='../excel'</script>";
    }
    function excel(){
        if ($this->admin_m->check_logged() === FALSE)
            redirect('Admin');
        $this->data['query'] = '';
        $data['body'] = $this->load->view('admin/excel', $this->data, true);
        $this->load->view('admin/template_admin', $data);
    }
}

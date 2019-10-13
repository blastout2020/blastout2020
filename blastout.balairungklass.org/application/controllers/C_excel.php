 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class C_excel extends CI_Controller {
 
      //constructor class C_excel
      public function __construct() {
           parent::__construct();
           //load helper url
           $this->load->helper('url');
           //load model 'model_buku'
           $this->load->model(array('Peserta_m','home_m'));
      }
 
      //halaman awal untuk menampilkan tabel
      public function index() {
        if ($this->home_m->check_logged() === false)
            redirect('home');
           $data = array( 'title' => 'Data Peserta Blastout 2019',
                'peserta' => $this->Peserta_m->getAll());
 
           $this->load->view('vw_excel',$data);
      }
 
      //export ke dalam format excel
      public function export_excel(){
           $data = array( 'title' => 'Data Peserta Blastout 2019',
                'peserta' => $this->Peserta_m->getAll());
 
           $this->load->view('vw_laporan_excel',$data);
      }
 
 }
 
 /* End of file C_excel.php */
 /* Location: ./application/controllers/C_excel.php */
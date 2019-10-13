<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model(array('register_m','home_m'));
        $this->load->helper(array('security','captcha') );
        
    }

	public function index()
	{
		if ($this->home_m->check_logged() === true)
            redirect('peserta');
		$data['cap'] = $this->home_m->make_captcha();
		$data['captcha_return'] = '';
		if ($this->input->post('register')) {
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
			$this->form_validation->set_rules('sekolah', 'Sekolah', 'trim|required'); 	
			$this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				$nama = $this->input->post('nama');
				$phone = $this->input->post('phone');
				$sekolah = $this->input->post('sekolah');
				$jurusan = $this->input->post('jurusan');

				$cek = $this->db->query("select * from peserta where nama = '".$nama."'")->num_rows();
				if ($cek > 0) {
					echo "<script>alert('Maaf nama anda sudah registrasi, jika sudah melakukan pembayaran silahkan menghubungi ticketing. Terimakasih :D');document.location=''</script>";
				}else{
				$input_data = array(
					'nama' => $nama,
					'no_hp'=> $phone,
					'jurusan'=>$jurusan,
					'sekolah'=>$sekolah
					);

				if($this->register_m->insert('peserta', $input_data)){    
                           echo "<script>alert('Selamat anda telah berhasil melakukan registrasi, silahkan segera melakukan pembayaran.Jangan Lupa Follow dan Cek Instagram Blastout 2019. Terimakasih :D');document.location=''</script>";
                           //redirect(base_url().'login');  
                         }else{
                            $data['body']="error on query"; 
                         }
                } 
			}

		}else if($this->input->post('login')){
			if ($this->home_m->check_captcha() == TRUE) {
				$login_array = array(
                    strtoupper($this->input->post('Username')),
                    $this->input->post('Password')
                );
                if ($this->home_m->process_login($login_array)) {
                	redirect('peserta'); 
                } else {
                    $data['captcha_return'] = "<div style='color:red;'>Invalid username or password</div>";
                    $this->load->view('user/main', $data);
                }

			}else
				$data['captcha_return'] = '<div style="color: red">Captcha anda tidak sesuai, silahkan ulangi !</div>'; 
				$this->load->view('user/main',$data);
		}else
			$this->load->view('user/main',$data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
        redirect('home');
	}
}

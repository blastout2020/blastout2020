<?php if (!defined('BASEPATH'))	exit('No direct script access allowed');	
class Home_m extends CI_Model{	
	 
	function __construct()	
	{	
	 	parent :: __construct();	
	 }	
	function make_captcha(){
		$this->load->helper('captcha');
		$vals = array(
		'word' => rand(00,9999),
		'img_path'=>'./assets/images/captcha/',
		'img_url'=> base_url().'/assets/images/captcha/',
		'font_path' => '../system/fonts/textb.ttf',
		'expiration => 3600',
		);
		
		$cap = create_captcha($vals);
		if($cap){
			$data = array(
				'captcha_id'=>'',
				'captcha_time'=>$cap['time'],
				'ip_address'=> $this->input->ip_address(),
				'word' => $cap['word'],
				);
			$query = $this->db->insert_string('captcha', $data);
			$this->db->query($query);
			
		}else{
			return "Captcha not work";
		}
		return $cap['image'];
	}

	function check_captcha()	
	{	
		//Delete old data(2 hours)
		$expiration = time()-3600;
		$sql = "DELETE FROM captcha WHERE captcha_time < ?";
		$binds = array($expiration);
		$query = $this->db->query($sql, $binds);
		

		//Checking input
		$sql = "SELECT COUNT(*) AS count FROM captcha WHERE word =? AND ip_address =? AND captcha_time > ?";
		$binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
		$query =$this->db->query($sql, $binds);
		$row = $query->row();

		if ($row->count>0){
			return true;
		}
		return false;
	
	 }	
	function process_login($login_array_input = NULL)	{	
	 	 if(!isset($login_array_input) OR count($login_array_input) != 2)	
	 	 	 return	false;
	 	 	 //set	its	variable	
	 	 	 $username = $login_array_input[0];	
	 	 	 $password = sha1(md5($login_array_input[1]));	
	 	 	 //	select	data	from	database	to	check	user	exist	or	not?	
	 	 	 $this->db->where('username', $username);
	 	 	 $this->db->where('password', $password);		
	 	 	 $this->db->limit(1);
	 	 	 $query = $this->db->get('user');	
	 	 	 if	($query->num_rows() > 0) {	
	 	 	 	 $row = $query->row();	
	 	 	 	 $user_id = $row->username;	
	 	 	 	 $user_pass = $row->password;	
	 	 	 	 // if($this->Encrypt_m->encryptUserPwd($password, $user_salt) === $user_pass)	{	
		 	 	 	//  $this->session->set_userdata('logged_user', $user_id);	
	 	 	 	 if($username === $user_id && $password === $user_pass){
	 	 	 	 	$this->session->set_userdata(array(
	 	 	 	 		'loginPeserta_Blastout_2019_Bklass'=>($user_id),
	 	 	 	 		'passPeserta_BklaSS_Blastout_2019_Bklass'=> md5($user_pass),
	 	 	 	 		'tryOutBalairungKlatenUGM'=>md5('Blastout') ));
	 	 	 	 	 return	true;	
	 	 	 	 }	
	 	 	 	 return	false;	
	 	 	 }	
	 	 return	false;	
	 }	
	function check_logged(){	
	 	 return	
	 	 ($this->session->userdata('loginPeserta_Blastout_2019_Bklass'))?  ($this->session->userdata('passPeserta_BklaSS_Blastout_2019_Bklass'))?  ($this->session->userdata('tryOutBalairungKlatenUGM'))?  true:FALSE:FALSE:FALSE;
	 }
		
}
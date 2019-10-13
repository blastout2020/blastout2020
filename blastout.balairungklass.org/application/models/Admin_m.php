<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');
class Admin_m extends CI_Model
{

	 function __construct()
	 {
	 	 parent :: __construct();
	 }
	 function process_login($login_array_input = NULL)	{
	 	 if(!isset($login_array_input) OR count($login_array_input) != 2)	
	 	 	 return	false;
	 	 	 //set	its	variable	
	 	 	 $username = $login_array_input[0];	
	 	 	 $password = sha1(md5($login_array_input[1]));	
	 	 	 //	select	data	from	database	to	check	user	exist	or	not?	
	 	 	 $this->db->where('level', "admin");
	 	 	 $this->db->where('username', $username);
	 	 	 $this->db->where('password', $password);		
	 	 	 $this->db->limit(1);
	 	 	 $query = $this->db->get('user');	
	 	 	 if	($query->num_rows() > 0) {	
	 	 	 	 $row = $query->row();	
	 	 	 	 $user_id = $row->username;	
	 	 	 	 $user_pass = $row->password;	
	 	 	 	 if($username === $user_id && $password === $user_pass){
	 	 	 	 	$this->session->set_userdata(array(
	 	 	 	 		'adminLoginAdminKlaten'=>($user_id),
	 	 	 	 		'adminPasswordAdminKlaten'=> md5($user_pass),
	 	 	 	 		'adminInginTaqwaYaAllah'=>('AamiinYaRabyalAlamin') ));
	 	 	 	 	 return	true;	
	 	 	 	 }	
	 	 	 	 return	false;	
	 	 	 }	
	 	 return	false;	
	 }

	 function check_logged(){
	 	 return	
	 	 ($this->session->userdata('adminLoginAdminKlaten'))?  ($this->session->userdata('adminPasswordAdminKlaten'))?  ($this->session->userdata('adminInginTaqwaYaAllah'))?  true:FALSE:FALSE:FALSE;
	 }

	 function pendaftar()
	 {
	 	$this->db->where('u_user',null);
	 	$query = $this->db->get('peserta')->result_array();
	 	return $query;
	 }

	 function peserta()
	 {
	 	$this->db->select('*');
	 	$this->db->from('peserta');
	 	$this->db->where('u_user !=',null);
	 	$query = $this->db->get()->result_array();
	 	return $query;
	 }
  
}

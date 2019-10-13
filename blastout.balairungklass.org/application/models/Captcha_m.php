	<?php if (!defined('BASEPATH'))	exit('No direct script access allowed');	
class Captcha_m extends CI_Model
{	
	 function __construct()	
	 {	
	 	parent :: __construct();	
	 }	
	 function make_captcha()	
	 {	
	 	$this->load->helper('captcha');	
	 	$vals = array(	
	 	'img_path' => './/assets/images/captcha/',		
	 	'img_url' => base_url().'/assets/images/captcha/',		
	 	'img_width' => 150,	//	width	
	 	'img_height' => 40,	//	height	
	 	'word_length'   => 5,
        'font_size'     => 20,
	 	'font_path' => '../system/fonts/texb.ttf',	
	 	'expiration' => 3600,	
	 	 'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 192, 203),
                'text' => array(70,70,70),
                'grid' => array(255, 120, 255)
        )
	 	);	
	 	// Create captcha	
	 	$cap = create_captcha($vals);	
	 	// Write to DB	
	 	if	($cap) {	
	 		 $data = array(	
	 		 	'captcha_id' =>'',	
	 		 	'captcha_time' => $cap['time'],	
	 		 	'ip_address' => $this->input->ip_address(),	
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
	 	 //	Delete old data (1 hours)	
	 	 $expiration = time()-3600;	
	 	 $sql = "DELETE FROM captcha WHERE captcha_time < ?";	
	 	 $binds = array($expiration);	
	 	 $query = $this->db->query($sql, $binds);	
	 	 //checking	input	
	 	 $sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";	
		 $binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);	
	 	 $query = $this->db->query($sql, $binds);	
	 	 $row = $query->row();	
	 	 if	($row->count>0)	{	
	 	 	 return	true;	
	 	 }	
	 	 return	false;	
	 }	
}
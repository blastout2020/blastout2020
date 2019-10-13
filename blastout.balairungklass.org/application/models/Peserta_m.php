<?php if (!defined('BASEPATH'))	exit('No direct script access allowed');	
class Peserta_m extends CI_Model{	
	 
	function __construct()	
	{	
	 	parent :: __construct();	
		
	}
	private function nopeserta(){
		return $this->session->userdata('loginPeserta_Blastout_2019_Bklass'); 	
	}
	public function getDataPeserta(){
		$this->db->where('username',$this->nopeserta());
		$row = $this->db->get('hasil')->row();
		return $row;
	}

	public function id_peserta()
	{	
		$this->db->where('u_user',$this->nopeserta());
		$row= $this->db->get('user')->row();
		$id_peserta = $row->id_peserta;
		return $id_peserta;
	}
	public function id_pesertaa()
	{	
		$this->db->where('u_user',$this->nopeserta());
		$row= $this->db->get('peserta')->row();
		$id_peserta = $row->id_peserta;
		return $id_peserta;
	}

	private function type()
	{
		$this->db->where('u_user',$this->nopeserta());
		$row = $this->db->get('peserta')->row();
		$jurusan = $row->jurusan;
		return $jurusan;
	}

	function getBiodata(){

		$this->db->where('u_user',$this->nopeserta());
		$result = $this->db->get('peserta')->row();
		return $result;
	}	
	function getBiodataBy($id){

		$this->db->where('u_user',$this->nopeserta());
		$result = $this->db->get('peserta')->row();
		return $result;
	}
	function getJurusan(){
		$this->db->where('id_peserta',$this->id_pesertaa());
		$result = $this->db->get('jurusan')->row();
		return $result;
	}
	function namaUniv()
	{
		$nama = $this->db->query("SELECT distinct univ from universitas where jenis = '".$this->type()."'")->result_array();
		return $nama;
	}
	function prodi($nama)
	{
		$jurusan = $this->type();
		$prodi="<option value='0'>---Prodi---</option>";
		$query = $this->db->query("SELECT * from universitas where univ = '$nama' and jenis = '$jurusan'");
		
		foreach ($query->result_array() as $data ){
		$prodi.= "<option value='$data[kode]"." - "."$data[nama]'>".$data['nama']."</option>";
		}
		return $prodi;
	}
		
}
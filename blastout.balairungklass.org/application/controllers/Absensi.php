<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Bangkok");
class Absensi extends CI_Controller {
	function __construct() {
        parent::__construct();
    }

	public function index(){
        $username = $this->input->get('username',true);
        $no_peserta = $this->input->get('nopes',true);

        if (!$no_peserta || !$username) {
            print_r("<p style='font-size:75px;font-weight: bold'>not found</p>");
            exit();
        }
        $times = $this->db->get('gmf_times')->result_array();
        if (date("Y-m-d H:i:s") < $times[0]['time']) {
            print_r("<p style='font-size:75px;font-weight: bold'>GMF 2019 Belum OPEN GATE, Silahkan Coba Lagi Setelah ".$times[0]['time']."</p>");
            exit();
        }
        $exist = $this->db->where(array('username' => $username,'no_peserta' => $no_peserta))->get('kartu')->result_array();
        if (!$exist) {
            print_r("<p style='font-size:75px;font-weight: bold'>QRCODE PALSU</p>");
            exit();
        }
        $existAbsence = $this->db->where(array('username' => $username,'no_peserta' => $no_peserta))->get('gmf_absences')->result_array();
        if (!$existAbsence) {
            $insert =  $this->db->insert('gmf_absences',array('username' => $username,'no_peserta' => $no_peserta));
            if ($insert) {
                print_r("<p style='font-size:75px;font-weight: bold'>Selamat datang di GMF 2019, silahkan masuk :) </p>");
                exit();
            }else{
                print_r("<p style='font-size:75px;font-weight: bold'>Terjadi Kesalahan, Coba Lagi!</p>");
                exit();
            }
        }else{
            print_r("<p style='font-size:75px;font-weight: bold'>Maaf Anda tidak boleh masuk, QR CODE ini sudah absen pada ".$existAbsence[0]['created_at']."</p>");
            exit();
        }
    }
}

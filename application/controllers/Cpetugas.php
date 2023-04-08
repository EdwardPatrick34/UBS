<?php
class CPetugas extends CI_Controller
{

    public function __construct() {
		parent::__construct(); 
		$this->load->model('Mpetugas'); 
	}

	public function Insertpetugas(){
		$petugas = $this->input->post('petugas');
		$nama = $this->input->post('nama_petugas');
		$jam_kerja = $this->input->post('jam_kerja');
		$jam_kerja_baru = $this->input->post('jam_kerja_baru');
		$usere = $this->input->post("usere");
		$aktif = $this->input->post("aktif");


		$this->Mpetugas->insertPetugas($petugas, $nama, $usere, $aktif, $jam_kerja, $jam_kerja_baru);
	}
	
    
        
}
?>
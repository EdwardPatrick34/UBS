<?php
class CPetugas extends CI_Controller
{

    public function __construct() {
		parent::__construct(); 
		$this->load->helper('url'); 
		$this->load->model('Mpetugas'); 
	}

	public function Insertpetugas(){
		

		$this->form_validation->set_rules('nama_petugas','nama_petugas', 'required', array ('required' => 'Nama harus diisi'));
		if($this->form_validation->run()==true){
			$nama = $this->input->post('nama_petugas');
			$petugas = $this->input->post('petugas');
			$jam_kerja = $this->input->post('jam_kerja');
			$jam_kerja_baru = $this->input->post('jam_kerja_baru');
			$usere = $this->input->post("usere");
			$aktif = $this->input->post("aktif");
			// $this->Mpetugas->insertPetugas($petugas, $nama, $usere, $aktif, $jam_kerja, $jam_kerja_baru);
			// echo "HALO SELAMAT MALAM";
		}
		
		
		// echo "HALO SELAMAT MALAM 2";
		// $this->load->view('template/headeradmin');
		// $this->load->view("admin/Tambah/tambahPetugas");
		// $this->load->view('template/footeradmin');

		$this->session->set_flashdata('errormsg', validation_errors());
		redirect('Page/tambahPetugas');
	}
	
    
        
}
?>
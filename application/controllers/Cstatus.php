<?php
class Cstatus extends CI_Controller
{

    public function __construct() {
		parent::__construct(); 
		$this->load->helper('url'); 
		$this->load->model('Mstatus');
		$this->load->library('form_validation');
	}

	public function InsertStatus(){
		$this->form_validation->set_rules('status','status', 'required', array ('required' => 'Nama harus diisi'));
		$this->form_validation->set_rules('nama_status', 'nama_status', 'required', array('required' => 'Harus mengisi kode petugas'));
		$this->form_validation->set_rules('usere', 'usere', 'required', array('required'=>'User harus diinputkan'));
		
		
		if($this->form_validation->run()==true){
			$nama = $this->input->post('nama_status');
			$status = $this->input->post('status');
			$usere = $this->input->post("usere");
			
			$this->Mstatus->insertStatus($status, $nama, $usere);
			$this->session->set_flashdata('msg','Berhasil menambahkan status');
			redirect('UBS/page/masterStatus');
		}
		
		
		// echo "HALO SELAMAT MALAM 2";
		// $this->load->view('template/headeradmin');
		// $this->load->view("admin/Tambah/tambahPetugas");
		// $this->load->view('template/footeradmin');

		$this->session->set_flashdata('errormsg', validation_errors());
		redirect('UBS/page/tambahStatus');
	}
	
    public function editPetugas(){

	}

	public function deletePetugas($Petugas){
		$this->Mpetugas->deletePetugas($Petugas);
		$this->session->set_flashdata('msg','Berhasil menghapus data petugas');
		redirect('UBS/page/masterStatus');
	}
        
}
?>
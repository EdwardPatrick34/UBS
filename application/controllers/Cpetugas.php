<?php
class CPetugas extends CI_Controller
{

    public function __construct() {
		parent::__construct(); 
		$this->load->helper('url'); 
		$this->load->model('Mpetugas');
		$this->load->library('form_validation');
	}


	public function MasterPetugas(){
		$this->load->view('template/headeradmin');
	  
		$param['datapetugas'] = $this->Mpetugas->getdatapetugas(); 
	  
		$this->load->view('admin/Master/masterPetugas', $param);
		$this->load->view('template/footer');
	}

	public function Insertpetugas(){
		$this->form_validation->set_rules('nama_petugas','nama_petugas', 'required', array ('required' => 'Nama harus diisi'));
		$this->form_validation->set_rules('petugas', 'petugas', 'required', array('required' => 'Harus mengisi kode petugas'));
		$this->form_validation->set_rules('usere', 'usere', 'required', array('required'=>'User harus diinputkan'));
		$this->form_validation->set_rules('aktif', 'aktif', 'required', array('required'=>'Harus diinputkan user aktif(1) atau tidak(0)'));
		$this->form_validation->set_rules('jam_kerja', 'jam_kerja', 'required', array('required'=>'Jam Kerja harus diinputkan'));
		$this->form_validation->set_rules('jam_kerja_baru', 'jam_kerja_baru', 'required', array('required'=>'Jam Kerja Baru harus diinputkan'));
		
		if($this->form_validation->run()==true){
			$nama = $this->input->post('nama_petugas');
			$petugas = $this->input->post('petugas');
			$jam_kerja = $this->input->post('jam_kerja');
			$jam_kerja_baru = $this->input->post('jam_kerja_baru');
			$usere = $this->input->post("usere");
			$aktif = $this->input->post("aktif");
			$this->Mpetugas->insertPetugas($petugas, $nama, $usere, $aktif, $jam_kerja, $jam_kerja_baru);
			$this->session->set_flashdata('msg','Berhasil menambahkan petugas');
			redirect(base_url('page/masterPetugas'));
		}
		
		
		// echo "HALO SELAMAT MALAM 2";
		// $this->load->view('template/headeradmin');
		// $this->load->view("admin/Tambah/tambahPetugas");
		// $this->load->view('template/footeradmin');

		$this->session->set_flashdata('errormsg', validation_errors());
		redirect('page/tambahPetugas');
	}

	public function HEditpetugas(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Edit/editPetugas');
		$this->load->view('template/footer');
	}
	
    public function editPetugas(){

	}

	

	public function deletePetugas($Petugas){
		$this->Mpetugas->deletePetugas($Petugas);
		$this->session->set_flashdata('msg','Berhasil menghapus data petugas');
		redirect('page/masterPetugas');
	}
        
}
?>

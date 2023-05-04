<?php 


class CJenisComplain extends CI_Controller{


	public function __construct() {
		parent::__construct(); 
		$this->load->model('Mpetugas'); 
		$this->load->model('Mjeniscomplain');
		$this->load->model('Mstatus');
		$this->load->model('McompB');
		$this->load->helper('url'); 
		$this->load->library('form_validation');
 
	}

	public function MasterJenisComplain(){
		$this->load->view('template/headeradmin');
		
		$param['dataCompB'] = $this->McompB->getdatacompB();
		$param['dataComplain'] = $this->Mjeniscomplain->getdatacomplain();
		
		$this->load->view('admin/Master/masterJenisComplain', $param);
		$this->load->view('template/footer');
	}


	public function HEditJenisComplain(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Edit/editJenisComplain');
		$this->load->view('template/footer');
		
	}

	public function insertjeniscomplain(){
		$this->form_validation->set_rules('jenis_complain','jenis_complain','required',array('required'=>'jenis_complain tidak boleh kosong'));
		$this->form_validation->set_rules('nama_complain', 'nama_complain', 'required', array('required'=>'nama_complain tidak boleh kosong'));
		$this->form_validation->set_rules('sub_complain','sub_complain','required', array('required'=>'sub complain tidak boleh kosong'));
		$this->form_validation->set_rules('nomor_complain','nomor_complain','required',array('required'=>'nomor_complain tidak boleh kosong'));
		$this->form_validation->set_rules('usere','usere','required',array('required'=>'user tidak boleh kosong'));

		if($this->form_validation->run() == true){
			$jenis_complain = $this->input->post('jenis_complain');
			$nama_complain = $this->input->post('nama_complain');
			$nomor_complain = $this->input->post('nomor_complain');
			$sub_complain = $this->input->post('sub_complain');
			$usere = $this->input->post("usere");

			$this->Mjeniscomplain->insertComplain($jenis_complain, $nomor_complain, $nama_complain, $usere, $sub_complain);
			$this->session->set_flashdata('msg','Berhasil menambahkan jenis complain');
			redirect(base_url('CJenisComplain/masterJenisComplain'));
		}

		$this->session->set_flashdata('errormsg', validation_errors());
		redirect(base_url('CRAdmin/tambahJenisComplain'));
	}

	public function deleteJenisComplain($id){
		$this->Mjeniscomplain->deleteComplain($id);
		$this->session->set_flashdata('msg','Berhasil menghapus data jenis complain');
		redirect(base_url('CJenisComplain/masterJenisComplain'));
	}

	public function editJenisComplain(){
		$this->form_validation->set_rules('jenis_complain','jenis_complain','required',array('required'=>'jenis_complain tidak boleh kosong'));
		$this->form_validation->set_rules('sub_complain','sub_complain','required', array('required'=>'sub complain tidak boleh kosong'));
		$this->form_validation->set_rules('nama_complain', 'nama_complain', 'required', array('required'=>'nama_complain tidak boleh kosong'));
		$this->form_validation->set_rules('nomor_complain','nomor_complain','required',array('required'=>'nomor_complain tidak boleh kosong'));
		$this->form_validation->set_rules('usere','usere','required',array('required'=>'user tidak boleh kosong'));

		if($this->form_validation->run() == true){
			$jenis_complain = $this->input->post('jenis_complain');
			$nama_complain = $this->input->post('nama_complain');
			$nomor_complain = $this->input->post('nomor_complain');
			$sub_complain = $this->input->post('sub_complain');
			$usere = $this->input->post("usere");

			$this->Mjeniscomplain->editComplain($jenis_complain, $sub_complain ,$nomor_complain, $nama_complain, $usere);
			$this->session->set_flashdata('msg','Berhasil mengedit jenis complain');
			redirect(base_url('CJenisComplain/masterJenisComplain'));
		}

		$this->session->set_flashdata('msg', validation_errors());
		redirect(base_url('CJenisComplain/masterJenisComplain'));
	}

	public function getjeniscomplainbyid($jenis_complain){
		$this->load->view('template/headeradmin');
		$param['dataCompB'] = $this->McompB->getdatacompB();
		$param['dataComplain'] = $this->Mjeniscomplain->getjeniscomplainbyid($jenis_complain);
		$this->load->view('admin/Edit/editJenisComplain', $param);
		$this->load->view('template/footer');
	}
}
?>

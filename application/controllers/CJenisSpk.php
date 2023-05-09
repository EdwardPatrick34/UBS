<?php 

class CJenisSpk extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mjenisspk');
		$this->load->model('McompC');
		$this->load->model('MspkD');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	public function MasterJenisSpk(){
		$this->load->view('template/headeradmin');

		$param['datajenisspk'] = $this->Mjenisspk->getdatajenisspk();
		$this->load->view('admin/Master/masterJenisSpk', $param);
		$this->load->view('template/footer');
	}

	public function insertjenisspk(){
		$this->form_validation->set_rules('jenis_spk','jenis_spk','required', array('required'=>'Jenis SPK tidak boleh kosong'));
		$this->form_validation->set_rules('no_spk','no_spk','required',array('required'=>'Nomor Spk tidak boleh kosong'));
		$this->form_validation->set_rules('no_complain','no_complain','required',array('required'=>'Nomor Complain tidak boleh kosong'));
		$this->form_validation->set_rules('sub_spk','sub_spk','required',array('required'=>'Sub Spk tidak boleh kosong'));
		$this->form_validation->set_rules('sub_complain','sub_complain','required',array('required'=>'Sub Complain tidak boleh kosong'));

		if($this->form_validation->run() == true){
			$jenis_spk = $this->input->post('jenis_spk');
			$no_spk = $this->input->post('no_spk');
			$sub_spk = $this->input->post('sub_spk');
			$no_complain = $this->input->post('no_complain');
			$sub_complain = $this->input->post('sub_complain');
			$nama_spk = $this->input->post('nama_spk');
			$menit = $this->input->post('menit');
			$usere = $this->input->post('usere');

			$this->Mjenisspk->insertjenisspk($jenis_spk, $no_spk, $sub_spk, $no_complain, $sub_complain, $nama_spk, $menit, $usere);
			$this->session->set_flashdata('msg','Berhasil menambahkan jenis spk');
			redirect(base_url('CJenisSpk/masterJenisSpk'));
			
		}

		$this->session->set_flashdata('errormsg', validation_errors());
		redirect(base_url('CRAdmin/tambahJenisSpk'));
	}

	public function deletejenisspk($id){
		$this->Mjenisspk->deletejenisspk($id);
		$this->session->set_flashdata('msg','Berhasil menghapus data jenis spk');
		redirect(base_url('CJenisSpk/masterJenisSpk'));
	}

	public function HEditJenisSpk(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Edit/editJenisSpk');
		$this->load->view('template/footer');
	}
	
	public function getjenisspkbyid($id){
		$this->load->view('template/headeradmin');
		
		$param['datajenisspk'] = $this->Mjenisspk->getdatabyid($id);
		$this->load->view('admin/Edit/editJenisSpk');
		$this->load->view('template/footer');
	}


	public function editjenisspk(){
		$this->form_validation->set_rules('jenis_spk','jenis_spk','required', array('required'=>'Jenis SPK tidak boleh kosong'));
		$this->form_validation->set_rules('no_spk','no_spk','required',array('required'=>'Nomor Spk tidak boleh kosong'));
		$this->form_validation->set_rules('no_complain','no_complain','required',array('required'=>'Nomor Complain tidak boleh kosong'));
		$this->form_validation->set_rules('sub_spk','sub_spk','required',array('required'=>'Sub Spk tidak boleh kosong'));
		$this->form_validation->set_rules('sub_complain','sub_complain','required',array('required'=>'Sub Complain tidak boleh kosong'));

		if($this->form_validation->run() == true){
			$jenis_spk = $this->input->post('jenis_spk');
			$no_spk = $this->input->post('no_spk');
			$sub_spk = $this->input->post('sub_spk');
			$no_complain = $this->input->post('no_complain');
			$sub_complain = $this->input->post('sub_complain');
			$nama_spk = $this->input->post('nama_spk');
			$menit = $this->input->post('menit');
			$usere = $this->input->post('usere');

			$this->Mjenisspk->editjenisspk($jenis_spk, $no_spk, $sub_spk, $no_complain, $sub_complain, $nama_spk, $menit, $usere);
			$this->session->set_flashdata('msg','Berhasil menambahkan jenis spk');
			redirect(base_url('CJenisSpk/masterJenisSpk'));
			
		}

		$this->session->set_flashdata('msg', validation_errors());
		redirect(base_url('CJenisSpk/masterJenisSpk'));
	}
}


?>

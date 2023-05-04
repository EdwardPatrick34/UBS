<?php 

class CJenisSpk extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mjenisspk');
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

}


?>

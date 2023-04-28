<?php 


class CJenisComplain extends CI_Controller{


	public function __construct() {
		parent::__construct(); 
		$this->load->model('Mpetugas'); 
		$this->load->model('Mjeniscomplain');
		$this->load->model('Mstatus');
		$this->load->helper('url'); 
 
	}

	public function MasterJenisComplain(){
		$this->load->view('template/headeradmin');

		$param['dataComplain'] = $this->Mjeniscomplain->getdatacomplain();
		
		$this->load->view('admin/Master/masterJenisComplain', $param);
		$this->load->view('template/footer');
	}


	public function HEditJenisComplain(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Edit/editJenisComplain');
		$this->load->view('template/footer');
		
	}

	
}
?>

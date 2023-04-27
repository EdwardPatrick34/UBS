<?php 

class CJenisSpk extends CI_Controller{

	public function MasterJenisSpk(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Master/masterJenisSpk');
		$this->load->view('template/footer');
	}

}


?>

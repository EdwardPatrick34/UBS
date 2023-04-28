<?php 

class CUnit extends CI_Controller{

	public function MasterUnit(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Master/masterUnit');
		$this->load->view('template/footer');
	}


	public function HEditUnit(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Edit/editUnit');
		$this->load->view('template/footer');
	}

	

	

}

?>

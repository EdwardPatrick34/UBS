<?php 

class CRepair extends CI_Controller{

	public function MasterRepair(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Master/masterRepair');
		$this->load->view('template/footer');
	}


	public function HEditRepair(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Edit/editRepair');
		$this->load->view('template/footer');
	}

	
}

?>

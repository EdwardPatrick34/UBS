<?php

class CRAdminSIT extends CI_Controller{

	public function HomeAdminSIT(){
		$this->load->view('template/headeradminSIT');
		$this->load->view('adminSIT/homeadminSIT');
		$this->load->view('template/footer');
	}


	public function PGantiPass(){
		$this->load->view('template/headeradminSIT');
		$this->load->view('adminSIT/gantipassword');
		$this->load->view('template/footer');
	}
}

?>

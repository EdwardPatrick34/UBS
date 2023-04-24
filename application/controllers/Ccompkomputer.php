<?php

class Ccompkomputer extends CI_Controller{

	public function List(){
		$this->load->view('template/headeradminSIT');
		$this->load->view('adminSIT/Complain/ListComplain');
		$this->load->view('template/footer');
	}

	public function PageAdd(){

	}

	public function CreateComplain(){
		$this->load->view('template/headeradminSIT');
		$this->load->view('adminSIT/Complain/CreateComplain');
		$this->load->view('template/footer');
	}

}

?>

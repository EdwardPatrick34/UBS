<?php

class Pindahhalaman extends CI_Controller{


	public function MasterUnit(){
		$this->load->view('admin/masterUnit');
	}

	public function TambahJenisUnit(){
		$this->load->view("admin/tambahJenisUnit");
	}


}

?>

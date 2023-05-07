<?php

class CRTeknisi extends CI_Controller{

	public function HomeTeknisi(){
		$this->load->view('template/headerTeknisi');
		$this->load->view('teknisi/homeTeknisi');
		$this->load->view('template/footer');
	}


	public function MonitoringComplain(){
		$this->load->view('template/headerTeknisi');
		$this->load->view("teknisi/edpinfra/monitoringComplain");
		$this->load->view('template/footer');
	}

	
}

?>

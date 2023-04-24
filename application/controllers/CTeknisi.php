<?php

class CTeknisi extends CI_Controller{

	public function HomeTeknisi(){
		$this->load->view('template/headerTeknisi');
		$this->load->view('teknisi/homeTeknisi');
		$this->load->view('template/footer');
	}
}

?>

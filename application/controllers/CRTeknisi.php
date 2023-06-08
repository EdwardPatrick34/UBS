<?php

class CRTeknisi extends CI_Controller{

	public function __construct() {
		parent::__construct(); 
		$this->load->model('McompB');
		$this->load->model('Mpetugas'); 
		$this->load->model('Mjeniscomplain');
		$this->load->model('McompC');
		$this->load->model('MspkD');
		$this->load->model('MspkA');
		$this->load->model('Mstatus');
		$this->load->model('McompA');
		$this->load->model('Mjenisspk');
		$this->load->model('Mpetugas');
		$this->load->model('Muser');
		$this->load->helper('url'); 
		

 
	}

	public function HomeTeknisi(){
		$this->load->view('template/headerTeknisi');
		$this->load->view('teknisi/homeTeknisi');
		$this->load->view('template/footer');
	}


	
	// STart monitoring COmplain
	public function MonitoringComplain(){
		$this->load->view('template/headerTeknisi');
		$param["data"] = $this->McompA->getdatacompA();
		
		$this->load->view("teknisi/edpinfra/monitoringComplain/Complain", $param);
		$this->load->view('template/footer');
	}

	public function FilterMonitoringComplain(){

		$this->load->view('template/headerTeknisi');
		$status = $this->input->post("statusc");

		

		//jadi di sini halaman akan berganti sesuai dengan status yang dipilih
		if ($status == 1) {
			$param["data"] = $this->McompA->getdatacompA();	
			
			$this->load->view("teknisi/edpinfra/monitoringComplain/Complain", $param);
		}
		else if($status == 2){
			$param["stat"] = "Spk";
			$param["data"] = $this->MspkA->getMCspk();
			$this->load->view("teknisi/edpinfra/monitoringComplain/spk", $param);
		}
		else if($status == 3){
			$param["stat"] = "Pending";
			$param["data"] = $this->MspkA->getMCpending();
			$this->load->view("teknisi/edpinfra/monitoringComplain/spk", $param);

		}

		else if($status == 4){
			$param["stat"] = "Selesai";
			$param["data"] = $this->MspkA->getMCpending();
			$this->load->view("teknisi/edpinfra/monitoringComplain/spk", $param);

		}

		$this->load->view('template/footer');
	}

	// ENd monitoring complain

	
}

?>

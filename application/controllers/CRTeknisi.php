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

	public function listmonitorspkselesai(){
		$this->load->view('template/headerTeknisi');
		$status = $this->input->post("statusc");
		$param['data'] = $this->McompA->getsudahspk();
		$this->load->view('admin/infrastruktur/spkCompSelesaiTeknisi', $param);
		$this->load->view('template/footer');
	}
	
	public function lihatdetailselesaicomplainteknisi(){
		$no_complain = $_GET['nocomp'];
		$param['key'] = $no_complain;
		$this->load->view('template/headerTeknisi');
		$param["dataheader"] = $this->McompA->cariComplain1($no_complain);
		$param["datadetail1"] = $this->McompA->CariComplain2($no_complain);
		$param["datadetail2"] = $this->McompA->CariComplain3($no_complain);
		$this->load->view('admin/infrastruktur/hasilcomplainselesaiteknisi', $param);
		$this->load->view('template/footer');
	}

	public function ubahselesaicomplainteknisi(){
		$no_complain = $_GET['nocomp'];
		$keterangan = $this->input->post('ket_pending');
		$tanggal = date('Y:m:d H:i:s');
		$arrtanggal = explode(" ", $tanggal);
		$tanggalpending = $arrtanggal[0]; 
		$jampending = $arrtanggal[1];

		$arrjam = explode(":", $jampending);
		$jam = $arrjam[0];
		$menit = $arrjam[1];
		$jamtotal = $jam.":".$menit;
		
		
		$this->McompA->ubahSelesai($no_complain);
		$this->toastr->success('Berhasil mengubah status complain menjadi selesai');
		redirect(base_url('/CRTeknisi/listmonitorspkselesai'));

		$this->session->unset_userdata('no_complain');
	}
}

?>

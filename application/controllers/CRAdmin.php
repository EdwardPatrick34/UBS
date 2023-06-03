<?php

class CRAdmin extends CI_Controller{
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
		$this->load->helper('url'); 
 
	}

	public function HomeAdminIT(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/homeadminIT');
		$this->load->view('template/footer');
	}

	public function MasterUser(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Master/masterUser');
		$this->load->view('template/footer');
	}

	

	public function MasterJenisUnit(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Master/masterJenisUnit');
		$this->load->view('template/footer');
	}


	public function MasterPetugas(){
		$this->load->view('template/headeradmin');
	  
		$param['datapetugas'] = $this->Mpetugas->getdatapetugas(); 
	  
		$this->load->view('admin/Master/masterPetugas', $param);
		$this->load->view('template/footer');
	   }

	public function MasterJenisComplain(){
		$this->load->view('template/headeradmin');

		$param['dataComplain'] = $this->Mjeniscomplain->getdatacomplain();
		
		$this->load->view('admin/Master/masterJenisComplain', $param);
		$this->load->view('template/footer');
	}

	public function MasterStatus(){
		$this->load->view('template/headeradmin');

		$param['datastatus'] = $this->Mstatus->getdatastatus();
		
		$this->load->view('admin/Master/masterStatus', $param);
		$this->load->view('template/footer');
	}

	public function MasterRepair(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Master/masterRepair');
		$this->load->view('template/footer');
	}

	public function MasterJenisSpk(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Master/masterJenisSpk');
		$this->load->view('template/footer');
	}


	public function TambahJenisUnit(){
		$this->load->view('template/headeradmin');
		$this->load->view("admin/Tambah/tambahJenisUnit");
		$this->load->view('template/footer');
	}

	public function TambahPetugas(){
		$this->load->view('template/headeradmin');
		$this->load->view("admin/Tambah/tambahPetugas");
		$this->load->view('template/footer');
	}

	public function TambahJenisComplain(){
		$this->load->view('template/headeradmin');

		$param['datacompB'] = $this->McompB->getdatacompB();
		$this->load->view("admin/Tambah/tambahJenisComplain", $param);
		$this->load->view('template/footer');
	}

	public function TambahStatus(){
		$this->load->view('template/headeradmin');
		$this->load->view("admin/Tambah/tambahStatus");
		$this->load->view('template/footer');
	}
	public function TambahRepair(){
		$this->load->view('template/headeradmin');
		$this->load->view("admin/Tambah/tambahRepair");
		$this->load->view('template/footer');
	}

	public function TambahUnit(){
		$this->load->view('template/headeradmin');
		$this->load->view("admin/Tambah/tambahUnit");
		$this->load->view('template/footer');
	}

	public function TambahJenisSpk(){
		$this->load->view('template/headeradmin');

		$param['datacompc'] = $this->McompC->getdatacompC();
		$param['dataspkd'] = $this->MspkD->getdataspkD();
		$this->load->view("admin/Tambah/tambahJenisSpk", $param);
		$this->load->view('template/footer');
	}

	public function TambahUser(){
		$this->load->view('template/headeradmin');
		$this->load->view("admin/Tambah/tambahUser");
		$this->load->view('template/footer');
	}

	

	public function CreateSpk(){
		$this->load->view('template/headeradmin');
		$param['datacomplain'] = $this->McompA->getdatacompA(); 
		$param['datajenisspk'] = $this->Mjenisspk->getdatajenisspk();
		$param['datapetugas'] = $this->Mpetugas->getdatapetugas();
		$this->load->view("admin/infrastruktur/spkInfra", $param);
		$this->load->view('template/footer');
	}

	// =============================================================
	// << Start Monitoring Complain >>

	public function MonitoringComplain(){
		$this->load->view('template/headeradmin');
		$param["data"] = $this->McompA->getdatacompA();
		$this->load->view("admin/infrastruktur/monitoringComplain/Complain", $param);
		$this->load->view('template/footer');
	}


	public function FilterMonitoringComplain(){

		$this->load->view('template/headeradmin');
		$status = $this->input->post("statusc");

		//jadi di sini halaman akan berganti sesuai dengan status yang dipilih
		if ($status == 1) {
			$param["data"] = $this->McompA->getdatacompA();	
			$this->load->view("admin/infrastruktur/monitoringComplain/Complain", $param);
		}
		else if($status == 2){
			$param["data"] = $this->MspkA->getMCspk();
			$this->load->view("admin/infrastruktur/monitoringComplain/spk", $param);
		}

		$this->load->view('template/footer');
	}
	

	// << end monitoring complain >>
	// =============================================================


	//==============================================================
	// Start Laporan History Complain
	public function LaporanHistoryComplain(){
		$this->load->view('template/headeradmin');
		$this->load->view("admin/Laporan/historycomplain");
		$this->load->view('template/footer');
	}

	public function SearchLHistoryComplain(){
		
		$tglawal = $this->input->post("tglawal");
		$tglakhir = $this->input->post("tglakhir");
		  // Assuming you are retrieving the value from a form submission
		$tglawalstring = date("m/d/Y", strtotime($tglawal));
		$tglakhirstring = date("m/d/Y", strtotime($tglakhir));
		


		$this->load->view('template/headeradmin');

		$param['dataHComplain'] = $this->McompA->SLHComplain($tglawalstring, $tglakhirstring);
		$this->load->view('admin/Laporan/historycomplain', $param);
		$this->load->view('template/footer');
	}

		// untuk pindah ke halaman print yang ada
	public function PHPrintHC(){

		$tglAwal = $this->input->get('tglawal');
    	$tglAkhir = $this->input->get('tglakhir');
		$param['dataHComplain'] = $this->McompA->SLHComplain($tglAwal, $tglAkhir);
		$this->load->view("admin/PrintLaporan/historycomplain", $param);
	}

	// End laporan History Complain
	//==============================================================

	// Monitor 
	public function listmonitorspkpending(){
		$this->load->view('template/headeradmin');
		$this->load->view('');
		$this->load->view('template/footer');
	}

	public function listmonitorspkselesai(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/infrastruktur/spkComplainPending');
		$this->load->view('template/footer');
	}

	public function listmonitorspkbatal(){
		$this->load->view('template/headeradmin');
		$this->load->view('');
		$this->load->view('template/footer');
	}
}
?>


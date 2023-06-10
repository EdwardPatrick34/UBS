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
		$this->load->model('Muser');
		$this->load->model('Mlaporan');
		$this->load->helper('url'); 
		

 
	}

	public function HomeAdminIT(){
		$this->load->view('template/headeradmin');
		$param["datadivisi"] = $this->McompA->Cpd();
		$param["title"]= "Jumlah Complain Per Divisi";
		$this->load->view('admin/homeadminIT', $param);
		$this->load->view('template/footer');
	}

	public function MasterUser(){
		$this->load->view('template/headeradmin');
		$param['datauser'] = $this->Muser->getAllUser(); 
		$this->load->view('admin/Master/masterUser', $param);
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

		$no = $this->input->post('nocomp');
		
		$this->load->view('template/headeradmin');
		$param['datacomplain'] = $this->McompA->getdatacompA(); 
		$param['datajenisspk'] = $this->Mjenisspk->getdatajenisspk();
		$param['datapetugas'] = $this->Mpetugas->getdatapetugas();
		$param['nocomp'] = $no;
		$this->load->view("admin/infrastruktur/spkInfra", $param);
		$this->load->view('template/footer');
	}

	public function listComplain(){
		$this->load->view('template/headeradmin');
		$param["data"] = $this->McompA->getdatacompA();
		
		$this->load->view("admin/infrastruktur/listComplain", $param);
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
			$param["stat"] = "Spk";
			$param["data"] = $this->MspkA->getMCspk();
			$this->load->view("admin/infrastruktur/monitoringComplain/spk", $param);
		}
		else if($status == 3){
			$param["stat"] = "Pending";
			$param["data"] = $this->MspkA->getMCpending();
			$this->load->view("admin/infrastruktur/monitoringComplain/spk", $param);

		}

		else if($status == 4){
			$param["stat"] = "Selesai";
			$param["data"] = $this->MspkA->getMCpending();
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
		$param["data"] = $this->McompA->LHComplain();
		$this->load->view("admin/Laporan/historycomplain", $param);
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
		$param['tglawal'] = $tglawalstring;
		$param['tglakir'] = $tglakhirstring;
		$this->load->view('admin/Laporan/historycomplain', $param);
		$this->load->view('template/footer');
	}

		// untuk pindah ke halaman print yang ada
	public function PHPrintHC(){

		

	}

	// End laporan History Complain
	//==============================================================

	//StartLaporan Uraian Complain Divisi
	public function UraianComplainDivisi(){
		$this->load->view('template/headeradmin');
		// $param["data"] = $this->McompA->LHComplain();
		$this->load->view("admin/Laporan/uraianComplainDivisi");
		$this->load->view('template/footer');
	}

	public function SearchLUCDivisi(){
		$tglawal = $this->input->post('tglawal');
		$tglakhir = $this->input->post('tglakhir');
		$divisi = $this->input->post('divisi');

		$tglawalstring = date("m/d/Y", strtotime($tglawal));
		$tglakhirstring = date("m/d/Y", strtotime($tglakhir));

		$cek = false;
		
		if ($tglawal== null) {
			# code...
			$pesan1= "Tanggal awal tidak boleh kosong";
			$cek = true;
		}
		if ($tglakhir == null) {
			# code...
			$pesan2= "Tanggal akhir tidak boleh kosong";
			$cek = true;
		}
		if ($divisi == null) {
			# code...
			$pesan3= "Divisi tidak boleh kosong";
			$cek = true;
		}
		if ($tglawal > $tglakhir) {
			# code...
			$pesan4= "Tanggal akhir tidak boleh lebih kecil dari tanggal awal";
			$cek = true;
		}

		if ($cek == true) {
			# code...
			$this->toastr->error("$pesan1 $pesan2 $pesan3 $pesan4");
			redirect(base_url('CRAdmin/UraianComplainDivisi'));
		}
		else{
			$this->load->view('template/headeradmin');
			$param["data"] = $this->McompA->LUCDivisi($tglawalstring, $tglakhirstring, $divisi);
			$param['tglawal'] = $tglawalstring;
			$param['tglakir'] = $tglakhirstring;
			$param['divisi'] = $divisi;
			$this->load->view("admin/Laporan/uraianComplainDivisi", $param);
			$this->load->view('template/footer');
		}
		

	}
	
	// EndLaporan Uraian Complain Divisi

	// Start laporan Bulanan Infrastruktur

	public function LaporanBulananInfrastruktur(){
		$this->load->view('template/headeradmin');
		// $param["data"] = $this->McompA->LHComplain();
		$this->load->view("admin/Laporan/bulananInfrastruktur");
		$this->load->view('template/footer');
	}

	public function SearchLBI(){
		$tglawal = $this->input->post('tglawal');
		$tglakhir = $this->input->post('tglakhir');
		

		$tglawalstring = date("m/d/Y", strtotime($tglawal));
		$tglakhirstring = date("m/d/Y", strtotime($tglakhir));

		$cek = false;
		
		if ($tglawal== null) {
			# code...
			$pesan1= "Tanggal awal tidak boleh kosong";
			$cek = true;
		}
		if ($tglakhir == null) {
			# code...
			$pesan2= "Tanggal akhir tidak boleh kosong";
			$cek = true;
		}
		
		if ($tglawal > $tglakhir) {
			# code...
			$pesan3= "Tanggal akhir tidak boleh lebih kecil dari tanggal awal";
			$cek = true;
		}

		if ($cek == true) {
			# code...
			$this->toastr->error("$pesan1 $pesan2 $pesan3");
			redirect(base_url('CRAdmin/LaporanBulananInfrastruktur'));
		}
		else{
			$this->load->view('template/headeradmin');
			$param["data"] = $this->McompA->LBInfrastruktur($tglawalstring, $tglakhirstring);
			$param['tglawal'] = $tglawalstring;
			$param['tglakir'] = $tglakhirstring;
			
			$this->load->view("admin/Laporan/bulananInfrastruktur", $param);
			$this->load->view('template/footer');
			
		}
	}

	// END laporan Bulanan Infrastruktur

	

	// Monitor 
	public function listmonitorspkpending(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/infrastruktur/spkComplainPending');
		$this->load->view('template/footer');
	}

	public function listmonitorspkselesai(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/infrastruktur/spkComplainSelesai');
		$this->load->view('template/footer');
	}

	public function listmonitorspkbatal(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/infrastruktur/spkComplainBatal');
		$this->load->view('template/footer');
	}
}
?>


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
		$param["data"] = $this->McompA->getdatacompANonSPK();
		
		$this->load->view("admin/infrastruktur/listComplain", $param);
		$this->load->view('template/footer');
	}

	// =============================================================
	// << Start Monitoring Complain >>

	public function MonitoringComplain(){
		$this->load->view('template/headeradmin');
		$param["data"] = $this->McompA->getMC();
		
		$this->load->view("admin/infrastruktur/monitoringComplain/Complain", $param);
		$this->load->view('template/footer');
	}


	public function FilterMonitoringComplain(){

		$this->load->view('template/headeradmin');
		$status = $this->input->post("statusc");

		

		//jadi di sini halaman akan berganti sesuai dengan status yang dipilih
		if ($status == 1) {
			$param["data"] = $this->McompA->getMC();	
			
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
			$param["data"] = $this->MspkA->getMCselesai();
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
			$param["data"] = $this->Mlaporan->LBInfrastruktur($tglawalstring, $tglakhirstring);
			$param['tglawal'] = $tglawalstring;
			$param['tglakir'] = $tglakhirstring;
			
			$this->load->view("admin/Laporan/bulananInfrastruktur", $param);
			$this->load->view('template/footer');
			
		}
	}

	// END laporan Bulanan Infrastruktur


	//Start Laporan Kegiatan Infrastruktur

	public function LaporanKegiatanInfrastruktur(){
		$this->load->view('template/headeradmin');
		// $param["data"] = $this->McompA->LHComplain();
		$this->load->view("admin/Laporan/kegiatanInfrastruktur");
		$this->load->view('template/footer');
	}


	public function SearchLKInfrastruktur(){
		$tglawal = $this->input->post('tglawal');
		$tglakhir = $this->input->post('tglakhir');
		$jenisunit = $this->input->post('jenisunit');

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
			$pesan4= "Tanggal akhir tidak boleh lebih kecil dari tanggal awal";
			$cek = true;
		}
		if ($jenisunit== null) {
			# code...
			$pesan3= "jenis unit tidak boleh kosong";
			$cek = true;
		}

		if ($cek == true) {
			# code...
			$this->toastr->error("$pesan1 $pesan2 $pesan3 $pesan4");
			redirect(base_url('CRAdmin/LaporanKegiatanInfrastruktur'));
		}
		else{
			$this->load->view('template/headeradmin');
			$param["data"] = $this->Mlaporan->LKInfrastruktur($tglawalstring, $tglakhirstring, $jenisunit);
			$param['tglawal'] = $tglawalstring;
			$param['tglakir'] = $tglakhirstring;
			$param['jenisunit'] = $jenisunit;
			$this->load->view("admin/Laporan/kegiatanInfrastruktur", $param);
			$this->load->view('template/footer');
			
		}
	}

	//END Laporan Kegiatan Infrastruktur


	// START LAPORAN PENDINGAN PER TEKNISI

	public function LaporanPendinganTeknisi(){

		$this->load->view('template/headeradmin');
		// $param["data"] = $this->McompA->LHComplain();
		$this->load->view("admin/Laporan/pendinganTeknisi");
		$this->load->view('template/footer');

	}

	public function SearchLPTeknisi(){

		$teknisi = $this->input->post('teknisi');

		$cek = false;
		
		if ($teknisi== null) {
			# code...
			$pesan1= "Teknisi tidak boleh kosong";
			$cek = true;
		}

		if ($cek == true) {
			# code...
			$this->toastr->error("$pesan1");
			redirect(base_url('CRAdmin/LaporanPendinganTeknisi'));
		}
		else{
			$this->load->view('template/headeradmin');
			$param["data"] = $this->Mlaporan->LPTeknisi($teknisi);
			$param['teknisi'] = $teknisi;
			
			$this->load->view("admin/Laporan/pendinganTeknisi", $param);
			$this->load->view('template/footer');
		}
	}


	// END LAPORAN PENDINGAN PER TEKNISI


	//START LAPORAN BARANG RUSAK
	public function LaporanBarangRusak(){
		$this->load->view('template/headeradmin');
		// $param["data"] = $this->McompA->LHComplain();
		$this->load->view("admin/Laporan/barangRusak");
		$this->load->view('template/footer');
	}

	public function SearchLBRusak(){

		$tglawal = $this->input->post('tglawal');
		$tglakhir = $this->input->post('tglakhir');
		$jenisunit = $this->input->post('jenisunit');
		$kodeunit = $this->input->post('kodeunit');
		$rusak = $this->input->post('rusak');
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
			$pesan5= "Tanggal akhir tidak boleh lebih kecil dari tanggal awal";
			$cek = true;
		}
		if ($jenisunit== null) {
			# code...
			$pesan3= "jenis unit tidak boleh kosong";
			$cek = true;
		}

		if ($kodeunit== null) {
			# code...
			$pesan4= "kode unit tidak boleh kosong";
			$cek = true;
		}

		if ($cek == true) {
			# code...
			$this->toastr->error("$pesan1 $pesan2 $pesan3 $pesan4 $pesan5");
			redirect(base_url('CRAdmin/LaporanBarangRusak'));
		}
		else{
			$this->load->view('template/headeradmin');
			$param["data"] = $this->Mlaporan->LBRusak($tglawalstring, $tglakhirstring, $jenisunit, $kodeunit, $rusak);
			$param['tglawal'] = $tglawalstring;
			$param['tglakir'] = $tglakhirstring;
			$param['jenisunit'] = $jenisunit;
			$param['kodeunit'] = $kodeunit;
			$param['rusak'] = $rusak;
			
			$this->load->view("admin/Laporan/barangRusak", $param);
			$this->load->view('template/footer');
		}
	}
	
	
	//START LAPORAN BARANG RUSAK




	// Monitor (gak kepape)
	public function listmonitorspkpending(){
		$this->load->view('template/headeradmin');
		$param["data"] = $this->McompA->getsudahspk();
		$this->load->view('admin/infrastruktur/spkComplainPending', $param);
		$this->load->view('template/footer');
	}

	public function filtermonitorspkbatal(){
		$this->load->view('template/headeradmin');
		$status = $this->input->post("statusc");

		if($status == 1)
		{
			$param["data"] = $this->McompA->getMC();
			$this->load->view('admin/infrastruktur/spkComplainBatal', $param);
		}
		else if($status == 2){
			$param["stat"] = "Spk";
			$param["data"] = $this->MspkA->getMCspk();
			$this->load->view("admin/infrastruktur/spkpending", $param);
		}
		$this->load->view('template/footer');
	}

	public function listmonitorspkselesai(){
		$this->load->view('template/headeradmin');
		$status = $this->input->post("statusc");
		$param['data'] = $this->McompA->getsudahspk();
		$this->load->view('admin/infrastruktur/spkComplainSelesai', $param);
		$this->load->view('template/footer');
	}

	public function listmonitorspkbatal(){
		$this->load->view('template/headeradmin');
		$param['data'] = $this->McompA->getsudahspk();
		$this->load->view('admin/infrastruktur/spkComplainBatal', $param);
		$this->load->view('template/footer');
	}

	public function listpendingkeselesai(){
		$this->load->view('template/headeradmin');
		$param['data'] = $this->McompA->getPending();
		$this->load->view('admin/infrastruktur/compPendingSelesai', $param);
		$this->load->view('template/footer');
	}

	public function spkStart(){
		$this->load->view('template/headeradmin');
		$param["data"] = $this->MspkA->getStartStop();
		$this->load->view("admin/infrastruktur/spkstartstop", $param);
		$this->load->view('template/footer');
	}

	public function filterstartstop(){
		$this->load->view('template/headeradmin');
		$status = $this->input->post("statusc");

		if($status == 1){
			$param["data"] = $this->MspkA->getStartStop();
			$this->load->view("admin/infrastruktur/spkstartstop", $param);
		}
		else if($status == 2){
			$param["data"] = $this->MspkA->getStop();
			$this->load->view("admin/infrastruktur/spkstop", $param);
		}
		$this->load->view('template/footer');
	}
}
?>


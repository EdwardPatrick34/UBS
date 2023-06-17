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
		$this->load->model('Mlaporan');
		$this->load->helper('url'); 
		$this->load->library('session');
		

 
	}

	public function HomeTeknisi(){
		$this->load->view('template/headerTeknisi');
		$this->load->view('teknisi/homeTeknisi');
		$this->load->view('template/footer');
	}


	
	// STart monitoring COmplain
	public function MonitoringComplain(){
		$this->load->view('template/headerTeknisi');
		$param["data"] = $this->MspkA->getMCspkTeknisi();
		$param["stat"] = "Spk";
		$this->load->view("teknisi/edpinfra/monitoringComplain/spk", $param);
		$this->load->view('template/footer');
	}

	public function FilterMonitoringComplain(){

		$this->load->view('template/headerTeknisi');
		$status = $this->input->post("statusc");

		

		//jadi di sini halaman akan berganti sesuai dengan status yang dipilih
		if ($status == 1) {
			$param["data"] = $this->McompA->getMC();	
			
			$this->load->view("teknisi/edpinfra/monitoringComplain/Complain", $param);
		}
		else if($status == 2){
			$param["stat"] = "Spk";
			$param["data"] = $this->MspkA->getMCspkTeknisi();
			$this->load->view("teknisi/edpinfra/monitoringComplain/spk", $param);
		}
		else if($status == 3){
			$param["stat"] = "Pending";
			$param["data"] = $this->MspkA->getMCpendingTeknisi();
			$this->load->view("teknisi/edpinfra/monitoringComplain/spk", $param);

		}

		else if($status == 4){
			$param["stat"] = "Selesai";
			$param["data"] = $this->MspkA->getMCselesaiTeknisi();
			$this->load->view("teknisi/edpinfra/monitoringComplain/spk", $param);

		}

		$this->load->view('template/footer');
	}

	// ENd monitoring complain

	public function listmonitorspkselesai(){
		$this->load->view('template/headerTeknisi');
		$status = $this->input->post("statusc");

		$user = $this->session->userdata('teknisi');
		$usere = $user->ID;
		// $nospk = $this->McompA->getNoSpk($usere);
		// foreach($petugas->result() as $row){$no_spk = $row;}

		$param['data'] = $this->McompA->getsudahspkteknisi();
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

	public function ubahrusakcomplainteknisi(){
		$no_complain = $_GET['nocomp'];
		$this->McompA->ubahRusak($no_complain);
		$this->toastr->success('Berhasil mengubah status complain menjadi rusak');
		redirect(base_url('/CRTeknisi/listmonitorspkselesai'));
	}

	public function LaporanHistoryComplain(){
		$this->load->view('template/headerTeknisi');
		$param["data"] = $this->Mlaporan->LHComplainTeknisi();
		$this->load->view("teknisi/laporan/historycomplain", $param);
		$this->load->view('template/footer');
	}

	public function detailComplain(){
		// $no_complain = $this->input->post("cariNoComplain");

		$no_complain = $_GET['nocomp'];

		$this->load->view('template/headerTeknisi');

		// $param["dataheader"] = $this->Mjenisspk->getdatajenisspk();
		$param["dataheader"] = $this->McompA->CariComplain1($no_complain);
		$param["datadetail1"] = $this->McompA->CariComplain2($no_complain);
		$param["datadetail2"] = $this->McompA->CariComplain3($no_complain);
		
		$this->load->view('teknisi/laporan/detailComplain', $param);
		$this->load->view('template/footer');
	}


	// Start laporan Bulanan Infrastruktur

	public function LaporanBulananInfrastruktur(){
		$this->load->view('template/headerTeknisi');
		// $param["data"] = $this->McompA->LHComplain();
		$this->load->view("teknisi/laporan/bulananInfrastruktur");
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
			redirect(base_url('CRTeknisi/LaporanBulananInfrastruktur'));
		}
		else{
			$this->load->view('template/headerTeknisi');
			$param["data"] = $this->Mlaporan->LBInfrastrukturTeknisi($tglawalstring, $tglakhirstring);
			$param['tglawal'] = $tglawalstring;
			$param['tglakir'] = $tglakhirstring;
			
			$this->load->view("teknisi/laporan/bulananInfrastruktur", $param);
			$this->load->view('template/footer');
			
		}
	}

	// END laporan Bulanan Infrastruktur


	// START LAPORAN PENDINGAN PER TEKNISI

	public function LaporanPendinganTeknisi(){
		$user = $this->session->userdata('teknisi');
		$usere = $user->ID;
		$this->load->view('template/headerTeknisi');
		$param["idteknisi"] = $usere;
		$this->load->view("teknisi/laporan/pendinganTeknisi", $param);
		$this->load->view('template/footer');

	}

	public function SearchLPTeknisi(){
		$user = $this->session->userdata('teknisi');
		$usere = $user->ID;
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
			redirect(base_url('CRTeknisi/LaporanPendinganTeknisi'));
		}
		else{
			$this->load->view('template/headerTeknisi');
			$param["data"] = $this->Mlaporan->LPRoleTeknisi($teknisi);
			$param['teknisi'] = $teknisi;
			$param['idteknisi'] = $teknisi;
			
			$this->load->view("teknisi/laporan/pendinganTeknisi", $param);
			$this->load->view('template/footer');
		}
	}


	// END LAPORAN PENDINGAN PER TEKNISI
}

?>

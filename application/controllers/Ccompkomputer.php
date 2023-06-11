<?php

class Ccompkomputer extends CI_Controller{

	public function __construct(){
	parent::__construct();
		$this->load->model("McompA");
		$this->load->model("McompB");
		$this->load->model("McompC");
		$this->load->model("Mjenisspk");
		$this->load->model("Mjeniscomplain");
		$this->load->model("Mjenisunit");
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function myList(){
		$this->load->view('template/headeradminSIT');
		
		$this->load->view('adminSIT/Complain/ListComplain');
		$this->load->view('template/footer');
	}

	public function PageAdd(){

	}

	public function CreateComplain(){
		$this->load->view('template/headeradminSIT');

		$param["datajenisspk"] = $this->Mjenisspk->getdatajenisspk();
		$param["datajeniscomplain"] = $this->Mjeniscomplain->getdatacomplain();
		$param["datajenisunit"] = $this->Mjenisunit->getdata();
		$this->load->view('adminSIT/Complain/CreateComplain', $param);
		$this->load->view('template/footer');
	}

	public function selectTableComplain() {
		// masuk ke session
		$arr = []; 
		if($this->session->userdata('session_unit')) { $arr = $this->session->userdata('session_unit'); }
	  
		echo json_encode($arr);
	}

	public function selectTableSpk(){
		$arr = [];
		if($this->session->userdata('session_spk')) {$arr = $this->session->userdata('session_spk');}
		echo json_encode($arr);
	}

	public function insertTableComplain(){
		$this->session->unset_userdata('session_unit');

		$unit = $this->input->post("unit");
		$complain = $this->input->post("complain");
		$keterangan = $this->input->post("keterangan");
	  
		$dataunit = $this->Mjenisunit->getjenisunitbyid($unit); 
		foreach($dataunit->result() as $row) { $rowunit = $row; }
	  
		$datacomplain = $this->Mjeniscomplain->getjeniscomplainbyid($complain); 
		foreach($datacomplain->result() as $row) { $rowcomplain = $row; }
	  
		// masuk ke session
		$arr = []; 
		if($this->session->userdata('session_unit')) { $arr = $this->session->userdata('session_unit'); }
		$jum = count($arr); 
	  
		$arr[$jum][0] = $rowunit; 
		$arr[$jum][1] = $rowcomplain; 
		$arr[$jum][2] = $keterangan; 
	  
		$this->session->set_userdata('session_unit', $arr); 
	  
		echo json_encode($arr);
	}

	public function insertTableSpk(){
		$this->session->unset_userdata('session_spk');

		$spk = $this->input->post("spk");
		$dataspk = $this->Mjenisspk->getjenisspkbyid($spk);
		foreach($dataspk->result() as $row) {$rowspk = $row;}

		// masuk ke session
		$arr = [];
		if($this->session->userdata('session_spk')) { $arr = $this->session->userdata('session_spk');}
		$jum = count($arr);

		$arr[$jum][0] = $rowspk;
		$this->session->set_userdata('session_spk', $arr);
		echo json_encode($arr);
	}

	public function createTicket(){
		$nomor_complain = $this->input->post('no_complain');
		$kode_divisi = $this->input->post('kode_divisi');
		$no_divisi = $this->input->post('no_divisi');
		$kode_unit = $this->input->post('kode_unit');
		$lokasi_unit = $this->input->post('lokasi_unit');
		$uraian = $this->input->post('uraian');
		
		$tgljam = $this->input->post('tgljam');

		$arrtgljam = explode("T",$tgljam);
		$tgl = $arrtgljam[0];
		$jam = $arrtgljam[1];

		$nama_uc = $this->input->post('nama_uc');

		echo $kode_divisi."-".$no_divisi."-".$kode_unit."-".$lokasi_unit."-".$uraian."-".$tgljam;

		$nocomplain = $this->McompA->insertcompa($kode_divisi, $no_divisi, $kode_unit, $lokasi_unit, $uraian, $tgl, $jam, $tgljam); 

		// echo "<br>"; 
		// echo $nocomplain;
		// echo "<br>"; 
		$arrcompb = $this->session->userdata('session_unit');
		$arrcompc = $this->session->userdata('session_spk');
		
		echo "<br>".count($arrcompb)."<br>"; 

		for($i = 0; $i < count($arrcompb); $i++){
		print_r($arrcompb[$i][0]->JENIS_UNIT);
			$sub_complain = ($i+1);
			$jenis_unit = $arrcompb[$i][0]->JENIS_UNIT;
			$jenis_complain = $arrcompb[$i][1]->JENIS_COMPLAIN;
			$keterangan = $arrcompb[$i][2];
			$this->McompB->insertdata($nocomplain, $sub_complain, $jenis_unit, $jenis_complain, $keterangan);
		}

		for($i = 0; $i < count($arrcompc); $i++){
			$sub_complain = ($i+1);
			$jenis_spk = $arrcompc[$i][0]->JENIS_SPK;
			$realisasi = 0;
			$this->McompC->insertdata($nocomplain, $sub_complain, $jenis_spk, $realisasi);
		}

		redirect(base_url("Ccompkomputer/CreateComplain"));
		$this->session->unset_userdata('session_unit');
		$this->session->unset_userdata('session_spk');
		$this->toastr->success('Berhasil menambahkan complain');
	}

	public function deleteunit(){
		$id = $this->input->post("id");
		$arr = $this->session->userdata("session_unit");

		array_splice($arr, $id, 1);
		$this->session->set_userdata("session_unit", $arr);
	}

	public function deletespk(){
		$id = $this->input->post("id");
		$arr = $this->session->userdata("session_spk");

		array_splice($arr, $id, 1);
		$this->session->set_userdata("session_spk", $arr);
	}


	// start cari complain halaman complain problem komputer

	public function cariComplain(){

		$no_complain = $this->input->post("cariNoComplain");
		

		$this->load->view('template/headeradminSIT');

		// $param["dataheader"] = $this->Mjenisspk->getdatajenisspk();
		$param["dataheader"] = $this->McompA->CariComplain1($no_complain);
		$param["datadetail1"] = $this->McompA->CariComplain2($no_complain);
		$param["datadetail2"] = $this->McompA->CariComplain3($no_complain);
		
		$this->load->view('adminSIT/Complain/HasilCari', $param);
		$this->load->view('template/footer');

	}

	// end cari complain


	// detail complain laporan history complain
	
	public function detailComplain(){
		// $no_complain = $this->input->post("cariNoComplain");

		$no_complain = $_GET['nocomp'];

		$this->load->view('template/headeradmin');

		// $param["dataheader"] = $this->Mjenisspk->getdatajenisspk();
		$param["dataheader"] = $this->McompA->CariComplain1($no_complain);
		$param["datadetail1"] = $this->McompA->CariComplain2($no_complain);
		$param["datadetail2"] = $this->McompA->CariComplain3($no_complain);
		
		$this->load->view('admin/Laporan/detailComplain', $param);
		$this->load->view('template/footer');
	}





	//  end detail complain laporan history complain


	// ubah status + lihat detail
	public function lihatdetailpending($no_complain){
		$this->load->view('template/headeradmin');
		$param['key'] = $no_complain;
		$this->session->set_userdata('no_complain', $no_complain);
		$param["dataheader"] = $this->McompA->cariComplain1($no_complain);
		$param["datadetail1"] = $this->McompA->CariComplain2($no_complain);
		$param["datadetail2"] = $this->McompA->CariComplain3($no_complain);
		$this->load->view('admin/infrastruktur/hasilcomplainpending', $param);
		$this->load->view('template/footer');
	}

	public function ubahPending(){
		$no_complain = $this->session->userdata('no_complain');
		$keterangan = $this->input->post('ket_pending');
		$tanggal = date('Y:M:D H:i');
		$arrtanggal = explode(" ", $tanggal);
		$tanggalpending = $arrtanggal[0]; 
		$jampending = $arrtanggal[1];
		
		
		$this->McompA->ubahPending($no_complain, $tanggal, $jampending, $keterangan);
		$this->toastr->success('Berhasil mengubah status complain menjadi pending');
		redirect(base_url('/CRAdmin/listmonitorspkpending'));

		$this->session->unset_userdata('no_complain');
	}


	public function lihatdetailselesaicomplain(){
		$this->load->view('template/headeradmin');
		$param['key'] = $no_complain;
		$param["dataheader"] = $this->McompA->cariComplain1($no_complain);
		$param["datadetail1"] = $this->McompA->CariComplain2($no_complain);
		$param["datadetail2"] = $this->McompA->CariComplain3($no_complain);
		$this->load->view('admin/infrastruktur/hasilcomplainpending', $param);
		$this->load->view('template/footer');
	}

	public function ubahselesaicomplain(){

	}

	public function lihatdetailbatalcomplain($no_complain){
		$this->load->view('template/headeradmin');
		$param['key'] = $no_complain;
		$param["dataheader"] = $this->McompA->cariComplain1($no_complain);
		$param["datadetail1"] = $this->McompA->CariComplain2($no_complain);
		$param["datadetail2"] = $this->McompA->CariComplain3($no_complain);
		$this->load->view('admin/infrastruktur/hasilcomplainpending', $param);
		$this->load->view('template/footer');
	}

	public function ubahbatalcomplain(){

	}
}
?>

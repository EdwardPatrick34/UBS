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
	  
		// // masuk ke session
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

		$nocomplain = $this->McompA->insertcompa($kode_divisi, $no_divisi, $kode_unit, $lokasi_unit, $uraian, $tgl, $jam); 

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

		echo "sukses"; 
	}


	// start cari complain

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

}
?>

<?php

class CRAdminSIT extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('McompA');
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function HomeAdminSIT(){
		$this->load->view('template/headeradminSIT');
		$this->load->view('adminSIT/homeadminSIT');
		$this->load->view('template/footer');
	}


	public function PGantiPass(){
		$this->load->view('template/headeradminSIT');
		$this->load->view('adminSIT/gantipassword');
		$this->load->view('template/footer');
	}

	public function pengesahan(){
		$this->load->view('template/headeradminSIT');
		$param['data'] = $this->McompA->getDone();
		$this->load->view('adminSIT/pengesahancomplain', $param);
		$this->load->view('template/footer');
	}

	public function lihatdetailpengesahan(){
		$no_complain = $_GET['nocomp'];
		$this->load->view('template/headeradminSIT');
		$this->session->set_userdata('no_complain', $no_complain);
		$param["dataheader"] = $this->McompA->cariComplain1($no_complain);
		$param["datadetail1"] = $this->McompA->CariComplain2($no_complain);
		$param["datadetail2"] = $this->McompA->CariComplain3($no_complain);
		$this->load->view('adminSIT/detailpengesahan', $param);
		$this->load->view('template/footer');
	}

	public function ubahPengesahan(){
		$no_complain = $this->session->userdata('no_complain');
		$keterangan = $this->input->post('ket_pending');
		$tanggal = date('Y:m:d H:i:s');
		$arrtanggal = explode(" ", $tanggal);
		$tanggalpending = $arrtanggal[0]; 
		$jampending = $arrtanggal[1];

		$arrjam = explode(":", $jampending);
		$jam = $arrjam[0];
		$menit = $arrjam[1];
		$jamtotal = $jam.":".$menit;
		
		
		$this->McompA->ubahPengesahan($no_complain, $tanggal, $jamtotal, $keterangan);
		$this->toastr->success('Berhasil melakukan pengesahan');
		redirect(base_url('/CRAdminSIT/pengesahan'));

		$this->session->unset_userdata('no_complain');
	}
}

?>

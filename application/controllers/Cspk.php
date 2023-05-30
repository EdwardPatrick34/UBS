<?php
class Cspk extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mpetugas");
        $this->load->model("Mjenisspk");
        $this->load->model("MspkA");
        $this->load->model("MspkB");
        $this->load->model("MspkC");
        $this->load->model("MspkD");
        $this->load->model("McompA");
        $this->load->model("McompB");
        $this->load->library('session');
    }

    public function insertTableSpk(){
        $this->session->unset_userdata('session_jenisspk');
        $keterangan = $this->input->post("keterangan");

		$spk = $this->input->post("spk");
		$dataspk = $this->Mjenisspk->getjenisspkbyid($spk);
		foreach($dataspk->result() as $row) {$rowspk = $row;}

		// masuk ke session
		$arr = [];
		if($this->session->userdata('session_jenisspk')) { $arr = $this->session->userdata('session_jenisspk');}
		$jum = count($arr);

		$arr[$jum][0] = $rowspk;
        $arr[$jum][1] = $keterangan;
		$this->session->set_userdata('session_jenisspk', $arr);
		echo json_encode($arr);
    }

    public function insertTablePetugas(){
        $this->session->unset_userdata('session_petugas');

        $petugas = $this->input->post('petugas');
        $datapetugas = $this->Mpetugas->getpetugasbyid($petugas);
        foreach($datapetugas->result() as $row){$rowpetugas = $row;}
        // masuk ke session
        $arr = [];
        if($this->session->userdata('session_petugas')) {$arr = $this->session->userdata('session_petugas');}
        $jum = count($arr);

        $arr[$jum][0] = $rowpetugas;
        $this->session->set_userdata('session_petugas', $arr);
        echo json_encode($arr);
    }

    public function selectTablePetugas(){
        $arr = [];
        if($this->session->userdata('session_petugas')) {$arr = $this->session->userdata('session_petugas');}
        echo json_encode($arr);
    }

    public function selectTableSpk(){
        $arr = [];
		if($this->session->userdata('session_jenisspk')) { $arr = $this->session->userdata('session_jenisspk');}
        echo json_encode($arr);
    }

    public function cariComplain(){
        $this->session->unset_userdata("session_complain");
        $no_complain = $this->input->post("no_complain");

        $datacomplain = $this->McompA->getcompAbyid($no_complain);
        foreach($datacomplain->result() as $row){$rowcomplain = $row;}
        
        $datacomplainb = $this->McompB->getcompBbyid($no_complain);
        foreach($datacomplainb->result() as $row){$rowcomplainb = $row;}
        
        $arr = [];
        if($this->session->userdata('session_complain')) {$arr = $this->session->userdata('session_complain');}
        $jum = count($arr);
        
        $arr[$jum][0] = $rowcomplain;
        $arr[$jum][1] = $rowcomplainb;
        echo json_encode($arr);
        $this->session->userdata('session_complain', $arr);
    }

    public function deletespk(){
        $id = $this->input->post("id");
        $arr = $this->session->userdata("session_jenisspk");

        array_splice($arr, $id, 1);
        $this->session->set_userdata('session_jenisspk', $arr);
    }

    public function deletepetugas(){
        $id = $this->input->post("id");
        $arr = $this->session->userdata("session_petugas");

        array_splice($arr, $id, 1);
        $this->session->set_userdata('session_petugas', $arr);
    }

    public function insertSpk(){
        //mengambil data dari input field
        
        $no_complain = $this->input->post("no_complain");
        $kode_unit = $this->input->post("kode_unit");
        $tgljamspk = $this->input->post("tglspk");
       
        $arrtgljamspk = explode("T",$tgljamspk); // berfungsi untuk memisahkan antara tanggal dan jam, spasi sebagai pemisahnya
        $tglspk = $arrtgljamspk[0];
        $ajamspk = $arrtgljamspk[1];

        $jamspk = substr($ajamspk, 0, 5);
        
        

        $tgljamlapor = $this->input->post("tgljamlapor");
       
        $arrtgljamlapor = explode("T",$tgljamlapor);
        $tgllapor = $arrtgljamlapor[0];
        $jamlapor = $arrtgljamlapor[1];

        $uraian = $this->input->post("uraian");
        $divisi = $this->input->post("divisi");
        
        $arrdivisi = explode("-", $divisi);
        $usere = $arrdivisi[1];
        $status = 4;

        $no_spk = $this->MspkA->insertspkA($no_complain, $tgljamspk, $jamspk, $tglspk, $tgljamlapor, $jamlapor, $tgllapor, $usere, $kode_unit, $status);

        //untuk mengamil data dari session dan memindahkannya ke dalam array
        $arrpetugas = $this->session->userdata('session_petugas');
        $arrspk =$this->session->userdata('session_jenisspk');

        for($i = 0; $i < count($arrpetugas); $i++){
            $sub_spk = ($i+1);
            $petugas = $arrpetugas[$i][0]->PETUGAS;
            
            $this->MspkC->insertspkc($no_spk, $sub_spk, $petugas);
        }

        for($i = 0; $i < count($arrspk); $i++){
            $sub_spk = ($i+1);
            $jenis_spk = $arrspk[$i][0]->JENIS_SPK;
            $keterangan = $arrspk[$i][1];
            $realisasi = 0;
            $this->MspkD->insertspkd($no_spk, $sub_spk, $jenis_spk, $realisasi, $keterangan);
        }

        // $arrcompb = $this->session->userdata('session_complain');
        // for($i = 0; $i < count($arrcompb); $i++){
        //     $sub_spk = ($i + 1);
        //     $jenis_unit = $arrcompb[$i][1]->JENIS_UNIT;
        //     $this->MspkB->insertspkb($no_spk, $sub_spk, $jenis_unit);
        // }

        $jenis_unit = $this->McompB->getjenisunitBbyid($no_complain);
        $this->MspkB->insertspkb($no_spk, 1, $jenis_unit);
    }
}
?>
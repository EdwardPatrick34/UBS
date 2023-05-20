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
        $no_complain = $this->input->post("no_complain");

        $datacomplain = $this->McompA->getcompAbyid($no_complain);
        foreach($datacomplain->result() as $row){$rowcomplain = $row;}
        
        
        $arr = [];
        if($this->session->userdata('session_complain')) {$arr = $this->session->userdata('session_complai');}
        $jum = count($arr);
        
        $arr[$jum][0] = $rowcomplain;
        echo json_encode($arr);
    }
}
?>
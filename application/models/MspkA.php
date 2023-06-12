<?php
class MspkA extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getdataspkA(){
        $sql = $this->db->query('select * from ed_spka');
        return $sql;
    }

    public function insertspkA($no_complain, $tgljamspk, $jamspk, $tglspk, $tgljamlapor, $jamlapor, $tgllapor, $usere, $status){
		$user = $this->session->userdata('admin');
		$idusere = $user->USERE;
        $qry = $this->db->query("select * from ed_spkA");
        $count = $qry->num_rows() + 1;
        $no_spk = 'ZN'.substr(date("Y"),2,2).str_pad($count, 6 , "0", STR_PAD_LEFT);

        $sql = "insert into ed_spkA(NO_SPK, NO_COMPLAIN, TGL_SPK, JAM_SPK, STATUS, TGL_T, JAM_T, USERE) 
        values ('$no_spk', '$no_complain', to_date('$tglspk', 'yyyy-mm-dd HH:MI:SS'), '$jamspk', '4', to_date('$tgllapor', 'yyyy-mm-dd HH:MI:SS'), '$jamlapor',  '$idusere')";


        $this->db->query($sql);

        $sqlquery = $this->db->query("update ed_compa SET status='7' where no_complain='".$no_complain."'");
        return $no_spk;
    }
	//get data Monitoring Complain status SPK
	public function getMCspk(){

		$sql = $this->db->query("select 
		ED2.NO_COMPLAIN As NO_COMPLAIN,
		ED2.KODEDIV as KODEDIV,
		ED2.USERE As PELAPOR,
		ED1.TGL_SPK As TANGGAL,
		ED1.JAM_SPK As JAM,
		ED2.KODE_UNIT As UNIT,
		ED1.NO_SPK As NO_SPK,
		EDP.NAMA_PETUGAS As NAMA_PETUGAS
		from ED_SPKA ED1 
		join ED_COMPA ED2 on ED1.NO_COMPLAIN=ED2.NO_COMPLAIN
		JOIN ED_SPKC EDSC ON ED1.NO_SPK=EDSC.NO_SPK
		JOIN ED_PETUGAS EDP ON EDSC.PETUGAS=EDP.PETUGAS
		WHERE ED2.STATUS='7'");
		
		return $sql;
	}

    public function getStartStop(){
        $sql = $this->db->query("select * from ed_startstop where user_start='KSG'");
        return $sql;
    }

    public function getStop(){
        $sql = $this->db->query("select * from ed_startstop where user_start !='KSG' and user_stop='KSG'");
        return $sql;
    }

	public function getMCpending(){

		//where di sesuaikan oleh master status
		$sql = $this->db->query("select ED2.NO_COMPLAIN As NO_COMPLAIN,
		ED2.KODEDIV as KODEDIV,
		ED2.USERE As PELAPOR,
		ED1.TGL_SPK As TANGGAL,
		ED1.JAM_SPK As JAM,
		ED2.KODE_UNIT As UNIT,
		ED1.NO_SPK As NO_SPK,
		EDP.NAMA_PETUGAS As NAMA_PETUGAS
		from ED_SPKA ED1 
		join ED_COMPA ED2 on ED1.NO_COMPLAIN=ED2.NO_COMPLAIN 
		JOIN ED_SPKC EDSC ON ED1.NO_SPK=EDSC.NO_SPK
		JOIN ED_PETUGAS EDP ON EDSC.PETUGAS=EDP.PETUGAS
		WHERE ED2.STATUS=3");

		return $sql;

	}

	public function getMCselesai(){
		//where di sesuaikan oleh master status
		$sql = $this->db->query("select ED2.NO_COMPLAIN As NO_COMPLAIN,
		ED2.KODEDIV as KODEDIV,
		ED2.USERE As PELAPOR,
		ED1.TGL_SPK As TANGGAL,
		ED1.JAM_SPK As JAM,
		ED2.KODE_UNIT As UNIT,
		ED1.NO_SPK As NO_SPK,
		EDP.NAMA_PETUGAS As NAMA_PETUGAS
		from ED_SPKA ED1 
		join ED_COMPA ED2 on ED1.NO_COMPLAIN=ED2.NO_COMPLAIN
		JOIN ED_SPKC EDSC ON ED1.NO_SPK=EDSC.NO_SPK
		JOIN ED_PETUGAS EDP ON EDSC.PETUGAS=EDP.PETUGAS
		WHERE ED2.STATUS=4");

		return $sql;

	}
    
    //start stop
    public function startspk($no_spk, $tanggal){
        $user = $this->session->userdata('admin');
        $usere = $user->ID;
        $sql = "update ed_startstop set TGL_START=to_date('".$tanggal."', 'yyyy-mm-dd HH24:MI:SS'), USER_START ='".trim($usere)."' where NO_SPK ='".$no_spk."'";
        $this->db->query($sql);
    }

    public function stopspk($no_spk, $tanggal){
        $user = $this->session->userdata('admin');
        $usere = $user->ID;
        $sql = "update ed_startstop set TGL_STOP=to_date('".$tanggal."', 'yyyy-mm-dd HH24:MI:SS'), USER_STOP ='".trim($usere)."' where NO_SPK ='".$no_spk."'";
        $this->db->query($sql);
    }
}
?>

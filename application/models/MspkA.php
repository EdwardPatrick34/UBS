<?php
class MspkA extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
		$this->load->library('session');
    }

    public function getdataspkA(){
        $sql = $this->db->query('select * from ed_spka');
        return $sql;
    }

    public function insertspkA($no_complain, $tgljamspk, $jamspk, $tglspk, $tgljamlapor, $jamlapor, $tgllapor, $usere, $status){
		$user = $this->session->userdata('admin');
		$idusere = $user->ID;
        $qry = $this->db->query("select * from ed_spkA");
        $count = $qry->num_rows() + 1;
        $no_spk = 'ZN'.substr(date("Y"),2,2).str_pad($count, 6 , "0", STR_PAD_LEFT);

        $sql = "insert into ed_spkA(NO_SPK, NO_COMPLAIN, TGL_SPK, JAM_SPK, STATUS, TGL_T, JAM_T, USERE) 
        values ('$no_spk', '$no_complain', to_date('$tglspk', 'yyyy-mm-dd HH:MI:SS'), '$jamspk', '1', to_date('$tgllapor', 'yyyy-mm-dd HH:MI:SS'), '$jamlapor',  '".trim($idusere)."')";


        $this->db->query($sql);

        $sqlquery = $this->db->query("update ed_compa SET status='7' where no_complain='".$no_complain."'");
        return $no_spk;
    }
	//get data Monitoring Complain status SPK
	public function getMCspk(){
		$user = $this->session->userdata('teknisi');
		$usere = $user->ID;
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

	//get data Monitoring Complain status SPK
	public function getMCspkTeknisi(){
		$user = $this->session->userdata('teknisi');
		$usere = $user->ID;
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
		WHERE ED2.STATUS='7' and EDSC.PETUGAS=$usere ");
		
		return $sql;
	}

    public function getStartStop(){
        $sql = $this->db->query("SELECT
		ED_SPKA.NO_SPK as NO_SPK,
		ED_SPKC.PETUGAS as PETUGAS,
		ED_STARTSTOP.TGL_START as TGL_START,
		ED_STARTSTOP.TGL_STOP as TGL_STOP,
		ED_STARTSTOP.USER_START as USER_START,
		ED_STARTSTOP.USER_STOP as USER_STOP,
		ED_SPKC.URUT as SUB_SPK,
		ED_SPKD.KET as KETERANGAN
		from ED_SPKA 
		join ED_SPKC on ED_SPKA.NO_SPK = ED_SPKC.NO_SPK
		join ED_SPKD on ED_SPKA.NO_SPK = ED_SPKD.NO_SPK
		join ED_STARTSTOP on ED_SPKA.NO_SPK = ED_SPKD.NO_SPK
		where ED_SPKA.STATUS ='1'");
        return $sql;
    }

    public function getStop(){
        $sql = $this->db->query("SELECT
		ED_STARTSTOP.NO_SPK as NO_SPK,
		ED_STARTSTOP.TGL_START as TGL_START,
		ED_STARTSTOP.TGL_STOP as TGL_STOP,
		ED_STARTSTOP.USER_START as USER_START,
		ED_STARTSTOP.USER_STOP as USER_STOP,
		ED_STARTSTOP.PETUGAS as PETUGAS,
		ED_STARTSTOP.SUB_SPK as SUB_SPK,
		ED_STARTSTOP.KET as KETERANGAN
		from ED_STARTSTOP 
		join ED_SPKA on ED_STARTSTOP.NO_SPK = ED_SPKA.NO_SPK
		where ED_SPKA.STATUS ='9'");
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

	public function getMCpendingTeknisi(){

		//where di sesuaikan oleh master status
		$user = $this->session->userdata('teknisi');
		$usere = $user->ID;
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
		WHERE ED2.STATUS=3 and EDSC.PETUGAS=$usere ");

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
		WHERE ED2.STATUS=5");

		return $sql;

	}

	public function getMCselesaiTeknisi(){
		//where di sesuaikan oleh master status
		$user = $this->session->userdata('teknisi');
		$usere = $user->ID;
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
		WHERE ED2.STATUS=5 and EDSC.PETUGAS=$usere ");

		return $sql;
	}
	
	// get data from spkc dan spkd
	public function getspkc($no_spk){
		$data = $this->db->query("select petugas from ed_spkc where no_spk ='".$no_spk."'");
		return $data;
	}

	public function getspkd($no_spk){
		$data = $this->db->query("select * from ed_spkd where no_spk ='".$no_spk."'");
		return $data;
	}
    
    //start stop
    public function startspk($no_spk, $tanggal, $petugas, $sub_spk, $keterangan){
        $user = $this->session->userdata('admin');
        $usere = $user->ID; // user yang sedang login

		$sql = "insert into ed_startstop(NO_SPK, SUB_SPK, TGL_START, USER_START, KET, PETUGAS) 
		values ('$no_spk', '$sub_spk', to_date('$tanggal','yyyy-mm-dd HH24:Mi:SS'), '".trim($usere)."', '$keterangan', '$petugas')";
		$this->db->query($sql);

		$sqlquery = "update ed_spka set status='9' where no_spk ='".$no_spk."'";
		$this->db->query($sqlquery);
    }

    public function stopspk($no_spk, $tanggal){
        $user = $this->session->userdata('admin');
        $usere = $user->ID;
        $sql = "update ed_startstop set TGL_STOP=to_date('".$tanggal."', 'yyyy-mm-dd HH24:MI:SS'), USER_STOP ='".trim($usere)."' where NO_SPK ='".$no_spk."'";
		$sqlquery = "update ed_spka set status='1' where no_spk ='".$no_spk."'";
		$this->db->query($sqlquery);
        $this->db->query($sql);
    }
}
?>

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
        $qry = $this->db->query("select * from ed_spkA");
        $count = $qry->num_rows() + 1;
        $no_spk = 'ZN'.substr(date("Y"),2,2).str_pad($count, 6 , "0", STR_PAD_LEFT);

        $sql = "insert into ed_spkA(NO_SPK, NO_COMPLAIN, TGL_SPK, JAM_SPK, STATUS, TGL_T, JAM_T, USERE) 
        values ('$no_spk', '$no_complain', to_date('$tglspk', 'yyyy-mm-dd HH:MI:SS'), '$jamspk', '4', to_date('$tgllapor', 'yyyy-mm-dd HH:MI:SS'), '$jamlapor',  '$usere')";

        $this->db->query($sql);
        return $no_spk;
    }
	//get data Monitoring Complain status SPK
	public function getMCspk(){

		$sql = $this->db->query("select ED2.NO_COMPLAIN As NO_COMPLAIN, ED2.KODEDIV as KODEDIV, ED2.USERE As PELAPOR, ED1.TGL_SPK As TANGGAL, ED1.JAM_SPK As JAM, ED2.KODE_UNIT As UNIT, ED1.NO_SPK As NO_SPK, ED1.USERE As NAMA_PETUGAS from ED_SPKA ED1 join ED_COMPA ED2 on ED1.NO_COMPLAIN=ED2.NO_COMPLAIN");
		
		return $sql;
	}

	public function getMCpending(){

		//where di sesuaikan oleh master status
		$sql = $this->db->query("select ED2.NO_COMPLAIN As NO_COMPLAIN, ED2.KODEDIV as KODEDIV, ED2.USERE As PELAPOR, ED1.TGL_SPK As TANGGAL, ED1.JAM_SPK As JAM, ED2.KODE_UNIT As UNIT, ED1.NO_SPK As NO_SPK, ED1.USERE As NAMA_PETUGAS from ED_SPKA ED1 join ED_COMPA ED2 on ED1.NO_COMPLAIN=ED2.NO_COMPLAIN WHERE ED1.STATUS=3");

		return $sql;

	}

	public function getMCselesai(){
		//where di sesuaikan oleh master status
		$sql = $this->db->query("select ED2.NO_COMPLAIN As NO_COMPLAIN, ED2.KODEDIV as KODEDIV, ED2.USERE As PELAPOR, ED1.TGL_SPK As TANGGAL, ED1.JAM_SPK As JAM, ED2.KODE_UNIT As UNIT, ED1.NO_SPK As NO_SPK, ED1.USERE As NAMA_PETUGAS from ED_SPKA ED1 join ED_COMPA ED2 on ED1.NO_COMPLAIN=ED2.NO_COMPLAIN WHERE ED1.STATUS=1");

		return $sql;

	}
    
}
?>

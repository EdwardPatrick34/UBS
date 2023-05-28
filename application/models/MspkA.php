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

	//get data Monitoring Complain status SPK
	public function getMCspk(){

		$sql = $this->db->query("select ED2.NO_COMPLAIN As NO_COMPLAIN, ED2.KODEDIV as KODEDIV, ED2.USERE As PELAPOR, ED1.TGL_SPK As TANGGAL, ED1.JAM_SPK As JAM, ED2.KODE_UNIT As UNIT, ED1.NO_SPK As NO_SPK, ED1.USERE As NAMA_PETUGAS from ED_SPKA ED1 join ED_COMPA ED2 on ED1.NO_COMPLAIN=ED2.NO_COMPLAIN");
		
		return $sql;
	}
    
}
?>

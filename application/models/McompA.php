<?php
class McompA extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getdatacompA(){
        $sql = $this->db->query("select * from ed_compA");
        return $sql;
    }

    public function insertcompa($kode_divisi, $no_divisi, $kode_unit, $lokasi_unit, $uraian, $tgl, $jam, $tgljam) {
        $qry = $this->db->query('select * from ed_compA'); 
        $count = $qry->num_rows() + 1; 
        $nocomplain = 'ZM'.substr(date("Y"), 2, 2).str_pad($count, 6, "0", STR_PAD_LEFT);

        $sql = "insert into ed_compA(NO_COMPLAIN, TGL, JAM,  KODEDIV, USERE, KODE_UNIT, URAIAN) 
                    values ('$nocomplain', to_date('$tgl', 'yyyy-mm-dd HH:MI:SS'), '$jam', '$kode_divisi', 'usere', '$kode_unit', '$uraian')";
        $this->db->query($sql);

        return $nocomplain;
    }

    public function getcompAbyid($no_complain){
        // $sql = $this->db->query("select * from ed_compA where no_complain = '".$no_complain."'");
        $sql = $this->db->query("select no_complain, to_char(tgl , 'yyyy-mm-dd HH:MI:SS') as tgl, kodediv, kode_unit,usere from ed_compA where no_complain = '".$no_complain."'");

        return $sql;
    }
	// Search Laporan History Complain
	public function SLHComplain($tglawal, $tglakhir){

		
		// ctivdate>TO_DATE('2022-01-01’,'YYYY-MM-DD')

		$sql = $this->db->query("Select no_complain, tgl, nama_status, uraian from ed_compA join ed_status on ed_compa.status=ed_status.status where TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY");
		
		return $sql;

		// select no_complain, tgl, nama_status, uraian from ed_compa  join ed_status  on ed_compa.status=ed_status.status;

	}
}
?>

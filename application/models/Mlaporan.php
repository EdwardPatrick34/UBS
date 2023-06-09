<?php 
class Mlaporan extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function LBInfrastruktur($tglawal, $tglakhir){
		$sql = $this->db->query("SELECT
		EDP.NAMA_PETUGAS As NAMA_PETUGAS,
		EDP.PETUGAS As NOMOR_INDUK,
		EDCA.NO_COMPLAIN As NOMOR_COMPLAIN,
		EDCA.KODEDIV As KODEDIV,
		EDCA.KODE_UNIT As KODE_UNIT,
		EDCA.URAIAN As URAIAN,
		EDSA.NO_SPK As NO_SPK,
		
		FROM ED_COMPA EDCA
		JOIN ED_SPKA EDSA ON EDCA.NO_COMPLAIN=EDSA.NO_COMPLAIN
		JOIN ED_SPKB EDSB ON EDSA.NO_SPK=EDSB.NO_SPK
		JOIN ED_SPKC EDSC ON EDSA.NO_SPK=EDSC.NO_SPK
		JOIN ED_SPKD EDSD ON EDSA.NO_SPK=EDSD.NO_SPK
		JOIN ED_PETUGAS EDP ON EDSC.PETUGAS=EDP.PETUGAS
		WHERE EDCA.TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and EDCA.TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY
		");

		return $sql;
	}
    
}
?>

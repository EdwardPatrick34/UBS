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

	public function getMC(){
        $sql = $this->db->query("select * from ed_compA WHERE STATUS=1");
        return $sql;
    }

    public function insertcompa($kode_divisi, $no_divisi, $kode_unit, $lokasi_unit, $uraian, $tgl, $jam, $tgljam) {
        $qry = $this->db->query('select * from ed_compA'); 
        $count = $qry->num_rows() + 1; 
        $nocomplain = 'ZM'.substr(date("Y"), 2, 2).str_pad($count, 6, "0", STR_PAD_LEFT);

        $sql = "insert into ed_compA(NO_COMPLAIN, TGL, JAM,  KODEDIV, USERE, KODE_UNIT, STATUS, URAIAN) 
                    values ('$nocomplain', to_date('$tgl', 'yyyy-mm-dd HH:MI:SS'), '$jam', '$kode_divisi', 'usere', '$kode_unit', '1','$uraian')";
        $this->db->query($sql);

        return $nocomplain;
    }

	//Monitoring Complain Per Divisi
	public function Cpd(){

		$query = $this->db->query("SELECT E.KODEDIV AS DIVISI, COUNT(*) AS TOTAL FROM ED_COMPA E GROUP BY E.KODEDIV")->result();

		return $query;
	}

    public function getcompAbyid($no_complain){
        // $sql = $this->db->query("select * from ed_compA where no_complain = '".$no_complain."'");
        $sql = $this->db->query("select no_complain, to_char(tgl , 'yyyy-mm-dd HH:MI:SS') as tgl, kodediv, kode_unit,usere from ed_compA where no_complain = '".$no_complain."'");

        return $sql;
    }
	// Search Laporan History Complain (sudah tidak dipakai)
	public function SLHComplain($tglawal, $tglakhir){

		
		// ctivdate>TO_DATE('2022-01-01’,'YYYY-MM-DD')

		$sql = $this->db->query("Select no_complain, tgl, nama_status, uraian from ed_compA join ed_status on ed_compa.status=ed_status.status where TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY");
		
		return $sql;

		// select no_complain, tgl, nama_status, uraian from ed_compa  join ed_status  on ed_compa.status=ed_status.status;

	}
	// laporan History Complain
	public function LHComplain(){

		$sql = $this->db->query("SELECT
		EDCA.NO_COMPLAIN As NO_COMPLAIN,
		EDCA.TGL As TGL,
		EDCA.JAM As JAM,
		EDCA.USERE As PELAPOR,
		EDCA.KODEDIV AS KODEDIV,
		EDSA.NO_SPK AS NO_SPK,
		EDCA.KODE_UNIT As KODE_UNIT,
		EDCA.URAIAN As URAIAN,
		EDCA.TGL_S As TGL_SELESAI,
		EDCA.JAM_S As JAM_SELESAI,
		EDCA.TGL_SAH As TGL_SAH,
		EDCA.JAM_SAH As JAM_SAH,
		EDS.NAMA_STATUS As STATUS
		FROM ED_COMPA EDCA
		JOIN ED_SPKA EDSA ON EDCA.NO_COMPLAIN=EDSA.NO_COMPLAIN
		JOIN ED_STATUS EDS ON EDS.STATUS=EDCA.STATUS
		WHERE EDCA.STATUS=2 or EDCA.STATUS=4 or EDCA.STATUS=5 or EDCA.STATUS=6
		");

		return $sql;
	}

	//Laporan Uraian Complain Divisi
	public function LUCDivisi($tglawal, $tglakhir, $divisi){
		$sql = $this->db->query("SELECT
		EDSA.NO_SPK As NO_SPK,
		EDCA.NO_COMPLAIN As NO_COMPLAIN,
		EDCA.USERE As USERE,
		EDCA.KODEDIV As KODEDIV,
		EDCA.KODE_UNIT As KODE_UNIT,
		EDCA.URAIAN As URAIAN,
		EDCA.TGL As TGL,
		EDCA.JAM As JAM,
		EDCA.STATUS As STATUS,
		EDS.NAMA_STATUS As NAMA_STATUS,
		EDCA.TGL As TGL
		FROM ED_COMPA EDCA
		JOIN ED_SPKA EDSA ON EDCA.NO_COMPLAIN=EDSA.NO_COMPLAIN
		JOIN ED_STATUS EDS ON EDS.STATUS=EDCA.STATUS
		WHERE EDCA.TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and EDCA.TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY and EDCA.KODEDIV='$divisi'
		");

		return $sql;
	}

	// cari complain
	// header
	public function CariComplain1($nocomplain){
		$sql = $this->db->query(
		"SELECT 
		A.NO_COMPLAIN As NO_COMPLAIN,
		A.TGL As TANGGAL,
		A.JAM As JAM,
		A.USERE As PELAPOR,
		A.KODEDIV As DIVISI,
		A.KODE_UNIT As KODE_UNIT,
		A.URAIAN As URAIAN,
		EDS.NAMA_STATUS As NAMA_STATUS
		FROM ED_COMPA A 
		JOIN ED_COMPB B ON A.NO_COMPLAIN=B.NO_COMPLAIN 
		JOIN ED_COMPC C ON C.NO_COMPLAIN=A.NO_COMPLAIN
		JOIN ED_STATUS EDS ON A.STATUS=EDS.STATUS
		WHERE A.NO_COMPLAIN='".$nocomplain."'
		");

		return $sql;
		
	}
	// detail 1
	public function CariComplain2($nocomplain){
		$sql = $this->db->query(
			"SELECT 
			CB.SUB_COMPLAIN As SUB,
			CB.JENIS_UNIT As JENIS_UNIT,
			JU.NAMA_JU As NAMA_JENIS_UNIT,
			CB.JENIS_COMPLAIN As JENIS_COMPLAIN,
			JC.NAMA_COMPLAIN As NAMA_COMPLAIN,
			CB.KET As KETERANGAN
			FROM ED_COMPB CB 
			JOIN ED_JENISUNIT JU ON CB.JENIS_UNIT=JU.JENIS_UNIT
			JOIN ED_JENISCOMPLAIN JC ON CB.JENIS_COMPLAIN=JC.JENIS_COMPLAIN
			WHERE CB.NO_COMPLAIN='".$nocomplain."'
			");
	
			return $sql;
	}
	// detail 2
	public function CariComplain3($nocomplain){
		$sql = $this->db->query(
			"SELECT 
			CC.SUB_COMPLAIN As URUT,
			CC.JENIS_SPK As JENIS_SPK,
			JS.NAMA_SPK As NAMA_SPK,
			JS.MENIT As MENIT
			FROM ED_COMPC CC 
			JOIN ED_JENISSPK JS ON CC.JENIS_SPK=JS.JENIS_SPK
			WHERE CC.NO_COMPLAIN='".$nocomplain."'
			");
			
	
			return $sql;
	}

}
?>

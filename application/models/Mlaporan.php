<?php 
class Mlaporan extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

	// laporan bulanan infrastruktur
    public function LBInfrastruktur($tglawal, $tglakhir){
		$sql = $this->db->query("SELECT
		EDP.NAMA_PETUGAS As NAMA_PETUGAS,
		EDP.PETUGAS As NOMOR_INDUK,
		EDCA.NO_COMPLAIN As NO_COMPLAIN,
		EDCA.KODEDIV As KODEDIV,
		EDCA.KODE_UNIT As KODE_UNIT,
		EDCA.TGL As TGL_COMPLAIN,
		EDCA.URAIAN As URAIAN,
		EDSA.NO_SPK As NO_SPK,
		EDSA.TGL_SPK As TGL_SPK,
		EDSA.JAM_SPK As JAM_SPK,
		EDCA.TGL_SAH As TGL_SAH,
		EDCA.JAM_SAH As JAM_SAH,
		EDSB.PEKERJAAN As PEKERJAAN
		FROM ED_PETUGAS EDP
		JOIN ED_SPKC EDSC ON EDP.PETUGAS=EDSC.PETUGAS
		JOIN ED_SPKA EDSA ON EDSC.NO_SPK=EDSA.NO_SPK
		JOIN ED_SPKB EDSB ON EDSA.NO_SPK=EDSB.NO_SPK
		JOIN ED_SPKD EDSD ON EDSA.NO_SPK=EDSD.NO_SPK
		JOIN ED_COMPA EDCA ON EDSA.NO_COMPLAIN=EDCA.NO_COMPLAIN
		WHERE EDSA.TGL_SPK >= to_date('".$tglawal."', 'MM/DD/YYYY') and EDSA.TGL_SPK <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY AND EDCA.STATUS=2 OR EDCA.STATUS=4 OR EDCA.STATUS=5 OR EDCA.STATUS=6
		");

		

		return $sql;
	}

	// laporan Kegiatan Infrastruktur
	public function LKInfrastruktur($tglawal, $tglakhir, $jenisunit){

		$jenisunit=strtoupper($jenisunit);

		if ($jenisunit=="SEMUA") {
			# code...
			$sql = $this->db->query("SELECT
		EDJU.JENIS_UNIT As JENIS_UNIT,
		EDJU.NAMA_JU As NAMA_JU,
		EDCA.NO_COMPLAIN As NO_COMPLAIN,
		EDCA.KODEDIV As KODEDIV,
		EDCB.SUB_COMPLAIN As SUB,
		EDCA.URAIAN As URAIAN,
		EDCA.TGL As TGL,
		EDCA.JAM As JAM,
		EDS.NAMA_STATUS As STATUS
		FROM ED_COMPA EDCA
		JOIN ED_COMPB EDCB ON EDCA.NO_COMPLAIN=EDCB.NO_COMPLAIN
		JOIN ED_JENISUNIT EDJU ON EDCB.JENIS_UNIT=EDJU.JENIS_UNIT
		JOIN ED_STATUS EDS ON EDCA.STATUS=EDS.STATUS
		WHERE EDCA.TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and EDCA.TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY
		ORDER BY EDJU.JENIS_UNIT
		");
		}
		else{
			$sql = $this->db->query("SELECT
			EDJU.JENIS_UNIT As JENIS_UNIT,
			EDJU.NAMA_JU As NAMA_JU,
			EDCA.NO_COMPLAIN As NO_COMPLAIN,
			EDCA.KODEDIV As KODEDIV,
			EDCB.SUB_COMPLAIN As SUB,
			EDCA.URAIAN As URAIAN,
			EDCA.TGL As TGL,
			EDCA.JAM As JAM,
			EDS.NAMA_STATUS As STATUS
			FROM ED_COMPA EDCA
			JOIN ED_COMPB EDCB ON EDCA.NO_COMPLAIN=EDCB.NO_COMPLAIN
			JOIN ED_JENISUNIT EDJU ON EDCB.JENIS_UNIT=EDJU.JENIS_UNIT
			JOIN ED_STATUS EDS ON EDCA.STATUS=EDS.STATUS
			WHERE EDCA.TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and EDCA.TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY and EDCB.JENIS_UNIT='".$jenisunit."'
			ORDER BY EDJU.JENIS_UNIT
			");
		}


		return $sql;
	}

	//Summary laporan kegiatan Infrastruktur
	public function SLKI($tglawal, $tglakhir, $jenisunit){
		$jenisunit=strtoupper($jenisunit);

		if ($jenisunit=="SEMUA") {
			# code...
			$sql = $this->db->query("SELECT
		EDJU.JENIS_UNIT As JENIS_UNIT,
		COUNT(*) As TOTAL
		FROM ED_COMPA EDCA
		JOIN ED_COMPB EDCB ON EDCA.NO_COMPLAIN=EDCB.NO_COMPLAIN
		JOIN ED_JENISUNIT EDJU ON EDCB.JENIS_UNIT=EDJU.JENIS_UNIT
		JOIN ED_STATUS EDS ON EDCA.STATUS=EDS.STATUS
		WHERE EDCA.TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and EDCA.TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY
		GROUP BY EDJU.JENIS_UNIT
		ORDER BY EDJU.JENIS_UNIT
		");
		}
		else{
			$sql = $this->db->query("SELECT
			EDJU.JENIS_UNIT As JENIS_UNIT,
			COUNT(*) As TOTAL
			FROM ED_COMPA EDCA
			JOIN ED_COMPB EDCB ON EDCA.NO_COMPLAIN=EDCB.NO_COMPLAIN
			JOIN ED_JENISUNIT EDJU ON EDCB.JENIS_UNIT=EDJU.JENIS_UNIT
			JOIN ED_STATUS EDS ON EDCA.STATUS=EDS.STATUS
			WHERE EDCA.TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and EDCA.TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY and EDCB.JENIS_UNIT='".$jenisunit."'
			GROUP BY EDJU.JENIS_UNIT
			ORDER BY EDJU.JENIS_UNIT
			");
		}


		return $sql;
	}


	// Laporan Pendingan Per Teknisi
	public function LPTeknisi($teknisi){
		$sql = $this->db->query("SELECT
		EDCA.NO_COMPLAIN As NO_COMPLAIN,
		EDCA.TGL As TGL_COMPLAIN,
		EDCA.JAM As JAM_COMPLAIN,
		EDCA.KODEDIV As KODEDIV,
		EDCA.USERE As USERE,
		EDCA.KODE_UNIT As KODE_UNIT,
		EDCA.URAIAN As URAIAN,
		EDCA.KET_PENDING As KETERANGAN,
		EDCA.TGL_PENDING As TGL_PENDING,
		EDCA.JAM_PENDING As JAM_PENDING
		FROM ED_COMPA EDCA
		JOIN ED_SPKA EDSA ON EDSA.NO_COMPLAIN=EDCA.NO_COMPLAIN
		JOIN ED_SPKC EDSC ON EDSA.NO_SPK=EDSC.NO_SPK
		WHERE EDSC.PETUGAS=$teknisi and EDCA.STATUS=3
		
		");

		return $sql;
		

	}


	public function LBRusak($tglawal, $tglakhir, $jenisunit, $kodeunit, $rusak){

		$jenisunit = strtoupper($jenisunit);
		$kodeunit = strtoupper($kodeunit);

		$cekjenisunit = false;
		$cekkodeunit  = false;

		$sql = null;

		if ($jenisunit == "SEMUA") {
			# code...

			$cekjenisunit = true;

		}
		if ($kodeunit == "SEMUA") {
			# code...
			$cekkodeunit = true;
		}


		if ($rusak=="semua") {
			# code...
			if ($cekjenisunit== true && $cekkodeunit == true) {
				# code...
					$sql = $this->db->query("SELECT
				EDCA.TGL_SAH As TGL_SELESAI,
				EDCA.NO_COMPLAIN As NO_COMPLAIN,
				EDCB.JENIS_UNIT As JENIS_UNIT,
				EDCA.KODE_UNIT As KODE_UNIT,
				EDCA.URAIAN As URAIAN,
				EDSC.PETUGAS As PETUGAS,
				EDCA.TGL As TGL_COMPLAIN
				FROM ED_COMPA EDCA
				JOIN ED_SPKA EDSA ON EDSA.NO_COMPLAIN=EDCA.NO_COMPLAIN
				JOIN ED_SPKC EDSC ON EDSA.NO_SPK=EDSC.NO_SPK
				JOIN ED_COMPB EDCB ON EDCA.NO_COMPLAIN=EDCB.NO_COMPLAIN
				WHERE EDCA.TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and EDCA.TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY AND EDCA.STATUS=4 or EDCA.STATUS=5 or EDCA.STATUS=2
				
				");
				return $sql;

			}
			else if ($cekjenisunit == true && $cekkodeunit == false) {
				# code...
					$sql = $this->db->query("SELECT
				EDCA.TGL_SAH As TGL_SELESAI,
				EDCA.NO_COMPLAIN As NO_COMPLAIN,
				EDCB.JENIS_UNIT As JENIS_UNIT,
				EDCA.KODE_UNIT As KODE_UNIT,
				EDCA.URAIAN As URAIAN,
				EDSC.PETUGAS As PETUGAS,
				EDCA.TGL As TGL_COMPLAIN
				FROM ED_COMPA EDCA
				JOIN ED_SPKA EDSA ON EDSA.NO_COMPLAIN=EDCA.NO_COMPLAIN
				JOIN ED_SPKC EDSC ON EDSA.NO_SPK=EDSC.NO_SPK
				JOIN ED_COMPB EDCB ON EDCA.NO_COMPLAIN=EDCB.NO_COMPLAIN
				WHERE EDCA.TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and EDCA.TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY and EDCB.JENIS_UNIT='".$jenisunit."' AND EDCA.STATUS=4 or EDCA.STATUS=5 or EDCA.STATUS=2
				
				");
				return $sql;
			}
			else if($cekjenisunit == false && $cekkodeunit == true){
					$sql = $this->db->query("SELECT
				EDCA.TGL_SAH As TGL_SELESAI,
				EDCA.NO_COMPLAIN As NO_COMPLAIN,
				EDCB.JENIS_UNIT As JENIS_UNIT,
				EDCA.KODE_UNIT As KODE_UNIT,
				EDCA.URAIAN As URAIAN,
				EDSC.PETUGAS As PETUGAS,
				EDCA.TGL As TGL_COMPLAIN
				FROM ED_COMPA EDCA
				JOIN ED_SPKA EDSA ON EDSA.NO_COMPLAIN=EDCA.NO_COMPLAIN
				JOIN ED_SPKC EDSC ON EDSA.NO_SPK=EDSC.NO_SPK
				JOIN ED_COMPB EDCB ON EDCA.NO_COMPLAIN=EDCB.NO_COMPLAIN
				WHERE EDCA.TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and EDCA.TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY and EDCA.KODE_UNIT='".$kodeunit."' AND EDCA.STATUS=4 or EDCA.STATUS=5 or EDCA.STATUS=2
				
				");
				return $sql;
			}
			else if($cekjenisunit == false && $cekkodeunit == false){
					$sql = $this->db->query("SELECT
				EDCA.TGL_SAH As TGL_SELESAI,
				EDCA.NO_COMPLAIN As NO_COMPLAIN,
				EDCB.JENIS_UNIT As JENIS_UNIT,
				EDCA.KODE_UNIT As KODE_UNIT,
				EDCA.URAIAN As URAIAN,
				EDSC.PETUGAS As PETUGAS,
				EDCA.TGL As TGL_COMPLAIN
				FROM ED_COMPA EDCA
				JOIN ED_SPKA EDSA ON EDSA.NO_COMPLAIN=EDCA.NO_COMPLAIN
				JOIN ED_SPKC EDSC ON EDSA.NO_SPK=EDSC.NO_SPK
				JOIN ED_COMPB EDCB ON EDCA.NO_COMPLAIN=EDCB.NO_COMPLAIN
				WHERE EDCA.TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and EDCA.TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY and EDCA.KODE_UNIT='".$kodeunit."' and EDCB.JENIS_UNIT='".$jenisunit."' AND EDCA.STATUS=4 or EDCA.STATUS=5 or EDCA.STATUS=2
				
				");
				return $sql;
			}
			
		}
		else if ($rusak=="ya") {
			# code...
			
			if ($cekjenisunit== true && $cekkodeunit == true) {
				# code...
					$sql = $this->db->query("SELECT
				EDCA.TGL_SAH As TGL_SELESAI,
				EDCA.NO_COMPLAIN As NO_COMPLAIN,
				EDCB.JENIS_UNIT As JENIS_UNIT,
				EDCA.KODE_UNIT As KODE_UNIT,
				EDCA.URAIAN As URAIAN,
				EDSC.PETUGAS As PETUGAS,
				EDCA.TGL As TGL_COMPLAIN
				FROM ED_COMPA EDCA
				JOIN ED_SPKA EDSA ON EDSA.NO_COMPLAIN=EDCA.NO_COMPLAIN
				JOIN ED_SPKC EDSC ON EDSA.NO_SPK=EDSC.NO_SPK
				JOIN ED_COMPB EDCB ON EDCA.NO_COMPLAIN=EDCB.NO_COMPLAIN
				WHERE EDCA.TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and EDCA.TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY AND EDCA.STATUS=2
				
				");

				return $sql;

			}
			else if ($cekjenisunit == true && $cekkodeunit == false) {
				# code...
					$sql = $this->db->query("SELECT
				EDCA.TGL_SAH As TGL_SELESAI,
				EDCA.NO_COMPLAIN As NO_COMPLAIN,
				EDCB.JENIS_UNIT As JENIS_UNIT,
				EDCA.KODE_UNIT As KODE_UNIT,
				EDCA.URAIAN As URAIAN,
				EDSC.PETUGAS As PETUGAS,
				EDCA.TGL As TGL_COMPLAIN
				FROM ED_COMPA EDCA
				JOIN ED_SPKA EDSA ON EDSA.NO_COMPLAIN=EDCA.NO_COMPLAIN
				JOIN ED_SPKC EDSC ON EDSA.NO_SPK=EDSC.NO_SPK
				JOIN ED_COMPB EDCB ON EDCA.NO_COMPLAIN=EDCB.NO_COMPLAIN
				WHERE EDCA.TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and EDCA.TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY and EDCB.JENIS_UNIT='".$jenisunit."' AND EDCA.STATUS=2
				
				");

				return $sql;
			}
			else if($cekjenisunit == false && $cekkodeunit == true){
					$sql = $this->db->query("SELECT
				EDCA.TGL_SAH As TGL_SELESAI,
				EDCA.NO_COMPLAIN As NO_COMPLAIN,
				EDCB.JENIS_UNIT As JENIS_UNIT,
				EDCA.KODE_UNIT As KODE_UNIT,
				EDCA.URAIAN As URAIAN,
				EDSC.PETUGAS As PETUGAS,
				EDCA.TGL As TGL_COMPLAIN
				FROM ED_COMPA EDCA
				JOIN ED_SPKA EDSA ON EDSA.NO_COMPLAIN=EDCA.NO_COMPLAIN
				JOIN ED_SPKC EDSC ON EDSA.NO_SPK=EDSC.NO_SPK
				JOIN ED_COMPB EDCB ON EDCA.NO_COMPLAIN=EDCB.NO_COMPLAIN
				WHERE EDCA.TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and EDCA.TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY and EDCA.KODE_UNIT='".$kodeunit."' AND EDCA.STATUS=2
				
				");

				return $sql;
			}
			else if($cekjenisunit == false && $cekkodeunit == false){
					$sql = $this->db->query("SELECT
				EDCA.TGL_SAH As TGL_SELESAI,
				EDCA.NO_COMPLAIN As NO_COMPLAIN,
				EDCB.JENIS_UNIT As JENIS_UNIT,
				EDCA.KODE_UNIT As KODE_UNIT,
				EDCA.URAIAN As URAIAN,
				EDSC.PETUGAS As PETUGAS,
				EDCA.TGL As TGL_COMPLAIN
				FROM ED_COMPA EDCA
				JOIN ED_SPKA EDSA ON EDSA.NO_COMPLAIN=EDCA.NO_COMPLAIN
				JOIN ED_SPKC EDSC ON EDSA.NO_SPK=EDSC.NO_SPK
				JOIN ED_COMPB EDCB ON EDCA.NO_COMPLAIN=EDCB.NO_COMPLAIN
				WHERE EDCA.TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and EDCA.TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY and EDCA.KODE_UNIT='".$kodeunit."' and EDCB.JENIS_UNIT='".$jenisunit."' AND EDCA.STATUS=2
				
				");
				return $sql;
			}
			
		}
		else if($rusak=="tidak"){
			if ($cekjenisunit== true && $cekkodeunit == true) {
				# code...
					$sql = $this->db->query("SELECT
				EDCA.TGL_SAH As TGL_SELESAI,
				EDCA.NO_COMPLAIN As NO_COMPLAIN,
				EDCB.JENIS_UNIT As JENIS_UNIT,
				EDCA.KODE_UNIT As KODE_UNIT,
				EDCA.URAIAN As URAIAN,
				EDSC.PETUGAS As PETUGAS,
				EDCA.TGL As TGL_COMPLAIN
				FROM ED_COMPA EDCA
				JOIN ED_SPKA EDSA ON EDSA.NO_COMPLAIN=EDCA.NO_COMPLAIN
				JOIN ED_SPKC EDSC ON EDSA.NO_SPK=EDSC.NO_SPK
				JOIN ED_COMPB EDCB ON EDCA.NO_COMPLAIN=EDCB.NO_COMPLAIN
				WHERE EDCA.TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and EDCA.TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY and EDCA.STATUS=4 or EDCA.STATUS=5
				
				");
				return $sql;

			}
			else if ($cekjenisunit == true && $cekkodeunit == false) {
				# code...
					$sql = $this->db->query("SELECT
				EDCA.TGL_SAH As TGL_SELESAI,
				EDCA.NO_COMPLAIN As NO_COMPLAIN,
				EDCB.JENIS_UNIT As JENIS_UNIT,
				EDCA.KODE_UNIT As KODE_UNIT,
				EDCA.URAIAN As URAIAN,
				EDSC.PETUGAS As PETUGAS,
				EDCA.TGL As TGL_COMPLAIN
				FROM ED_COMPA EDCA
				JOIN ED_SPKA EDSA ON EDSA.NO_COMPLAIN=EDCA.NO_COMPLAIN
				JOIN ED_SPKC EDSC ON EDSA.NO_SPK=EDSC.NO_SPK
				JOIN ED_COMPB EDCB ON EDCA.NO_COMPLAIN=EDCB.NO_COMPLAIN
				WHERE EDCA.TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and EDCA.TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY and EDCB.JENIS_UNIT='".$jenisunit."' AND EDCA.STATUS=4 or EDCA.STATUS=5
				
				");
				return $sql;
			}
			else if($cekjenisunit == false && $cekkodeunit == true){
					$sql = $this->db->query("SELECT
				EDCA.TGL_SAH As TGL_SELESAI,
				EDCA.NO_COMPLAIN As NO_COMPLAIN,
				EDCB.JENIS_UNIT As JENIS_UNIT,
				EDCA.KODE_UNIT As KODE_UNIT,
				EDCA.URAIAN As URAIAN,
				EDSC.PETUGAS As PETUGAS,
				EDCA.TGL As TGL_COMPLAIN
				FROM ED_COMPA EDCA
				JOIN ED_SPKA EDSA ON EDSA.NO_COMPLAIN=EDCA.NO_COMPLAIN
				JOIN ED_SPKC EDSC ON EDSA.NO_SPK=EDSC.NO_SPK
				JOIN ED_COMPB EDCB ON EDCA.NO_COMPLAIN=EDCB.NO_COMPLAIN
				WHERE EDCA.TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and EDCA.TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY and EDCA.KODE_UNIT='".$kodeunit."' AND EDCA.STATUS=4 or EDCA.STATUS=5
				
				");
				return $sql;
			}
			else if($cekjenisunit == false && $cekkodeunit == false){
					$sql = $this->db->query("SELECT
				EDCA.TGL_SAH As TGL_SELESAI,
				EDCA.NO_COMPLAIN As NO_COMPLAIN,
				EDCB.JENIS_UNIT As JENIS_UNIT,
				EDCA.KODE_UNIT As KODE_UNIT,
				EDCA.URAIAN As URAIAN,
				EDSC.PETUGAS As PETUGAS,
				EDCA.TGL As TGL_COMPLAIN
				FROM ED_COMPA EDCA
				JOIN ED_SPKA EDSA ON EDSA.NO_COMPLAIN=EDCA.NO_COMPLAIN
				JOIN ED_SPKC EDSC ON EDSA.NO_SPK=EDSC.NO_SPK
				JOIN ED_COMPB EDCB ON EDCA.NO_COMPLAIN=EDCB.NO_COMPLAIN
				WHERE EDCA.TGL >= to_date('".$tglawal."', 'MM/DD/YYYY') and EDCA.TGL <= to_date('".$tglakhir."', 'MM/DD/YYYY') + INTERVAL '1' DAY and EDCA.KODE_UNIT='".$kodeunit."' and EDCB.JENIS_UNIT='".$jenisunit."' AND EDCA.STATUS=4 or EDCA.STATUS=5
				
				");
				return $sql;
			}
			
		}

		

		return $sql;
	}

    
}
?>

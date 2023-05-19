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

    public function insertcompa($kode_divisi, $no_divisi, $kode_unit, $lokasi_unit, $uraian, $tgl, $jam) {
        $qry = $this->db->query('select * from ed_compA'); 
        $count = $qry->num_rows() + 1; 
        $nocomplain = 'ZM'.substr(date("Y"), 2, 2).str_pad($count, 6, "0", STR_PAD_LEFT);

        $sql = "insert into ed_compA(NO_COMPLAIN, TGL, JAM, KODEDIV, USERE, KODE_UNIT, URAIAN) 
                    values ('$nocomplain', to_date('$tgl', 'yyyy-mm-dd'), '$jam', '$kode_divisi', 'usere', '$kode_unit', '$uraian')";
        $this->db->query($sql);

        return $nocomplain;
    }

    public function getcompAbyid($no_complain){
        $sql = $this->db->query("select * from ed_compA where no_complin = '".$no_complain."'");
    }
}
?>
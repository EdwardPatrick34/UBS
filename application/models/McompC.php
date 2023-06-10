<?php 
class McompC extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getdatacompC(){
        $jum = $this->db->query("select * from ed_compC");
        return $jum; 
    }

    public function insertdata($nocomplain, $sub_complain, $jenis_spk, $realisasi) {
        $sql = "insert into ed_compC(NO_COMPLAIN, SUB_COMPLAIN, JENIS_SPK, REALISASI) 
                    values ('$nocomplain', '$sub_complain', '$jenis_spk', '$realisasi')";
        $this->db->query($sql);
    }

    public function getcompcByid($no_complain){
        // $sql = $this->db->query("select jenis_spk from ed_compC where no_complain = '".$no_complain."'");

        // $sqlquery = $this->db->query("select * from ed_jenisspk where jenis_spk = '".$sql."'");
        $sqlquery = $this->db->query("select * from ed_jenisspk where jenis_spk = '".$sql."'");
        return $sqlquery;
    }
}
?>


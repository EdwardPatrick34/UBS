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

        $sql = "insert into ed_spkA(NO_SPK, NO_COMPLAIN, TGL_SPK, JAM_SPK, TGLCHAR_SPK, STATUS, TGL_T, JAM_T, TGLCHAR_T, USERE) 
        values ('$no_spk', '$no_complain', '$tgljamspk', '$jamspk', '$tglspk', '$status', '$tgljamlapor', '$jamlapor', '$tgllapor', '$usere')";

        $this->db->query($sql);
        return $no_spk;
    }
    
}
?>
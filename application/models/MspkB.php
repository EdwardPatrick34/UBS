<?php
class MspkB extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getdataspkB(){
        $sql = $this->db->query('select * from ed_spkb');
        return $sql;
    }
    
    public function insertspkb($no_complain, $sub_spk, $jenis_unit){
        $sql = "insert into ed_spkb (NO_SPK,  SUB_SPK, JENIS_UNIT) values ('$no_complain', '$sub_spk', '$jenis_unit')";
        $this->db->query($sql);
    }
}
?>
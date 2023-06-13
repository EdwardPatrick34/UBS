<?php
class MspkC extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getdataspkC(){
        $sql = $this->db->query('select * from ed_spkc');
        return $sql;
    }

    public function insertspkc($no_spk, $sub_spk,$petugas){
        $sql = "insert into ed_spkc(NO_SPK, URUT, PETUGAS) values ('$no_spk', '$sub_spk', '$petugas')";
        $this->db->query($sql);

        
    }
}
?>
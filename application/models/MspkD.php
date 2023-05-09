<?php
class MspkD extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getdataspkD(){
        $sql = $this->db->query('select * from ed_spkd');
        return $sql;
    }
    
}
?>
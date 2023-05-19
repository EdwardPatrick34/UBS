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
    
}
?>
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
    
}
?>
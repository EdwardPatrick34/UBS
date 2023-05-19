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
    
}
?>
<?php 
class member extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getdata(){
        $jum = $this->db->query("select * from member");
        $jums = $jum->num_rows();
        return $jums;
    }
}
?>
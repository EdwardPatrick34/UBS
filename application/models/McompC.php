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

   
    
}
?>
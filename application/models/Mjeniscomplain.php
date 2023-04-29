<?php 
class Mjeniscomplain extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getdatacomplain(){
        $jum = $this->db->query("select * from ed_jeniscomplain");
        return $jum; 

        // $jums = $jum->num_rows();
        // return $jums;
    }

    public function insertComplain($jenis_complain, $no_complain, $nama_complain, $usere)
    {
        $sql = "insert into ed_jeniscomplain(jenis_complain, no_complain, nama_complain, usere) values('$jenis_complain', '$no_complain', '$nama_complain', '$usere')";
        $this->db->query($sql); 
    }


    public function deleteComplain($Id){
        $sql = "delete from ed_jeniscomplain where jenis_complain = '".$Id."'";
        $this->db->query($sql);
    }


    public function editComplain(){
        
    }
    
}
?>
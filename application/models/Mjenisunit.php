<?php 
class Mjenisunit extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getdata(){
        $jum = $this->db->query("select * from ed_jenisunit");
        return $jum; 
    }

    public function insertjenisunit($jenis_unit, $nama_ju, $usere, $jenis_complain)
    {
        $sql = "insert into ed_jenisunit(jenis_unit, nama_ju,usere, jenis_complain) values('$jenis_unit', '$nama_ju','$usere', '$jenis_complain')";
        $this->db->query($sql); 
    }


    public function deletejenisunit($Id){
        $sql = "delete from ed_jenisunit where jenis_unit = '".$Id."'";
        $this->db->query($sql);
    }


    public function editjenisunit($jenis_unit, $nama_ju, $usere, $jenis_complain)
    {
        $sql = "update ed_jenisunit SET nama_ju = '".$nama_ju."', usere ='".$usere."', jenis_complain = '".$jenis_complain."' where jenis_unit = '".$jenis_unit."'";
        $this->db->query($sql);    
    }

    public function getjenisunitbyid($jenis_unit){
        $sql = $this->db->query("select * from ed_jenisunit where jenis_unit = '".$jenis_unit."'");
        return $sql;
    }
    
}
?>
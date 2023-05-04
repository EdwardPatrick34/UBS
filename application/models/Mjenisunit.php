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

    public function insertjenisunit($jenis_complain, $no_complain, $nama_complain, $usere, $sub_complain)
    {
        $sql = "insert into ed_jeniscomplain(jenis_complain, sub_complain,no_complain, nama_complain, usere) values('$jenis_complain', '$sub_complain','$no_complain', '$nama_complain', '$usere')";
        $this->db->query($sql); 
    }


    public function deletejenisunit($Id){
        $sql = "delete from ed_jeniscomplain where jenis_complain = '".$Id."'";
        $this->db->query($sql);
    }


    public function editjenisunit($jenis_complain, $sub_complain, $no_complain, $nama_complain, $usere)
    {
        $sql = "update ed_jeniscomplain SET nama_complain = '".$nama_complain."', usere ='".$usere."', sub_complain = '".$sub_complain."', no_complain = '".$no_complain."' where jenis_complain = '".$jenis_complain."'";
        $this->db->query($sql);    
    }

    public function getjenisunitbyid($jeniscomplain){
        $sql = $this->db->query("select * from ed_jeniscomplain where jenis_complain = '".$jeniscomplain."'");
        return $sql;
    }
    
}
?>


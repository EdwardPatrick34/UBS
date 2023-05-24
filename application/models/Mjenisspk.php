<?php 
class Mjenisspk extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getdatajenisspk(){
        $jum = $this->db->query("select * from ed_jenisspk");
        return $jum; 

        // $jums = $jum->num_rows();
        // return $jums;
    }

    public function insertjenisspk($jenis_spk, $no_spk, $sub_spk,$no_complain,$sub_complain,$nama_spk, $menit,$usere)
    {
        $sql = "insert into ed_jenisspk(jenis_spk,  nama_spk, menit,usere) values('$jenis_spk', '$nama_spk', '$menit','$usere')";
        $this->db->query($sql); 
    }


    public function deletejenisspk($Id){
        $sql = "delete from ed_jeniscomplain where jenis_spk = '".$Id."'";
        $this->db->query($sql);
    }


    public function editjenisspk($jenis_spk, $nama_spk, $menit,$usere)
    {
        // no spk dan jenis spk yang gk boleh diganti
        $sql = "update ed_jenisspk SET nama_spk = '".$nama_spk."', usere ='".$usere."',  menit = '".$menit."' where jenis_spk = '".$jenis_spk."'";
        $this->db->query($sql);    
    }

    public function getjenisspkbyid($jenisspk){
        $sql = $this->db->query("select * from ed_jenisspk where jenis_spk = '".$jenisspk."'");
        return $sql;
    }
    
}
?>


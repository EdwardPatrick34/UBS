<?php 
class McompB extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getdatacompB(){
        $jum = $this->db->query("select * from ed_compB");
        return $jum; 
    }

    public function insertdata($nocomplain, $sub_complain, $jenis_unit, $jenis_complain, $keterangan) {
        $sql = "insert into ed_compB(NO_COMPLAIN, SUB_COMPLAIN, JENIS_UNIT, JENIS_COMPLAIN, KET, USERE) 
                    values ('$nocomplain', '$sub_complain', '$jenis_unit', '$jenis_complain', '$keterangan', 'usere')";
        $this->db->query($sql);
    }

    // public function insertComplain($jenis_complain, $no_complain, $nama_complain, $usere)
    // {
    //     $sql = "insert into ed_jeniscomplain(jenis_complain, no_complain, nama_complain, usere) values('$jenis_complain', '$no_complain', '$nama_complain', '$usere')";
    //     $this->db->query($sql); 
    // }


    // public function deleteComplain($Id){
    //     $sql = "delete from ed_jeniscomplain where jenis_complain = '".$Id."'";
    //     $this->db->query($sql);
    // }


    // public function editComplain($jenis_complain, $no_complain, $nama_complain, $usere)
    // {
    //     $sql = "update ed_jeniscomplain SET nama_complain = '".$nama_complain."', usere ='".$usere."' where jenis_complain = '".$jenis_complain."'";
    //     $this->db->query($sql);    
    // }

    // public function getjeniscomplainbyid($jeniscomplain){
    //     $sql = $this->db->query("select * from ed_jeniscomplain where jenis_complain = '".$jeniscomplain."'");
    //     return $sql;
    // }
    
}
?>


<?php 
class Mstatus extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getdatastatus(){
        $jum = $this->db->query("select * from ed_status");
        return $jum; 
    }

    public function insertStatus($id, $nama, $usere)
    {
        $sql = "insert into ed_status(status, nama_status, usere) values('$id','$nama', '$usere')";
        $this->db->query($sql); 
    }


    public function deletestatus($Id){
        $sql = "delete from ed_status where status = '".$Id."'";
        $this->db->query($sql);
    }

    public function editstatus($id, $nama, $usere, $aktif, $jam_kerja, $jam_kerja_baru){
        $sql = "";
    }
}
?>
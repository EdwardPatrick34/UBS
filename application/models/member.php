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

    public function insertPetugas($id, $nama, $usere, $aktif, $jam_kerja, $jam_kerja_baru)
    {
        $sql = "insert into ed_petugas(petugas, nama_petugas, usere, aktif, jam_kerja, jam_kerja_baru) values('$id','$nama', '$usere', '$aktif', '$jam_kerja', '$jam_kerja_baru')";
        $this->db->query($sql); 
    }
}
?>
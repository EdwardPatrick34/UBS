<?php
class MspkD extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getdataspkD(){
        $sql = $this->db->query('select * from ed_spkd');
        return $sql;
    }

    public function insertspkd($no_spk, $sub_spk, $jenis_spk, $realisasi, $keterangan){
        $sql = "insert into ed_spkd(no_spk, sub_spk, jenis_spk, realisasi, ket) values('$no_spk', '$sub_spk', '$jenis_spk', '$realisasi', '$keterangan')";
        $this->db->query($sql);

        $sqlquery = "update ed_startstop set KET = '".$keterangan."'where no_spk ='".$no_spk."'";
        $this->db->query($sqlquery);
    }
}
?>
<?php 

class Muser extends CI_Model {
	

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

	public function getAllUser(){
        $sql = $this->db->query('select * from ED_USERE');
        return $sql;
    }

	public function getUserBy($username){

		$sql = $this->db->query("select * from ED_USERE where username = '".$username."'");

		return $sql;
	}


	public function insertUser($id, $username, $pass, $nama, $role)
    {
        $sql = "insert into ed_usere(id, username, password, nama, role) values('$id','$username', '$pass', '$nama', '$role')";

        $this->db->query($sql); 
    }

	public function deleteUser($id){
        $sql = "delete from ed_usere where id = '".$id."'";
        $this->db->query($sql);
    }


}

?>

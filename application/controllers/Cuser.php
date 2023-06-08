<?php 

class Cuser extends CI_Controller{

	public function __construct() {
		parent::__construct(); 
		$this->load->helper('url'); 
		$this->load->model('Muser');
		$this->load->model('McompA');
		$this->load->library('form_validation');
	}



	public function Login(){

		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$user = $this->Muser->getUserBy($username);

		$u = $user->row();
		if ($u == null) {
			# code...
			$this->session->set_flashdata('msg','username atau password salah');
			redirect(base_url('login'));

		}
		if($u->ROLE == "0"){

			$this->load->view('template/headeradmin');
			$param["datadivisi"] = $this->McompA->Cpd();
			$param["title"]= "Jumlah Complain Per Divisi";
			$this->load->view('admin/homeadminIT', $param);
			$this->load->view('template/footer');
		}
		else if($u->ROLE == "1"){
			$this->load->view('template/headerTeknisi');
			$this->load->view('teknisi/homeTeknisi');
			$this->load->view('template/footer');
		}
		else if($u->ROLE == "2"){
			$this->load->view('template/headeradminSIT');
			$this->load->view('adminSIT/homeadminSIT');
			$this->load->view('template/footer');
		}




	}


	public function TambahUser(){
		$this->load->view('template/headeradmin');
		$this->load->view("admin/Tambah/tambahUser");
		$this->load->view('template/footer');
	}



	public function InsertUser(){
		
		
		
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post("password");
		$nama = $this->input->post("nama");
		$role = $this->input->post("role");
		
		$this->Muser->insertUser($id, $username, $password, $nama, $role);
		$this->session->set_flashdata('msg','Berhasil menambahkan user');
		redirect(base_url('CRAdmin/masterUser'));
		
		
		
		
	}

	public function deleteUser($id){
		$this->Muser->deleteUser($id);
		$this->session->set_flashdata('msg','Berhasil menghapus user');
		redirect(base_url('CRAdmin/masterUser'));
	}


	




}


?>

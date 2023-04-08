<?php

class Page extends CI_Controller{

	public function HomeAdminIT(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/homeadminIT');
		$this->load->view('template/footeradmin');
	}

	public function MasterUnit(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Master/masterUnit');
		$this->load->view('template/footeradmin');
	}

	public function MasterJenisUnit(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Master/masterJenisUnit');
		$this->load->view('template/footeradmin');
	}


	public function MasterPetugas(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Master/masterPetugas');
		$this->load->view('template/footeradmin');
	}

	public function MasterJenisComplain(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Master/masterJenisComplain');
		$this->load->view('template/footeradmin');
	}

	public function MasterStatus(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Master/masterStatus');
		$this->load->view('template/footeradmin');
	}

	public function MasterRepair(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Master/masterRepair');
		$this->load->view('template/footeradmin');
	}

	public function MasterJenisSpk(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Master/masterJenisSpk');
		$this->load->view('template/footeradmin');
	}


	public function TambahJenisUnit(){
		$this->load->view('template/headeradmin');
		$this->load->view("admin/Tambah/tambahJenisUnit");
		$this->load->view('template/footeradmin');
	}

	public function TambahPetugas(){
		$this->load->view('template/headeradmin');
		$this->load->view("admin/Tambah/tambahPetugas");
		$this->load->view('template/footeradmin');
	}

	public function TambahJenisComplain(){
		$this->load->view('template/headeradmin');
		$this->load->view("admin/Tambah/tambahJenisComplain");
		$this->load->view('template/footeradmin');
	}

	public function TambahStatus(){
		$this->load->view('template/headeradmin');
		$this->load->view("admin/Tambah/tambahStatus");
		$this->load->view('template/footeradmin');
	}
	public function TambahRepair(){
		$this->load->view('template/headeradmin');
		$this->load->view("admin/Tambah/tambahRepair");
		$this->load->view('template/footeradmin');
	}

	public function TambahUnit(){
		$this->load->view('template/headeradmin');
		$this->load->view("admin/Tambah/tambahUnit");
		$this->load->view('template/footeradmin');
	}

	public function TambahJenisSpk(){
		$this->load->view('template/headeradmin');
		$this->load->view("admin/Tambah/tambahJenisSpk");
		$this->load->view('template/footeradmin');
	}


}

?>

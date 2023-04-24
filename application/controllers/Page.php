<?php

class Page extends CI_Controller{
	public function __construct() {
		parent::__construct(); 
		$this->load->model('Mpetugas'); 
		$this->load->model('Mjeniscomplain');
		$this->load->model('Mstatus');
		$this->load->helper('url'); 
 
	}

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
	  
		$param['datapetugas'] = $this->Mpetugas->getdatapetugas(); 
	  
		$this->load->view('admin/Master/masterPetugas', $param);
		$this->load->view('template/footeradmin');
	   }

	public function MasterJenisComplain(){
		$this->load->view('template/headeradmin');

		$param['dataComplain'] = $this->Mjeniscomplain->getdatacomplain();
		
		$this->load->view('admin/Master/masterJenisComplain', $param);
		$this->load->view('template/footeradmin');
	}

	public function MasterStatus(){
		$this->load->view('template/headeradmin');

		$param['datastatus'] = $this->Mstatus->getdatastatus();
		$this->load->view('admin/Master/masterStatus', $param);
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

	public function MonitoringComplain(){
		$this->load->view('template/headeradmin');
		$this->load->view("admin/infrastruktur/monitoringComplain");
		$this->load->view('template/footeradmin');
	}

	

}

?>

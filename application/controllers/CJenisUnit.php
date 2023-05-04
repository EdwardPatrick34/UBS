
<?php 

class CJenisUnit extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mjenisunit');
		$this->load->helper('url'); 
		$this->load->library('form_validation');
	}

	public function MasterJenisUnit(){
		$this->load->view('template/headeradmin');
		$param['datajenisunit'] = $this->Mjenisunit->getdata();
		$this->load->view('admin/Master/masterJenisUnit', $param);
		$this->load->view('template/footer');
	}


	public function HEditJenisUnit(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Edit/editJenisUnit');
		$this->load->view('template/footer');
	}

	public function insertjenisunit(){
		$this->form_validation->set_rules('jenis_unit','jenis_unit','required', array('required'=>'jenis_unit tidak boleh kosong'));
		$this->form_validation->set_rules('nama_ju', 'nama_ju', 'required', array('required' => 'nama jenis unit tidak boleh kosong'));
		$this->form_validation->set_rules('usere', 'usere', 'required',array('required'=>'user tidak boleh kosong'));
		$this->form_validation->set_rules('jenis_complain','jenis_complain','required',array('required'=>'jenis complain tidak boleh kosong'));

		if($this->form_validation->run() == true){
			
		}

		$this->session->set_flashdata('errormsg', validation_errors());
		redirect(base_url('CRAdmin/tambahJenisUnit'));
	}

	public function deletejenisunit($jenis_unit){

	}

	public function getjenisunitbyid($jenis_unit){

	}

	public function editjenisunit(){

	}
}

?>

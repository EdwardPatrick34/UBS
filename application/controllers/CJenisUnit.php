
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
		// $this->form_validation->set_rules('nama_ju', 'nama_ju', 'required', array('required' => 'nama jenis unit tidak boleh kosong'));
		// $this->form_validation->set_rules('usere', 'usere', 'required',array('required'=>'user tidak boleh kosong'));
		// $this->form_validation->set_rules('jenis_complain','jenis_complain','required',array('required'=>'jenis complain tidak boleh kosong'));

		if($this->form_validation->run() == true){
			$jenis_unit = $this->input->post('jenis_unit');
			$nama_ju = $this->input->post('nama_ju');
			$usere = $this->input->post('usere');
			$jenis_complain = $this->input->post('jenis_complain');

			$this->Mjenisunit->insertjenisunit($jenis_unit, $nama_ju, $usere, $jenis_complain);
			// $this->session->set_flashdata('msg', 'Berhasil menambahkan jenis unit');
			$this->toastr->success('Berhasil Tambah Jenis Unit');
			redirect(base_url('CJenisUnit/masterJenisUnit'));
		}

		$this->session->set_flashdata('errormsg', validation_errors());
		redirect(base_url('CRAdmin/tambahJenisUnit'));
	}

	public function deletejenisunit($jenis_unit){
		$this->Mjenisunit->deletejenisunit($jenis_unit); 
		// $this->session->set_flashdata('msg','Berhasil menghapus data jenis unit');
		$this->toastr->success('Berhasil Hapus Jenis Unit');
		redirect(base_url('CJenisUnit/masterJenisUnit'));
	}

	public function getjenisunitbyid($jenis_unit){
		$this->load->view('template/headeradmin');
		$param['datajenisunit'] = $this->Mjenisunit->getjenisunitbyid($jenis_unit);
		$this->load->view('admin/Edit/editJenisUnit', $param);
		$this->load->view('template/footer');

	}

	public function editjenisunit(){
		$this->form_validation->set_rules('jenis_unit','jenis_unit','required', array('required'=>'jenis_unit tidak boleh kosong'));
		// $this->form_validation->set_rules('nama_ju', 'nama_ju', 'required', array('required' => 'nama jenis unit tidak boleh kosong'));
		// $this->form_validation->set_rules('usere', 'usere', 'required',array('required'=>'user tidak boleh kosong'));
		// $this->form_validation->set_rules('jenis_complain','jenis_complain','required',array('required'=>'jenis complain tidak boleh kosong'));

		if($this->form_validation->run() == true){
			$jenis_unit = $this->input->post('jenis_unit');
			$nama_ju = $this->input->post('nama_ju');
			$usere = $this->input->post('usere');
			$jenis_complain = $this->input->post('jenis_complain');

			$this->Mjenisunit->editjenisunit($jenis_unit, $nama_ju, $usere, $jenis_complain);
			// $this->session->set_flashdata('msg', 'Berhasil mengedit jenis unit');
			$this->toastr->success('Berhasil Edit Jenis Unit');
			redirect(base_url('CJenisUnit/masterJenisUnit'));
		}

		// $this->session->set_flashdata('msg',validation_errors());
		$this->toastr->error('Cek kembali inputan dan semua harus di isi');
		redirect(base_url('CJenisUnit/masterJenisUnit'));
	}
}

?>

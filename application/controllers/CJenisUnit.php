
<?php 

class CJenisUnit extends CI_Controller {


	public function MasterJenisUnit(){
		$this->load->view('template/headeradmin');
		$this->load->view('admin/Master/masterJenisUnit');
		$this->load->view('template/footer');
	}
}

?>

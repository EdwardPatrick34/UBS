<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

require FCPATH.'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class CExportExcel extends CI_Controller{
	public function __construct() {
		parent::__construct(); 
		$this->load->model('McompB');
		$this->load->model('Mpetugas'); 
		$this->load->model('Mjeniscomplain');
		$this->load->model('McompC');
		$this->load->model('MspkD');
		$this->load->model('MspkA');
		$this->load->model('Mstatus');
		$this->load->model('McompA');
		$this->load->model('Mjenisspk');
		$this->load->model('Mpetugas');
		$this->load->model('Muser');
		$this->load->helper('url'); 
		

 
	}

	public function LaporanHistoryComplain(){

		// $t = $this->input->post('data');
		// var_dump($t);
		$tglawalstring = $_GET['tglawal'];
		$tglakhirstring = $_GET['tglakir'];

		$datalap = $this->McompA->SLHComplain($tglawalstring, $tglakhirstring);
		$fileName = 'laporanhistorycomplain.xlsx';  
		
		// $employeeData = $this->EmployeeModel->employeeList();
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1', 'Nomor Complain');
       	$sheet->setCellValue('B1', 'Tanggal');
       	$sheet->setCellValue('C1', 'Status');
       	$sheet->setCellValue('D1', 'Uraian');
		$rows = 2;
		foreach ($datalap->result() as $val){
            $sheet->setCellValue('A' . $rows, $val->NO_COMPLAIN);
            $sheet->setCellValue('B' . $rows, $val->TGL);
            $sheet->setCellValue('C' . $rows, $val->NAMA_STATUS);
            $sheet->setCellValue('D' . $rows, $val->URAIAN);
	    	
            $rows++;
        } 
		
        $writer = new Xlsx($spreadsheet);
		$writer->save(FCPATH.'upload/'.$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."/upload/".$fileName);
		     
	}

	
}
?>


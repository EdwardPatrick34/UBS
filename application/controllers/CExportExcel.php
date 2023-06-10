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
		$this->load->model('Mlaporan');
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

	public function LaporanUraianComplainDivisi(){

		// $t = $this->input->post('data');
		// var_dump($t);
		$tglawalstring = $_GET['tglawal'];
		$tglakhirstring = $_GET['tglakir'];
		$divisi = $_GET['divisi'];

		$datalap = $this->McompA->LUCDivisi($tglawalstring, $tglakhirstring, $divisi);
		$fileName = 'laporanUraianComplainDivisi.xlsx';  
		
		// $employeeData = $this->EmployeeModel->employeeList();
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1', 'No');
       	$sheet->setCellValue('B1', 'No. SPK');
       	$sheet->setCellValue('C1', 'No. Complain');
       	$sheet->setCellValue('D1', 'User');
       	$sheet->setCellValue('E1', 'Div');
       	$sheet->setCellValue('F1', 'Kode Unit');
       	$sheet->setCellValue('G1', 'Uraian');
       	$sheet->setCellValue('H1', 'Tgl. Complain');
       	$sheet->setCellValue('I1', 'Status');
       	$sheet->setCellValue('J1', 'Nama Status');
       	$sheet->setCellValue('K1', 'Tanggal');
		$rows = 2;
		$no = 1;
		foreach ($datalap->result() as $val){
            $sheet->setCellValue('A' . $rows, $no);
            $sheet->setCellValue('B' . $rows, $val->NO_SPK);
            $sheet->setCellValue('C' . $rows, $val->NO_COMPLAIN);
            $sheet->setCellValue('D' . $rows, $val->USERE);
            $sheet->setCellValue('E' . $rows, $val->KODEDIV);
            $sheet->setCellValue('F' . $rows, $val->KODE_UNIT);
            $sheet->setCellValue('G' . $rows, $val->URAIAN);
            $sheet->setCellValue('H' . $rows, $val->TGL.' '.$val->JAM);
            $sheet->setCellValue('I' . $rows, $val->STATUS);
            $sheet->setCellValue('J' . $rows, $val->NAMA_STATUS);
            $sheet->setCellValue('K' . $rows, $val->TGL);
	    	$no++;
            $rows++;
        } 
		
        $writer = new Xlsx($spreadsheet);
		$writer->save(FCPATH.'upload/'.$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."/upload/".$fileName);
		     
	}

	public function LaporanBulananInfrastruktur(){

		// $t = $this->input->post('data');
		// var_dump($t);
		$tglawalstring = $_GET['tglawal'];
		$tglakhirstring = $_GET['tglakir'];
		

		$datalap = $this->Mlaporan->LBInfrastruktur($tglawalstring, $tglakhirstring);
		$fileName = 'laporanBulananInfrastruktur.xlsx';  
		
		// $employeeData = $this->EmployeeModel->employeeList();
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1', 'Tanggal SPK :  '.$tglawalstring. '  s/d  '. $tglakhirstring);
       	$sheet->setCellValue('A3', 'No');
       	$sheet->setCellValue('B3', 'Nama Teknisi');
       	$sheet->setCellValue('C3', 'No. Induk');
       	$sheet->setCellValue('D3', 'No Complain');
       	$sheet->setCellValue('E3', 'Div');
       	$sheet->setCellValue('F3', 'Kode Unit');
       	$sheet->setCellValue('G3', 'Tgl. Complain');
       	$sheet->setCellValue('H3', 'No SPK');
       	$sheet->setCellValue('I3', 'Tgl. Spk');
       	$sheet->setCellValue('J3', 'Tgl. Selesai');
       	$sheet->setCellValue('K3', 'Tgl. SAH');
       	
		$rows = 4;
		$no = 1;
		foreach ($datalap->result() as $val){
            $sheet->setCellValue('A' . $rows, $no);
            $sheet->setCellValue('B' . $rows, $val->NAMA_PETUGAS);
            $sheet->setCellValue('B' . $rows+1, 'Uraian : '. $val->URAIAN);
            $sheet->setCellValue('B' . $rows+2, 'Pekerjaan : '. $val->PEKERJAAN);
            $sheet->setCellValue('C' . $rows, $val->NOMOR_INDUK);
            $sheet->setCellValue('D' . $rows, $val->NO_COMPLAIN);
            $sheet->setCellValue('E' . $rows, $val->KODEDIV);
            $sheet->setCellValue('F' . $rows, $val->KODE_UNIT);
            $sheet->setCellValue('G' . $rows, $val->TGL_COMPLAIN);
            $sheet->setCellValue('H' . $rows, $val->NO_SPK);
            $sheet->setCellValue('I' . $rows, $val->TGL_SPK);
            $sheet->setCellValue('J' . $rows, $val->TGL_SAH);
            $sheet->setCellValue('K' . $rows, $val->TGL_SAH);
	    	$no++;
            $rows+=3;
        } 
		
        $writer = new Xlsx($spreadsheet);
		$writer->save(FCPATH.'upload/'.$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."/upload/".$fileName);
		     
	}

	
}
?>


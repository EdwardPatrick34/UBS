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

	public function LaporanKegiatanInfrastruktur(){

		// $t = $this->input->post('data');
		// var_dump($t);
		$tglawalstring = $_GET['tglawal'];
		$tglakhirstring = $_GET['tglakir'];
		$jenisunit = $_GET['ju'];

		$datalap = $this->Mlaporan->LKInfrastruktur($tglawalstring, $tglakhirstring, $jenisunit);
		$datasum = $this->Mlaporan->SLKI($tglawalstring, $tglakhirstring, $jenisunit);

		$fileName = 'laporanKegiatanInfrastruktur.xlsx';  
		
		// $employeeData = $this->EmployeeModel->employeeList();
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1', 'Tanggal Complain :  '.$tglawalstring. '  s/d  '. $tglakhirstring);
       	$sheet->setCellValue('A2', 'Jenis Unit :  '.$jenisunit);
       	$sheet->setCellValue('A4', 'No');
       	$sheet->setCellValue('B4', 'Jenis Unit');
       	$sheet->setCellValue('C4', 'No. Complain');
       	$sheet->setCellValue('D4', 'Div');
       	$sheet->setCellValue('E4', 'Sub');
       	$sheet->setCellValue('F4', 'Ket Kerusakan');
       	$sheet->setCellValue('G4', 'Tanggal');
       	$sheet->setCellValue('H4', 'Status');

		$sheet->setCellValue('K3','SUMMARY');
		$sheet->setCellValue('K4','JENIS UNIT');
		$sheet->setCellValue('L4','TOTAL');
       	
       	
		$rows = 5;
		$no = 1;
		foreach ($datalap->result() as $val){
            $sheet->setCellValue('A' . $rows, $no);
            $sheet->setCellValue('B' . $rows, $val->JENIS_UNIT);
            
            $sheet->setCellValue('C' . $rows, $val->NO_COMPLAIN);
            $sheet->setCellValue('D' . $rows, $val->KODEDIV);
            $sheet->setCellValue('E' . $rows, $val->SUB);
            $sheet->setCellValue('F' . $rows, $val->URAIAN);
            $sheet->setCellValue('G' . $rows, $val->TGL. ' ' .$val->JAM);
            $sheet->setCellValue('H' . $rows, $val->STATUS);
            
	    	$no++;
            $rows++;
        } 

		$rows2 = 5;
		foreach ($datasum->result() as $val){
            $sheet->setCellValue('K' . $rows2, $val->JENIS_UNIT);
            $sheet->setCellValue('L' . $rows2, $val->TOTAL);
            

            $rows2++;
        } 
		
        $writer = new Xlsx($spreadsheet);
		$writer->save(FCPATH.'upload/'.$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."/upload/".$fileName);
		     
	}	

	public function LaporanPendinganTeknisi(){

		// $t = $this->input->post('data');
		// var_dump($t);
		
		$teknisi = $_GET['teknisi'];

		$datalap = $this->Mlaporan->LPTeknisi($teknisi);
		

		$fileName = 'laporanPendinganTeknisi.xlsx';  
		
		// $employeeData = $this->EmployeeModel->employeeList();
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1', 'Teknisi :  ');
       	
       	$sheet->setCellValue('A3', 'No');
       	$sheet->setCellValue('B3', 'No. Complain');
       	$sheet->setCellValue('C3', 'Tgl. Complain');
       	$sheet->setCellValue('D3', 'Divisi');
       	$sheet->setCellValue('E3', 'Kode Unit');
       	$sheet->setCellValue('F3', 'Tgl Pending');
       	

		
       	
       	
		$rows = 4;
		$no = 1;
		foreach ($datalap->result() as $val){
            $sheet->setCellValue('A' . $rows, $no);
            $sheet->setCellValue('B' . $rows, $val->NO_COMPLAIN);
            $sheet->setCellValue('B' . $rows+1, 'Uraian : '. $val->URAIAN);
            $sheet->setCellValue('B' . $rows+2, 'Keterangan : '. $val->KETERANGAN);
            $sheet->setCellValue('C' . $rows, $val->TGL_COMPLAIN.'  '.$val->JAM_COMPLAIN);
            $sheet->setCellValue('D' . $rows, $val->KODEDIV);
            $sheet->setCellValue('E' . $rows, $val->KODE_UNIT);
            $sheet->setCellValue('F' . $rows, $val->TGL_PENDING.'  '.$val->JAM_PENDING);
            
	    	$no++;
            $rows+=3;
        } 

		
		
        $writer = new Xlsx($spreadsheet);
		$writer->save(FCPATH.'upload/'.$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."/upload/".$fileName);
		     
	}	

	public function LaporanBarangRusak(){

		// $t = $this->input->post('data');
		// var_dump($t);
		
		$tglawalstring = $_GET['tglawal'];
		$tglakhirstring = $_GET['tglakir'];
		$jenisunit = $_GET['ju'];
		$kodeunit = $_GET['kodeunit'];
		$rusak = $_GET['rusak'];

		$datalap = $this->Mlaporan->LBRusak($tglawalstring, $tglakhirstring, $jenisunit, $kodeunit, $rusak);
		

		$fileName = 'laporanBarangRusak.xlsx';  
		
		// $employeeData = $this->EmployeeModel->employeeList();
		$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', 'Tanggal Complain :  '.$tglawalstring. '  s/d  '. $tglakhirstring);
		$sheet->setCellValue('A2', 'Jenis Unit :  '.$jenisunit);
		$sheet->setCellValue('A3', 'Kode Unit :  '.$kodeunit);
		$sheet->setCellValue('A4', 'Rusak :  '.$rusak);
       	
       	$sheet->setCellValue('A5', 'No');
       	$sheet->setCellValue('B5', 'Tgl. Selesai');
       	$sheet->setCellValue('C5', 'No. Complain');
       	$sheet->setCellValue('D5', 'Jenis Unit');
       	$sheet->setCellValue('E5', 'Kode Unit');
       	$sheet->setCellValue('F5', 'Uraian');
       	$sheet->setCellValue('G5', 'Teknisi');
       	

		
       	
       	
		$rows = 6;
		$no = 1;
		foreach ($datalap->result() as $val){
            $sheet->setCellValue('A' . $rows, $no);
            $sheet->setCellValue('B' . $rows, $val->TGL_SELESAI);
            $sheet->setCellValue('C' . $rows, $val->NO_COMPLAIN);
            
            $sheet->setCellValue('D' . $rows, $val->JENIS_UNIT);
            $sheet->setCellValue('E' . $rows, $val->KODE_UNIT);
            $sheet->setCellValue('F' . $rows, $val->URAIAN);
            $sheet->setCellValue('G' . $rows, $val->PETUGAS);
            
	    	$no++;
            $rows++;
        } 

		
		
        $writer = new Xlsx($spreadsheet);
		$writer->save(FCPATH.'upload/'.$fileName);
		header("Content-Type: application/vnd.ms-excel");
        redirect(base_url()."/upload/".$fileName);
		     
	}	
}
?>


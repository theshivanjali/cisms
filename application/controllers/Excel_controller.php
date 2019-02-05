<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'third_party/PHPExcel/PHPExcel.php');
require(APPPATH.'third_party/PHPExcel/PHPExcel/Writer/Excel2007.php');

class Excel_controller extends CI_Controller
{

		function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
	}


		public function student_export(){

			 $details = $this->dashboard_model->list_students();

			$objPHPExcel = new PHPExcel();

			$objPHPExcel->getProperties()->setCreator("");
			$objPHPExcel->getProperties()->setLastModifiedBy("");
			$objPHPExcel->getProperties()->setTitle("");
			$objPHPExcel->getProperties()->setSubject("");
			$objPHPExcel->getProperties()->setDescription("");

			$objPHPExcel->setActiveSheetIndex(0);

			$objPHPExcel->getActiveSheet()->SetCellValue('A1','Name');
			$objPHPExcel->getActiveSheet()->SetCellValue('B1','Email');
			$objPHPExcel->getActiveSheet()->SetCellValue('C1','DOB');
			$objPHPExcel->getActiveSheet()->SetCellValue('D1','College');
			$objPHPExcel->getActiveSheet()->SetCellValue('E1','Course');
			$objPHPExcel->getActiveSheet()->SetCellValue('F1','YOP');
			$objPHPExcel->getActiveSheet()->SetCellValue('G1','Marks');
			$objPHPExcel->getActiveSheet()->SetCellValue('H1','City');
			$objPHPExcel->getActiveSheet()->SetCellValue('I1','State');

			$row = 2;

			// echo "<pre>";
			// print_r($details);
			// echo "</pre>";

			foreach ($details as $key => $value) {
				
			// echo $value['id']."<br>"; prints ids.
			
			$objPHPExcel->getActiveSheet()->SetCellValue('A'.$row, $value['fname'].' '.$value['lname']);
			$objPHPExcel->getActiveSheet()->SetCellValue('B'.$row, $value['email']);
			$objPHPExcel->getActiveSheet()->SetCellValue('C'.$row, $value['dob']);
			$objPHPExcel->getActiveSheet()->SetCellValue('D'.$row, $value['college']);
			$objPHPExcel->getActiveSheet()->SetCellValue('E'.$row, $value['course']);
			$objPHPExcel->getActiveSheet()->SetCellValue('F'.$row, $value['yop']);
			$objPHPExcel->getActiveSheet()->SetCellValue('G'.$row, $value['marks']." %");
			$objPHPExcel->getActiveSheet()->SetCellValue('H'.$row, $value['city']);
			$objPHPExcel->getActiveSheet()->SetCellValue('I'.$row, $value['state']);

			$row++;

			}

			$filename = "Student Details".date('Y-m-d-H-i-s').'.xlsx';

			$objPHPExcel->getActiveSheet()->setTitle("Tasks-Overview");

			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename="'.$filename.'"');
			header('Cache-Control: max-age=0');

			$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			$writer -> save('php://output');
			exit;


		}


		public function mentor_export(){

			 $details = $this->dashboard_model->list_mentors();

			$objPHPExcel = new PHPExcel();

			$objPHPExcel->getProperties()->setCreator("");
			$objPHPExcel->getProperties()->setLastModifiedBy("");
			$objPHPExcel->getProperties()->setTitle("");
			$objPHPExcel->getProperties()->setSubject("");
			$objPHPExcel->getProperties()->setDescription("");

			$objPHPExcel->setActiveSheetIndex(0);

			$objPHPExcel->getActiveSheet()->SetCellValue('A1','Name');
			$objPHPExcel->getActiveSheet()->SetCellValue('B1','Email');
			$objPHPExcel->getActiveSheet()->SetCellValue('C1','DOB');
			$objPHPExcel->getActiveSheet()->SetCellValue('D1','Designation');
			$objPHPExcel->getActiveSheet()->SetCellValue('E1','City');
			$objPHPExcel->getActiveSheet()->SetCellValue('F1','State');

			$row = 2;

			// echo "<pre>";
			// print_r($details);
			// echo "</pre>";

			foreach ($details as $key => $value) {
				
			// echo $value['id']."<br>"; prints ids.
			
			$objPHPExcel->getActiveSheet()->SetCellValue('A'.$row, $value['fname'].' '.$value['lname']);
			$objPHPExcel->getActiveSheet()->SetCellValue('B'.$row, $value['email']);
			$objPHPExcel->getActiveSheet()->SetCellValue('C'.$row, $value['dob']);

			if($value['designation']=='AP'){
				 		$value['designation'] ='Assistant Professor';}
				 	elseif ($value['designation']=='PRO'){
				 		$value['designation']='Professor';
				 	}elseif ($value['designation']=='HOD'){
				 		$value['designation'] = 'Head Of Department';
				 	}elseif ($value['designation']=='PRI'){
				 		$value['designation'] = 'Principal';
				 	}		
			$objPHPExcel->getActiveSheet()->SetCellValue('D'.$row, $value['designation']);
			$objPHPExcel->getActiveSheet()->SetCellValue('E'.$row, $value['city']);
			$objPHPExcel->getActiveSheet()->SetCellValue('F'.$row, $value['state']);

			$row++;

			}

			$filename = "Mentor Details".date('Y-m-d-H-i-s').'.xlsx';

			$objPHPExcel->getActiveSheet()->setTitle("Tasks-Overview");

			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename="'.$filename.'"');
			header('Cache-Control: max-age=0');

			$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			$writer -> save('php://output');
			exit;


		}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mkeluar');
	}

	public function index()
	{
		$data['notiket'] = $this->Mkeluar->getnotiket();
		$this->load->view('header');
		$this->load->view('formkeluar',$data);
	}

	public function savedata()
	{
		if($this->input->post('type')==1)
		{
			$timbangan=$this->input->post('timbangan');
			$notiket=$this->input->post('notiket');
			$nopolisi=$this->input->post('nopolisi');
			$namasupir=$this->input->post('namasupir');
			$namamuatan=$this->input->post('namamuatan');
			$berattotal=$this->input->post('berattotal');
			$beratkosong=$this->input->post('beratkosong');
			$beratmuatan=$this->input->post('beratmuatan');
			$baseFromJavascript = $this->input->post('base64image');
			$base_to_php = explode(',', $baseFromJavascript);
			$data = base64_decode($base_to_php[1]);
			$imagename = 'imgK_'.date('m-d-Y_hia').'.png';
			$filepath = "./uploads/".$imagename; 
			file_put_contents($filepath,$data);
			$data_all = array(
				'timbangan'=>$timbangan,
				'notiket'=>$notiket,
				'nopolisi'=>$nopolisi,
				'namasupir'=>$namasupir,
				'namamuatan'=>$namamuatan,
				'berattotal'=>$berattotal,
				'beratkosong'=>$beratkosong,
				'beratmuatan'=>$beratmuatan,
				'image'=>$imagename,
			);
			$data = $this->Mkeluar->saverecords($data_all);	
			echo json_encode(array(
				"statusCode"=>200,
				"id"=> $data,
			));
		} 
	}

	public function cekdetailtiket()
	{
		$notiket	= $this->input->post('kode');
		$data = $this->Mkeluar->cekdetailtiket($notiket);

		header('Content-Type: application/json');
		echo json_encode($data);
	}

	public function printtiket($id='')
	{
		$id = $id;
        $this->load->library('pdfgenerator');
        $data['keluar'] = $this->Mkeluar->getdatacetak($id)->result();
        $file_pdf = 'Timbangan_keluar';
        $paper = 'A4';
        $orientation = "portrait";
		$html = $this->load->view('printtiketkeluar',$data, true);	    
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}

}

/* End of file Keluar.php */
/* Location: ./application/controllers/Keluar.php */
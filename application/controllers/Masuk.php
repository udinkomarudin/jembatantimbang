<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mmasuk');
	}

	public function index()
	{
		$dariDB = $this->Mmasuk->cektiket();
        $notiket = $dariDB + 1;
        $data = array('notiket' => $notiket);
		$this->load->view('header');
		$this->load->view('formmasuk',$data);
	}

	// public funvtion get_ticket($id=''){
	// 	$q = $this->db->table('masuk')->like('notiket',$id)->limit(10);
	// 	return json_encode($q);
	// }

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
			$imagename = 'img_'.date('m-d-Y_hia').'.png';
			$filepath = "./uploads/".$imagename; 
			file_put_contents($filepath,$data);
			$data_insert = array(
				'timbangan'=> $timbangan,
				'notiket'=> $notiket,
				'nopolisi'=> $nopolisi,
				'namasupir'=> $namasupir,
				'namamuatan'=> $namamuatan,
				'berattotal'=> $berattotal,
				'beratkosong'=> $beratkosong,
				'beratmuatan'=> $beratmuatan,
				'image' => $imagename
			);
			$data = $this->Mmasuk->saverecords($data_insert);	
			echo json_encode(array(
				"statusCode"=>200,
				"id"=> $data,
			));
		} 
	}

	public function printtiket($id='')
	{
		$id = $id;
        $this->load->library('pdfgenerator');
        $data['masuk'] = $this->Mmasuk->getdatacetak($id)->result();
        $file_pdf = 'Timbangan_masuk';
        $paper = 'A4';
        $orientation = "portrait";
		$html = $this->load->view('printtiket',$data, true);	    
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}

}

/* End of file Masuk.php */
/* Location: ./application/controllers/Masuk.php */
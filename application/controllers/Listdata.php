<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listdata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mlist');
	}

	public function index($tanggalawal='',$tanggalakhir='')
	{
		$a = '';
		$b = '';
		if ($a == '' && $b == '') {
			$a = date('Y-m-d');
			$b = date('Y-m-d');
		}else{
			$a = $this->input->get('tanggalawal');
			$b = $this->input->get('tanggalakhir');
		}
		$data['listdata'] = $this->Mlist->getdatalist($a,$b);
		$this->load->view('header');
		$this->load->view('formlist',$data);
	}

}

/* End of file Listdata.php */
/* Location: ./application/controllers/Listdata.php */
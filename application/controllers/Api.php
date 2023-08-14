<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {


	public function get_ticket($id=''){
		$this->db->like('notiket',$id);
		$this->db->limit(10);
		$q = $this->db->get('masuk');
		echo json_encode($q->result());
	}


}

/* End of file Masuk.php */
/* Location: ./application/controllers/Masuk.php */
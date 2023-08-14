<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmasuk extends CI_Model {

	function saverecords($data)
	{
		//bahaya ini dapet sql inject rawan hakel
		// $query="INSERT INTO `masuk`( `timbangan`,`notiket`,`nopolisi`,`namasupir`,`namamuatan`,`berattotal`,`beratkosong`,`beratmuatan`,`image`) 
		// VALUES ('$timbangan','$notiket','$nopolisi','$namasupir','$namamuatan','$berattotal','$beratkosong','$beratmuatan','$image')";
		// $this->db->query($query);
		
		$this->db->insert('masuk',$data);
		return  $this->db->insert_id();
	}

	public function cektiket()
	{
		$query = $this->db->query("SELECT count(id) as notiket from masuk");
		$hasil = $query->row();
		return $hasil->notiket;
	}

	public function getdatacetak($id='')
	{
		// $this->db->GET('masuk');
		// $query = $this->db->where('id',$id);

		$query = $this->db->query("SELECT * FROM masuk WHERE id='".$id."'");

		if($query->num_rows() > 0) {
			return $query;
		}
	}

}

/* End of file Mmasuk.php */
/* Location: ./application/models/Mmasuk.php */
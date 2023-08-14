<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkeluar extends CI_Model {

	function getnotiket()
	{
		$query = $this->db->query("SELECT notiket from masuk");
		return $query->result();
	}	

	function cekdetailtiket($notiket)
	{
		$this->db->select('*');
		$this->db->where('notiket',$notiket);
		$q = $this->db->get('masuk');
		return $q->result();
	}
	//JANGAN GINI
	// function saverecords($timbangan='',$notiket='',$nopolisi='',$namasupir='',$namamuatan='',$berattotal='',$beratkosong='',$beratmuatan='')
	// {
	// 	$query="INSERT INTO `keluar`( `timbangan`,`notiket`,`nopolisi`,`namasupir`,`namamuatan`,`berattotal`,`beratkosong`,`beratmuatan`) 
	// 	VALUES ('$timbangan','$notiket','$nopolisi','$namasupir','$namamuatan','$berattotal','$beratkosong','$beratmuatan')";
	// 	$this->db->query($query);
	// 	return  $this->db->insert_id();
	// }

	function saverecords($data_all)
	{
		$this->db->insert('keluar',$data_all);
		return  $this->db->insert_id();
	}

	public function getdatacetak($id='')
	{
		echo $id;
		$query = $this->db->query("SELECT * FROM keluar WHERE id='".$id."'");

		if($query->num_rows() > 0) {
			return $query;
		}
	}

}

/* End of file Mkeluar.php */
/* Location: ./application/models/Mkeluar.php */
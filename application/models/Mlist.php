<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlist extends CI_Model {

	function getdatalist($a,$b)
	{
		$q = $this->db->query("SELECT 
			a.notiket AS notik,a.nopolisi AS nopol,a.namasupir AS namsup,a.namamuatan AS nammut,a.berattotal AS berattotal_in,
			b.notiket,b.nopolisi,b.namasupir,b.namamuatan,b.berattotal AS berattotal_out,b.beratkosong AS beratkosong_out,b.beratmuatan AS beratmuatan_out,b.createdate FROM masuk a LEFT JOIN keluar b ON a.`notiket` = b.`notiket` where CAST(b.createdate AS DATE) BETWEEN  '".$a."' and '".$b."'");
		return $q->result();
	}

}

/* End of file Mlist.php */
/* Location: ./application/models/Mlist.php */
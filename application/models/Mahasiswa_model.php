<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends MY_Model {
	public $primary_key = 'nrp';
	protected $has_many = array(
			'Pasangan' => array( 'primary_key' => 'nrp' ),
			'Anak'=> array( 'primary_key' => 'nrp' ),
			'Riwayat_kepanitiaan'=> array( 'primary_key' => 'nrp' ),
			'Riwayat_organisasi'=> array( 'primary_key' => 'nrp' ),
			'Riwayat_pekerjaan'=> array( 'primary_key' => 'nrp' ),
			'Riwayat_pelatihan'=> array( 'primary_key' => 'nrp' ),
			'Riwayat_pendidikan'=> array( 'primary_key' => 'nrp' )
		);

	/* Create data mahasiswa */
	public function create($data, $skip_validation = TRUE, $return = TRUE){

	}

	/* Update data mahasiswa*/
	public function updateData($primary_value, $data, $skip_validation = TRUE){

	}

	/* Get data mahasiswa*/
	public function getmahasiswa($id){
		$data = $this->get_by($this->primary_key,$id); //return object
		return $data;
	}

	/* Get all data mahasiswa*/
	public function getAllList(){

	}
}
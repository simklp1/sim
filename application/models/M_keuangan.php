<?php

class M_keuangan extends CI_Model{

	 function tampil_data($table){
		return $this->db->get($table)->result();
	}

	function input_data($data,$table){
	$this->db->insert($table,$data);
	}

	function hapus_data ($where, $table){
	$this->db->where($where);
	$this->db->delete($table);
	}

	function update_data ($where,$data,$table){
	$this->db->where($where);
	$this->db->update($table,$data);
	}

	function edit_data ($where,$table){
	return $this->db->get_where($table,$where);
	} 

	function data(){
		$this->db->join('pegawai','jabatan.id_jabatan = pegawai.id_jabatan')
				 ->where('pegawai.id_jabatan = jabatan.id_jabatan');
				 
		$data = $this->db->get('jabatan')->result();
		return $data;
		}

	function data2(){
		$this->db->join('pensiun','pegawai.nama = pensiun.nama')
				 ->where('pensiun.nama = pegawai.nama');
				 
		$data = $this->db->get('pegawai')->result();
		return $data;
		}

	function data3(){
		$this->db->join('pensiun','pegawai.alamat = pensiun.alamat')
				 ->where('pensiun.alamat = pegawai.alamat');
				 
		$data = $this->db->get('pegawai')->result();
		return $data;
		}

	function data4(){
		$this->db->join('pensiun','pegawai.tanggal_lahir = pensiun.tanggal_lahir')
				 ->where('pensiun.tanggal_lahir = pegawai.tanggal_lahir');
				 
		$data = $this->db->get('pegawai')->result();
		return $data;
		}
}

?>
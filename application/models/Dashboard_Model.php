<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Model extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	//IURAN
	public function get_table_iuran(){
		$query = $this->db->query('SELECT * FROM iuran');
		return $query->result();
    }

	public function get_table_iuran_top() {
		// SELECT * FROM iuran order by (target_bayar - iuran_dibayar) ASC
		$query = $this->db->query('SELECT * FROM iuran order by (target_bayar - iuran_dibayar) ASC LIMIT 10');
		return $query->result();	
	}

	public function get_table_iuran_bottom() {
		// SELECT * FROM iuran order by (target_bayar - iuran_dibayar) DESC
		$query = $this->db->query('SELECT * FROM iuran order by (target_bayar - iuran_dibayar) DESC LIMIT 10');
		return $query->result();
	}

	public function filter_iuran_model($sisa){
		$query = $this->db->query("SELECT * FROM iuran WHERE iuran_dibayar/target_bayar > ".$sisa);
		return $query->result();
	}

    //SK
    public function get_table_sk() {
		$query = $this->db->query('SELECT * FROM sk');
		return $query->result();
	}

	public function filter_sk_model($jenis_sk, $status_sk) {
		$query = $this->db->query("SELECT * FROM sk WHERE jenis_sk = '$jenis_sk' AND status_proses = '$status_sk'");
		return $query->result();
	}

	//TANGGUHAN
	public function get_table_tangguhan() {
		$query = $this->db->query('SELECT * FROM tangguhan');
		return $query->result();
	}

	public function get_tangguhan_max() {
		$query = $this->db->query('SELECT * FROM tangguhan where total_manfaat_ditangguhkan = (SELECT MAX(total_manfaat_ditangguhkan) FROM tangguhan)');
		return $query->result();
	}

	public function model_delete_tangguhan($TableName, $where) {
		$res = $this->db->delete($TableName, $where);
		return $res;
	}

	public function model_edit_tangguhan($where="") {
		$query = $this->db->query('SELECT * FROM tangguhan '.$where);
		return $query->result();
	}

	public function model_detail_tangguhan($where="") {
		$query = $this->db->query('SELECT * FROM tangguhan '.$where);
		return $query->result();
	}

	public function UpdateData($TableName,$data,$where){
		$res = $this->db->update($TableName,$data,$where);
		return $res;
	}

	public function filter_tangguhan_model($jenis_tangguhan, $total_maximum) {
		$query = $this->db->query("SELECT * FROM tangguhan WHERE jenis_tangguhan = '$jenis_tangguhan' AND total_manfaat_ditangguhkan <= ".$total_maximum);
		return $query->result();
	}

	//kelebihan bayar
	public function get_table_kelebihan_bayar_hv() {
		$query = $this->db->query('SELECT * FROM kelebihan_bayar_hv');
		return $query->result();
	}

	public function get_table_kelebihan_bayar_datul() {
		$query = $this->db->query('SELECT * FROM kelebihan_bayar_datul');
		return $query->result();
	}

	public function get_table_kelebihan_hv_only() {
		$query = $this->db->query('SELECT * FROM home_visit');
		return $query->result();
	}

	public function model_delete_kelebihan_bayar($TableName, $where) {
		$res = $this->db->delete($TableName, $where);
		return $res;
	}

	public function model_detail_kb_datul($where="") {
		$query = $this->db->query('SELECT * FROM kelebihan_bayar_datul '.$where);
		return $query->result();
	}

	public function model_detail_kb_hv($where="") {
		$query = $this->db->query('SELECT * FROM kelebihan_bayar_hv '.$where);
		return $query->result();
	}

	public function filter_ahliwaris_datul($ahliwaris) {
		$query = $this->db->query("SELECT * FROM kelebihan_bayar_datul  WHERE ahli_waris = ".$ahliwaris);
		return $query->result();
	}

	public function filter_ahliwaris_hv($ahliwaris) {
		$query = $this->db->query("SELECT * FROM kelebihan_bayar_hv  WHERE ahli_waris = ".$ahliwaris);
		return $query->result();
	}

	public function cari_instansi_hv($instansi) {
		$query = $this->db->query("SELECT * FROM kelebihan_bayar_datul  WHERE instansi = '$instansi'");
		return $query->result();
	}

	public function cari_instansi_datul($instansi) {
		$query = $this->db->query("SELECT * FROM kelebihan_bayar_hv  WHERE instansi = '$instansi'");
		return $query->result();
	}
	
		public function cari_nik_hv($nik) {
			$query = $this->db->query("SELECT * FROM kelebihan_bayar_datul  WHERE nik = '$nik'");
			return $query->result();
		}
	
		public function cari_nik_datul($nik) {
			$query = $this->db->query("SELECT * FROM kelebihan_bayar_hv  WHERE nik = '$nik'");
			return $query->result();
		}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

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


	public function get_table_login_admin($nama_pegawai, $password){
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->where('nama_pegawai', $nama_pegawai);
		$this->db->where('password', $password);
		$query = $this->db->get();
		return $query->num_rows();
	}
}

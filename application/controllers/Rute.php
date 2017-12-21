<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rute extends CI_Controller {

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

	function __construct(){
		parent::__construct();
		$this->load->model('Login_Model');
		$this->load->model('Dashboard_Model');
		$this->load->helper('url');
		$this->load->database();
	}

	public function login() {
		$this->form_validation->set_rules('nama_pegawai', 'nama_pegawai', 'required|trim|xss_clean');
		$this->form_validation->set_rules('password', 'password', 'required|trim|xss_clean');

		if($this->form_validation->run()==FALSE) {
			$nama_pegawai = $this->input->post('nama_pegawai');
			$password = $this->input->post('password');
			$cek = $this->Login_Model->get_table_login_admin($nama_pegawai, $password);

			if($cek && $nama_pegawai == "admin") {
				$this->dashboard();
			} else {
				echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Username atau Password yang dimasukan salah')
						window.location.href='http://localhost/dashboard_dapen';
						</SCRIPT>");
			}
		} else {
			$this->load->view(base_url());
		}
	}

	public function dashboard(){
		$data['query'] = $this->Dashboard_Model->get_table_iuran();
		$data['query2'] = $this->Dashboard_Model->get_table_sk();
		$this->load->view('index', $data);
	}

	public function iuran() {
		$this->load->view('iuran');
	}

	public function sk() {
		$this->load->view('sk');
	}

	public function tangguhan() {
		$this->load->view('tangguhan');
	}

	public function kelebihan_bayar() {
		$this->load->view('kelebihan_bayar');
	}
}

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
			}else if($cek && $nama_pegawai == "dian") {
				$this->dashboard_pegawai();
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
		$data['query3'] = $this->Dashboard_Model->get_table_tangguhan();
		$data['query4'] = $this->Dashboard_Model->get_table_kelebihan_bayar_hv();
		$data['query5'] = $this->Dashboard_Model->get_table_kelebihan_bayar_datul();
		$this->load->view('index', $data);
	}

	public function dashboard_pegawai(){
		$data['query'] = $this->Dashboard_Model->get_table_iuran();
		$data['query2'] = $this->Dashboard_Model->get_table_sk();
		$data['query3'] = $this->Dashboard_Model->get_table_tangguhan();
		$data['query4'] = $this->Dashboard_Model->get_table_kelebihan_bayar_hv();
		$data['query5'] = $this->Dashboard_Model->get_table_kelebihan_bayar_datul();
		$this->load->view('pegawai/index', $data);
	}

	public function iuran() {
		$data['query'] = $this->Dashboard_Model->get_table_iuran();
		$data['query2'] = $this->Dashboard_Model->get_table_iuran_top();
		$data['query3'] = $this->Dashboard_Model->get_table_iuran_bottom();
		$this->load->view('iuran', $data);
	}

	public function iuran_pegawai() {
		$data['query'] = $this->Dashboard_Model->get_table_iuran();
		$data['query2'] = $this->Dashboard_Model->get_table_iuran_top();
		$data['query3'] = $this->Dashboard_Model->get_table_iuran_bottom();
		$this->load->view('pegawai/iuran_pegawai', $data);
	}

	public function filter_iuran() {
		$sisa = $this->input->post('sisa');
		$awalTgl = $this->input->post('awalTgl');
		$data['query'] = $this->Dashboard_Model->filter_iuran_model($sisa, $awalTgl);
		$data['query2'] = $this->Dashboard_Model->get_table_iuran_top();
		$data['query3'] = $this->Dashboard_Model->get_table_iuran_bottom();
		$this->load->view('iuran', $data);
	}

	public function sk() {
		$data['query'] = $this->Dashboard_Model->get_table_sk();
		$this->load->view('sk', $data);
	}

	public function sk_pegawai() {
		$data['query'] = $this->Dashboard_Model->get_table_sk();
		$this->load->view('pegawai/sk_pegawai', $data);
	}

	public function tangguhan() {
		$data['query'] = $this->Dashboard_Model->get_table_tangguhan();
		$this->load->view('tangguhan', $data);
	}

	public function tangguhan_pegawai() {
		$data['query'] = $this->Dashboard_Model->get_table_tangguhan();
		$this->load->view('pegawai/tangguhan_pegawai', $data);
	}

	public function tangguhan_delete($nik) {
		$where = array('nik' => $nik);
		$res = $this->Dashboard_Model->model_delete_tangguhan('tangguhan', $where);
		if($res>=1){
			$this->session->set_flashdata('pesan','delete data sukses');
			redirect('rute/tangguhan');
		}	
	}

	public function tangguhan_edit($nik) {
		$data['query'] = $this->Dashboard_Model->model_edit_tangguhan("where nik = '$nik'");
		// $data = array(
		// 		"nik" => $pegawai[0]['nik'],
		// 		"nama_pensiun" => $pegawai[0]['nama_pensiun'],
		// 		"jenis_tangguhan" => $pegawai[0]['jenis_tangguhan'],
		// 		"tgl_awal_tangguhan" => $pegawai[0]['tgl_awal_tangguhan']
		// 	);
		// $data['query'] = $this->Dashboard_Model->get_table_tangguhan();
		// $this->load->view('edit_tangguhan', $data);
		$this->load->view('edit_tangguhan', $data);
	}

	public function tangguhan_detail($nik) {
		$data['query'] = $this->Dashboard_Model->model_detail_tangguhan("where nik = '$nik'");
		// $data = array(
		// 		"nik" => $pegawai[0]['nik'],
		// 		"nama_pensiun" => $pegawai[0]['nama_pensiun'],
		// 		"jenis_tangguhan" => $pegawai[0]['jenis_tangguhan'],
		// 		"tgl_awal_tangguhan" => $pegawai[0]['tgl_awal_tangguhan']
		// 	);
		// $data['query'] = $this->Dashboard_Model->get_table_tangguhan();
		// $this->load->view('edit_tangguhan', $data);
		$this->load->view('detail_tangguhan', $data);
	}

	public function tangguhan_update(){
		$nik = $_POST['nik'];
		$nama_pensiun = $_POST['nama_pensiun'];
		$jenis_tangguhan = $_POST['jenis_tangguhan'];
		$tgl_awal_tangguhan = $_POST['tgl_awal_tangguhan'];
		$data_update = array(
			'nama_pensiun' => $nama_pensiun,
			'jenis_tangguhan' => $jenis_tangguhan,
			'tgl_awal_tangguhan' => $tgl_awal_tangguhan
		);
		$where = array('nik' => $nik);
		$res = $this->Dashboard_Model->UpdateData('tangguhan',$data_update, $where);
		if($res>=1){
			$this->session->set_flashdata('pesan','update data sukses');
			redirect('rute/tangguhan');
		}
	}

	public function kelebihan_bayar() {
		$data['query'] = $this->Dashboard_Model->get_table_kelebihan_bayar_hv();
		$data['query2'] = $this->Dashboard_Model->get_table_kelebihan_bayar_datul();
		$data['query3'] = $this->Dashboard_Model->get_table_kelebihan_hv_only();
		$this->load->view('kelebihan_bayar', $data);
	}

	public function kelebihan_bayar_pegawai() {
		$data['query'] = $this->Dashboard_Model->get_table_kelebihan_bayar_hv();
		$data['query2'] = $this->Dashboard_Model->get_table_kelebihan_bayar_datul();
		$data['query3'] = $this->Dashboard_Model->get_table_kelebihan_hv_only();
		$this->load->view('pegawai/kelebihan_bayar_pegawai', $data);
	}
}

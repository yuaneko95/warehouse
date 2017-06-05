<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		// $this->blade->sebarno('controller', $this);
		$this->load->model('m_login');
		// $this->load->model('m_config');
		$this->load->library('session');
		
		// $this->data['config'] 			= $this->m_config->ambil('config',1)->row();
	}

	public function index()
	{
		if($this->session->userdata('auth')){
			redirect('superuser');
		}

		redirect('auth/masuk');
	}

	public function masuk()
	{

		if($this->session->userdata('auth')){
			redirect('superuser');
		}
		$this->load->view('login');
		
		
	}

	public function authentication(){
		if (!$this->input->is_ajax_request()) {
		   exit('No direct script access allowed');
		}

		$where 	= array(
					'nama' 	=> $this->input->post('nama'),
					'password'	=> md5($this->input->post('password')),
				  );
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();

		if($cek<=0){
			$data['auth']		= false;
			$data['msg']		= "Opss! Nama Pengguna Atau Password Salah";
			echo json_encode($data);
			return;
		}

		$data_session = array(
				'nama' => $this->input->post('nama'),
				'auth' =>	TRUE
				);

		$this->session->set_userdata($data_session);

		$data['auth']		=	true;
		$data['msg']		= "Berhasil! Anda Telah Masuk";

		echo json_encode($data);
		return;
	}

	public function keluar(){

		if(!$this->session->userdata('auth')){
			redirect('auth');
			return;
		}

		$this->session->sess_destroy();
		redirect('auth');

	}
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
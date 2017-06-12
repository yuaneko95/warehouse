<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Superuser extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('auth')) {
			redirect('auth');
		}
		$this->load->model('m_barang');
		$this->load->model('m_supplier');
		$this->load->model('m_agen');
		$this->load->model('m_pengirim');
		$this->load->model('m_sopir');
		$this->load->model('m_detail_pengirim');
		$this->load->model('m_terima');
		$this->load->model('m_detail_terima');
		 $this->load->library('dompdf_gen');
	}

	public function index()
	{
		$data['menu'] = "dashboard";
		$this->load->view('template',$data);
		$this->load->view('home',$data);
		$this->load->view('footer');
	}

	//mulai fungsi CRUD barang
	public function barang($url=null,$id=null)
	{
		$data['menu'] = "barang";
		$data['barang'] = $this->m_barang->show_all('barang')->result();
		$data['id_supp'] = $this->m_supplier->show_all('supplier')->result();

		if ($url == "create") {
			$data['type'] = "create";
			$this->load->view('template', $data);
			$this->load->view('form_barang',$data);
			$this->load->view('footer');
		} elseif ($url == "created" && $this->input->is_ajax_request() == true) {
			$id_barang 		= $this->input->post('id_barang');
			$nm_barang 		= $this->input->post('nm_barang');
			$hrg_barang 	= $this->input->post('hrg_barang');
			$stok_brg 		= $this->input->post('stok_brg');
			$id_supplier 	= $this->input->post('id_supplier');
			$waktu_masuk 	= $this->input->post('waktu_masuk');
			$waktu_keluar 	= $this->input->post('waktu_keluar');
			$data = array(
					'id_barang' 	=> $id_barang,
					'nm_barang' 	=> $nm_barang,
					'hrg_barang' 	=> $hrg_barang,
					'stok_brg' 		=> $stok_brg,
					'id_supp' 		=> $id_supplier,
					'waktu_masuk' 	=> $waktu_masuk,
					'waktu_keluar'	=> $waktu_keluar
				);
			if ($this->m_barang->insert($data, 'barang')) {
				echo goResult(true, "Data Telah Ditambahkan");
				return;
			}
		} elseif ($url == "update" && $id!=null) {
			$data['type'] = "update";
			$where = array ('id_barang' => $id);

			$data['barang'] = $this->m_barang->detail($where, 'barang')->row();
			$this->load->view('template', $data);
			$this->load->view('form_barang',$data);
			$this->load->view('footer');
		} elseif ($url == "updated" && $id != null && $this->input->is_ajax_request() == true) {
			$id_barang 		= $this->input->post('id_barang');
			$nm_barang 		= $this->input->post('nm_barang');
			$hrg_barang 	= $this->input->post('hrg_barang');
			$stok_brg 		= $this->input->post('stok_brg');
			$id_supplier 	= $this->input->post('id_supplier');
			$waktu_masuk 	= $this->input->post('waktu_masuk');
			$waktu_keluar 	= $this->input->post('waktu_keluar');
			$data = array(
					'id_barang' 	=> $id_barang,
					'nm_barang' 	=> $nm_barang,
					'hrg_barang' 	=> $hrg_barang,
					'stok_brg' 		=> $stok_brg,
					'id_supp' 		=> $id_supplier,
					'waktu_masuk' 	=> $waktu_masuk,
					'waktu_keluar'	=> $waktu_keluar
				);

			$where = array ('id_barang' => $id);

			if ($this->m_barang->update($where, $data, 'barang')) {
				echo goResult(true,"Data Telah Di Perbarui");
				return;
			}
		} elseif ($url == "deleted" && $id != null) {
			$where = array('id_barang' => $id);
			if ($this->m_barang->delete($where,'barang')) {
			}
			redirect('superuser/barang');	
		} else{
			$this->load->view('template', $data);
			$this->load->view('barang',$data);
			$this->load->view('footer');
		}
	}//akhir fungsi CRUD barang

	//mulai fungsi CRUD supplier
	public function supplier($url = null, $id=null)
	{
		$data['menu'] = "supplier";
		$data['id_supp'] = $this->m_supplier->show_all('supplier')->result();
		if ($url == "create") {
			$data['type'] = "create";
			$this->load->view('template', $data);
			$this->load->view('form_supplier',$data);
			$this->load->view('footer');
		} elseif ($url == "created" && $this->input->is_ajax_request() == true) {
			$id_supplier = $this->input->post('id_supplier');
			$nma_supp 	 = $this->input->post('nma_supp');
			$alamat_supp = $this->input->post('alamat_supp');
			$telp_supp	 = $this->input->post('telp_supp');

			$data = array (
					'id_supp'		=> $id_supplier,
					'nm_supp'		=> $nma_supp,
					'alamat_supp'	=> $alamat_supp,
					'telp_supp'		=> $telp_supp
				);
			if ($this->m_supplier->insert($data, 'supplier')) {
				echo goResult(true, "Data Telah Ditambahkan");
				return;
			}
		} elseif ($url == "update" && $id != null) {
			$data['type'] = "update";
			$where = array('id_supp' => $id);

			$data['id_supp'] = $this->m_supplier->detail($where, 'supplier')->row();
			$this->load->view('template', $data);
			$this->load->view('form_supplier',$data);
			$this->load->view('footer');
		} elseif ($url == "updated" && id != null && $this->input->is_ajax_request() == true) {
			$id_supplier = $this->input->post('id_supplier');
			$nma_supp 	 = $this->input->post('nma_supp');
			$alamat_supp = $this->input->post('alamat_supp');
			$telp_supp	 = $this->input->post('telp_supp');
			$data = array (
					'id_supp'		=> $id_supplier,
					'nm_supp'		=> $nma_supp,
					'alamat_supp'	=> $alamat_supp,
					'telp_supp'		=> $telp_supp
				);
			$where = array('id_supp' => $id);

			if ($this->m_supplier->update_data($where, $data, 'supplier')) {
				echo goResult(true,"Data Telah Di Perbarui");
				return;
			}
		} elseif ($url == "deleted" && id != null) {
			$where = array('id_supp' => $id);
			if ($this->m_supplier->delete_data($where,'supplier')) {
			}
			redirect('superuser/supplier');	
		} else{
			$this->load->view('template', $data);
			$this->load->view('supplier',$data);
			$this->load->view('footer');
		}
	} // akhir fungsi CRUD supplier

	// mulai fungsi CRUD agen
	public function agen($url = null, $id = null)
	{
		$data['menu'] = "agen";
		$data['agen'] = $this->m_agen->show_all('agen')->result();
		if ($url == "create") {
			$data['type'] = "create";
			$this->load->view('template', $data);
			$this->load->view('form_agen',$data);
			$this->load->view('footer');
		} elseif ($url == "created" && $this->input->is_ajax_request() == true) {
			$id_agen	 = $this->input->post('id_agen');
			$nma_agen	 = $this->input->post('nma_agen');
			$alamat_agen = $this->input->post('alamat_agen');
			$telp_agen	 = $this->input->post('telp_agen');

			$data = array (
					'id_agen'		=> $id_agen,
					'nma_agen'		=> $nma_agen,
					'alamat_agen'	=> $alamat_agen,
					'telp_agen'		=> $telp_agen
				);

			if ($this->m_supplier->insert($data, 'agen')) {
				echo goResult(true, "Data Telah Ditambahkan");
				return;
			}
		} elseif ($url == "update" && $id != null) {
			$data['type'] = "update";
			$where = array ('id_agen' => $id);

			$data['agen'] = $this->m_agen->detail($where, 'agen')->row();
			$this->load->view('template', $data);
			$this->load->view('form_agen',$data);
			$this->load->view('footer');
		} elseif ($url == "updated" && $id != null && $this->input->is_ajax_request() == true) {
			$id_agen	 = $this->input->post('id_agen');
			$nma_agen	 = $this->input->post('nma_agen');
			$alamat_agen = $this->input->post('alamat_agen');
			$telp_agen	 = $this->input->post('telp_agen');

			$data = array (
					'id_agen'		=> $id_agen,
					'nma_agen'		=> $nma_agen,
					'alamat_agen'	=> $alamat_agen,
					'telp_agen'		=> $telp_agen
				);

			$where = array ('id_agen' => $id);

			if ($this->m_agen->update($where, $data, 'agen')) {
				echo goResult(true,"Data Telah Di Perbarui");
				return;
			}
		} elseif ($url == "deleted" && $id != null) {
			$where = array('id_agen' => $id);
			if ($this->m_agen->delete($where,'agen')) {
			}
			redirect('superuser/agen');	
		} else {
			$this->load->view('template', $data);
			$this->load->view('agen',$data);
			$this->load->view('footer');
		}
	}//akhir fungsi CRUD agen

	//mulai fungsi CRUD surat jalan
	public function pengirim($url = null, $id = null)
	{
		$data['menu'] 		= "pengirim";
		$data['sopir']		= $this->m_sopir->show_all('sopir')->result();
		$data['pengirim'] 	= $this->m_pengirim->show_all('pengirim')->result();
		$data['barang'] 	= $this->m_barang->show_all('barang')->result();
		$data['agen'] 		= $this->m_agen->show_all('agen')->result();
		$data['detail_pengirim'] = $this->m_detail_pengirim->show_all('detail_pengirim')->result();
		if ($url == "create") {
			$data['type'] = "create";
			$this->load->view('template', $data);
			$this->load->view('form_pengirim',$data);
			$this->load->view('footer');
		} elseif ($url == "created" && $this->input->is_ajax_request() == true) {
			$id_pengirim		= $this->input->post('id_pengirim');
			$id_sopir			= $this->input->post('id_sopir');
			// $alamat_pengirim	= $this->input->post('alamat_pengirim');
			$id_barang			= $this->input->post('id_barang');
			$id_agen			= $this->input->post('id_agen');
			$jumlah				= $this->input->post('jumlah');
			$tgl_kirim			= date('Y-m-d');

			$data_pengirim = array (
					'id_pengirim'		=> $id_pengirim,
					'id_sopir'			=> $id_sopir,
					'id_agen'			=> $id_agen,
					'tgl_kirim'			=> $tgl_kirim
				);

			$data_detail_pengirim = array (
					'id'		=> $id_pengirim,
					'id_barang' => $id_barang,
					'jumlah'	=> $jumlah
				);


			if ($this->m_detail_pengirim->insert($data_detail_pengirim,'detail_pengirim')) {
				echo goResult(true, "Data Telah Ditambahkan");
				return;
			}

			if ($this->m_pengirim->insert($data_pengirim,'pengirim')) {
				echo goResult(true, "Data Telah Ditambahkan");
				return;
			}
		} elseif ($url == "update" && $id != null) {
			// $data['detail_pengirim'] = $this->m_detail_pengirim->show_all('detail_pengirim')->row();
			$data['type'] = "update";
			$where = array ('id_pengirim' => $id);

			$data['pengirim'] = $this->m_pengirim->detail($where, 'pengirim')->row();
			$data['detail_pengirim'] = $this->m_detail_pengirim->detail($where,'detail_pengirim')->row();
			$this->load->view('template', $data);
			$this->load->view('form_pengirim',$data);
			$this->load->view('footer');
		} elseif ($url == "updated" && $id != null && $this->input->is_ajax_request() == true)  {
			$id_pengirim		= $this->input->post('id_pengirim');
			$id_sopir			= $this->input->post('id_sopir');
			// $alamat_pengirim	= $this->input->post('alamat_pengirim');
			$id_barang			= $this->input->post('id_barang');
			$id_agen			= $this->input->post('id_agen');

			$data = array (
					'id_pengirim'		=> $id_pengirim,
					'id_sopir'			=> $id_sopir,
					// 'alamat_pengirim'	=> $alamat_pengirim,
					'id_barang'			=> $id_barang,
					'id_agen'			=> $id_agen
				);
			$where = array ('id_pengirim' => $id);

			if ($this->m_pengirim->update($where, $data, 'pengirim')) {
				echo goResult(true,"Data Telah Di Perbarui");
				return;
			}

		} elseif ($url == "deleted" && $id != null) {
			$where = array('id_pengirim' => $id);
			if ($this->m_pengirim->delete($where,'pengirim')) {
			}
			redirect('superuser/pengirim');	
		} elseif ($url == "detail" && $id != null) {
			$data['type'] = "detail";
			$where = array ('id_pengirim' => $id);

			$data['detail_pengirim'] = $this->m_detail_pengirim->detail($where,'detail_pengirim')->row();
			$data['pengirim'] = $this->m_pengirim->detail($where, 'pengirim')->row();

			// $this->load->view('template', $data);
			$this->load->view('cetak_surat_jalan',$data);
			// $this->load->view('footer');

			$paper_size  = 'A5'; //paper size
	        $orientation = 'landscape'; //tipe format kertas
	        $html = $this->output->get_output();
	 
	        $this->dompdf->set_paper($paper_size, $orientation);
	        //Convert to PDF
	        $this->dompdf->load_html($html);
	        $this->dompdf->render();
	        $this->dompdf->stream("Surat_Jalan.pdf", array('Attachment'=>0));
		} else {
			$this->load->view('template', $data);
			$this->load->view('pengirim',$data);
			$this->load->view('footer');
		}
	}//akhir fungsi CRUD surat jalan

	//mulai fungsi CRUD sopir
	public function sopir($url = null, $id = null)
	{
		$data['menu'] 	= "sopir";
		$data['sopir'] 	= $this->m_sopir->show_all('sopir')->result();
		if ($url == "create") {
			$data['type'] = "create";
			$this->load->view('template', $data);
			$this->load->view('form_sopir',$data);
			$this->load->view('footer');
		} elseif ($url == "created" && $this->input->is_ajax_request() == true) {
			$id_sopir	= $this->input->post('id_sopir');
			$nma_sopir	= $this->input->post('nma_sopir');
			$alamat 	= $this->input->post('alamat');
			$tgl_lahir 	= $this->input->post('tgl_lahir');
			$telpon		= $this->input->post('telp');

			$data = array (
					'id_sopir' 	=> $id_sopir,
					'nma_sopir' => $nma_sopir,
					'alamat'	=> $alamat,
					'tgl_lahir'	=> $tgl_lahir,
					'telpon'	=> $telpon
				); 

			if ($this->m_sopir->insert($data, 'sopir')) {
				echo goResult(true, "Data Telah Ditambahkan");
				return;
			}
		} elseif ($url == "update" && $id != null ) {
			$data['type'] = "update";
			$where = array ('id_sopir' => $id);

			$data['sopir'] = $this->m_sopir->detail($where, 'sopir')->row();
			$this->load->view('template', $data);
			$this->load->view('form_sopir',$data);
			$this->load->view('footer');
		} elseif ($url == "updated" && $id != null && $this->input->is_ajax_request() == true) {
			$id_sopir	= $this->input->post('id_sopir');
			$nma_sopir	= $this->input->post('nma_sopir');
			$alamat 	= $this->input->post('alamat');
			$tgl_lahir 	= $this->input->post('tgl_lahir');
			$telpon		= $this->input->post('telp');

			$data = array (
					'id_sopir' 	=> $id_sopir,
					'nma_sopir' => $nma_sopir,
					'alamat'	=> $alamat,
					'tgl_lahir'	=> $tgl_lahir,
					'telpon'	=> $telpon
				); 

			$where = array ('id_sopir' => $id);	

			if ($this->m_sopir->update($where, $data, 'sopir')) {
				echo goResult(true,"Data Telah Di Perbarui");
				return;
			}		
		} elseif ($url == "deleted" && $id != null) {
			$where = array('id_sopir' => $id);
			if ($this->m_sopir->delete($where,'sopir')) {
			}
			redirect('superuser/sopir');	
		} else {
			$this->load->view('template', $data);
			$this->load->view('sopir',$data);
			$this->load->view('footer');
		}
	}//akhir fungsi CRUD sopir

	//mulai fungsi CRUD terima barang dari supp
	public function surat_terima($url=null, $id=null)
	{
		$data['menu'] = "surat_terima";
		$data['barang'] 	= $this->m_barang->show_all('barang')->result();
		$data['supplier'] 	= $this->m_supplier->show_all('supplier')->result();
		$data['terima'] 	= $this->m_terima->show_all('terima')->result();
		$data['detail_terima'] 	= $this->m_detail_terima->show_all('detail_terima')->result();
		if ($url == "create") {
			$data['type'] = "create";
			$this->load->view('template', $data);
			$this->load->view('form_terima',$data);
			$this->load->view('footer');
		} elseif ($url == "created" && $this->input->is_ajax_request()== true) {
			$data['type'] = "created";
			$id_terima = $this->input->post('id_terima');
			$id_supp   = $this->input->post('id_supp');
			$id_barang = $this->input->post('id_barang');
			$jumlah	   = $this->input->post('Jumlah');
			$tgl_masuk = date('Y-m-d');
			// var_dump($this->input->post('jumlah'));
			// die();
			$data_terima = array (
					'id_terima'	 => $id_terima,
					'id_supp'	 => $id_supp,
					'tgl_masuk'	 => $tgl_masuk
				);

			$data_detail_terima = array (
					'id_terima' => $id_terima,
					'id_barang' => $id_barang,
					'jumlah' 	=> $jumlah
				);

			// echo "$data_detail_terima";
			// die();

			if ($this->m_terima->insert($data_terima, 'terima') ) {
				echo goResult(true,"data telah ditambahkan");
				return;
			}

			if ($this->m_detail_terima->insert($data_detail_terima,'detail_terima')) {
					echo goResult(true,"data telah ditambahkan");
					return;
			}
			
		} elseif ($url == "deleted" && $id != null) {
			$where = array ('id_terima' => $id);
			if ($this->m_terima->delete($where, 'terima') && $this->m_detail_terima->delete($where,'detail_terima')) {
				
			}
			redirect('superuser/surat_terima');
		} elseif ($url == "update" && $id != null) {
			$data['type'] = "update";
			$where = array ('id_terima' => $id);

			$data['detail_terima'] = $this->m_detail_terima->detail($where, 'detail_terima')->row();
			$data['terima']		   = $this->m_terima->detail($where, 'terima')->row();
			$this->load->view('template', $data);
			$this->load->view('form_terima',$data);
			$this->load->view('footer');
		} elseif ($url == "updated" && $id != null && $this->input->is_ajax_request() == true) {
			$id_terima = $this->input->post('id_terima');
			$id_supp   = $this->input->post('id_supp');
			$id_barang = $this->input->post('id_barang');
			$jumlah	   = $this->input->post('jumlah');
			$tgl_masuk = date('Y-m-d');
			$data_terima = array (
					'id_terima'	 => $id_terima,
					'id_supp'	 => $id_supp,
					'tgl_masuk'  => $tgl_masuk
				);

			$data_detail_terima = array (
					'id_terima' => $id_terima,
					'id_barang' => $id_barang,
					'jumlah' 	=> $jumlah
				);

			$where = array ('id_terima' => $id);

			if ($this->m_terima->update($where, $data_terima, 'terima')) {
				echo goResult(true,"data telah ditambahkan");
				return;
			}

			if ($this->m_detail_terima->update($where, $data_detail_terima,'detail_terima')) {
				echo goResult(true,"data telah ditambahkan");
				return;
			}
		} else {
			$this->load->view('template', $data);
			$this->load->view('terima',$data);
			$this->load->view('footer');
		}
	}

	public function ajax_bulk_report()
	{
		$list_id = $this->input->post('id');
	
		foreach ($list_id as $id) {
			$id_terima = $this->input->post('id_terima');
			$id_supp   = $this->input->post('id_supp');
			$id_barang = $this->input->post('id_barang');
			$jumlah	   = $this->input->post('jumlah');
			$data['terima'] = array (
					'id_terima'	 => $id_terima,
					'id_supp'	 => $id_supp
				);

			$data['detail_terima'] = array (
					'id_terima' => $id_terima,
					'id_barang' => $id_barang,
					'jumlah' 	=> $jumlah
				);

			$data['detail_pengirim']=$this->m_detail_pengirim->detail($id,'detail_pengirim')->result();
			$data['pengirim']=$this->m_pengirim->detail($id, 'pengirim')->result();
			// $this->load->view('template', $data);
			$this->load->view('cetak_surat_jalan');
			// $this->load->view('footer');

			// $paper_size  = 'A5'; //paper size
	  //       $orientation = 'landscape'; //tipe format kertas
	  //       $html = $this->output->get_output();
	 
	  //       $this->dompdf->set_paper($paper_size, $orientation);
	  //       //Convert to PDF
	  //       $this->dompdf->load_html($html);
	  //       $this->dompdf->render();
	  //       $this->dompdf->stream("Surat_Jalan.pdf", array('Attachment'=>0));
		}
		echo json_encode($data);
	}
}

/* End of file Superuser.php */
/* Location: ./application/controllers/Superuser.php */
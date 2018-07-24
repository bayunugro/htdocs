<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Aplikasi e-Arsip Untuk Sekolah versi GRATIS 
 * untuk sekolah SD/Sederajat, SMP/Sederajat, SMA/Sederajat
 * @version    1.0
 * @author     Puguh Sulistyo Pambudi | https://facebook.com/puguhsulistyo.pambudi | puguh.polijen@gmail.com | 0822 7440 4756
 * @copyright  (c) 2018
 * @link       https://codepackid.com
 * @since      Version 1.0
 *
 * PERINGATAN :
 * 1. TIDAK DIPERKENANKAN MEMPERJUALBELIKAN APLIKASI INI TANPA SEIZIN DARI PIHAK PENGEMBANG APLIKASI.
 * 2. TIDAK DIPERKENANKAN MENGHAPUS KODE SUMBER APLIKASI.
 */

class Soal extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['Mod_soal','Mod_helper']);

		if($this->session->userdata('level') != "Admin"){
            redirect(base_url('Login'));
        }
	}

	public function index()
	{
		$data = array(
			'title' => "E-Arsip",
			'soal' => $this->Mod_soal->read(),
			'pelajaran' => $this->Mod_helper->pelajaran(),
			'jurusan' => $this->Mod_helper->jurusan(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('soal/read');
		$this->load->view('tmp_site/footer');
	}

	public function update()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "E-Arsip",
			'detail' => $this->Mod_soal->detail($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('soal/update');
		$this->load->view('tmp_site/footer');
	}

	public function add()
	{
		if(isset($_POST['submit'])){
			$mapel			= $this->input->post('mapel');
			$kode_mapel		= $this->input->post('kode_mapel');
			$kelas		 	= $this->input->post('kelas');
			$kode		 	= $this->input->post('kode');
			$jurusan		= $this->input->post('jurusan');
			$semester 		= $this->input->post('semester');
			$kurikulum 		= $this->input->post('kurikulum');
			$tahun_ajaran 	= $this->input->post('tahun_ajaran');
			$guru			= $this->input->post('guru');
			$jenis 			= $this->input->post('jenis');
			$berkas 		= $_FILES['berkas']['name'];

			$config['upload_path'] 		= './media/soal/';
			$config['allowed_types'] 	= 'gif|jpg|png|pdf|doc|docx|xls|xlsx|rar|zip|tar';
			$config['max_size']  		= 2000;
			$config['max_width']  		= 1024;
			$config['max_height']  		= 768;
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('berkas')){
				 echo "<script> alert('Maaf, File Gagal Di Upload.') </script>"; die(redirect('soal','refresh'));
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				echo "success";
			}

			$data = array(
				'mapel'			=> $mapel,
				'kode_mapel'	=> $kode_mapel,
				'kelas' 		=> $kelas,
				'kode'			=> $kode,
				'jurusan'		=> $jurusan,
				'semester' 		=> $semester,
				'kurikulum' 	=> $kurikulum,
				'tahun_ajaran'	=> $tahun_ajaran,
				'guru' 			=> $guru,
				'jenis'			=> $jenis,
				'berkas'		=> $berkas
			);

			$this->Mod_soal->add($data);
			redirect('soal');
		}
	}

	public function update_soal()
	{
		if(isset($_POST['submit'])){
			$id 			= $this->input->post('id');
			$mapel			= $this->input->post('mapel');
			$kode_mapel		= $this->input->post('kode_mapel');
			$kelas		 	= $this->input->post('kelas');
			$kode		 	= $this->input->post('kode');
			$jurusan		= $this->input->post('jurusan');
			$semester 		= $this->input->post('semester');
			$kurikulum 		= $this->input->post('kurikulum');
			$tahun_ajaran 	= $this->input->post('tahun_ajaran');
			$guru			= $this->input->post('guru');
			$jenis 			= $this->input->post('jenis');
			$berkas 		= $this->input->post('berkas');

			$data = array(
				'id' 			=> $id,
				'mapel'			=> $mapel,
				'kode_mapel'	=> $kode_mapel,
				'kelas' 		=> $kelas,
				'kode'			=> $kode,
				'jurusan'		=> $jurusan,
				'semester' 		=> $semester,
				'kurikulum' 	=> $kurikulum,
				'tahun_ajaran'	=> $tahun_ajaran,
				'guru' 			=> $guru,
				'jenis'			=> $jenis,
				'berkas'		=> $berkas
			);

			$this->db->where('id', $id);
			$this->Mod_soal->update($data);
			redirect('soal');
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);
		$this->Mod_soal->delete($id, 'soal');
		redirect('soal');
	}

}

/* End of file Soal.php */
/* Location: ./application/controllers/Soal.php */
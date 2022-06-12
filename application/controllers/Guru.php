<?php
defined('BASEPATH') or exit("No dirrect script allowed");

class Guru extends CI_Controller
{

	function form_login()
	{
		$this->load->view('guru/login');
	}

	function login()
	{
		$user = $this->input->post('username', true);
		$pass = $this->input->post('password', true);
		$cek  = $this->guru_model->loginProses($user, $pass);
	}

	function dashboard()
	{
		$this->load->view('guru/v_dashboard');
		$this->load->view('guru/v_home_dashboard');
	}

	function jadwal()
	{
		$username =	$this->session->userdata('nip');
		$data['kelas'] = $this->db->get('tbl_kelas');
		$data['pelajaran'] = $this->db->get('tbl_pelajaran');
		$query = "SELECT tbl_jadwal.*, tbl_kelas.*,tbl_guru.nama_guru, tbl_jurusan.nama_jurusan, tbl_pelajaran.*  from tbl_jadwal 
                    join tbl_kelas on id_kelas = jadwal_kelas 
                    join tbl_jurusan on tbl_jurusan.id_jurusan = tbl_kelas.id_jurusan 
                    join tbl_pelajaran on id_pelajaran = jadwal_pelajaran
                    join tbl_guru on id_guru = jadwal_guru
					where tbl_guru.nip = $username";
		$data['jadwal'] = $this->db->query($query);
		// var_dump($this->session->userdata());
		// die();
		$this->load->view('guru/v_dashboard');
		$this->load->view('guru/v_jadwal', $data);
	}


	function nilai()
	{
		$kelas 				= $this->input->post('kelas');
		$pelajaran 			= $this->input->post('pelajaran');
		$tahun 				= $this->input->post('tahun');
		$semester 			= $this->input->post('semester');
		$data['kelas'] 		= $this->db->query('SELECT * FROM tbl_kelas ORDER BY nama_kelas DESC');
		$data['pelajaran'] 	= $this->db->query('SELECT * FROM tbl_pelajaran ORDER BY nama_pelajaran');
		$data['tahun'] 		= $this->db->get('tbl_tahun_ajaran');
		$data['nilai'] 		= $this->guru_model->getNilai();
		$data['mulai'] 		= intval($this->input->get('start'));
		$this->load->view('guru/v_dashboard');
		$this->load->view('guru/v_nilai', $data);
	}

	function input_nilai()
	{
		$data['kelas'] 	= $this->db->query('SELECT * FROM tbl_kelas ORDER BY nama_kelas DESC');
		$data['tahun'] 	= $this->db->query('SELECT * FROM tbl_tahun_ajaran ORDER BY tahun_ajaran DESC');
		$data['pelajaran'] = $this->db->get('tbl_pelajaran');
		$kelas 				= $this->input->post('kelas');
		$data['siswa'] 	= $this->guru_model->listsiswa($kelas);
		$this->load->view('guru/v_dashboard');
		$this->load->view('guru/v_input_nilai', $data);
	}

	function input_nilai_siswa()
	{
		$data['kelas'] 	= $this->db->query('SELECT * FROM tbl_kelas ORDER BY nama_kelas DESC');
		$data['tahun'] 	= $this->db->query('SELECT * FROM tbl_tahun_ajaran ORDER BY tahun_ajaran DESC');
		$data['pelajaran'] = $this->db->get('tbl_pelajaran');
		$kelas 				= $this->input->post('kelas');
		$data['siswa'] 	= $this->guru_model->listsiswa($kelas);
		$this->load->view('guru/v_dashboard');
		$this->load->view('guru/v_input_nilai_siswa', $data);
	}

	function siswa()
	{
		$id = $this->input->post('kelas');
		$data = $this->m_kategori->getSiswa($id);
		echo json_encode($data);
	}
	function proses_input()
	{
		$data = array(
			'id_siswa' 			=> $this->input->post('siswa'),
			'id_kelas'			=> $this->input->post('kelas'),
			'id_pelajaran' 		=> $this->input->post('pelajaran'),
			'semester'		  	=> $this->input->post('semester'),
			'id_tahun_ajaran' 	=> $this->input->post('tahun'),
			'keterangan'		=> $this->input->post('keterangan'),
			'nilai_uas'			=> $this->input->post('nilai')
		);
		$this->db->insert('tbl_nilaisiswa', $data);
		redirect('guru/input_nilai');
	}

	function edit_nilai($id)
	{
		$data['nilai'] = $this->guru_model->nilai($id);
		$this->load->view('guru/v_dashboard');
		$this->load->view('guru/v_edit_nilai', $data);
	}

	function update_nilai()
	{
		$data = array(
			'id_siswa' 			=> $this->input->post('siswa'),
			'id_kelas'			=> $this->input->post('kelas'),
			'id_pelajaran' 		=> $this->input->post('pelajaran'),
			'semester'		  	=> $this->input->post('semester'),
			'id_tahun_ajaran' 	=> $this->input->post('tahun'),
			'keterangan'		=> $this->input->post('keterangan'),
			'nilai_uas'			=> $this->input->post('nilai')
		);
		$this->db->where('id_nilai', $this->input->post('id'));
		$this->db->update('tbl_nilaisiswa', $data);
		redirect('guru/nilai', 'refresh');
	}

	function hapus_nilai($id)
	{
		$this->db->delete('tbl_nilaisiswa', array('id_nilai' => $id));
		redirect('guru/nilai', 'refresh');
	}

	function upload_materi()
	{
		$data['pelajaran'] 	= $this->db->query('SELECT * FROM tbl_pelajaran ORDER BY nama_pelajaran');
		$data['kelas'] 		= $this->db->query('SELECT * FROM tbl_kelas ORDER BY nama_kelas ASC');
		$data['materi'] 	= $this->guru_model->getListMateri();
		$this->load->view('guru/v_dashboard');
		$this->load->view('guru/v_upload_materi', $data);
	}

	function upload_materi_proses()
	{
		if (isset($_POST['simpan'])) {
			if ($_FILES['file']['error'] <> 4) {
				$config['upload_path'] = './upload/materi';
				$config['allowed_types'] = 'pdf|doc|xsl|docx';
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('file')) {
					$error = array('error' => $this->upload->display_errors());
					redirect('guru/dashboard', $error);
				} else {
					$hasil  = $this->upload->data();
					$data = array(
						'judul_materi' => $this->input->post('judul', true),
						'id_pelajaran' => $this->input->post('pelajaran', true),
						'id_kelas'     => $this->input->post('kelas', true),
						'deskripsi'    => $this->input->post('deskripsi', true),
						'file'         => $hasil['file_name']
					);
					$this->db->insert('tbl_materi', $data);
					$this->session->set_flashdata('info', 'Berhasil di tambahkan');
					redirect('guru/upload_materi');
				}
			} else {
				echo "Tidak ada file yang di inputkan";
			}
		} else {
			redirect('admin/artikel');
		}
	}

	function biodata()
	{
		$this->load->view('guru/v_dashboard');
		$this->load->view('guru/v_profil');
	}


	function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}
}

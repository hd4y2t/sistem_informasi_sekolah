<?php
defined('BASEPATH') or exit("No dirrect script allowed!");

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
	}
	function home()
	{
		$data['profil']		= $this->Home_model->getProfil();
		$data['berita'] 	= $this->Home_model->getNewBerita();
		$data['pengumuman'] = $this->Home_model->getPengumuman();

		$this->load->view('front/layout/head');
		$this->load->view('front/layout/header');
		$this->load->view('front/home/body', $data);
		$this->load->view('front/layout/footer', $data);
	}
	function index()
	{
		$data['profil']		= $this->Home_model->getProfil();
		$data['berita'] 	= $this->Home_model->getNewBerita();
		$data['pengumuman'] = $this->Home_model->getPengumuman();
		// tambahan
		$data['countSiswa'] 	= $this->Home_model->countSiswa()->num_rows();
		$data['countGuru'] 	= $this->db->query('SELECT * FROM tbl_guru')->num_rows();
		$data['countKelas'] 	= $this->db->query('SELECT * FROM tbl_kelas')->num_rows();
		$data['jurusan'] 	= $this->db->query('SELECT * from tbl_jurusan')->result();
		$data['guru'] 	= $this->db->query('SELECT * from tbl_guru order by id_guru asc limit 4')->result();
		$data['berita'] 	= $this->db->query('SELECT * from tbl_berita order by waktu desc limit 4')->result();

		$data['pengumuman'] 	= $this->db->query('SELECT * from tbl_pengumuman order by id_pengumuman desc limit 6')->result();
		$this->load->view('landing/layout/header', $data);
		$this->load->view('landing/index', $data);
		$this->load->view('landing/layout/footer', $data);
	}

	function pendidik()
	{
		$data['profil']		= $this->Home_model->getProfil();
		// tambahan

		$data['guru'] 	= $this->db->query('SELECT * from tbl_guru order by id_guru asc')->result();

		$this->load->view('landing/layout/header', $data);
		$this->load->view('landing/pendidik', $data);
		$this->load->view('landing/layout/footer', $data);
	}

	function profile()
	{
		$data['profil']		= $this->Home_model->getProfil();
		// tambahan

		$data['countSiswa'] 	= $this->Home_model->countSiswa()->num_rows();
		$data['countGuru'] 	= $this->db->query('SELECT * FROM tbl_guru')->num_rows();
		$data['countKelas'] 	= $this->db->query('SELECT * FROM tbl_kelas')->num_rows();
		$data['countAlumni'] 	= $this->db->query('SELECT * FROM tbl_alumni')->num_rows();
		$data['countJurusan'] 	= $this->db->query('SELECT * FROM tbl_jurusan')->num_rows();
		$data['countBerita'] 	= $this->db->query('SELECT * FROM tbl_berita')->num_rows();
		$data['guru'] 	= $this->db->query('SELECT * from tbl_guru order by id_guru asc LIMIT 4')->result();

		$data['jurusan'] 	= $this->db->query('SELECT * from tbl_jurusan')->result();

		$this->load->view('landing/layout/header', $data);
		$this->load->view('landing/profile', $data);
		$this->load->view('landing/layout/footer', $data);
	}

	function pengumuman()
	{
		$data['profil']		= $this->Home_model->getProfil();
		// tambahan

		$data['pengumuman'] 	= $this->db->query('SELECT * from tbl_pengumuman')->result();

		$this->load->view('landing/layout/header', $data);
		$this->load->view('landing/pengumuman', $data);
		$this->load->view('landing/layout/footer', $data);
	}

	function berita()
	{
		$data['profil']		= $this->Home_model->getProfil();
		// tambahan

		$data['berita'] 	= $this->db->query('SELECT * from tbl_berita')->result();

		$this->load->view('landing/layout/header', $data);
		$this->load->view('landing/berita', $data);
		$this->load->view('landing/layout/footer', $data);
	}
	function detail_berita($id)
	{
		$data['profil']		= $this->Home_model->getProfil();
		// tambahan

		$data['b'] 	= $this->db->query("SELECT * from tbl_berita where id_berita = '$id'")->row_array();

		$this->load->view('landing/layout/header', $data);
		$this->load->view('landing/detail_berita', $data);
		$this->load->view('landing/layout/footer', $data);
	}

	function jurusan()
	{
		$data['profil']		= $this->Home_model->getProfil();
		// tambahan

		$data['jurusan'] 	= $this->db->query('SELECT * from tbl_jurusan')->result();

		$this->load->view('landing/layout/header', $data);
		$this->load->view('landing/jurusan', $data);
		$this->load->view('landing/layout/footer', $data);
	}
	function pelajaran()
	{
		$data['profil']		= $this->Home_model->getProfil();
		// tambahan

		$data['pelajaran'] 	= $this->db->query('SELECT * from tbl_pelajaran')->result();

		$this->load->view('landing/layout/header', $data);
		$this->load->view('landing/pelajaran', $data);
		$this->load->view('landing/layout/footer', $data);
	}

	function login_siswa()
	{
		$this->load->view('siswa/login');
	}

	function login_admin()
	{
		$this->load->view('admin/login');
	}

	function login_guru()
	{
		$this->load->view('guru/login');
	}
}

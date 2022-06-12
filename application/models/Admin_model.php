<?php
class admin_model extends CI_Model
{

	function loginProses($user, $p)
	{
		$pass = md5($p);
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$query = $this->db->get('tbl_admin');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$query = $query->result()[0];
				$sess = array(
					'username' => $user,
				);
				$this->session->set_userdata($sess);
				$this->session->set_flashdata($user);
				redirect('admin');
			}
		} else {
			$this->session->set_flashdata('info', 'Username atau Password yang anda masukan salah!');
			redirect('home/login_admin');
		}
	}

	function jumlahSIswa()
	{
		$data = $this->db->query("SELECT * FROM tbl_siswa");
		return $data->num_rows();
	}

	function jumlahKelas()
	{
		$data = $this->db->query("SELECT * FROM tbl_kelas ORDER BY nama_kelas ASC");
		return $data->num_rows();
	}

	function jumlahGuru()
	{
		$data = $this->db->query("SELECT * FROM tbl_guru");
		return $data->num_rows();
	}

	function jumlahAdmin()
	{
		$data = $this->db->query("SELECT * FROM tbl_admin");
		return $data->num_rows();
	}

	function getUserData()
	{
		return $this->db->get('tbl_admin');
	}

	function getDataSiswa()
	{
		return $this->db->query("select * from tbl_siswa,tbl_kelas, tbl_jurusan where tbl_siswa.id_kelas=tbl_kelas.id_kelas and tbl_siswa.id_jurusan=tbl_jurusan.id_jurusan");
	}

	function getDataGuru()
	{
		return $this->db->query("SELECT tbl_guru.id_guru, tbl_guru.nip, tbl_guru.nuptk, tbl_guru.jk, tbl_guru.nip, tbl_guru.nuptk, tbl_guru.nama_guru, tbl_guru.kontak, tbl_guru.alamat, tbl_pelajaran.id_pelajaran, tbl_pelajaran.nama_pelajaran FROM tbl_guru, tbl_pelajaran WHERE tbl_guru.id_pelajaran=tbl_pelajaran.id_pelajaran");
	}

	function getListPelajaran()
	{
		return $this->db->query('SELECT * FROM tbl_pelajaran ORDER BY nama_pelajaran ASC');
	}

	function getListKelas()
	{
		return $this->db->query('SELECT tbl_kelas.id_kelas, tbl_kelas.nama_kelas, tbl_kelas.id_jurusan, tbl_kelas.tahun_masuk, tbl_jurusan.id_jurusan, tbl_jurusan.nama_jurusan FROM tbl_kelas, tbl_jurusan WHERE tbl_kelas.id_jurusan=tbl_jurusan.id_jurusan ORDER BY tbl_kelas.nama_kelas ASC');
	}

	function getJurusan()
	{
		return $this->db->get('tbl_jurusan');
	}

	function getListGuru()
	{
		return $this->db->get('tbl_guru');
	}

	function readPesan($id)
	{
		return $this->db->get_where('tbl_tamu', array('id' => $id));
	}

	function rekap_siswa_kelas($id)
	{
		return $this->db->query("SELECT tbl_siswa.id_siswa, tbl_siswa.id_kelas, tbl_siswa.nis, tbl_siswa.nisn, tbl_siswa.nama_siswa, tbl_siswa.jk, tbl_siswa.id_kelas, tbl_siswa.id_jurusan, tbl_jurusan.id_jurusan, tbl_jurusan.nama_jurusan, tbl_kelas.id_kelas, tbl_kelas.nama_kelas  FROM tbl_siswa, tbl_jurusan, tbl_kelas WHERE tbl_siswa.id_jurusan=tbl_jurusan.id_jurusan AND tbl_siswa.id_kelas=tbl_kelas.id_kelas AND tbl_siswa.id_kelas='$id' ORDER BY tbl_siswa.nama_siswa ASC");
	}

	function rekap_siswa_laki_laki()
	{
		return $this->db->query("SELECT * FROM tbl_siswa WHERE jk='Laki-Laki'");
	}

	function rekap_siswa_perempuan()
	{
		return $this->db->query("SELECT * FROM tbl_siswa WHERE jk='Perempuan'");
	}

	function getAdmin()
	{
	}
}

<?php

class Guru_model extends CI_Model
{

	function loginProses($user, $pass)
	{
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$data = $this->db->get('tbl_guru');

		if ($data->num_rows() > 0) {
			foreach ($data->result() as $row) {
				$data = $data->result()[0];
				$sess_profil = array(
					'nip'		=> $row->nip,
					'nuptk'		=> $row->nuptk,
					'jk'		=> $row->jk,
					'ttl'		=> $row->ttl,
					'kontak'	=> $row->kontak,
					'agama'		=> $row->agama,
					'Kontak'	=> $row->Kontak,
					'nama_guru' => $row->nama_guru,
					'foto'		=> $row->foto,
					'alamat'	=> $row->alamat
				);
				$this->session->set_userdata($sess_profil);
				$this->session->set_flashdata($user);
				redirect('guru/dashboard');
			}
		} else {
			$this->session->set_flashdata('info', 'Username atau Password yang anda masukan salah!');
			redirect('guru/form_login');
		}
	}
	function getSiswa($id)
	{
		$hasil = $this->db->query("SELECT * FROM tbl_siswa WHERE id_kelas='$id'");
		return $hasil->result();
	}

	function getListNilai()
	{
		$data = "SELECT
				tbl_siswa.nama_siswa,
				tbl_kelas.nama_kelas,
				tbl_pelajaran.nama_pelajaran,
				tbl_nilaisiswa.semester,
				tbl_nilaisiswa.uts,
				tbl_nilaisiswa.uas,
				tbl_tahun_ajaran.tahun_ajaran
				FROM
				tbl_siswa
				INNER JOIN tbl_nilaisiswa ON tbl_siswa.id_siswa = tbl_nilaisiswa.id_siswa
				INNER JOIN tbl_pelajaran ON tbl_pelajaran.id_pelajaran = tbl_nilaisiswa.id_pelajaran
				INNER JOIN tbl_kelas ON tbl_kelas.id_kelas = tbl_siswa.id_kelas
				INNER JOIN tbl_tahun_ajaran ON tbl_tahun_ajaran.id = tbl_nilaisiswa.id_tahun_ajaran
				";
		return $this->db->query($data);
	}

	function getSiswaKelas($id)
	{
		return $this->db->query("SELECT * FROM tbl_siswa WHERE id_kelas='$id'");
	}

	function getListMateri()
	{
		return $this->db->query("SELECT tbl_materi.judul_materi, tbl_materi.id_pelajaran, tbl_materi.id_kelas, tbl_materi.deskripsi, tbl_materi.file, tbl_kelas.id_kelas, tbl_kelas.nama_kelas, tbl_pelajaran.id_pelajaran, tbl_pelajaran.nama_pelajaran FROM tbl_materi, tbl_pelajaran, tbl_kelas WHERE tbl_materi.id_kelas=tbl_kelas.id_kelas AND tbl_materi.id_pelajaran=tbl_pelajaran.id_pelajaran");
	}
	function getNilai()
	{
		return $this->db->query("SELECT tbl_nilaisiswa.id_nilai, tbl_nilaisiswa.id_siswa, tbl_nilaisiswa.id_kelas, tbl_nilaisiswa.id_pelajaran, tbl_nilaisiswa.nilai_uas, tbl_nilaisiswa.id_tahun_ajaran, tbl_nilaisiswa.semester, tbl_siswa.id_siswa, tbl_siswa.nama_siswa, tbl_kelas.id_kelas, tbl_kelas.nama_kelas, tbl_pelajaran.id_pelajaran, tbl_pelajaran.nama_pelajaran, tbl_tahun_ajaran.id, tbl_tahun_ajaran.tahun_ajaran FROM tbl_nilaisiswa, tbl_siswa, tbl_kelas, tbl_pelajaran, tbl_tahun_ajaran WHERE tbl_nilaisiswa.id_siswa=tbl_siswa.id_siswa AND tbl_nilaisiswa.id_kelas=tbl_kelas.id_kelas AND tbl_nilaisiswa.id_pelajaran=tbl_pelajaran.id_pelajaran AND tbl_nilaisiswa.id_tahun_ajaran=tbl_tahun_ajaran.id");
	}

	function nilai($id)
	{
		return $this->db->query("SELECT tbl_nilaisiswa.id_nilai, tbl_nilaisiswa.id_siswa, tbl_nilaisiswa.id_kelas, tbl_nilaisiswa.id_pelajaran, tbl_nilaisiswa.nilai_uas, tbl_nilaisiswa.id_tahun_ajaran, tbl_nilaisiswa.semester, tbl_siswa.id_siswa, tbl_siswa.nama_siswa, tbl_kelas.id_kelas, tbl_kelas.nama_kelas, tbl_pelajaran.id_pelajaran, tbl_pelajaran.nama_pelajaran, tbl_tahun_ajaran.id, tbl_tahun_ajaran.tahun_ajaran FROM tbl_nilaisiswa, tbl_siswa, tbl_kelas, tbl_pelajaran, tbl_tahun_ajaran WHERE tbl_nilaisiswa.id_siswa=tbl_siswa.id_siswa AND tbl_nilaisiswa.id_kelas=tbl_kelas.id_kelas AND tbl_nilaisiswa.id_pelajaran=tbl_pelajaran.id_pelajaran AND tbl_nilaisiswa.id_tahun_ajaran=tbl_tahun_ajaran.id AND tbl_nilaisiswa.id_nilai='$id'");
	}

	function listsiswa($kelas)
	{
		return $this->db->query("SELECT * FROM tbl_siswa WHERE id_kelas='$kelas'");
	}
}

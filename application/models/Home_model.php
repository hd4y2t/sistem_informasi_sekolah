<?php
defined('BASEPATH') or exit("No dirrect script allowed!");

class Home_model extends CI_Model
{

	function getNewBerita()
	{
		return $this->db->query("SELECT tbl_berita.id_berita, tbl_berita.id_penulis,tbl_berita.gambar, tbl_berita.waktu, tbl_berita.judul, tbl_berita.kategori, tbl_berita.isi FROM tbl_berita LIMIT 5");
	}

	function select_id()
	{
		return $this->db->get_where('tbl_berita');
	}

	function getFile()
	{
		return $this->db->query("SELECT * FROM tbl_download");
	}

	function getEkstrakulikuler()
	{
		return $this->db->query('SELECT * FROM tbl_statis WHERE kategori="Ekstrakulikuler"');
	}

	function getPengumuman()
	{
		return $this->db->get('tbl_pengumuman');
	}

	function getNewGaleri()
	{
		return $this->db->query('SELECT * FROM tbl_gallery ORDER BY id_galLery ASC LIMIT 7');
	}

	function getBaner()
	{
		return $this->db->get('tbl_baner');
	}

	function getAllBerita()
	{
		return $this->db->query('SELECT * FROM tbl_berita');
	}

	function getAllBeritaPrestasi()
	{
		return $this->db->query('SELECT * FROM tbl_berita WHERE kategori="Prestasi"');
	}

	function getAllAgenda()
	{
		return $this->db->query('SELECT * FROM tbl_agenda');
	}

	function getAllGaleri()
	{
		return $this->db->query('SELECT * FROM tbl_gallery');
	}

	function getAllPengumuman()
	{
		return $this->db->query('SELECT * FROM tbl_pengumuman');
	}

	function getKelas()
	{
		return $this->db->query("SELECT * FROM tbl_kelas ORDER BY nama_kelas ASC");
	}

	function getSiswa($id)
	{
		return $this->db->query("SELECT tbl_siswa.nis, tbl_siswa.id_jurusan, tbl_siswa.nama_siswa, tbl_siswa.id_kelas, tbl_siswa.jk, tbl_siswa.agama, tbl_kelas.id_kelas, tbl_kelas.nama_kelas, tbl_jurusan.id_jurusan, tbl_jurusan.nama_jurusan FROM tbl_siswa, tbl_kelas, tbl_jurusan WHERE tbl_siswa.id_kelas = tbl_kelas.id_kelas AND tbl_siswa.id_jurusan =tbl_jurusan.id_jurusan AND tbl_siswa.id_kelas = '$id' ORDER BY tbl_siswa.nama_siswa");
	}

	function getGuru()
	{
		return $this->db->query("SELECT tbl_guru.nama_guru, tbl_guru.foto, tbl_guru.alamat, tbl_guru.id_pelajaran, tbl_guru.ttl, tbl_pelajaran.id_pelajaran, tbl_pelajaran.nama_pelajaran FROM tbl_guru, tbl_pelajaran WHERE tbl_guru.id_pelajaran=tbl_pelajaran.id_pelajaran");
	}

	function getTahun()
	{
		return $this->db->query("SELECT * FROM tbl_tahun_ajaran");
	}

	function getAlumni($tahun)
	{
		return $this->db->query("SELECT tbl_alumni.nama_alumni, tbl_alumni.alamat,tbl_alumni.id_alumni, tbl_alumni.keterangan, tbl_alumni.tahun_lulus, tbl_alumni.id_jurusan, tbl_alumni.status, tbl_tahun_ajaran.id, tbl_tahun_ajaran.tahun_ajaran, tbl_jurusan.id_jurusan, tbl_jurusan.nama_jurusan FROM tbl_alumni, tbl_tahun_ajaran, tbl_jurusan WHERE tbl_alumni.tahun_lulus=tbl_tahun_ajaran.id AND tbl_alumni.id_jurusan=tbl_jurusan.id_jurusan AND tbl_alumni.tahun_lulus='$tahun'");
	}

	function getKegiatan()
	{
		return $this->db->query("SELECT * FROM tbl_berita WHERE kategori='Prestasi Siswa'");
	}

	function getProfil()
	{
		return $this->db->query("SELECT * FROM tbl_profil");
	}

	function getVisimisi()
	{
		return $this->db->query("SELECT tbl_profil.visi_misi FROM tbl_profil");
	}

	function getJurusan()
	{
		return $this->db->get('tbl_jurusan');
	}

	function countSiswa()
	{
		return $this->db->query('SELECT * from tbl_siswa');
	}
}

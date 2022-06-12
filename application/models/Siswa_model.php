<?php

class Siswa_model extends CI_Model
{
	function loginProses($user, $pass)
	{
		$data = $this->db->query("SELECT tbl_siswa.id_siswa, 
										 tbl_siswa.nama_siswa, 
										 tbl_siswa.nis, 
										 tbl_siswa.nisn, 
										 tbl_siswa.alamat, tbl_siswa.ttl, 
										 tbl_siswa.jk, 
										 tbl_siswa.nama_ayah, 
										 tbl_siswa.nama_ibu, 
										 tbl_siswa.agama, 
										 tbl_siswa.pekerjaan_ortu, 
										 tbl_siswa.kontak_ortu, 
										 tbl_siswa.id_kelas, 
										 tbl_siswa.id_kelas, 
										 tbl_kelas.nama_kelas, 
										 tbl_jurusan.id_jurusan, 
										 tbl_jurusan.nama_jurusan 
								FROM tbl_siswa, tbl_kelas, tbl_jurusan 
								WHERE tbl_siswa.id_kelas=tbl_kelas.id_kelas 
								AND tbl_siswa.id_jurusan=tbl_jurusan.id_jurusan 
								AND tbl_siswa.nama_siswa='$user' 
								AND tbl_siswa.nisn='$pass'");
		if ($data->num_rows() > 0) {
			foreach ($data->result() as $row) {
				$data = $data->result()[0];
				$sess_data_siswa = array(
					'nis'			=> $row->nis,
					'nama'	   		=> $row->nama_siswa,
					'alamat'   		=> $row->alamat,
					'username'		=> $row->username,
					'password'		=> $row->password,
					'ttl' 			=> $row->ttl,
					'nama_ayah'		=> $row->nama_ayah,
					'nama_ibu'		=> $row->nama_ibu,
					'jk'			=> $row->jk,
					'kontak_ortu'	=> $row->kontak_ortu,
					'pekerjaan_ortu' => $row->pekerjaan_ortu,
					'agama'			=> $row->agama,
					'nilai'			=> $row->uas,
					'kelas'			=> $row->nama_kelas,
					'jurusan'		=> $row->nama_jurusan,
					'foto'			=> $row->foto
				);
				$this->session->set_userdata($sess_data_siswa);
				redirect('siswa/dashboard');
			}
		} else {
			$this->session->set_flashdata('info', 'Username atau Password yang anda masukan salah!');
			redirect('siswa/form_login');
		}
	}

	function getNilai($kelas, $pelajaran, $tahun, $semester)
	{
		return $this->db->query("SELECT tbl_nilaisiswa.id_siswa, 
									tbl_nilaisiswa.id_kelas, 
									tbl_nilaisiswa.id_pelajaran, 
									tbl_nilaisiswa.nilai_uas, 
									tbl_nilaisiswa.id_tahun_ajaran, tbl_nilaisiswa.semester, 
									tbl_siswa.id_siswa, 
									tbl_siswa.nama_siswa, 
									tbl_kelas.id_kelas, 
									tbl_kelas.nama_kelas, tbl_pelajaran.id_pelajaran, 
									tbl_pelajaran.nama_pelajaran, 
									tbl_nilaisiswa.keterangan, 
									tbl_tahun_ajaran.id, 
									tbl_tahun_ajaran.tahun_ajaran 
							FROM tbl_nilaisiswa, tbl_siswa, tbl_kelas, tbl_pelajaran, tbl_tahun_ajaran 
							WHERE tbl_nilaisiswa.id_siswa=tbl_siswa.id_siswa 
							AND tbl_nilaisiswa.id_kelas=tbl_kelas.id_kelas 
							AND tbl_nilaisiswa.id_pelajaran=tbl_pelajaran.id_pelajaran 
							AND tbl_nilaisiswa.id_tahun_ajaran=tbl_tahun_ajaran.id 
							AND tbl_nilaisiswa.id_kelas='$kelas' 
							AND tbl_nilaisiswa.id_pelajaran='$pelajaran' 
							AND tbl_nilaisiswa.id_tahun_ajaran='$tahun' 
							AND tbl_nilaisiswa.semester='$semester' 
							ORDER BY tbl_siswa.nama_siswa ASC");
	}

	function getListMateri()
	{
		return $this->db->query("SELECT tbl_materi.id, 
										tbl_materi.judul_materi, 
										tbl_materi.id_pelajaran, 
										tbl_materi.id_kelas, tbl_materi.deskripsi, 
										tbl_materi.file, 
										tbl_kelas.id_kelas, 
										tbl_kelas.nama_kelas, 
										tbl_pelajaran.id_pelajaran, tbl_pelajaran.nama_pelajaran 
								FROM tbl_materi, tbl_pelajaran, tbl_kelas 
								WHERE tbl_materi.id_kelas=tbl_kelas.id_kelas 
								AND tbl_materi.id_pelajaran=tbl_pelajaran.id_pelajaran");
	}
}

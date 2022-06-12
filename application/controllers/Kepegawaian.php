<?php

class Kepegawaian extends CI_Controller
{

	function tenaga_pendidik()
	{
		$data['profil']		= $this->home_model->getProfil();
		$data['mulai'] 		= intval($this->input->get('start'));
		$data['pengumuman'] = $this->home_model->getPengumuman();
		$data['baner']      = $this->home_model->getBaner();
		$data['galeri']     = $this->home_model->getNewGaleri();
		$data['kelas'] 		= $this->home_model->getKelas();
		$id 				= $this->input->post('kelas', true);
		$data['guru'] 		= $this->home_model->getGuru();
		$this->load->view('front/layout/head');
		$this->load->view('front/layout/header');
		$this->load->view('front/Kepegawaian/body', $data);
		$this->load->view('front/layout/footer');
	}

	function data_pegawai()
	{
	}

	function kegiatan()
	{
	}
}

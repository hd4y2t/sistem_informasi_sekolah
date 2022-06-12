<?php
class Kontak extends CI_Controller{
	function index(){
		$data['profil']		= $this->home_model->getProfil();
		$data['profil'] 	= $this->home_model->getProfil();
		$data['berita'] 	= $this->home_model->getNewBerita();
        $data['pengumuman'] = $this->home_model->getPengumuman();
        $data['baner']  	= $this->db->get('tbl_baner');
        $data['galeri'] 	= $this->home_model->getNewGaleri();
        $this->load->view('front/layout/head');
		$this->load->view('front/layout/header');
		$this->load->view('front/kontak/body',$data);
		$this->load->view('front/layout/footer');
	}

	function post_pesan(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'kontak' => $this->input->post('kontak'),
			'subjek' => $this->input->post('subjek'),
			'isi_pesan' => $this->input->post('pesan'));
		$this->db->insert('tbl_tamu', $data);
		$this->session->set_flashdata('info', 'Berhasil Mengirimkan Pesan');
		redirect('Kontak','refresh');
	}
}
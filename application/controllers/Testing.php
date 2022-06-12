<?php

class Testing extends CI_Controller{
	function index(){
		$data['profil']		= $this->home_model->getProfil();
		$data['berita'] 	= $this->home_model->getNewBerita();
        $data['pengumuman'] = $this->home_model->getPengumuman();
        $data['baner']  	= $this->home_model->getBaner();
        $data['galeri'] 	= $this->home_model->getNewGaleri();
		$this->load->view('front/header');
		$this->load->view('front/slider',$data);
		$this->load->view('front/kanan',$data);
		$this->load->view('front/news',$data);
		$this->load->view('front/kiri',$data);
		$this->load->view('front/footer',$data);
	}
}
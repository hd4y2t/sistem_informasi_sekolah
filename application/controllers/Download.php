<?php

class Download extends Ci_Controller{

	function index(){
				$data['profil']		= $this->home_model->getProfil();
		$data['download'] 	= $this->home_model->getFile();
        $data['pengumuman'] = $this->home_model->getPengumuman();
        $data['baner']      = $this->home_model->getBaner();
        $data['galeri']     = $this->home_model->getNewGaleri();
        $this->load->view('front/layout/head');
		$this->load->view('front/layout/header');
		$this->load->view('front/download/body',$data);
		$this->load->view('front/layout/footer');
    }
	
}
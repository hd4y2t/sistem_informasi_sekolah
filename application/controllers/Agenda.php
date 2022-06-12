<?php 

defined('BASEPATH') OR exit("No dirrect script allowed");
class Agenda extends CI_Controller{
	function index(){
		$data['berita'] 	= $this->home_model->getBerita();
	    $data['pengumuman'] = $this->home_model->getPengumuman();
	    $data['baner']  	= $this->home_model->getBaner();
	    $this->load->view('front/layout/head');
		$this->load->view('front/layout/header');
		$this->load->view('front/agenda/body',$data);
		$this->load->view('front/layout/footer');
    }
}

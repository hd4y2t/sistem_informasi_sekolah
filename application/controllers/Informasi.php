<?php
defined('BASEPATH') OR exit("No dirrect script allowed!");

class Informasi extends CI_Controller{
    function berita(){
        $data['profil']     = $this->home_model->getProfil();
        $data['berita']     = $this->home_model->getAllBerita();
        $data['pengumuman'] = $this->home_model->getPengumuman();
        $data['baner']      = $this->home_model->getBaner();
        $data['galeri']     = $this->home_model->getNewGaleri();
        $this->load->view('front/layout/head');
		$this->load->view('front/layout/header');
		$this->load->view('front/berita/body',$data);
		$this->load->view('front/layout/footer');
    }

    function read($id){
        $data['berita'] = $this->db->get_where('tbl_berita', array('id_berita'=>$id));
        $data['profil']     = $this->home_model->getProfil();
        $data['pengumuman'] = $this->home_model->getPengumuman();
        $data['baner']      = $this->home_model->getBaner();
        $data['galeri']     = $this->home_model->getNewGaleri();
        $this->load->view('front/layout/head');
        $this->load->view('front/layout/header');
        $this->load->view('front/detail/body',$data);
        $this->load->view('front/layout/footer');
    }

    function agenda(){
        $data['profil']     = $this->home_model->getProfil();
        $data['agenda']     = $this->home_model->getAllAgenda();
        $data['pengumuman'] = $this->home_model->getPengumuman();
        $data['baner']      = $this->home_model->getBaner();
        $data['galeri']     = $this->home_model->getNewGaleri();
        $this->load->view('front/layout/head');
        $this->load->view('front/layout/header');
        $this->load->view('front/agenda/body',$data);
        $this->load->view('front/layout/footer');
    }

    function pengumuman(){
                $data['profil']     = $this->home_model->getProfil();
        $data['pengumuman'] = $this->home_model->getAllPengumuman();
        $data['agenda']     = $this->home_model->getAllAgenda();
        $data['baner']      = $this->home_model->getBaner();
        $data['galeri']     = $this->home_model->getNewGaleri();
        $this->load->view('front/layout/head');
        $this->load->view('front/layout/header');
        $this->load->view('front/pengumuman/body',$data);
        $this->load->view('front/layout/footer');
    }

    function galeri(){
                $data['profil']     = $this->home_model->getProfil();
        $data['pengumuman'] = $this->home_model->getAllPengumuman();
        $data['baner']      = $this->home_model->getBaner();
        $data['galeri']     = $this->home_model->getNewGaleri();
        $data['galeri']     = $this->home_model->getAllGaleri();
        $this->load->view('front/layout/head');
        $this->load->view('front/layout/header');
        $this->load->view('front/galleri/galeri',$data);
        $this->load->view('front/layout/footer');  
    }
}

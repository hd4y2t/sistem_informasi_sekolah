<?php

defined('BASEPATH') or exit("No dirrect script allowed!");

class Profil extends CI_Controller
{

    function index()
    {
        $data['profil']     = $this->home_model->getProfil();
        $data['berita']     = $this->home_model->getNewBerita();
        $data['pengumuman'] = $this->home_model->getPengumuman();
        $data['baner']      = $this->home_model->getBaner();
        $data['galeri']     = $this->home_model->getNewGaleri();
        $data['profil']     = $this->home_model->getProfil();
        $this->load->view('front/layout/head');
        $this->load->view('front/layout/header');
        $this->load->view('front/profile/body', $data);
        $this->load->view('front/layout/footer');
    }

    function sejarah()
    {
        $data['visimisi']   = $this->home_model->getVisimisi();
        $data['berita']     = $this->home_model->getNewBerita();
        $data['pengumuman'] = $this->home_model->getPengumuman();
        $data['baner']      = $this->home_model->getBaner();
        $data['galeri']     = $this->home_model->getNewGaleri();
        $data['profil']     = $this->home_model->getProfil();
        $this->load->view('front/layout/head');
        $this->load->view('front/layout/header');
        $this->load->view('front/sejarah/body', $data);
        $this->load->view('front/layout/footer');
    }

    function visi_misi()
    {
        $data['visimisi']   = $this->home_model->getVisimisi();
        $data['berita']     = $this->home_model->getNewBerita();
        $data['pengumuman'] = $this->home_model->getPengumuman();
        $data['baner']      = $this->home_model->getBaner();
        $data['galeri']     = $this->home_model->getNewGaleri();
        $data['profil']     = $this->home_model->getProfil();
        $this->load->view('front/layout/head');
        $this->load->view('front/layout/header');
        $this->load->view('front/visimisi/body', $data);
        $this->load->view('front/layout/footer');
    }

    function fasilitas()
    {
        $data['visimisi']   = $this->home_model->getVisimisi();
        $data['berita']     = $this->home_model->getNewBerita();
        $data['pengumuman'] = $this->home_model->getPengumuman();
        $data['baner']      = $this->home_model->getBaner();
        $data['galeri']     = $this->home_model->getNewGaleri();
        $data['profil']     = $this->home_model->getProfil();
        $data['fasilitas'] = $this->db->query("SELECT * from tbl_statis WHERE kategori ='fasilitas'");
        $this->load->view('front/layout/head');
        $this->load->view('front/layout/header');
        $this->load->view('front/fasilitas/body', $data);
        $this->load->view('front/layout/footer');
    }

    function struktur_organisasi()
    {
        $data['visimisi']   = $this->home_model->getVisimisi();
        $data['berita']     = $this->home_model->getNewBerita();
        $data['pengumuman'] = $this->home_model->getPengumuman();
        $data['baner']      = $this->home_model->getBaner();
        $data['galeri']     = $this->home_model->getNewGaleri();
        $data['profil']     = $this->home_model->getProfil();
        $this->load->view('front/layout/head');
        $this->load->view('front/layout/header');
        $this->load->view('front/struktur/body', $data);
        $this->load->view('front/layout/footer');
    }
}

  <body role="document">
      <span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
      <div id="k-head" class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div id="k-site-logo" class="pull-left">
                      <h1 class="k-logo">
                          <a href="<?php echo base_url(); ?>" title="Home Page">
                              <img class="img-responsive" src="<?php echo base_url() . 'assets/img/logo-sk.png' ?>">
                          </a>
                      </h1>
                      <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"></span></a>
                  </div>
                  <nav id="k-menu" class="k-main-navig">
                      <ul id="drop-down-left" class="k-dropdown-menu">
                          <li>
                              <a href="<?php echo base_url('home/index1'); ?>" title="Beranda">Home</a>
                          </li>
                          <li>
                              <a href="<?php echo base_url('profil'); ?>" title="Tentang Kami">Profil</a>
                              <ul class="sub-menu">
                                  <li><a href="<?php echo base_url('profil'); ?>">Profil Sekolah</a></li>
                                  <li><a href="<?php echo base_url('profil/visi_misi'); ?>">Visi & Misi</a></li>
                                  <li><a href="<?php echo base_url('profil/sejarah'); ?>">Sejarah</a></li>
                                  <li><a href="<?php echo base_url('profil/struktur_organisasi'); ?>">Struktur Organisasi</a></li>
                                  <li><a href="<?php echo base_url('profil/fasilitas'); ?>">Fasilitas Sekolah</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href="<?php echo base_url('download'); ?>" title="List Download">Download</a>
                          </li>
                          <li>
                              <a href="<?php echo base_url('profil'); ?>" title="Informasi dan Publikasi">Informasi</a>
                              <ul class="sub-menu">
                                  <li><a href="<?php echo base_url('informasi/berita'); ?>">Artikel & Berita</a></li>
                                  <li><a href="<?php echo base_url('informasi/agenda'); ?>">Agenda Sekolah</a></li>
                                  <li><a href="<?php echo base_url('informasi/galeri'); ?>">Galeri Foto Kegiatan</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href="#" title="Guru dan Pegawai">Kepegawaian</a>
                              <ul class="sub-menu">
                                  <li><a href="<?php echo base_url('Kepegawaian/tenaga_pendidik'); ?>">Tenaga Pendidik</a></li>
                                  <li><a href="<?php echo base_url('Kepegawaian/kegiatan'); ?>">Kegiatan</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href="<?php echo base_url('profil'); ?>" title="Siswa dan Alumni">Kesiswaan</a>
                              <ul class="sub-menu">
                                  <li><a href="<?php echo base_url('siswa/buku_induk_siswa'); ?>">Buku Induk Siswa</a></li>
                                  <li><a href="<?php echo base_url('siswa/alumni'); ?>">Alumni SMK Ma'arif 1 Kalirejo</a></li>
                                  <li><a href="<?php echo base_url('siswa/kegiatan_siswa'); ?>">Prestasi Siswa</a></li>
                                  <li><a href="<?php echo base_url('siswa/ekstrakulikuler'); ?>">Ekstrakulikuler</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href="<?php echo base_url('kontak'); ?>" title="Hubungi Kami">Kontak</a>
                          </li>
                      </ul>
                  </nav>
              </div>
          </div>
      </div>
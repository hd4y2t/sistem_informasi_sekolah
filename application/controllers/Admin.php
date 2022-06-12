<?php
defined('BASEPATH') or exit("No dirrect script allowed");
class Admin extends CI_Controller
{
    function login()
    {
        $user = $this->input->post('username', true);
        $pass = $this->input->post('password', true);
        $cek  = $this->admin_model->loginProses($user, $pass);
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('home', 'refresh');
    }

    function index()
    {
        $this->model_security->getSecurity();
        $data['jumlah_siswa']   = $this->admin_model->jumlahSiswa();
        $data['jumlah_kelas']   = $this->admin_model->jumlahKelas();
        $data['jumlah_guru']    = $this->admin_model->jumlahGuru();
        $data['jumlah_admin']   = $this->admin_model->jumlahAdmin();
        $this->load->view('admin/v_dashboard', $data);
        $this->load->view('admin/v_home_dashboard', $data);
    }

    function artikel()
    {
        $this->model_security->getSecurity();
        $data['berita'] = $this->db->get('tbl_berita');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_artikel', $data);
    }

    function tambah_artikel()
    {
        $this->model_security->getSecurity();
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_add_artikel');
    }

    function update_artikel()
    {
        $this->model_security->getSecurity();
        if (isset($_POST['simpan'])) {
            if ($_FILES['gambar']['error'] <> 4) {
                $config['upload_path'] = './upload/berita';
                $config['allowed_types'] = 'jpg|png|gif|bmp';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->index($error);
                } else {
                    $hasil  = $this->upload->data();
                    $data = array(
                        'judul'         => $this->input->post('judul', true),
                        'isi'           => $this->input->post('isi', true),
                        'kategori'      => $this->input->post('kategori', true),
                        'gambar'        => $hasil['file_name']
                    );
                    $this->db->insert('tbl_berita', $data);
                    $this->session->set_flashdata('info', 'Berhasil di tambahkan');
                    redirect('admin/artikel/' . $this->input->post('kategori', true));
                }
            } else {
                $data = array(
                    'judul'     => $this->input->post('judul', true),
                    'isi'       => $this->input->post('isi', true),
                    'kategori'  => $this->input->post('kategori', true),
                );
                $this->db->insert('tbl_berita', $data);
                redirect('admin/artikel/' . $this->input->post('kategori', true));
            }
        } else {
            redirect('admin/artikel');
        }
    }

    function edit_artikel($id)
    {
        $this->model_security->getSecurity();
        if (isset($_POST['simpan'])) {
            if ($_FILES['gambar']['error'] <> 4) {
                $nmfile = "file_" . time();
                $config['upload_path']      = './upload/berita';
                $config['allowed_types']    = 'jpg|png|gif|bmp';
                $config['file_name']        = $nmfile;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->index($error);
                } else {
                    $hasil  = $this->upload->data();
                    $data = array(
                        'judul' => $this->input->post('judul', true),
                        'isi'   => $this->input->post('isi', true),
                        'kategori'      => $this->input->post('kategori', true),
                        'gambar'        => $hasil['file_name']
                    );
                    $this->db->where('id_berita', $this->input->post('id_berita', true));
                    $this->db->update('tbl_berita', $data);
                    redirect('admin/artikel/' . $this->input->post('kategori', true));
                }
            } else {
                $data = array(
                    'judul' => $this->input->post('judul', true),
                    'isi'   => $this->input->post('isi', true),
                    'kategori'      => $this->input->post('kategori', true)
                );
                $this->db->where('id_berita', $this->input->post('id_berita', true));
                $this->db->update('tbl_berita', $data);
                redirect('admin/artikel/' . $this->input->post('kategori', true));
            }
        } else {
            $data['artikel'] = $this->db->get_where('tbl_berita', array('id_berita' => $id))->row_array();
            $this->load->view('admin/v_dashboard');
            $this->load->view('admin/v_edit_artikel', $data);
        }
    }

    function hapus_artikel($id)
    {
        $this->model_security->getSecurity();
        $this->db->delete('tbl_berita', array('id_berita' => $id));
        redirect('admin/artikel', 'refresh');
    }

    function download()
    {
        $this->model_security->getSecurity();
        $data['download'] = $this->db->get('tbl_download');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_download', $data);
    }

    function upload()
    {
        $this->model_security->getSecurity();
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_upload');
    }

    function aksi_upload()
    {
        $this->model_security->getSecurity();
        $config['upload_path']          = './upload/file/';
        $config['allowed_types']        = 'pdf|doc|xls';
        $config['max_size']             = 100000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            echo "Gagal Update Berita, Silahkan Coba Kembali";
        } else {
            $img        = $this->upload->data();
            $gambar     = $img['file_name'];
            $nama   = $this->input->post('nama', true);
            $deskripsi   = $this->input->post('deskripsi', true);
            $data = array(
                'nama'     => $nama,
                'deskripsi'     => $deskripsi,
                'file'         => $gambar
            );
            $this->db->insert('tbl_download', $data);
            redirect('admin/download', 'refresh');
        }
    }

    function hapus_upload($id)
    {
        $this->db->delete('tbl_download', array('id' => $id));
        redirect('admin/download', 'refresh');
    }

    function gallery()
    {
        $this->model_security->getSecurity();
        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/smkmaarif1-kalirejo.sch.id/admin/gallery/';
        $config['per_page'] = 8;
        $config['num_links'] = 3;
        $config['uri_segment'] = 3;
        $config['total_rows'] =  $this->home_model->getAllGaleri()->num_rows();
        $this->pagination->initialize($config);
        $data['gallery']     = $this->db->get('tbl_gallery', $config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_gallery', $data);
    }
    function tambah_galeri()
    {
        $this->model_security->getSecurity();
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_tambah_galeri');
    }
    function proses_galery()
    {
        $this->model_security->getSecurity();
        $config['upload_path']          = './upload/gallery';
        $config['allowed_types']        = 'gif|jpg|png|mp4';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            echo "Gagal Update Galery, Silahkan Coba Kembali";
        } else {
            $img        = $this->upload->data();
            $gambar     = $img['file_name'];
            $kategori   = $this->input->post('kategori', true);
            $isi        = $this->input->post('deskripsi', true);
            $data = array(
                'kategori'  => $kategori,
                'deskripsi' => $isi,
                'gambar'    => $gambar
            );
            $this->db->insert('tbl_gallery', $data);
            redirect('admin/artikel', 'refresh');
        }
    }
    function hapus_gallery($id)
    {
        $this->model_security->getSecurity();
        $this->db->delete('tbl_gallery', array('id_gallery' => $id));
        redirect('admin/gallery', 'refresh');
    }

    function pengumuman()
    {
        $this->model_security->getSecurity();
        $data['pengumuman'] = $this->db->get('tbl_pengumuman');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_pengumuman', $data);
    }

    function tambah_pengumuman()
    {
        $this->model_security->getSecurity();
        $data = array(
            'judul'  => $this->input->post('judul'),
            'isi'    => $this->input->post('deskripsi')
        );

        $this->db->insert('tbl_pengumuman', $data);
        redirect('admin/pengumuman', 'refresh');
    }

    function edit_pengumuman($id)
    {
        $this->model_security->getSecurity();
        $data['edit_pengumuman'] = $this->db->get_where('tbl_pengumuman', array('id_pengumuman' => $id));
        $data['pengumuman'] = $this->db->get('tbl_pengumuman');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_edit_pengumuman', $data);
    }

    function update_pengumuman()
    {
        $this->model_security->getSecurity();
        $data = array(
            'judul' => $this->input->post('judul'),
            'isi'   => $this->input->post('deskripsi')
        );
        $this->db->where('id_pengumuman', $this->input->post('id'));
        $this->db->update('tbl_pengumuman', $data);
        $this->session->set_flashdata('sukses', 'Pengumuman Berhasil di perbaharui');
        redirect('admin/pengumuman', 'refresh');
    }

    function hapus_pengumuman($id)
    {
        $this->model_security->getSecurity();
        $this->db->delete('tbl_pengumuman', array('id_pengumuman' => $id));
        redirect('admin/pengumuman', 'refresh');
    }
    function data_siswa()
    {
        $this->model_security->getSecurity();
        $data['mulai']  = intval($this->input->get('start'));
        $data['kelas']  = $this->admin_model->getListKelas();
        $data['jurusan']    = $this->db->query('SELECT * FROM tbl_jurusan ORDER BY nama_jurusan ASC');
        $data['siswa'] = $this->admin_model->getDataSiswa();
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_siswa', $data);
    }

    function tambah_siswa()
    {
        $this->model_security->getSecurity();
        $data['kelas']      = $this->db->query('SELECT * FROM tbl_kelas ORDER BY nama_kelas ASC');
        $data['jurusan']    = $this->db->query('SELECT * FROM tbl_jurusan ORDER BY nama_jurusan ASC');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_add_siswa', $data);
    }
    function simpan_data_siswa()
    {
        $nisn = $this->input->post('nisn', true);
        $this->model_security->getSecurity();
        $data = array(
            'nis'               => $this->input->post('nis', true),
            'nisn'              => $nisn,
            'nama_siswa'        => $this->input->post('nama', true),
            'alamat'            => $this->input->post('alamat', true),
            'ttl'               => $this->input->post('ttl', true),
            'jk'                => $this->input->post('jk', true),
            'id_kelas'          => $this->input->post('kelas', true),
            'agama'             => $this->input->post('agama', true),
            'id_jurusan'        => $this->input->post('jurusan', true),
            'nama_ayah'         => $this->input->post('ayah', true),
            'nama_ibu'          => $this->input->post('ibu', true),
            'kontak_ortu'       => $this->input->post('kontak', true),
            'pekerjaan_ortu'    => $this->input->post('pekerjaan', true)
        );
        $this->db->insert('tbl_siswa', $data);
        $query = array(
            'iuran_siswa'              => $nisn,
        );
        $this->db->insert('tbl_iuran', $query);
        $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&   times;</button>
                                                    <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                                                    Data Berhasil Ditambahkan
                                                </div>');
        redirect('admin/data_siswa/');
    }


    function edit_siswa($id)
    {
        $this->model_security->getSecurity();
        $data['kelas']      = $this->admin_model->getListKelas();
        $data['jurusan']    = $this->admin_model->getJurusan();
        $data['siswa']      = $this->db->get_where('tbl_siswa', array('id_siswa' => $id));
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_edit_siswa', $data);
    }

    function update_edit_siswa()
    {
        $this->model_security->getSecurity();
        $data = array(
            'nis'               => $this->input->post('nis', true),
            'nisn'              => $this->input->post('nisn', true),
            'nama_siswa'        => $this->input->post('nama', true),
            'alamat'            => $this->input->post('alamat', true),
            'ttl'               => $this->input->post('ttl', true),
            'jk'                => $this->input->post('jk', true),
            'id_kelas'          => $this->input->post('kelas', true),
            'agama'             => $this->input->post('agama', true),
            'id_jurusan'        => $this->input->post('jurusan', true),
            'nama_ayah'         => $this->input->post('ayah', true),
            'nama_ibu'          => $this->input->post('ibu', true),
            'kontak_ortu'       => $this->input->post('kontak', true),
            'pekerjaan_ortu'    => $this->input->post('pekerjaan', true)
        );
        $this->db->where('id_siswa', $this->input->post('id_siswa', true));
        $this->db->update('tbl_siswa', $data);
        $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                                                    Data Berhasil Diubah
                                                </div>');
        redirect('admin/data_siswa/');
    }

    function hapus_siswa($id)
    {
        $this->model_security->getSecurity();
        $this->db->delete('tbl_siswa', array('id_siswa' => $id));
        $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                                                    Data Berhasil Dihapus
                                                </div>');
        redirect('admin/data_siswa', 'refresh');
    }

    function rekap_siswa()
    {
        $data['mulai'] = intval($this->input->get('start'));
        $data['kelas'] = $this->admin_model->getListKelas();
        $id            = $this->input->post('kelas');
        $data['siswa'] = $this->admin_model->rekap_siswa_kelas($id);
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_rekap_siswa_kelas', $data);
    }

    function rekap_siswa_laki_laki()
    {
        $data['mulai'] = intval($this->input->get('start'));
        $data['kelas'] = $this->admin_model->getListKelas();
        $data['siswa'] = $this->admin_model->rekap_siswa_laki_laki();
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_rekap_siswa_kelas', $data);
    }

    function rekap_siswa_perempuan()
    {
        $data['mulai'] = intval($this->input->get('start'));
        $data['kelas'] = $this->admin_model->getListKelas();
        $data['siswa'] = $this->admin_model->rekap_siswa_perempuan();
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_rekap_siswa_kelas', $data);
    }

    function detail_siswa($id)
    {
        $this->model_security->getSecurity();
        $data['siswa'] = $this->db->get_where('tbl_siswa', array('id_siswa' => $id));
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_detail_siswa', $data);
    }

    function data_guru()
    {
        $this->model_security->getSecurity();
        $data['mulai'] = intval($this->input->get('start'));
        $data['guru'] = $this->admin_model->getDataGuru();
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_guru', $data);
    }

    function tambah_data_guru()
    {
        $this->model_security->getSecurity();
        $data['pelajaran'] = $this->admin_model->getListPelajaran();
        $data['kelas'] = $this->admin_model->getListKelas();
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_add_guru', $data, $data);
    }

    function proses_data_guru()
    {
        $this->model_security->getSecurity();
        $config['upload_path']          = './upload/guru/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo "Gagal Update Berita, Silahkan Coba Kembali";
        } else {
            $img        = $this->upload->data();
            $gambar     = $img['file_name'];
            $nip        = $this->input->post('nip', true);
            $nuptk      = $this->input->post('nuptk', true);
            $nama       = $this->input->post('nama', true);
            $alamat     = $this->input->post('alamat', true);
            $kontak     = $this->input->post('kontak', true);
            $agama      = $this->input->post('agama', true);
            $jk         = $this->input->post('jk', true);
            $kelas      = $this->input->post('kelas', true);
            $pelajaran  = $this->input->post('pelajaran', true);
            $username   = $this->input->post('username', true);
            $password   = $this->input->post('password', true);
            $data = array(
                'nip'          => $nip,
                'nuptk'        => $nuptk,
                'nama_guru'    => $nama,
                'alamat'       => $alamat,
                'kontak'       => $kontak,
                'agama'        => $agama,
                'jk'           => $jk,
                'wali_kelas'   => $kelas,
                'id_pelajaran' => $pelajaran,
                'username'     => $username,
                'password'     => $password,
                'foto'         => $gambar
            );
            $this->db->insert('tbl_guru', $data);
            redirect('admin/data_guru', 'refresh');
        }
    }

    function edit_guru($id)
    {
        $data['pelajaran'] = $this->admin_model->getListPelajaran();
        $data['kelas'] = $this->admin_model->getListKelas();
        $data['guru'] = $this->db->get_where('tbl_guru', array('id_guru' => $id));
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_edit_guru', $data);
    }

    function update_data_guru()
    {
        $this->model_security->getSecurity();
        $config['upload_path']          = './upload/guru/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo "Gagal Edit Data Guru, Silahkan Coba Kembali";
        } else {
            $img        = $this->upload->data();
            $gambar     = $img['file_name'];
            $nip        = $this->input->post('nip', true);
            $nama       = $this->input->post('nama', true);
            $alamat     = $this->input->post('alamat', true);
            $kontak     = $this->input->post('kontak', true);
            $jk         = $this->input->post('jk', true);
            $kelas      = $this->input->post('kelas', true);
            $pelajaran  = $this->input->post('pelajaran', true);
            $username   = $this->input->post('username', true);
            $password   = $this->input->post('password', true);
            $data = array(
                'nip'          => $nip,
                'nama_guru'    => $nama,
                'alamat'       => $alamat,
                'kontak'       => $kontak,
                'jk'           => $jk,
                'wali_kelas'   => $kelas,
                'id_pelajaran' => $pelajaran,
                'username'     => $username,
                'password'     => $password,
                'foto'         => $gambar
            );
            $this->db->where('id_guru', $this->input->post('id_guru', true));
            $this->db->update('tbl_guru', $data);
            redirect('admin/data_guru', 'refresh');
        }
    }

    function hapus_guru($id)
    {
        $this->model_security->getSecurity();
        $this->db->delete('tbl_guru', array('id_guru' => $id));
        redirect('admin/data_guru', 'refresh');
    }

    function detail_guru($id)
    {
        $this->model_security->getSecurity();
        $data['detail'] = $this->admin_model->getDataGuru(array('id_guru' => $id));
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_detail_guru', $data);
    }

    function data_alumni()
    {
        $data['tahun'] = $this->db->query('SELECT * FROM tbl_tahun_ajaran ORDER BY tahun_ajaran DESC');
        $this->model_security->getSecurity();
        $data['alumni'] = $this->db->get('tbl_alumni');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_alumni', $data);
    }

    function hapus_alumni($id)
    {
        $this->model_security->getSecurity();
        $this->db->delete('tbl_alumni', array('id_alumni' => $id));
        redirect('admin/data_alumni', 'refresh');
    }

    function data_kelas()
    {
        $this->model_security->getSecurity();
        $data['kelas'] = $this->admin_model->getListKelas();
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_kelas', $data);
    }

    function tambah_data_kelas()
    {
        $this->model_security->getSecurity();
        $data['jurusan'] = $this->db->get('tbl_jurusan');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_add_kelas', $data);
    }

    function simpan_kelas()
    {
        $this->model_security->getSecurity();
        $kelas = array(
            'nama_kelas' => $this->input->post('kelas'),
            'id_jurusan' => $this->input->post('jurusan'),
            'tahun_masuk' => $this->input->post('tahun')
        );
        $this->db->insert('tbl_kelas', $kelas);
        redirect('admin/data_kelas', 'refresh');
    }

    function edit_kelas($id)
    {
        $this->model_security->getSecurity();
        $data['kelas'] = $this->db->get_where('tbl_kelas', array('id_kelas' => $id));
        $data['jurusan'] = $this->admin_model->getJurusan();
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_edit_kelas', $data);
    }

    function update_kelas()
    {
        $this->model_security->getSecurity();
        $data = array(
            'nama_kelas' => $this->input->post('kelas'),
            'id_jurusan' => $this->input->post('jurusan'),
            'tahun_masuk' => $this->input->post('tahun')
        );
        $this->db->where('id_kelas', $this->input->post('id_kelas'));
        $this->db->update('tbl_kelas', $data);
        redirect('admin/data_kelas', 'refresh');
    }

    function hapus_kelas($id)
    {
        $this->model_security->getSecurity();
        $this->db->delete('tbl_kelas', array('id_kelas' => $id));
        redirect('admin/data_kelas', 'refresh');
    }

    function pelajaran()
    {
        $this->model_security->getSecurity();
        $data['pelajaran'] = $this->db->get('tbl_pelajaran');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_pelajaran', $data);
    }

    function tambah_pelajaran()
    {
        $this->model_security->getSecurity();
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_add_pelajaran');
    }

    function update_data_pelajaran()
    {
        $this->model_security->getSecurity();
        $data = array(
            'nama_pelajaran' => $this->input->post('pelajaran')
        );
        $this->db->insert('tbl_pelajaran', $data);
        redirect('admin/pelajaran', 'refresh');
    }

    function edit_pelajaran()
    {
    }

    function hapus_pelajaran($id)
    {
        $this->model_security->getSecurity();
        $this->db->delete('tbl_pelajaran', array('id_pelajaran' => $id));
        redirect('admin/pelajaran', 'refresh');
    }

    function jurusan()
    {
        $this->model_security->getSecurity();
        $data['jurusan'] = $this->db->get('tbl_jurusan');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_jurusan', $data);
    }

    function tambah_jurusan()
    {
        $this->model_security->getSecurity();
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_tambah_jurusan');
    }

    function update_jurusan()
    {
        $this->model_security->getSecurity();
        $config['upload_path'] = './upload/halaman/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            echo "gagal";
        } else {
            $img        = $this->upload->data();
            $gambar     = $img['file_name'];
            $nama       = $this->input->post('nama', true);
            $deskripsi  = $this->input->post('deskripsi', true);
            $data = array(
                'nama_jurusan'        => $nama,
                'deskripsi'           => $deskripsi,
                'foto'                => $gambar
            );
            $this->db->insert('tbl_jurusan', $data);
            redirect('admin/jurusan', 'refresh');
        }
    }

    function edit_jurusan($id)
    {
        $data['jurusan'] = $this->db->get_where('tbl_jurusan', array('id_jurusan' => $id));
        $this->model_security->getSecurity();
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_edit_jurusan', $data);
    }

    function simpan_edit_jurusan()
    {
        $this->model_security->getSecurity();
        $data = array(
            'nama_jurusan'  => $this->input->post('jurusan'),
            'deskripsi'     => $this->input->post('deskripsi')
        );
        $this->db->where('id_jurusan', $this->input->post('id'));
        $this->db->update('tbl_jurusan', $data);
        redirect('admin/jurusan', 'refresh');
    }

    function hapus_jurusan($id)
    {
        $this->model_security->getSecurity();
        $this->db->delete('tbl_jurusan', array('id_jurusan' => $id));
        redirect('admin/jurusan', 'refresh');
    }

    function baner()
    {
        $this->model_security->getSecurity();
        $data['baner'] = $this->db->get('tbl_baner');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_baner', $data);
    }

    function tambah_baner()
    {
        $this->model_security->getSecurity();
        $config['upload_path']          = './upload/setting';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('baner')) {
            echo "Gagal Update Berita, Silahkan Coba Kembali";
        } else {
            $img        = $this->upload->data();
            $gambar     = $img['file_name'];
            $link        = $this->input->post('link', true);
            $data = array(
                'link'      => $link,
                'gambar'    => $gambar
            );
            $this->db->insert('tbl_baner', $data);
            redirect('admin/baner', 'refresh');
        }
    }


    function delete_baner($id)
    {
        $this->model_security->getSecurity();
        $this->db->delete('tbl_baner', array('id' => $id));
        redirect('admin/baner', 'refresh');
    }

    function link_terkait()
    {
        $this->model_security->getSecurity();
        $data['link'] = $this->db->get('tbl_link');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_link_terkait', $data);
    }

    function update_link()
    {
        $this->model_security->getSecurity();
        $data = array(
            'judul' => $this->input->post('judul'),
            'link' => $this->input->post('link')
        );
        $this->db->insert('tbl_link', $data);
        redirect('admin/link_terkait', 'refresh');
    }

    function hapus_link($id)
    {
        $this->model_security->getSecurity();
        $this->db->delete('tbl_link', array('id_link' => $id));
        $this->session->set_flashdata('info', 'link berhasil di hapus');
        redirect('admin/link_terkait', 'refresh');
    }

    function jadwal()
    {
        $this->model_security->getSecurity();
        $data['kelas'] = $this->db->get('tbl_kelas');
        $data['guru'] = $this->db->get('tbl_guru');
        $data['pelajaran'] = $this->db->get('tbl_pelajaran');
        $query = "SELECT tbl_jadwal.*, tbl_kelas.*,tbl_guru.nama_guru, tbl_jurusan.nama_jurusan, tbl_pelajaran.*  from tbl_jadwal 
                    join tbl_kelas on id_kelas = jadwal_kelas 
                    join tbl_jurusan on tbl_jurusan.id_jurusan = tbl_kelas.id_jurusan 
                    join tbl_pelajaran on id_pelajaran = jadwal_pelajaran
                    join tbl_guru on id_guru = jadwal_guru";
        $data['jadwal'] = $this->db->query($query);
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_jadwal', $data);
    }

    function tambah_data_jadwal()
    {
        $this->model_security->getSecurity();
        $data['guru'] = $this->db->get('tbl_guru');
        $data['kelas'] = $this->db->get('tbl_kelas');
        $data['pelajaran'] = $this->db->get('tbl_pelajaran');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_add_jadwal', $data);
    }

    function simpan_jadwal()
    {
        $this->model_security->getSecurity();
        $jadwal = array(
            'jadwal_kelas' => $this->input->post('kelas'),
            'jadwal_pelajaran' => $this->input->post('pelajaran'),
            'jadwal_hari' => $this->input->post('hari'),
            'jadwal_jam' => $this->input->post('jam'),
            'jadwal_guru' => $this->input->post('guru'),
        );
        $this->db->insert('tbl_jadwal', $jadwal);
        redirect('admin/jadwal', 'refresh');
    }

    function edit_jadwal($id)
    {
        $this->model_security->getSecurity();
        $query = "SELECT tbl_jadwal.*, tbl_kelas.*, tbl_jurusan.nama_jurusan, tbl_pelajaran.*  from tbl_jadwal 
                    join tbl_kelas on id_kelas = jadwal_kelas 
                    join tbl_jurusan on tbl_jurusan.id_jurusan = tbl_kelas.id_jurusan 
                    join tbl_pelajaran on id_pelajaran = jadwal_pelajaran
                    join tbl_guru on id_guru = jadwal_guru
                    where jadwal_id = $id";
        $data['jadwal'] = $this->db->query($query)->result();

        $data['kelas'] = $this->db->get('tbl_kelas');
        $data['pelajaran'] = $this->db->get('tbl_pelajaran');

        $data['guru'] = $this->db->get('tbl_guru');
        // $hasil = $this->db->query($query)->result();
        // var_dump($hasil);
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_edit_jadwal', $data);
    }

    function update_jadwal()
    {
        $this->model_security->getSecurity();
        $data = array(
            'jadwal_kelas' => $this->input->post('kelas'),
            'jadwal_pelajaran' => $this->input->post('pelajaran'),
            'jadwal_hari' => $this->input->post('hari'),
            'jadwal_jam' => $this->input->post('jam'),
            'jadwal_guru' => $this->input->post('guru')
        );
        $this->db->where('jadwal_id', $this->input->post('jadwal_id'));
        $this->db->update('tbl_jadwal', $data);
        redirect('admin/jadwal', 'refresh');
    }

    function hapus_jadwal($id)
    {
        $this->model_security->getSecurity();
        $this->db->delete('tbl_jadwal', array('jadwal_id' => $id));
        redirect('admin/jadwal', 'refresh');
    }

    function data_iuran()
    {
        $this->model_security->getSecurity();
        $query = "SELECT * FROM tbl_iuran 
                    join tbl_siswa on tbl_siswa.nisn = tbl_iuran.iuran_siswa
                    join tbl_kelas on tbl_kelas.id_kelas = tbl_siswa.id_kelas
                    join tbl_jurusan on tbl_jurusan.id_jurusan = tbl_siswa.id_jurusan";
        $data['iuran'] = $this->db->query($query);
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_iuran', $data);
    }
    function tambah_iuran($id)
    {
        $this->model_security->getSecurity();
        $query = "SELECT * FROM tbl_iuran 
                    join tbl_siswa on tbl_siswa.nisn = tbl_iuran.iuran_siswa
                    join tbl_kelas on tbl_kelas.id_kelas = tbl_siswa.id_kelas
                    join tbl_jurusan on tbl_jurusan.id_jurusan = tbl_siswa.id_jurusan
                    where tbl_iuran.iuran_siswa = '$id'";
        $data['iuran'] = $this->db->query($query)->row_array();
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_add_iuran', $data);
    }

    function simpan_data_iuran()
    {
        $this->model_security->getSecurity();
        $nisn =            $this->input->post('nisn');
        $data = array(
            'iuran_januari'               => $this->input->post('januari'),
            'iuran_februari'               => $this->input->post('februari'),
            'iuran_maret'               => $this->input->post('maret'),
            'iuran_april'               => $this->input->post('april'),
            'iuran_mei'               => $this->input->post('mei'),
            'iuran_juni'               => $this->input->post('juni'),
            'iuran_juli'               => $this->input->post('juli'),
            'iuran_agustus'               => $this->input->post('agustus'),
            'iuran_september'               => $this->input->post('september'),
            'iuran_oktober'               => $this->input->post('oktober'),
            'iuran_november'               => $this->input->post('november'),
            'iuran_desember'               => $this->input->post('desember'),

        );
        // var_dump($data);
        // die();
        $this->db->where('iuran_siswa', $nisn);
        $this->db->update('tbl_iuran', $data);
        $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&   times;</button>
                                                    <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                                                    Data Berhasil Ditambahkan
                                                </div>');
        redirect('admin/data_iuran', 'refresh');
    }

    function baca_buku_tamu($id)
    {
        $this->model_security->getSecurity();
        $id = $this->uri->segment(3);
        $data['tamu']      = $this->admin_model->readPesan($id);
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_baca_pesan', $data);
    }

    function hapus_buku_tamu($id)
    {
        $this->model_security->getSecurity();
        $this->db->delete('tbl_tamu', array('id' => $id));
        redirect('admin/buku_tamu', 'refresh');
    }

    function profil_sekolah()
    {
        $this->model_security->getSecurity();
        $data['profil'] = $this->db->get('tbl_profil');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_edit_profil', $data);
    }

    function update_profil()
    {
        $data = array(
            'nama_sekolah'  => $this->input->post('nama'),
            'alamat'        => $this->input->post('alamat'),
            'status'        => $this->input->post('status'),
            'telepon'       => $this->input->post('telepon'),
            'kodepos'       => $this->input->post('kodepos'),
            'akreditasi'    => $this->input->post('akreditasi'),
            'jumlah_jurusan' => $this->input->post('jurusan'),
            'email'         => $this->input->post('email'),
            'visi_misi'     => $this->input->post('visi'),
            'sejarah'       => $this->input->post('sejarah')
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_profil', $data);
        $this->session->set_flashdata('info', 'Profil Sekolah Telah di Perbaharui');
        redirect('admin/profil_sekolah', 'refresh');
    }

    function tambah_admin()
    {
        $this->model_security->getSecurity();
    }

    function lihat_website()
    {
        $this->model_security->getSecurity();
        $this->load->view('home');
    }

    function agenda()
    {
        $this->model_security->getSecurity();
        $data['agenda'] = $this->db->get('tbl_agenda');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_agenda', $data);
    }

    function tambah_agenda()
    {
        $this->model_security->getSecurity();
        $data = array(
            'deskripsi' => $this->input->post('deskripsi'),
            'tanggal'   => $this->input->post('tanggal'),
            'pukul'     => $this->input->post('pukul'),
            'tempat'    => $this->input->post('tempat'),
            'keterangan' => $this->input->post('keterangan')
        );
        $this->db->insert('tbl_agenda', $data);
        redirect('admin/agenda', 'refresh');
    }

    function edit_agenda($id)
    {
        $this->model_security->getSecurity();
        $data['agenda'] = $this->db->get('tbl_agenda');
        $data['agenda_kegiatan'] = $this->db->get_where('tbl_agenda', array('id' => $id));
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_edit_agenda', $data);
    }

    function update_agenda()
    {
        $data = array(
            'deskripsi' => $this->input->post('deskripsi'),
            'tanggal' => $this->input->post('tanggal'),
            'tempat' => $this->input->post('tempat'),
            'pukul' => $this->input->post('pukul'),
            'keterangan' => $this->input->post('keterangan')
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_agenda', $data);
        redirect('admin/agenda', 'refresh');
    }

    function hapus_agenda($id)
    {
        $this->model_security->getSecurity();
        $this->db->delete('tbl_agenda', array('id' => $id));
        redirect('admin/agenda', 'refresh');
    }

    function manajemen_admin()
    {
        $this->model_security->getSecurity();
        $data['admin'] = $this->db->get('tbl_admin');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_m_admin', $data);
    }

    function update_admin()
    {
        $this->model_security->getSecurity();
        $data = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        $this->db->insert('tbl_admin', $data);
        $this->session->flashdata('info', 'berhasil menambahkan admin');
        redirect('admin/manajemen_admin', 'refresh');
    }

    function hapus_admin($id)
    {
        $this->db->delete('tbl_admin', array('id_admin' => $id));
        $this->session->set_flashdata('info', 'berhasil hapus data admin');
        redirect('admin/manajemen_admin', 'refresh');
    }

    function edit_admin()
    {
        $this->model_security->getSecurity();
        $data = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        $this->db->where('id_admin', $this->input->post('id'));
        $this->db->update('tbl_admin', $data);
        $this->session->set_flashdata('info', 'Berhasil update data admin');
        redirect('admin/manajemen_admin', 'refresh');
    }

    function ekstrakulikuler()
    {
        $data['ekstrakulikuler']  = $this->db->query('SELECT * FROM tbl_statis WHERE kategori="ekstrakulikuler"');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_ekstrakulikuler', $data);
    }

    function tambah_ekstrakulikuler()
    {
        $config['upload_path'] = './upload/halaman/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            echo "gagal";
        } else {
            $img        = $this->upload->data();
            $gambar     = $img['file_name'];
            $kategori    = $this->input->post('kategori', true);
            $judul        = $this->input->post('judul', true);
            $isi         = $this->input->post('deskripsi', true);
            $data = array(
                'kategori'            => $kategori,
                'judul'               => $judul,
                'deskripsi'           => $isi,
                'foto'                => $gambar
            );
            $this->db->insert('tbl_statis', $data);
            redirect('admin/ekstrakulikuler', 'refresh');
        }
    }

    function edit_ekstrakulikuler()
    {
    }

    function hapus_ekstrakulikuler($id)
    {
        $this->db->delete('tbl_statis', array('id' => $id));
        redirect('admin/ekstrakulikuler', 'refresh');
    }

    function fasilitas_sekolah()
    {
        $data['fasilitas']  = $this->db->query('SELECT * FROM tbl_statis WHERE kategori="fasilitas"');
        $this->load->view('admin/v_dashboard');
        $this->load->view('admin/v_fasilitas_sekolah', $data);
    }

    function tambah_fasilitas_sekolah()
    {
        $config['upload_path'] = './upload/halaman/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            echo "gagal";
        } else {
            $img        = $this->upload->data();
            $gambar     = $img['file_name'];
            $kategori   = $this->input->post('kategori', true);
            $nama      = $this->input->post('judul', true);
            $deskripsi        = $this->input->post('deskripsi', true);
            $data = array(
                'kategori'            => $kategori,
                'judul'               => $nama,
                'deskripsi'           => $deskripsi,
                'foto'                => $gambar
            );
            $this->db->insert('tbl_statis', $data);
            redirect('admin/fasilitas_sekolah', 'refresh');
        }
    }

    function hapus_fasilitas($id)
    {
        $this->db->delete('tbl_statis', array('id' => $id));
        redirect('admin/fasilitas_sekolah', 'refresh');
    }
}

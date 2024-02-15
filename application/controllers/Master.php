<?php

defined('BASEPATH') or exit('No direct script access allowed');

class master extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    // validasi form
    $this->load->library('form_validation');
    //load model
    $this->load->model('M_master');
    $this->load->model('M_Setting');
    //load helper
    $this->load->helper('master');
  }

  public function index()
  {
    $setting = $this->M_Setting->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;
    $user = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    $master  = $this->M_master->daftar();

    $data = array(
      'title'     => $title,
      'subtitle'  => 'Daftar master',
      'isi'       => 'back_end/master/v_daftar',
      'user'      =>  $user,
      'image'     =>  $image,
      'master'   => $master
    );

    $this->load->view('back_end/layout/v_wrapper', $data, false);
  }

  public function tambah()
  { // RULES 
    tambah_validation();
    if ($this->form_validation->run() ==  false) {
      $setting = $this->M_Setting->daftar();
      $title = $setting->nama_perusahaan;
      $image = $setting->image;
      $user = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

      $data = array(
        'title'     => $title,
        'subtitle'  => 'Tambah master',
        'isi'       => 'back_end/master/v_tambah',
        'user'      =>  $user,
        'image'     =>  $image,
      );

      $this->load->view('back_end/layout/v_wrapper', $data, false);
    } else {
      $this->M_master->tambah();
    }
  }

  public function edit($id_master)
  {

    $master   = $this->M_master->detail($id_master);
    $user = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

    $setting = $this->M_Setting->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;

    // Validasi
    tambah_validation();

    if ($this->form_validation->run()) {

      if (!empty($_FILES['image']['name'])) {

        $config['upload_path']   = './assets/img/master/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '5000'; // KB  
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('image')) {
          // End validasi
          $data = array(
            'title'     => $title,
            'subtitle'  => 'Edit master',
            'master'   => $master,
            'error'     => $this->upload->display_errors(),
            'isi'       => 'back_end/master/v_edit',
            'user'      => $user,
            'image'     =>  $image,
          );
          $this->load->view('back_end/layout/v_wrapper', $data, FALSE);
          // Masuk database
        } else {
          $upload_data            = array('uploads' => $this->upload->data());
          //Hapus gambar
          if ($master->gambar_master != "") {
            unlink('./assets/img/master/' . $master->gambar_master);
          }
          // End hapus

          $slug   = url_title($this->input->post('judul'), 'dash', TRUE);

          $data = array(
            'id_master'    => $id_master,
            'slug_master'  => $slug,
            'nama_master'  => $this->input->post('judul'),
            'isi_master'      => $this->input->post('isi'),
            'deskripsi'  => $this->input->post('deskripsi'),
            'last_modified' => date('Y-m-d'),
          );
          $this->M_master->edit($data);
          $this->session->set_flashdata('success', 'Berhasil mengedit data');
          redirect('master');
        }
      } else {
        $slug   = url_title($this->input->post('nama_master'), 'dash', TRUE);

        $data = array(
          'id_master'    => $id_master,
          'slug_master'  => $slug,
          'nama_master'  => $this->input->post('judul'),
          'isi_master'      => $this->input->post('isi'),
          'deskripsi'  => $this->input->post('deskripsi'),
          'last_modified' => date('Y-m-d'),
        );
        $this->M_master->edit($data);
        $this->session->set_flashdata('success', 'Berhasil mengedit data');
        redirect('master');
      }
    }
    // End masuk database
    $data = array(
      'title'     => $title,
      'subtitle'  => 'Edit master ',
      'master'   => $master,
      'isi'       => 'back_end/master/v_edit',
      'user'      => $user,
      'image'     =>  $image,
    );
    $this->load->view('back_end/layout/v_wrapper', $data, FALSE);
  }

  public function hapus($id_master)
  {
    $master = $this->M_master->detail($id_master);
    // MENGHAPUS FOTO
    if ($master->gambar_master != "") {
      unlink('./assets/img/master/' . $master->gambar_master);
    }
    $data = array(
      'id_master' => $id_master,
    );
    $this->M_master->hapus($data);
  }
}

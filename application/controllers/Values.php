<?php

defined('BASEPATH') or exit('No direct script access allowed');

class values extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    // validasi form
    $this->load->library('form_validation');
    //load model
    $this->load->model('M_values');
    $this->load->model('M_setting');
    //load helper
    $this->load->helper('values');
  }

  public function index()
  {
    $setting = $this->M_setting->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;
    $user = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    $values  = $this->M_values->daftar();

    $data = array(
      'title'     => $title,
      'subtitle'  => 'Daftar values',
      'isi'       => 'back_end/values/v_daftar',
      'user'      =>  $user,
      'image'     =>  $image,
      'values'   => $values
    );

    $this->load->view('back_end/layout/v_wrapper', $data, false);
  }

  public function tambah()
  { // RULES 
    tambah_validation();
    if ($this->form_validation->run() ==  false) {
      $setting = $this->M_setting->daftar();
      $title = $setting->nama_perusahaan;
      $image = $setting->image;
      $user = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

      $data = array(
        'title'     => $title,
        'subtitle'  => 'Tambah values',
        'isi'       => 'back_end/values/v_tambah',
        'user'      =>  $user,
        'image'     =>  $image,
      );

      $this->load->view('back_end/layout/v_wrapper', $data, false);
    } else {
      $this->M_values->tambah();
    }
  }

  public function edit($id_values)
  {

    $values   = $this->M_values->detail($id_values);
    $user = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

    $setting = $this->M_setting->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;

    // Validasi
    tambah_validation();

    if ($this->form_validation->run()) {

      if (!empty($_FILES['image']['name'])) {

        $config['upload_path']   = './assets/img/values/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '5000'; // KB  
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('image')) {
          // End validasi
          $data = array(
            'title'     => $title,
            'subtitle'  => 'Edit values',
            'values'   => $values,
            'error'     => $this->upload->display_errors(),
            'isi'       => 'back_end/values/v_edit',
            'user'      => $user,
            'image'     =>  $image,
          );
          $this->load->view('back_end/layout/v_wrapper', $data, FALSE);
          // Masuk database
        } else {
          $upload_data            = array('uploads' => $this->upload->data());
          //Hapus gambar
          if ($values->gambar_values != "") {
            unlink('./assets/img/values/' . $values->gambar_values);
          }
          // End hapus

          $slug   = url_title($this->input->post('judul'), 'dash', TRUE);

          $data = array(
            'id_values'    => $id_values,
            'slug_values'  => $slug,
            'judul_values'  => $this->input->post('judul'),
            'isi_values'      => $this->input->post('isi'),
            'status_values'  => $this->input->post('status'),
            'gambar_values'    => $upload_data['uploads']['file_name'],
            'last_modified' => date('Y-m-d'),
          );
          $this->M_values->edit($data);
          $this->session->set_flashdata('success', 'Berhasil mengedit data');
          redirect('values');
        }
      } else {
        $slug   = url_title($this->input->post('judul'), 'dash', TRUE);

        $data = array(
          'id_values'    => $id_values,
          'slug_values'  => $slug,
          'judul_values'  => $this->input->post('judul'),
          'isi_values'      => $this->input->post('isi'),
          'status_values'  => $this->input->post('status'),
          'last_modified' => date('Y-m-d'),
        );
        $this->M_values->edit($data);
        $this->session->set_flashdata('success', 'Berhasil mengedit data');
        redirect('values');
      }
    }
    // End masuk database
    $data = array(
      'title'     => $title,
      'subtitle'  => 'Edit values ',
      'values'   => $values,
      'isi'       => 'back_end/values/v_edit',
      'user'      => $user,
      'image'     =>  $image,
    );
    $this->load->view('back_end/layout/v_wrapper', $data, FALSE);
  }

  public function hapus($id_values)
  {
    $values = $this->M_values->detail($id_values);
    // MENGHAPUS FOTO
    if ($values->gambar_values != "") {
      unlink('./assets/img/values/' . $values->gambar_values);
    }
    $data = array(
      'id_values' => $id_values,
    );
    $this->M_values->hapus($data);
  }
}

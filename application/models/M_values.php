<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_values extends CI_Model
{
  public function daftar()
  {
    $this->db->select('*');
    $this->db->from('tb_values');
    $this->db->join('tb_user', 'tb_user.id_user = tb_values.id_user', 'left');
    $this->db->order_by('id_values', 'desc');
    return $this->db->get()->result();
  }


  public function detail($id_values)
  {
    $this->db->select('*');
    $this->db->from('tb_values');
    $this->db->join('tb_user', 'tb_user.id_user = tb_values.id_user', 'left');
    $this->db->where('id_values', $id_values);
    return $this->db->get()->row();
  }


  public function tambah()
  {
    $user = $this->session->userdata('id_user');
    $judul = $this->input->post('judul', true);
    $slug = url_title($judul, 'dash', true);
    $status = $this->input->post('status', true);
    $isi = $this->input->post('isi', true);
    // CEK GAMBAR JIKA ADA GAMBAR AKAN DIUPLOAD 
    // id   // nama gambar
    $uploadImage = $_FILES['image']['name'];
    // var_dump($uploadImage);
    // die;
    if ($uploadImage) {
      // CEK FILE
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '5048';
      $config['upload_path'] = './assets/img/values/';
      $this->upload->initialize($config);
      // UPLOAD FILE  
      if ($this->upload->do_upload('image')) {
        $gambarvalues = $this->upload->data('file_name');
      } else {
        echo $this->upload->display_errors();
      }
    }
    $data = [
      'id_user'       => $user,
      'slug_values'   => htmlspecialchars($slug),
      'judul_values'  => htmlspecialchars($judul),
      'isi_values'    => $isi,
      'gambar_values' => $gambarvalues,
      'status_values' => $status,
      'date_created' => date('Y-m-d H:i:s'),
    ];

    $this->db->insert('tb_values', $data);
    $this->session->set_flashdata('success', 'Berhasil Membuat values');
    redirect('values');
  }


  public function edit($data)
  {
    $this->db->where('id_values', $data['id_values']);
    $this->db->update('tb_values', $data);
  }

  public function hapus($data)
  {
    $this->db->where('id_values', $data['id_values']);
    $this->db->delete('tb_values', $data); // FLASH DATA
    $this->session->set_flashdata('success', 'Berhasil menghapus data');
    redirect('values');
  }


  public function read($slug_values)
  {

    $this->db->select('*');
    $this->db->from('tb_values');
    $this->db->where('slug_values', $slug_values);
    return $this->db->get()->row();
  }
}

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_master extends CI_Model
{
  public function daftar()
  {
    $this->db->select('*');
    $this->db->from('tb_master');
    $this->db->join('tb_user', 'tb_user.id_user = tb_master.id_user', 'left');
    $this->db->order_by('id_master', 'desc');
    return $this->db->get()->result();
  }


  public function detail($id_master)
  {
    $this->db->select('*');
    $this->db->from('tb_master');
    $this->db->join('tb_user', 'tb_user.id_user = tb_master.id_user', 'left');
    $this->db->where('id_master', $id_master);
    return $this->db->get()->row();
  }


  public function tambah()
  {
    $user = $this->session->userdata('id_user');
    $nama = $this->input->post('judul', true);
    $deskripsi = $this->input->post('deskripsi', true);
    $slug = url_title($nama, 'dash', true);
    // $status = $this->input->post('status', true);
    $isi = $this->input->post('isi', true);
    // CEK GAMBAR JIKA ADA GAMBAR AKAN DIUPLOAD 
    // id   // nama gambar
    // $uploadImage = $_FILES['image']['name'];
    // var_dump($uploadImage);
    // die;
    // if ($uploadImage) {
    //   // CEK FILE
    //   $config['allowed_types'] = 'gif|jpg|png';
    //   $config['max_size'] = '5048';
    //   $config['upload_path'] = './assets/img/master/';
    //   $this->upload->initialize($config);
    //   // UPLOAD FILE  
    //   if ($this->upload->do_upload('image')) {
    //     $gambarmaster = $this->upload->data('file_name');
    //   } else {
    //     echo $this->upload->display_errors();
    //   }
    // }
    $data = [
      'id_user'       => $user,
      'slug_master'   => htmlspecialchars($slug),
      'nama_master'  => htmlspecialchars($nama),
      'isi_master'    => $isi,
      'deskripsi'     => $deskripsi,
      'date_created' => date('Y-m-d H:i:s'),
    ];

    $this->db->insert('tb_master', $data);
    $this->session->set_flashdata('success', 'Berhasil Membuat master');
    redirect('master');
  }


  public function edit($data)
  {
    $this->db->where('id_master', $data['id_master']);
    $this->db->update('tb_master', $data);
  }

  public function hapus($data)
  {
    $this->db->where('id_master', $data['id_master']);
    $this->db->delete('tb_master', $data); // FLASH DATA
    $this->session->set_flashdata('success', 'Berhasil menghapus data');
    redirect('master');
  }


  public function read($slug_master)
  {

    $this->db->select('*');
    $this->db->from('tb_master');
    $this->db->where('slug_master', $slug_master);
    return $this->db->get()->row();
  }
}

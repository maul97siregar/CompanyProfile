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
    
    $data = [
      'id_user'       => $user,
      'slug_master'   => htmlspecialchars($slug),
      'nama_master'  => htmlspecialchars($nama),
      'isi_master'    => $isi,
      'deskripsi'     => $deskripsi,
      'date_created' => date('Y-m-d H:i:s'),
    ];

    $validations = $this->validation($data->nama_master);

    if($validations == null){
          $this->session->set_flashdata('error', 'Data Master Telah Ada');
          redirect('master/tambah');
          return;
    }

    $this->db->insert('tb_master', $data);
    $this->session->set_flashdata('success', 'Berhasil Membuat master');
    redirect('master');
    
  }


  public function edit($data)
  {
    $validations = $this->validation($data->nama_master);

    if($validations == null){
          $this->session->set_flashdata('error', 'Data Master Telah Ada');
          redirect('master/tambah');
          return;
    }
    
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

  public function validation($nama_master)
  {

    $this->db->select('*');
    $this->db->from('tb_master');
    $this->db->where('nama_master', $nama_master);
    return $this->db->get()->row();
  }
}

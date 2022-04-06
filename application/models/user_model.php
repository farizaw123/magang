<?php

class user_model extends CI_Model
{

    

    public function inputData()
    {
        $data = [
            "nis" => $this->input->post('nis', true), 
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "no_telp" => $this->input->post('no_telp', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "agama" => $this->input->post('alamat', true),
            
            
        ];
        return $this->db->insert('siswa', $data);
    }
    
    function updateData()
    {
        $nis = $this->input->post('nis'); 
        $nama = $this->input->post('nama', true);
        $alamat = $this->input->post('alamat', true);
        $telp = $this->input->post('no_telp'); 
        $tgllahir = $this->input->post('tgl_lahir', true);
        $agama = $this->input->post('agama', true);
        $idjurusan = $this->input->post('id_jurusan', true);
        $this->db->set('nama', $nama);
        $this->db->set('alamat', $alamat);
        $this->db->set('no_telp', $telp);
        $this->db->set('tgl_lahir', $tgllahir);
        $this->db->set('agama', $agama);
        $this->db->set('id_jurusan', $idjurusan);
        $this->db->where('nis', $nis);
        return $this->db->update('siswa');
    }


    public function getAllUser()
    {
        return $this->db->get('siswa')->result_array();
    }

    public function hapusData($nis)
    {
        $this->db->delete('siswa', ['nis' => $nis]);
    }

    
}
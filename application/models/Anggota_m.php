
<?php defined('BASEPATH') or exit('No direct script access allowed');

class anggota_model extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('tb_anggota');
        if ($id != null) {
            $this->db->where('id_anggota', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'nama' => $post['nama'],
        ];
        $this->db->insert('tb_anggota', $params);
    }

    public function edit($post)
    {
        $params = [
            'nama' => $post['nama'],

        ];
        $this->db->where('id_anggota', $post['id']);
        $this->db->update('tb_anggota', $params);
    }


    public function hapus_data($id)
    {
        $this->db->where('id_anggota', $id);
        $this->db->delete('tb_anggota');
    }
}

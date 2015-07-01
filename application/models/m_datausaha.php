<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_datausaha extends CI_Model {

    public function readall()
    {
        //$query = $this->db->query('join na didieu);
        //$data = $query->result();
        $this->db->select('*');
        $this->db->from('data_usaha as du');
        $this->db->join('user as usr','du.id_user = usr.id_user');
        $this->db->join('sektor_usaha as su','du.id_sektor = su.id_sektor');
        $data = $this->db->get()->result();
        return $data;
    }

    public function readall_paging($limit = array())
    {
        //$query = $this->db->query('join na didieu);
        //$data = $query->result();
        $this->db->select('*');
        $this->db->from('data_usaha as du');
        $this->db->join('user as usr','du.id_user = usr.id_user');
        $this->db->join('sektor_usaha as su','du.id_sektor = su.id_sektor');

        if($limit != null){
            $this->db->limit($limit['perpage'], $limit['offset']);
        }

        $data = $this->db->get()->result();
        return $data;
    }


    public function add($datausaha)
    {
        $this->db->insert('data_usaha',$datausaha);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    public function selectById($id)
    {
        $this->db->select('*');
        $this->db->from('data_usaha');
        $this->db->where('id_usaha',$id);
        $data = $this->db->get()->row();
        return $data;
    }

    public function edit($id,$datausaha)
    {
        $this->db->where('id_usaha',$id);
        $this->db->update('data_usaha',$datausaha);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id)
    {
        $this->db->where('id_usaha',$id);
        $this->db->delete('data_usaha');
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    public function search()
    {
        //$this->load->view('admin/login');
        echo "ini tambah kecamatan";
    }
    function eksport_data() {
        $this->db->select('id_usaha, id_user, id_kecamatan, id_kelurahan, id_sektor, id_skalausaha, nama_usaha, produk, alamat_usaha, latitude, longitude, omzet, no_tlp, status_usaha');
        $this->db->from('data_usaha');
        return $this->db->get();
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_skalausaha extends CI_Model {

    public function readall()
    {
        //$query = $this->db->query('join na didieu);
        //$data = $query->result();
        $this->db->select('*');
        $this->db->from('skala_usaha');
        $data = $this->db->get()->result();
        return $data;
    }
    public function add($dataska)
    {
        $this->db->insert('skala_usaha',$dataska);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    public function selectById($id)
    {
        $this->db->select('*');
        $this->db->from('skala_usaha');
        $this->db->where('id_skalausaha',$id);
        $data = $this->db->get()->row();
        return $data;
    }
    public function edit($id,$dataska)
    {
        $this->db->where('id_skalausaha',$id);
        $this->db->update('skala_usaha',$dataska);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id)
    {
        $this->db->where('id_skalausaha',$id);
        $this->db->delete('skala_usaha');
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

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
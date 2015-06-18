<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_sektorusaha extends CI_Model {

    public function readall()
    {
        //$query = $this->db->query('join na didieu);
        //$data = $query->result();
        $this->db->select('*');
        $this->db->from('sektor_usaha');
        $data = $this->db->get()->result();
        return $data;
    }
    public function add($datakec)
    {
        $this->db->insert('sektor_usaha',$datakec);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    public function selectById($id)
    {
        $this->db->select('*');
        $this->db->from('sektor_usaha');
        $this->db->where('id_sektor',$id);
        $data = $this->db->get()->row();
        return $data;
    }
    public function edit($id,$datakec)
    {
        //update kecamatan set nama=batujajar where id_kecamatan=$id
        //                     dalem $datakec
        $this->db->where('id_sektor',$id);
        $this->db->update('sektor_usaha',$datakec);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id)
    {
        $this->db->where('id_sektor',$id);
        $this->db->delete('sektor_usaha');
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
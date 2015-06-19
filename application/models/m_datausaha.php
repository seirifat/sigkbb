<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_datausaha extends CI_Model {

    public function readall()
    {
        //$query = $this->db->query('join na didieu);
        //$data = $query->result();
        $this->db->select('*');
        $this->db->from('data_usaha');
        $data = $this->db->get()->result();
        return $data;
    }

    public function readall_paging($limit = array())
    {
        //$query = $this->db->query('join na didieu);
        //$data = $query->result();
        $this->db->select('*');
        $this->db->from('kecamatan');

        if($limit != null){
            $this->db->limit($limit['perpage'], $limit['offset']);
        }

        $data = $this->db->get()->result();
        return $data;
    }


    public function add($datakec)
    {
        $this->db->insert('kecamatan',$datakec);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    public function selectById($id)
    {
        $this->db->select('*');
        $this->db->from('kecamatan');
        $this->db->where('id_kecamatan',$id);
        $data = $this->db->get()->row();
        return $data;
    }
    public function edit($id,$datakec)
    {
        //update kecamatan set nama=batujajar where id_kecamatan=$id
        //                     dalem $datakec
        $this->db->where('id_kecamatan',$id);
        $this->db->update('kecamatan',$datakec);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id)
    {
        $this->db->where('id_kecamatan',$id);
        $this->db->delete('kecamatan');
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
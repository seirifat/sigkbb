<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model {

    public function readall()
    {
        //$query = $this->db->query('select * from kelurahan kel,kecamatan kec where kel.id_kecamatan=kec.id_kecamatan order by kel.id_kelurahan');
        //$data = $query->result();
        $this->db->select('*');
        $this->db->from('user');
        //var_dump($data);die;
        $data = $this->db->get()->result();
        return $data;
    }

    public function add($datauser)
    {
        $this->db->insert('user',$datauser);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    public function selectById($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_user',$id);
        $data = $this->db->get()->row();
        return $data;
    }
    public function edit($id,$datauser)
    {
        $this->db->where('id_user',$id);
        $this->db->update('user',$datauser);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id)
    {
        $this->db->where('id_user',$id);
        $this->db->delete('user');
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
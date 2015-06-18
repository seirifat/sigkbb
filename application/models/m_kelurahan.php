<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_kelurahan extends CI_Model {

    public function readall()
    {
        $query = $this->db->query('select * from kelurahan kel,kecamatan kec where kel.id_kecamatan=kec.id_kecamatan order by kel.id_kelurahan');
        $data = $query->result();
//        $this->db->select('*');
//        $this->db->from('kelurahan');
        //var_dump($data);die;
        //$data = $this->db->get()->result();
        return $data;
    }

    public function getkecamatan()
    {
        $this->db->select('*');
        $this->db->from('kecamatan');
        $data = $this->db->get()->result();
        return $data;
    }


    public function add($datakel)
    {
        $this->db->insert('kelurahan',$datakel);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    public function selectById($id)
    {
        $this->db->select('*');
        $this->db->from('kelurahan');
        $this->db->where('id_kelurahan',$id);
        $data = $this->db->get()->row();
        return $data;
    }
    public function edit($id,$datakel)
    {
        $this->db->where('id_kelurahan',$id);
        $this->db->update('kelurahan',$datakel);
        if($this->db->affected_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id)
    {
        $this->db->where('id_kelurahan',$id);
        $this->db->delete('kelurahan');
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
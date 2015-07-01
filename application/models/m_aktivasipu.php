<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_aktivasipu extends CI_Model {

    public function readall()
    {
        //$query = $this->db->query('join na didieu);
        //$data = $query->result();
        $this->db->select('*');
        $this->db->from('user');
        $data = $this->db->get()->result();
        return $data;
    }
    public function edit($id,$dataAktivasipu)
    {
        //update kecamatan set nama=batujajar where id_kecamatan=$id
        //                     dalem $datakec
        $this->db->where('id_user',$id);
        $this->db->update('nama_user',$dataAktivasipu);
        $this->db->update('email_user',$dataAktivasipu);
        $this->db->update('alamat_user',$dataAktivasipu);
        $this->db->update('status_user',$dataAktivasipu);
        if($this->db->affected_rows()>0){
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
    public function delete($id)
    {
        $this->db->where('id_user',$id);
        $this->db->delete('nama_user');
        $this->db->delete('email_user');
        $this->db->delete('alamat_user');
        $this->db->delete('status_user');
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
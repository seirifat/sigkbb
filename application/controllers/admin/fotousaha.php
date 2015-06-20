<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fotousaha extends CI_Controller {

    private $judul=array(
        'aktip' => ""
    );
    public function __construct()
    {
        parent :: __construct();
        $this->load->model('M_fotousaha','fot',true); // kec itu alias dari kecamatan
    }

    public function index()
    {
        $this->judul['aktip'] = "fotousaha";
        $data['datafotousaha'] = $this->fot->readall();
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/fotousaha',$data);
        $this->load->view('admin/components/footer');
    }
    public function add()
    {
        $id_usaha = $this->input->post('id_usaha'); // dari form
        //$id_usaha = $this->input->post('id_kecamatan'); // dari form
        //$id_usaha = $this->input->post('id_kelurahan'); // dari form
        $foto = $this->input->post('foto'); // dari form
        $data['id_usaha'] = $id_usaha; // membuat array dari data post
        $data['foto'] = $foto; // membuat array dari data post
        if($this->fot->add($data)){
            $this->session->set_flashdata('status',1);
            $this->session->set_flashdata('pesan','Data Berhasil ditambah');
        }else{
            $this->session->set_flashdata('status',0);
            $this->session->set_flashdata('pesan','Data gagal ditambah');
        }
        redirect(base_url('admin/fotousaha'));
    }
    public function addview()
    {
        $this->judul['aktip'] = "fotousaha";
        //$data['fotousaha'] = $this->fot->getkecamatan();
        //$data['fotousaha'] = $this->fot->getkelurahan();
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/fotousaha_add',$data);
        $this->load->view('admin/components/footer');
    }

    public function edit($id)
    {
        $nama = $this->input->post('nama_kelurahan'); // dari form
        $id_kecamatan = $this->input->post('id_kecamatan'); // dari form
        $data['nama_kelurahan'] = $nama; // membuat array dari data post
        $data['id_kecamatan'] = $id_kecamatan; // membuat array dari data post
        $status = $this->kel->edit($id,$data);
        if($status){ //memanggil method edit dari model kecamatan sekaligus cek status
            $this->session->set_flashdata('status',1);
            $this->session->set_flashdata('pesan','Data Berhasil diubah');
        }else{
            $this->session->set_flashdata('status',0);
            $this->session->set_flashdata('pesan','Data gagal diubah');
        }
        redirect(base_url('admin/kelurahan'));
    }
    public function editview($id)
    {
        $this->judul['aktip'] = "kelurahan";
        $data['kecamatan'] = $this->kel->getkecamatan();
        $data['edit'] = true;
        $dataKelurahan = $this->kel->selectById($id);
        $data['kelurahan'] =  $dataKelurahan; //edit nanti dijadikan variabel di view
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/kelurahan_add',$data);
        $this->load->view('admin/components/footer');
    }

    public function delete($id) // ambil dari uri ==> /kelurahan/delete/id
    {
        $status = $this->kel->delete($id);
        if($status){ //memanggil method edit dari model kecamatan sekaligus cek status
            $this->session->set_flashdata('status',1);
            $this->session->set_flashdata('pesan','Data Berhasil dihapus');
        }else{
            $this->session->set_flashdata('status',0);
            $this->session->set_flashdata('pesan','Data gagal dihapus');
        }
        redirect(base_url('admin/kelurahan'));
    }
    public function search()
    {
        //$this->load->view('admin/login');
        echo "ini tambah kecamatan";
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
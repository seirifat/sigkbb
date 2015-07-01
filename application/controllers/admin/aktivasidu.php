<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aktivasidu extends CI_Controller {

    private $judul=array(
        'aktip' => ""
    );
    public function __construct()
    {
        parent :: __construct();
        $this->load->model('M_aktivasidu','adu',true);
        $this->load->model('M_sektorusaha','sek',true);
    }

    public function index()
    {
        $this->judul['aktip'] = "aktivasidu";
//    	var_dump($this->judul);die;
        $data['dataAktivasidu'] = $this->adu->readall();
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/aktivasidu',$data);
        $this->load->view('admin/components/footer');
    }

    public function edit($id)
    {
        $nama = $this->input->post('nama_usaha'); // dari form
        $sektor = $this->input->post('id_sektor'); // dari form
        $produk = $this->input->post('produk'); // dari form
        $status_usaha = $this->input->post('status_usaha'); // dari form

        $data['nama_usaha'] = $nama; // membuat array dari data post
        $data['id_sektor'] = $sektor; // membuat array dari data post
        $data['produk'] = $produk; // membuat array dari data post
        $data['status_usaha'] = $status_usaha; // membuat array dari data post

        $status = $this->adu->edit($id,$data);
        if($status){ //memanggil method edit dari model kecamatan sekaligus cek status
            $this->session->set_flashdata('status',1);
            $this->session->set_flashdata('pesan','Data Berhasil diubah');
        }else{
            $this->session->set_flashdata('status',0);
            $this->session->set_flashdata('pesan','Data gagal diubah');
        }
        redirect(base_url('admin/aktivasidu'));
    }
    public function editview($id)
    {
        $this->judul['aktip'] = "aktivasidu";
        $data['edit'] = true;
        $dataAktivasidu = $this->adu->selectById($id);
        $data['sektorusaha'] = $this->sek->readall();
        $data['aktivasidu'] =  $dataAktivasidu; //edit nanti dijadikan variabel di view
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/aktivasidu_add',$data);
        $this->load->view('admin/components/footer');
    }
    public function search()
    {
        //$this->load->view('admin/login');
        echo "ini tambah kecamatan";
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
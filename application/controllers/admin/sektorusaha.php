<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sektorusaha extends CI_Controller {

	private $judul=array(
		'aktip' => ""
		);
    public function __construct()
    {
        parent :: __construct();
        $this->load->model('M_sektorusaha','sek',true); // kec itu alias dari kecamatan
    }

    public function index()
    {
    	$this->judul['aktip'] = "sektor";
//    	var_dump($this->judul);die;
        $data['datasektorusaha'] = $this->sek->readall();
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/sektorusaha',$data);
        $this->load->view('admin/components/footer');
    }
    public function add()
    {
        $nama = $this->input->post('nama_sektor'); // dari form
        $data['nama_sektor'] = $nama; // membuat array dari data post
        if($this->sek->add($data)){
            $this->session->set_flashdata('status',1);
            $this->session->set_flashdata('pesan','Data Berhasil ditambah');
        }else{
            $this->session->set_flashdata('status',0);
            $this->session->set_flashdata('pesan','Data gagal ditambah');
        }
        redirect(base_url('admin/sektorusaha'));
    }
    public function addview()
    {
    	$this->judul['aktip'] = "sektor";
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/sektorusaha_add');
        $this->load->view('admin/components/footer');
    }

    public function edit($id)
    {
        $nama = $this->input->post('nama_sektor'); // dari form
        $data['nama_sektor'] = $nama; // membuat array dari data post
        $status = $this->sek->edit($id,$data);
        if($status){ //memanggil method edit dari model kecamatan sekaligus cek status
            $this->session->set_flashdata('status',1);
            $this->session->set_flashdata('pesan','Data Berhasil diubah');
        }else{
            $this->session->set_flashdata('status',0);
            $this->session->set_flashdata('pesan','Data gagal diubah');
        }
        redirect(base_url('admin/sektorusaha'));
    }
    public function editview($id)
    {
        $this->judul['aktip'] = "sektor";
        $data['edit'] = true;
        $dataSektorusaha = $this->sek->selectById($id);
        $data['sektorusaha'] =  $dataSektorusaha; //edit nanti dijadikan variabel di view
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/sektorusaha_add',$data);
        $this->load->view('admin/components/footer');
    }

    public function delete($id) // ambil dari uri ==> /sektorusaha/delete/id
    {
        $status = $this->sek->delete($id);
        if($status){ //memanggil method edit dari model kecamatan sekaligus cek status
            $this->session->set_flashdata('status',1);
            $this->session->set_flashdata('pesan','Data Berhasil dihapus');
        }else{
            $this->session->set_flashdata('status',0);
            $this->session->set_flashdata('pesan','Data gagal dihapus');
        }
        redirect(base_url('admin/sektorusaha'));
    }
    public function search()
    {
        //$this->load->view('admin/login');
        echo "ini tambah kecamatan";
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
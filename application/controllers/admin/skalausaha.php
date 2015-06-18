<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Skalausaha extends CI_Controller {

	private $judul=array(
		'aktip' => ""
		);
    public function __construct()
    {
        parent :: __construct();
        $this->load->model('M_skalausaha','ska',true); // kec itu alias dari kecamatan
    }

    public function index()
    {
    	$this->judul['aktip'] = "skala";
//    	var_dump($this->judul);die;
        $data['dataskalausaha'] = $this->ska->readall();
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/skalausaha',$data);
        $this->load->view('admin/components/footer');
    }
    public function add()
    {
        $nama = $this->input->post('nama_skalausaha'); // dari form
        $data['nama_skalausaha'] = $nama; // membuat array dari data post
        if($this->ska->add($data)){
            $this->session->set_flashdata('status',1);
            $this->session->set_flashdata('pesan','Data Berhasil ditambah');
        }else{
            $this->session->set_flashdata('status',0);
            $this->session->set_flashdata('pesan','Data gagal ditambah');
        }
        redirect(base_url('admin/skalausaha'));
    }
    public function addview()
    {
    	$this->judul['aktip'] = "skala";
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/skalausaha_add');
        $this->load->view('admin/components/footer');
    }

    public function edit($id)
    {
        $nama = $this->input->post('nama_skalausaha'); // dari form
        $data['nama_skalausaha'] = $nama; // membuat array dari data post
        $status = $this->ska->edit($id,$data);
        if($status){ //memanggil method edit dari model kecamatan sekaligus cek status
            $this->session->set_flashdata('status',1);
            $this->session->set_flashdata('pesan','Data Berhasil diubah');
        }else{
            $this->session->set_flashdata('status',0);
            $this->session->set_flashdata('pesan','Data gagal diubah');
        }
        redirect(base_url('admin/skalausaha'));
    }
    public function editview($id)
    {
        $data['edit'] = true;
        $dataSkalausaha = $this->ska->selectById($id);
        $data['skalausaha'] =  $dataSkalausaha; //edit nanti dijadikan variabel di view
        $this->load->view('admin/components€/header');
        $this->load->view('admin/skalausaha_add',$data);
        $this->load->view('admin/components/footer');
    }

    public function delete($id) // ambil dari uri ==> /sektorusaha/delete/id
    {
        $status = $this->ska->delete($id);
        if($status){ //memanggil method edit dari model kecamatan sekaligus cek status
            $this->session->set_flashdata('status',1);
            $this->session->set_flashdata('pesan','Data Berhasil dihapus');
        }else{
            $this->session->set_flashdata('status',0);
            $this->session->set_flashdata('pesan','Data gagal dihapus');
        }
        redirect(base_url('admin/skalausaha'));
    }
    public function search()
    {
        //$this->load->view('admin/login');
        echo "ini tambah kecamatan";
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
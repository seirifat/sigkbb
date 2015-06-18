<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kelurahan extends CI_Controller {

	private $judul=array(
		'aktip' => ""
		);
    public function __construct()
    {
        parent :: __construct();
        $this->load->model('M_kelurahan','kel',true); // kec itu alias dari kecamatan
    }

    public function index()
    {
    	$this->judul['aktip'] = "kelurahan";
        $data['datakelurahan'] = $this->kel->readall();
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/kelurahan',$data);
        $this->load->view('admin/components/footer');
    }
    public function add()
    {
        $id_kec = $this->input->post('id_kecamatan'); // dari form
        $nama = $this->input->post('nama_kelurahan'); // dari form
        $data['id_kecamatan']=$id_kec; // membuat array dari data post
        $data['nama_kelurahan']=$nama; // membuat array dari data post
        if($this->kel->add($data)){
            $this->session->set_flashdata('status',1);
            $this->session->set_flashdata('pesan','Data Berhasil ditambah');
        }else{
            $this->session->set_flashdata('status',0);
            $this->session->set_flashdata('pesan','Data gagal ditambah');
        }
        redirect(base_url('admin/kelurahan'));
    }
    public function addview()
    {
    	$this->judul['aktip'] = "kelurahan";
        $data['kecamatan'] = $this->kel->getkecamatan();
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/kelurahan_add',$data);
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
        $data['kecamatan'] = $this->kel->getkecamatan();
        $data['edit'] = true;
        $dataKelurahan = $this->kel->selectById($id);
        $data['kelurahan'] =  $dataKelurahan; //edit nanti dijadikan variabel di view
        $this->load->view('admin/components/header');
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
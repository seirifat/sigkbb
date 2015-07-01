<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aktivasipu extends CI_Controller {

	private $judul=array(
		'aktip' => ""
		);
    public function __construct()
    {
        parent :: __construct();
        $this->load->model('M_aktivasipu','apu',true);
    }

    public function index()
    {
    	$this->judul['aktip'] = "aktivasipu";
//    	var_dump($this->judul);die;
        $data['dataAktivasipu'] = $this->apu->readall();
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/aktivasipu',$data);
        $this->load->view('admin/components/footer');
    }

    public function edit($id)
    {
        $nama = $this->input->post('nama_user'); // dari form
        $email = $this->input->post('email_user'); // dari form
        $alamat = $this->input->post('alamat_user'); // dari form
        $tempat = $this->input->post('tempat'); // dari form
        $tgl_lahir = $this->input->post('tgl_lahir'); // dari form
        $ktp = $this->input->post('file_kpt'); // dari form
        $status_u = $this->input->post('status_user'); // dari form

        $data['nama_user'] = $nama; // membuat array dari data post
        $data['email_user'] = $email; // membuat array dari data post
        $data['alamat_user'] = $alamat; // membuat array dari data post
        $data['tempat'] = $tempat; // membuat array dari data post
        $data['tgl_lahir'] = $tgl_lahir; // membuat array dari data post
        $data['file_ktp'] = $ktp; // membuat array dari data post
        $data['status_user'] = $status_u; // membuat array dari data post

        $status = $this->apu->edit($id,$data);
        if($status){ //memanggil method edit dari model kecamatan sekaligus cek status
            $this->session->set_flashdata('status',1);
            $this->session->set_flashdata('pesan','Data Berhasil diubah');
        }else{
            $this->session->set_flashdata('status',0);
            $this->session->set_flashdata('pesan','Data gagal diubah');
        }
        redirect(base_url('admin/aktivasipu'));
    }
    public function editview($id)
    {
        $this->judul['aktip'] = "aktivasipu";
        $data['edit'] = true;
        $dataAktivasipu = $this->apu->selectById($id);
        $data['aktivasipu'] =  $dataAktivasipu; //edit nanti dijadikan variabel di view
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/aktivasipu_add',$data);
        $this->load->view('admin/components/footer');
    }

    public function delete($id) // ambil dari uri ==> /sektorusaha/delete/id
    {
        $status = $this->apu->delete($id);
        if($status){ //memanggil method edit dari model kecamatan sekaligus cek status
            $this->session->set_flashdata('status',1);
            $this->session->set_flashdata('pesan','Data Berhasil dihapus');
        }else{
            $this->session->set_flashdata('status',0);
            $this->session->set_flashdata('pesan','Data gagal dihapus');
        }
        redirect(base_url('admin/aktivasipu'));
    }
    public function search()
    {
        //$this->load->view('admin/login');
        echo "ini tambah kecamatan";
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
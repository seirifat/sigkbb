<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	private $judul=array(
		'aktip' => ""
		);
    public function __construct()
    {
        parent :: __construct();
        $this->load->model('M_user','us',true); // us itu alias dari kecamatan untuk model
    }

    public function index()
    {
    	$this->judul['aktip'] = "user";
        $data['datauser'] = $this->us->readall();
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/user',$data);
        $this->load->view('admin/components/footer');
    }
    public function add()
    {
        $nama = $this->input->post('nama_user'); // dari form
        $email = $this->input->post('email_user'); // dari form
        $alamat = $this->input->post('alamat_user'); // dari form
        $password = $this->input->post('password'); // dari form
        $file_ktp = $this->input->post('file_ktp'); // dari form
        $status_user = $this->input->post('status_user'); // dari form
        $tempat = $this->input->post('tempat'); // dari form
        $tgl_lahir = $this->input->post('tgl_lahir'); // dari form


        $data['nama_user'] = $nama; // membuat array dari data post
        $data['email_user'] = $email; // membuat array dari data post
        $data['alamat_user'] = $alamat; // membuat array dari data post
        $data['password'] = $password; // membuat array dari data post
        $data['file_ktp'] = $file_ktp; // membuat array dari data post
        $data['status_user'] = $status_user; // membuat array dari data post
        $data['tempat'] = $tempat; // membuat array dari data post
        $data['tgl_lahir'] = $tgl_lahir; // membuat array dari data post

        if($this->us->add($data)){
            $this->session->set_flashdata('status',1);
            $this->session->set_flashdata('pesan','Data Berhasil ditambah');
        }else{
            $this->session->set_flashdata('status',0);
            $this->session->set_flashdata('pesan','Data gagal ditambah');
        }
        redirect(base_url('admin/user'));
    }

    public function addview()
    {
    	$this->judul['aktip'] = "user";
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/user_add');
        $this->load->view('admin/components/footer');
    }

    public function edit($id)
    {
        $nama = $this->input->post('nama_user'); // dari form
        $ktp = $this->input->post('no_ktp'); // dari form
        $nip = $this->input->post('nip'); // dari form
        $email = $this->input->post('email_user'); // dari form
        $alamat = $this->input->post('alamat_user'); // dari form
        $password = $this->input->post('password'); // dari form
        $tempat = $this->input->post('tempat'); // dari form
        $tgl_lahir = $this->input->post('tgl_lahir'); // dari form
        $file_ktp = $this->input->post('file_ktp'); // dari form
        $status_user = $this->input->post('status_user'); // dari form

        $data['nama_user'] = $nama; // membuat array dari data post
        $data['no_ktp'] = $ktp; // membuat array dari data post
        $data['nip'] = $nip; // membuat array dari data post
        $data['email_user'] = $email; // membuat array dari data post
        $data['password'] = $password; // membuat array dari data post
        $data['alamat_user'] = $alamat; // membuat array dari data post
        $data['tempat'] = $tempat; // membuat array dari data post
        $data['tgl_user'] = $tgl_lahir; // membuat array dari data post
        $data['file_ktp'] = $file_ktp; // membuat array dari data post
        $data['status_user'] = $status_user; // membuat array dari data post

        $status = $this->us->edit($id,$data);
        if($status){ //memanggil method edit dari model kecamatan sekaligus cek status
            $this->session->set_flashdata('status',1);
            $this->session->set_flashdata('pesan','Data Berhasil diubah');
        }else{
            $this->session->set_flashdata('status',0);
            $this->session->set_flashdata('pesan','Data gagal diubah');
        }
        redirect(base_url('admin/user'));
    }
    public function editview($id)
    {
        $this->judul['aktip'] = "user";
        $data['edit'] = true;
        $datauser = $this->us->selectById($id);
        $data['user'] =  $datauser; //edit nanti dijadikan variabel di view
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/user_add',$data);
        $this->load->view('admin/components/footer');
    }

    public function delete($id) // ambil dari uri ==> /sektorusaha/delete/id
    {
        $status = $this->us->delete($id);
        if($status){ //memanggil method edit dari model kecamatan sekaligus cek status
            $this->session->set_flashdata('status',1);
            $this->session->set_flashdata('pesan','Data Berhasil dihapus');
        }else{
            $this->session->set_flashdata('status',0);
            $this->session->set_flashdata('pesan','Data gagal dihapus');
        }
        redirect(base_url('admin/user'));
    }
    public function search()
    {
        //$this->load->view('admin/login');
        echo "ini tambah kecamatan";
    }
    public function detilview($id)
    {
        $this->judul['aktip'] = "user";
        $datauser = $this->us->selectById($id);
        $data['user'] = $datauser;
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/userdetil',$data);
        $this->load->view('admin/components/footer');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
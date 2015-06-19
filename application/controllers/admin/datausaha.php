<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datausaha extends CI_Controller {

	private $judul=array(
		'aktip' => ""
		);

    public function __construct()
    {
        parent :: __construct();
        $this->load->model('m_datausaha','datausaha',TRUE);
    }

	public function index()
	{
		$data['datausaha'] = $this->datausaha->readall();
		$this->judul['aktip'] = "datausaha";
		$this->load->view('admin/components/header',$this->judul);
		$this->load->view('admin/datausaha',$data);
		$this->load->view('admin/components/footer');
	}
	public function add()
	{
		//$this->load->view('admin/login');
        echo "ini tambah kecamatan";
	}
    public function edit()
	{
		//$this->load->view('admin/login');
        echo "ini tambah kecamatan";
	}
    public function delete()
	{
		//$this->load->view('admin/login');
        echo "ini tambah kecamatan";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	private $judul=array(
		'aktip' => ""
		);
    public function __construct()
    {
        parent :: __construct();
    }

    public function index()
    {
    	$this->judul['aktip'] = "home";
        $this->load->view('admin/components/header',$this->judul);
        $this->load->view('admin/home');
        $this->load->view('admin/components/footer');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
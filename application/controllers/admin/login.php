<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent :: __construct();
        $this->load->model('M_datausaha','usa',true);
    }

	public function index()
	{
		$this->load->view('admin/login');
        if($this->loginmodel->isLogin()==false)
        {
            redirect('home');
        }else{
            redirect('admin/homeview');
        }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    

    public function __construct()
    {
        parent :: __construct();
        $this->load->helper('form');
//        $this->load->library('form_validation');
        $this->load->model('admin/login_model','login',TRUE);
    }

    public function index()
    {
        if($this->session->userdata('isLogin')==TRUE){
            redirect('admin/home');
        }
        else{
            //Input valid?
            if($this->login->validation()){
                //user pass benar?
                if($this->login->userCheck()){
                    redirect('admin/home');
                }
                else{
                    $this->data['pesan'] = "Username atau password salah";
                    $this->load->view('admin/login',$this->data);
                }
            }
            else{
                $this->load->view('admin/login',$this->data);
            }
        }
    }

    public function logout(){
        $this->login->logout();
        redirect('home');
    }
}
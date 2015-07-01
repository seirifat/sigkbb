<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model
{
    function loginAction($id_user, $password)
    {
        $this->db->select('id_user, password');
        $this->db->from('user');
        $arr = array(
            'username' => $id_user,
            'password' => md5($password)
        );
        $this->db->where($arr);
        $result = $this->db->get();
        if($result != '')
        {
            return true;
        }else{
            return false;
        }
    }

    function isLogin()
    {
        if($this->session->userdata('islogin')=="")
        {
            return false;
        }else{
            return true;
        }
    }

    function createSessionLogin($user)
    {
        if(!$this->session->userdata('islogin'))
        {
            $this->session->set_userdata('islogin',TRUE);
            $this->session->set_userdata('isUser',$user);
            return true;
        }else{
            return false;
        }
    }

    function goLogout()
    {
        $this->session->sess_destroy();
    }
}
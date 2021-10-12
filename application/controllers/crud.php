<?php
class crud extends CI_Controller
{
    function _construct()
    {
        parent::_construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }
    function index()
    {
        $data['user'] = $this->m_data->tampil_data()->result();
        $this->load->view('v_tampil',$data);    
    }
}

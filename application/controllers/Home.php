<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('email_helper');
        $this->load->library('session');
        $this->load->library('form_validation');
       
        
       
    }

    public function index()
    {
        /*$view_data = '';
        $language_id = ($this->session->userdata('site_lang') == 'english') ? '301' : '302';
        $data = array(
            'title' => $this->lang->line('home_page_title'),
        );*/
        $this->load->view('base/header');
        $this->load->view('master/index');
        $this->load->view('base/footer');
    }

   
}
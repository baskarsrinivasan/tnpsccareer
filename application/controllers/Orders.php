<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// add that config and encdec file from libraries
require_once(APPPATH."libraries/paytm/lib/config_paytm.php");
require_once(APPPATH."libraries/paytm/lib/encdec_paytm.php");

class Orders extends CI_Controller {

	function __construct() {
        parent::__construct();
        /*$this->load->model('student');
        $this->load->model('course');*/
     
       
    }

	public function index()
	{
		$data['title'] = 'Order Now';

                   
                
		$this->load->view('order',$data);
	}

	public function success()
	{
		$this->load->view('success');
	}
	
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");


require_once(APPPATH."libraries/paytm/lib/config_paytm.php");
require_once(APPPATH."libraries/paytm/lib/encdec_paytm.php");

class pgRedirects extends CI_Controller {

	function __construct() {
		parent::__construct();
		/*$this->load->model('student');
		$this->load->model('course');*/
		
	}

	public function index()
	{
		$this->session->set_userdata('course_id',$_POST['COURSE_ID']);
		$checkSum = "";
		$paramList = array();

		$ORDER_ID = $_POST["ORDER_ID"];
		$CUST_ID = $_POST["CUST_ID"];
		$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
		$CHANNEL_ID = $_POST["CHANNEL_ID"];
		$TXN_AMOUNT = $_POST["TXN_AMOUNT"];

		// Create an array having all required parameters for creating checksum.
		$paramList["MID"] = "rMCbMC73324363699461";
		$paramList["ORDER_ID"] = $ORDER_ID;
		$paramList["CUST_ID"] = $CUST_ID;
		$paramList["INDUSTRY_TYPE_ID"] = "Retail";
		$paramList["CHANNEL_ID"] = $CHANNEL_ID;
		$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
		$paramList["WEBSITE"] = "DEFAULT";
		$paramList["CALLBACK_URL"] = base_url()."pgResponses";

		/*
		$paramList["CALLBACK_URL"] = "http://localhost/PaytmKit/pgResponse.php";
		$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
		$paramList["EMAIL"] = $EMAIL; //Email ID of customer
		$paramList["VERIFIED_BY"] = "EMAIL"; //
		$paramList["IS_USER_VERIFIED"] = "YES"; //

		*/

		//Here checksum string will return by getChecksumFromArray() function.
		$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);
		$paramList["CHECKSUMHASH"]=$checkSum;	

		$this->load->view('pgRedirect',['paramList'=>$paramList]);
	}


}
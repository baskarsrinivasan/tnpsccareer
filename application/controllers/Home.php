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
        $this->load->model('home_model');
       $this->load->library('encryption');
        
       
    }

    public function index()
    {
        $view_data['exams'] = $this->mcommon->records_all('exams',array('is_active'=>1),  $order_by='');
         $view_data['exam_notifications'] = $this->home_model->getnotification();
        $view_data['exam_currentaffairs'] = $this->home_model->getcurrentaffairs1();
        $view_data['exam_question_paper'] = $this->home_model->getquestion_paper();
        
        $view_data['exam_syllabus'] = $this->home_model->getsyllabus();

        /*$language_id = ($this->session->userdata('site_lang') == 'english') ? '301' : '302';
        $data = array(
            'title' => $this->lang->line('home_page_title'),
        );*/
        $this->load->view('base/header',$view_data);
        $this->load->view('master/index',$view_data);
        $this->load->view('base/footer');
    }
    public function examdetails()
    {
        $id=$this->uri->segment('2');
        $view_data['exams'] = $this->mcommon->records_all('exams',array('is_active'=>1),  $order_by='');
      $view_data['exam_notification'] = $this->home_model->exam_notification($id);
        $view_data['exam_syllabus'] = $this->home_model->exam_syllabus($id);
        $view_data['exam_syllabus_count'] = $this->home_model->exam_syllabus_count($id);
        $view_data['advertising'] = $this->home_model->advertising();
       
        $this->load->view('base/header',$view_data);
        $this->load->view('master/exam',$view_data);
        $this->load->view('base/footer');
    }
    public function notification()
    {
        $id=$this->uri->segment('2');
        $view_data['exams'] = $this->mcommon->records_all('exams',array('is_active'=>1),  $order_by='');
      $view_data['exam_syllabus'] = $this->home_model->exam_syllabus($id);
        $view_data['exam_notification'] = $this->home_model->exam_notification($id);
       
        $this->load->view('base/header',$view_data);
        $this->load->view('master/notification',$view_data);
        $this->load->view('base/footer');
    }
    public function notifications()
    {
        $id=$this->uri->segment('2');
        $view_data['exams'] = $this->mcommon->records_all('exams',array('is_active'=>1),  $order_by='');
        $view_data['exam_notifications'] = $this->mcommon->records_all('exam_notification',array('is_active'=>1),  $order_by='');
      $view_data['exam_syllabus'] = $this->home_model->exam_syllabus($id);
        $view_data['exam_notification'] = $this->home_model->exam_notification($id);
       
        $this->load->view('base/header',$view_data);
        $this->load->view('master/notifications',$view_data);
        $this->load->view('base/footer');
    }
    public function question_paper()
    {
        $id=$this->uri->segment('2');
        $view_data['exams'] = $this->mcommon->records_all('exams',array('is_active'=>1),  $order_by='');
        $view_data['question_paper'] = $this->mcommon->records_all('exam_questions',array('is_active'=>1,'exam_id'=>$id),  $order_by='');
      $view_data['exam_syllabus'] = $this->home_model->exam_syllabus($id);
        /*$view_data['question_paper'] = $this->home_model->exam_question_paper($id);*/
       
        $this->load->view('base/header',$view_data);
        $this->load->view('master/question_paper',$view_data);
        $this->load->view('base/footer');
    }
     public function currentaffairs()
    {
        $id=$this->uri->segment('2');
        $view_data['exams'] = $this->mcommon->records_all('exams',array('is_active'=>1),  $order_by='');
        $view_data['exam_notifications'] = $this->mcommon->records_all('exam_notification',array('is_active'=>1),  $order_by='');
        $view_data['exam_currentaffairs'] = $this->home_model->getcurrentaffairs1();
      $view_data['exam_syllabus'] = $this->home_model->exam_syllabus($id);
        $view_data['exam_notification'] = $this->home_model->exam_notification($id);
       /*$view_data['exam_currentaffairs1'] = $this->home_model->getcurrentaffairs11();*/
        $this->load->view('base/header',$view_data);
        $this->load->view('master/currentaffairs',$view_data);
        $this->load->view('base/footer');
    }
     public function syllabus()
    {
        $id=$this->uri->segment('2');
        $view_data['exams'] = $this->mcommon->records_all('exams',array('is_active'=>1),  $order_by='');
        $view_data['exam_notifications'] = $this->mcommon->records_all('exam_notification',array('is_active'=>1),  $order_by='');
        $view_data['exam_syllabus'] = $this->mcommon->records_all('exam_syllabus',array('is_active'=>1),  $order_by='');
      
       
        $this->load->view('base/header',$view_data);
        $this->load->view('master/syllabus',$view_data);
        $this->load->view('base/footer');
    }
    public function notification_details()
    {
        $id=$this->uri->segment('2');
        $view_data['exams'] = $this->mcommon->records_all('exams',array('is_active'=>1),  $order_by='');
        $view_data['exam_notifications'] = $this->mcommon->records_all('exam_notification',array('is_active'=>1),  $order_by='');
        $view_data['exam_syllabus'] = $this->mcommon->records_all('exam_syllabus',array('is_active'=>1),  $order_by='');
      
        $view_data['exam_notification_details'] = $this->home_model->exam_notification_details($id);
        //print_r($view_data['exam_notification_details']);exit();
        $this->load->view('base/header',$view_data);
        $this->load->view('master/notifications_details',$view_data);
        $this->load->view('base/footer');
    }
    public function question_paper_details()
    {
        $id=$this->uri->segment('2');
        $view_data['exams'] = $this->mcommon->records_all('exams',array('is_active'=>1),  $order_by='');
        $view_data['exam_notifications'] = $this->mcommon->records_all('exam_notification',array('is_active'=>1),  $order_by='');
        $view_data['exam_syllabus'] = $this->mcommon->records_all('exam_syllabus',array('is_active'=>1),  $order_by='');
      
        $view_data['exam_questions_details'] = $this->home_model->exam_questions_details($id);
        //print_r($view_data['exam_notification_details']);exit();
        $this->load->view('base/header',$view_data);
        $this->load->view('master/question_paper_details',$view_data);
        $this->load->view('base/footer');
    }
    public function currentaffairs_details()
    {
        $id=$this->uri->segment('2');
        $view_data['exams'] = $this->mcommon->records_all('exams',array('is_active'=>1),  $order_by='');
        $view_data['exam_notifications'] = $this->mcommon->records_all('exam_notification',array('is_active'=>1),  $order_by='');
        $view_data['exam_syllabus'] = $this->mcommon->records_all('exam_syllabus',array('is_active'=>1),  $order_by='');
      
        $view_data['exam_currentaffairs_details'] = $this->home_model->exam_currentaffairs_details($id);
        //print_r($view_data['exam_notification_details']);exit();
        $this->load->view('base/header',$view_data);
        $this->load->view('master/currentaffairs_details',$view_data);
        $this->load->view('base/footer');
    }

  
   
}
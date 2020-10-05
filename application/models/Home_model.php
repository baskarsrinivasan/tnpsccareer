<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * [record_counts description]
	 * @param  [type] $user_id [users id]
	 * @return [INT]   user's id [description]
	 * @author Ganesh Ananthan
	 */
public function exam_syllabus($id)
	{
		     $this->db->select('*,es.image as image');
            $this->db->from('exam_syllabus as es');
            $this->db->join('exams as e','e.id=es.exam_id');
           
            $this->db->where('es.exam_id',$id);
            $query = $this->db->get();
        $result = $query->result();
        //print_r($result);exit();
        return $result;

	}
	public function exam_notification($id)
	{
		     $this->db->select('*');
            $this->db->from('exam_notification as es');
            $this->db->join('exams as e','e.id=es.exam_id');
           
            $this->db->where('es.exam_id',$id);
            $query = $this->db->get();
        $result = $query->result();
        //print_r($result);exit();
        return $result;

	}
    public function exam_question_paper($id)
    {
             $this->db->select('*');
            $this->db->from('exam_question as es');
            $this->db->join('exams as e','e.id=es.exam_id');
           
            $this->db->where('es.exam_id',$id);
            $query = $this->db->get();
        $result = $query->result();
        //print_r($result);exit();
        return $result;

    }
	public function exam_notification_details($id)
	{
		     $this->db->select('*');
            $this->db->from('exam_notification as es');
           
           
            $this->db->where('es.id',$id);
            $query = $this->db->get();
        $result = $query->result();
        //print_r($result);exit();
        return $result;

	}
    public function exam_questions_details($id)
    {
             $this->db->select('*');
            $this->db->from('exam_questions as es');
           
           
            $this->db->where('es.id',$id);
            $query = $this->db->get();
        $result = $query->result();
        //print_r($result);exit();
        return $result;

    }
	public function exam_currentaffairs_details($id)
	{
		     $this->db->select('*');
            $this->db->from('exam_currentaffairs as es');
           
           
            $this->db->where('es.date',$id);
            $this->db->order_by('es.id','desc');
            $query = $this->db->get();
        $result = $query->result();
       
        return $result;

	}
		public function getcurrentaffairs()
	{
		     $this->db->select('*');
            $this->db->from('exam_currentaffairs as es');
           $this->db->limit('10');
            $query = $this->db->get();
        $result = $query->result();
        //print_r($result);exit();
        return $result;

	}
	public function getnotification()
	{
		     $this->db->select('*');
            $this->db->from('exam_notification as es');
           $this->db->limit('10');
            $query = $this->db->get();
        $result = $query->result();
        //print_r($result);exit();
        return $result;

	}
    public function getquestion_paper()
    {
             $this->db->select('*,es.exams_name as exams_name');
            $this->db->from('exam_questions as eq');
            $this->db->join('exams as es','es.id=eq.exam_id');
           $this->db->limit('10');
            $query = $this->db->get();
        $result = $query->result();
        //print_r($result);exit();
        return $result;

    }
    public function get_question_paper()
    {
             $this->db->select('*,es.exams_name as exams_name');
            $this->db->from('exam_questions as eq');
            $this->db->join('exams as es','es.id=eq.exam_id');
           $this->db->limit('10');
            $query = $this->db->get();
        $result = $query->result();
        //print_r($result);exit();
        return $result;

    }
	public function getsyllabus()
	{
		     $this->db->select('*');
            $this->db->from('exam_syllabus as es');
           $this->db->limit('10');
            $query = $this->db->get();
        $result = $query->result();
        //print_r($result);exit();
        return $result;

	}
    public function getcurrentaffairs1()
    {
             $this->db->select('*');
            $this->db->from('exam_currentaffairs as es');
           $this->db->order_by('es.date','desc');
           $this->db->group_by('es.date');
            $query = $this->db->get();
        $result = $query->result();
        //print_r($result);exit();
        return $result;

    }
public function advertising()
    {
             $this->db->select('*');
            $this->db->from('advertising as es');
           
           
            
            $query = $this->db->get();
        $result = $query->result();
        //print_r($result);exit();
        return $result;

    }		
}

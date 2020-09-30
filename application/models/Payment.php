<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Payment extends CI_Model{
     function __construct() { 
        // Set table name 
        $this->table = 'orders'; 
    } 

    public function insert($data = array()) { 
        if(!empty($data)){ 
            // Add created and modified date if not included 
            if(!array_key_exists("created", $data)){ 
                $data['created'] = date("Y-m-d H:i:s"); 
            } 
           
            // Insert member data 
            $insert = $this->db->insert($this->table, $data); 
             
            // Return the status 
            return $insert?$this->db->insert_id():false; 
        } 
        return false; 
    } 
}
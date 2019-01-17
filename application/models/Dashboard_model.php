<?php 

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Dashboard_model extends CI_Model{

        function __construct()
        {
            parent::__construct();

            $this->db = $this->load->database('default', true);

        }

        public function insert_student_data($data){
            // $this->db->where('id', $id);
        	$this->db->insert('student', $data);

        }
        public function insert_data_mentor($ment_data){

            $this->db->insert('mentor', $ment_data);

        }

        public function insert_data_uni($uni_data){

            $this->db->insert('uni', $uni_data);

        }

        public function get_data($id){
            
          $this->db->where('id', $id);
		  $result = $this->db->get('student')->result_array();
		  return $result;
        
        }

        public function get_mentor_data($id){
            $this->db->where('id', $id);
        $result = $this->db->get('mentor')->result_array();
        return $result;
        
        }

         public function get_uni_data($id){
            $this->db->where('id', $id);
        $result = $this->db->get('uni')->result_array();
        return $result;
        
        }

        public function update_data($updated_data, $id){

            //  $this->db->set($updated_data);
            $this->db->where('id',$id);
            $this->db->update('student',$updated_data);
            }

        public function update_mentor($updated_data, $id){

            $this->db->where('id',$id);
            $this->db->update('mentor',$updated_data);
            }

            public function update_uni($updated_data, $id){

            $this->db->where('id',$id);
            $this->db->update('uni',$updated_data);
            }

            public function student_pic($path, $id){

            $this->db->set('stu_pic',$path);
            $this->db->where('id',$id);
            $this->db->update('student');

            }

            public function mentor_pic($path, $id){

            $this->db->set('ment_pic',$path);
            $this->db->where('id',$id);
            $this->db->update('mentor');

            }

            public function uni_pic($path, $id){

            $this->db->set('uni_pic',$path);
            $this->db->where('id',$id);
            $this->db->update('uni');
        }

        public function list_students(){
            $this->db->select('*');
            $this->db->from('users');
            $this->db->join('student', 'student.id = users.id');
            $result = $this->db->get()->result_array();
            return $result;
        }

         public function list_mentors(){
            $this->db->select('*');
            $this->db->from('users');
            $this->db->join('mentor', 'mentor.id = users.id');
            $result = $this->db->get()->result_array();
            return $result;
        }

        // public function list_university(){
        //     $this->db->select('*');
        //     $this->db->from('uni');
        //     $this->db->join('users', 'users.id = uni.id');
        //     $result = $this->db->get()->result_array();
        //     return $result;
        // }

        public function delete_mentor($id){
            $tables = array('users', 'mentor');
            $this->db->where('id', $id);
            $this->db->delete($tables);
        }

         public function delete_student($id){
            $tables = array('users', 'student');
            $this->db->where('id', $id);
            $this->db->delete($tables);
        }

         public function delete_all($da){

            if (!empty($da)) {
          $data = explode(',', $da);
            $tables = array('users', 'student');
            $this->db->where_in('id', $data);
            $this->db->delete($tables);
            }
        }

         public function delete_all_ment($da){

            if (!empty($da)) {
          $data = explode(',', $da);
            $tables = array('users', 'mentor');
            $this->db->where_in('id', $data);
            $this->db->delete($tables);
            }
        }

}
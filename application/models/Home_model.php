<?php 

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Home_model extends CI_Model{

        function __construct()
        {
            parent::__construct();

            $this->db = $this->load->database('default', true);

        }

       /* function check_email($reg_email){

        	$this->db->where('email', $reg_email);
        	$result = $this->db->get('users')->result_array();

        	if(sizeof($result) > 0){
			$response = array('status' => 1);	}
			else{
			$response = array('status' => 0);   }
		
		return $response;

        } */

        function insert_data($reg_fname, $reg_lname, $reg_email, $reg_password, $user_type){


        	$qry = "INSERT INTO users VALUES ('','$reg_fname','$reg_lname','$reg_email','$reg_password','$user_type')";
           $this ->db->query($qry);


        }

         function check_login($log_email, $log_password)
	{
		$this->db->where('email', $log_email);
		$this->db->where('password', $log_password);
		$result = $this->db->get('users')->result_array();

		if(sizeof($result) > 0)
		{
			$response = array('status' => 1);
		}
		else
		{
			$response = array('status' => 0);
		}
		return $response;
	} 

	function get_details($log_email){

		$this->db->where('email', $log_email);
		$result = $this->db->get('users')->result_array();
		return $result;


	}

	function insert_student($idemail){

		$this->db->insert('student', $idemail);
	}

	

 }

?>
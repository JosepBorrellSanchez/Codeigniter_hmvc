<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class principal extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}


	public function principal1()
	{
		$this->load->view('principal'); 
		/*$query = $this->db->query('SELECT * FROM actor LIMIT 10');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				echo $row['actor_id']. $row['fullname']. "<br>";
			}
		}	*/
	}
	
	public function provainsert(){
	$data = array(
		'actor_id' => 9141 ,
		'fullname' => 'Mi nombre' ,
            );
            $this->db->insert('actor', $data); 
		}
		
		/*public function provaborrar(){
			$id = 9141;
			$this->db->where('actor_id', $id);
			$this->db->delete('actor'); 
			}*/
			
			public function provaupdate(){
			$data = array(
               'actor_id' => 201
            );
			$id = 200;
			$idnou = 201;
			$this->db->where('actor_id', $id);	
			$this->db->update('actor',$data); }
			
}

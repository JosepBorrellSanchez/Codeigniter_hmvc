<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class configuracio extends CI_Controller {


	public function canviarpassword()
	{
		
		$this->load->view('canviarpassword'); 
}
	public function sortir()
	{
		
		$this->load->view('sortir'); 
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

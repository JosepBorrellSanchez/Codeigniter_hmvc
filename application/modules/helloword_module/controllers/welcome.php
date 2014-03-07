<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function pepito()
{
echo "Hola";
}
	public function crear()
	{
		$this->load->view('crear'); 
	}
	public function modificar()
	{
		$this->load->view('modificar'); 
	}public function eliminar()
	{
		$this->load->view('eliminar'); 
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

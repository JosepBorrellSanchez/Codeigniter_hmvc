<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Hello_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }
    
    function say_hello() {
		return "Hello!";
	}
    
}



<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Oldalam extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
                $this->load->helper('html');
		$this->load->view('oldalak/frontend');
	}
	public function tablazat($p = null)
	{
            //$this->load->database();
            $this->load->helper('html');
            $this->load->library('table');
            $this->load->view('oldalak/tablazat');
           //print "Ez mar tablazat";
	}
	public function connect($p = null)
	{
                $this->load->helper('html');
		$this->load->view('oldalak/connect');
           //print "Ez mar tablazat";
	}
	public function login($p = null)
	{
                $this->load->helper('html');
                $this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
                
                $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
                $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|md5');
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');
                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
                
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('oldalak/login');
		}
		else
		{
			$this->load->view('formsuccess');
		}
		
           //print "Ez mar tablazat";
	}
}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function home(){
		$this->load->helpers('url');
		$this->load->view('frontend/index');
	}
	public function dash(){
		$this->load->helpers('url');
		$this->load->view('backend/index');
	}

	public function writer(){
		$this->load->helpers('url');
		echo "Halaman writer";
	}

	public function reviewer(){
		$this->load->helpers('url');
		echo "Halaman reviewer";
	}

	public function user(){
		// if(isset($this->session->userdata['logged_in'])){
		// 	redirect('welcome/dash');
		// }
		$this->load->model('login_model');
		$data['login'] = $this->login_model->login();
		print_r($data['login']);
		if(count($data['login'])>0){
			$this->session->set_userdata('logged_in',$data['login']);
			print_r($data['login']);
			$akses = $data['login']->akses;
			echo $akses;
			switch($akses){
				case 'admin':
					redirect('welcome/dash');
				case 'writer':
					redirect('welcome/writer');
				case 'reviewer':
					redirect('welcome/reviewer');
				break;
			}
			//redirect('welcome/dash');
		}else{
			redirect('welcome');
		}
		//$this->load->view('user', $data);
	}
	
}

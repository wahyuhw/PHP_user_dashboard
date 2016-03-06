<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('user');
		$this->output->enable_profiler();
	}
	public function index(){

		$this->load->view('users');
	}
	Public function sign_in(){

		$this->load->view('signin');
	}
	Public function register(){

		$this->load->view('register');
	}
	Public function manage(){

		$this->load->view('manage');
	}
	Public function add_new_user(){

		$this->load->view('new');
	}
	Public function dashboard(){
		$all_users['test'] = $this->user->get_all_users();
		$this->load->view("dashboard",$all_users);
	}
	Public function edit($id){
		$user_info = $this->user->get_user_by_id($id);
		// var_dump($user_info);
		// die();
		$this->load->view('edit',$user_info);
	}
	Public function edit_admin($id){

		$this->load->view('edit_admin');
	}
	Public function show($id){
		$user_info['user'] = $this->user->get_user_by_id($id);
		$this->load->view('show', $user_info);
	}
	Public function destroy(){
		$this->session->sess_destroy();
		redirect('/');
	}
	



	
	
}


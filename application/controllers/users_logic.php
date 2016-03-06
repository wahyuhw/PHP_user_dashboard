<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_logic extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('user');
		$this->output->enable_profiler();
	}
	public function register(){
		$check = $this->user->get_all_users();

		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First name', 'required|trim');
		$this->form_validation->set_rules('last_name', 'Last name', 'required|trim');
		$this->form_validation->set_rules('pwd', 'Password', 'trim|required|matches[pwd_confirm]');
		$this->form_validation->set_rules('pwd_confirm', 'Password Confirmation', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		// var_dump($this->form_validation->run());
		// var_dump(validation_errors());
		// die();
		if($this->form_validation->run() === TRUE){
			
		$info = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('pwd')
			);
		$this->user->register($info);
		$things = $this->user->check_email($info['email']);
		// var_dump($things['id']);
		// die();
		if($check == null) {
			$this->user->admin($things['id']);
		}
		$this->session->set_flashdata('success', "You have successfully registered, Please log in!");
		$data = $this->user->check_email($info['email']);
		$id = array(
			'id' => $data['id'],
			'user_level' => $data['user_level']
			);
		$this->session->set_userdata('user_info', $id);
		// var_dump($this->session->all_userdata());
		// die();

		redirect("/users/dashboard");
		}
		else{
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/');
		}
	}
	public function sign_in(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$login_check = $this->user->check_email($email);
		if(!empty($login_check) && $login_check['password'] == $password){

			$session_data = array(
				'user_id' => $login_check['id'],
				'user_level' => $login_check['user_level']
				);
			$this->session->set_userdata($session_data);
			// var_dump($this->session->all_userdata());
			redirect('/users/dashboard');
		}
		else{
			$this->session->set_flashdata('login_error', 'Invalid email or password!');
			redirect('/');
		}
	}
	public function edit_profile($id){
		// var_dump('in controler', $this->input->post());
		// die();
		$this->user->update_user($id, $this->input->post());
		redirect("/users/edit/".$id);

	}
	public function edit_password($id){
		// var_dump('in controler', $this->input->post());
		// die();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('pwd', 'Password', 'trim|required|matches[pwd_confirm]');
		$this->form_validation->set_rules('pwd_confirm', 'Password Confirmation', 'trim|required');

		if($this->form_validation->run() === TRUE){
		// 	var_dump('in controler', $this->input->post());
		// die();

		$this->user->update_password($id, $this->input->post());
		redirect("/users/edit/".$id);

		}
		else{
		$this->session->set_flashdata('errors', validation_errors());
		redirect('/users/edit/'.$id);
		}

	}
	public function edit_description($id){
		// var_dump('in controler', $this->input->post());
		// die();
		$this->user->update_description($id, $this->input->post());
		redirect("/users/edit/".$id);

	}
	public function delete($id){
		$this->user->remove_user();
		redirect("/users/edit/".$id);
	}

	




}
	


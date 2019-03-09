<?php

class Users extends CI_Controller {

	// public function show($user_id)
	// {
	// 	//The code below is not needed anymore bcz User_model was autoloaded
	// 	//$this->load->model('User_model');
	// 	$data['results'] = $this->User_model->get_users($user_id, 'rico');


	// 	//$data['welcome'] = "Welcome to my page";
	// 	$this->load->view('user_view', $data);

	// }

	// public function insert()
	// {
	// 	$username = "peter";
	// 	$password = "password";

	// 	$this->User_model->create_users([
	// 		'username' => $username,
	// 		'password' => $password
	// 	]);
	// }

	// public function update()
	// {
	// 	$id = 6;
	// 	$username = "William";
	// 	$password = "not secret";

	// 	$this->User_model->update_users([
	// 		'username' => $username,
	// 		'password' => $password
	// 	], $id);
	// }

	// public function delete()
	// {
	// 	$id = 5;

	// 	$this->User_model->delete_users($id);
	// }

	public function register()
	{

		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]|alpha');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]|alpha');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$data['main_view'] = 'users/register_view';
			$this->load->view('layouts/main', $data);
		}
		else
		{
			
			if($this->User_model->create_user()) {

				$this->session->set_flashdata('user_registered', "User has been registered");
				redirect('home/index');
			}
			else
			{

			}

		}

	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		// $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$data = array(
				'errors' => validation_errors()
			);

			$this->session->set_flashdata($data); // This will set and unset the session
			redirect('pages/login');
		} else 
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user_id = $this->User_model->login_user($username, $password);

			if($user_id) 
			{
				$user_data = array(
					'user_id' => $user_id,
					'username' => $username,
					'logged_in' => TRUE
				);

				$this->session->set_userdata($user_data);

				$this->session->set_flashdata('login_success', 'You are now logged in');

				//$data['main_view'] = "home_view";
				//$this->load->view('layouts/main', $data);
				redirect('home','refresh');
				// redirect('home/index');
			} else 
			{

				$this->session->set_flashdata('login_failed', 'Sorry You are not logged in');
				redirect('pages/login','refresh');
			}
		}
		// echo $this->input->post('username');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home','refresh');
	}
}

?>
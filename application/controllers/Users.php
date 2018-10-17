<?php 

/**
* 
*/
class Users extends CI_Controller
{
	public function logout()
	{
		$this->session->sess_destroy();
		/*$data['main_view'] = "users/login_view";
		$this->load->view('layout/main', $data);*/
		redirect('users/login');

	}

	public function register()
	{
		
		$this->form_validation->set_rules('email', 'E-Mail', 'trim|required|valid_email');		
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

		if ($this->form_validation->run() == false) {			

			$data['main_view'] = "users/register_view";
			$this->load->view('layout/main', $data);
			
		}
		else
		{							
				if($this->User_Model->create_user()){
					$this->session->set_flashdata('success', 'You have registered successfully!Login to Continue');					

					$data['main_view'] = "users/login_view";
					$this->load->view('layout/main', $data);
				}
				else
				{
					$this->session->set_flashdata('failed', 'You are not registerd');
					redirect('home/index');
				}
				
			
		}
	}
	public function login()
	{
		$this->form_validation->set_rules('email', 'E-Mail', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		

		if ($this->form_validation->run() == false) {
			$data = array(
				'errors' => validation_errors()
				);
			$this->session->set_flashdata($data);
			//redirect('home');
			$data['main_view'] = "users/login_view";
			$this->load->view('layout/main', $data);
		}
		else
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user_id = $this->User_Model->login_user($email, $password);
			if ($user_id) {
				$user_data = array(
					'user_id' => $user_id,
					'email' => $email,
					'logged_in' => true,
					'status' => 'user'
					);
				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('success', 'You are now logged in');
				/*$data['main_view'] = "notes/index";
				$this->load->view('layout/main', $data);*/
				redirect('notes/index');
				
			}
			else
			{
				$this->session->set_flashdata('failed', 'You are not logged in');
				redirect('home/index');
			}
		}
	}

	public function guest()
	{			
			
		$user_data = array(
			'user_id' => 0,					
			'logged_in' => true,
			'status' => 'guest'
			);

		//edited system session files set_userdata method
		if($this->session->set_userdata($user_data)){

			$this->session->set_flashdata('success', 'You are now logged in as Guest');
			/*$data['main_view'] = "notes/index";
			$this->load->view('layout/main', $data);*/
			redirect('notes/index');
		}
		else
		{			
			$this->session->set_flashdata('failed', 'You are not logged in');
			redirect('home/index');
		}
			
		
	}
	
}
 ?>
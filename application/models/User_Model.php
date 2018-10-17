<?php 
/**
* 
*/
class User_Model extends CI_Model
{
	public function login_user($email, $password)
	{

		$this->db->where('email', $email);
		$result = $this->db->get('users');
		$db_pass = $result->row(2)->password;
		if(password_verify($password, $db_pass))
			return $result->row(0)->id;
		else
			return false;
	}
	
	public function create_user()
	{
		$options = ['cost' => 12];
		$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);
		$user_data = array(					
					'email' => $this->input->post('email'),					
					'password' => $encripted_pass
					);
		$data = $this->db->insert('users', $user_data);
		return $data;

	}
}
 ?>
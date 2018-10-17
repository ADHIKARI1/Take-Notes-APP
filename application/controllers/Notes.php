<?php

/**
* 
*/
class Notes extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('logged_in')) {
			$this->session->set_flashdata('failed', 'Please logging to access');
			redirect('users/login');
		}
	}
	public function delete($id)
	{
		$this->Note_Model->delete_note($id);		
		$this->session->set_flashdata('success', 'You have successfully Deleted!');
		redirect("notes/index");
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('note_title', 'Note Name', 'trim|required');
		$this->form_validation->set_rules('note_body', 'Note Description', 'trim|required');


		if ($this->form_validation->run() == false){

			if($this->uri->segment(3) == '')
					redirect('notes/index');


			$data['note_data'] = $this->Note_Model->get_note($id);
			$data['main_view'] = "notes/edit_note";
			$this->load->view('layout/main', $data);
		}
		else
		{
			
			$data = array(				
				'note_title' => $this->input->post('note_title'),
				'note_body' => $this->input->post('note_body'),
				'date_updated' => mdate('%Y-%m-%d %H:%i:%s', now()),
				'user_id' => $this->session->userdata('user_id')
				);		

			if ($this->Note_Model->edit_note($data, $id)) {
				$this->session->set_flashdata('success', 'You have successfully updated!');				
				redirect('notes/index');
			}
			else
			{
				$this->session->set_flashdata('failed', 'Failed to update the note!');
				redirect('notes/index');
			}

		}
	}

	

	public function create()
	{
		$this->form_validation->set_rules('note_title', 'Note Name', 'trim|required');
		$this->form_validation->set_rules('note_body', 'Note Description', 'trim|required');

		if ($this->form_validation->run() == false){
			$data['notes'] = $this->Note_Model->get_notes();
			$data['main_view'] = "notes/index";
			$this->load->view('layout/main', $data);
			//redirect('notes/index');
		}
		else
		{
			$data = array(				
				'note_title' => $this->input->post('note_title'),
				'note_body' => $this->input->post('note_body'),
				'user_id' => $this->session->userdata('user_id')
				);

			if ($this->Note_Model->create_note($data)) {
				$this->session->set_flashdata('success', 'You have successfully created!');
				/*$data['main_view'] = "projects/create_project";
				$this->load->view('layout/main', $data);*/
				redirect('notes/index');
			}
			else
			{
				$this->session->set_flashdata('failed', 'Failed to create the note!');
				redirect('notes/index');
			}

		}
	}

	public function index()
	{
		$data['notes'] = $this->Note_Model->get_notes();
		$data['main_view'] = "notes/index";
		$this->load->view('layout/main', $data);
	}

	
	


}
 ?>
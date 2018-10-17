<?php 
/**
* 
*/
class Note_Model extends CI_Model
{
	public function get_note($id)
	{
		$this->db->where(['id' => $id]);
		$query = $this->db->get('notes');

		if($query->num_rows()<1)
			return false;
		else
			return $query->row();

	}

	public function edit_note($data, $id)
	{
		$this->db->where(['id'=> $id]);
		$this->db->update('notes', $data);

		return true;
	}

	public function get_notes()
	{
		if($this->session->userdata('status') == 'user')
		{
			$id = $this->session->userdata('user_id');
			$this->db->where(['user_id' => $id]);
		}
		else
		{
			$this->db->where(['user_id' => 0]);
		}

		$query = $this->db->get('notes');
		return $query->result();
	}

	public function create_note($data)
	{
		$result = $this->db->insert('notes', $data);
		return $result;
	}	

	public function delete_note($id)
	{
		$this->db->where(['id'=> $id]);
		$this->db->delete('notes');

		return true;
	}



	
}
 ?>
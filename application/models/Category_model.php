<?php

class Category_model extends CI_Model {

	public function get_category($id = null)
	{
		if($id) {
			$this->db->where('id' == $id);
			$query = $this->db->get('categories');
			return $query->row_array();
		}

		$sql = "SELECT * FROM categories";
		$query = $this->db->query($sql);
		return $query->result_array();
		
	}

	public function get_selected_category($id = null)
	{
		if($id) {
			$sql = "SELECT * FROM categories WHERE id=$id";
			$query = $this->db->get('categories');
			return $query->row_array();
		}

		$sql = "SELECT id,name FROM categories";
		$query = $this->db->query($sql);
		return $query->result_array();
		
	}

	public function create_category()
	{
		$category_name = $this->input->post('category_name');
		$data = array(
				'name' => $category_name
			);
		$this->db->where(['name' => $category_name]);
		$result = $this->db->get('categories');

		if($result->num_rows() == 0) {
			$insert_data = $this->db->insert('categories', $data);
			return $insert_data;
		} else {
			return FALSE;
		}
		
	}

	public function remove($id = null)
	{
		if($id) {
			// $sql = "DELETE FROM categories WHERE id = ?";
			// $query = $this->db->query($sql, array($id));

			$this->db->where('id', $id);
			if($this->db->delete('categories'))
			{
				return true;
			} else
			{
				return false;
			}
			// ternary operator
			//return ($query === true) ? true : false;			
		}
	}

	public function edit_category($id = null)
	{
		if($id) {
			// $sql = "DELETE FROM categories WHERE id = ?";
			// $query = $this->db->query($sql, array($id));

			// ternary operator
			// return ($query === true) ? true : false;	
			$category_name = $this->input->post('category_name');
			$data = array(
				'name' => $this->input->post('category_name')
			);
			$this->db->where('id', $id);
			$sql = $this->db->update('categories',$data);
			if($sql === true) {
				return true; 
			} else {
				return false;
			}
		} else {
			return false;
		}
		
	}

}

?>
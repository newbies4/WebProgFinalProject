<?php

class Post_model extends CI_Model {

	public function get_post($id = null)
	{
		if($id) {
			$sql = "SELECT posts.id, title, author, content, name FROM posts INNER JOIN categories ON category_id=categories.id WHERE posts.id = $id";
			$query = $this->db->query($sql);
			return $query->row_array();
			// $this->db->where('id' == $id);
			// $query = $this->db->get('posts');
			// return $query->row_array();
		}

		//$sql = "SELECT * FROM posts";
		// $sql = "SELECT p.id as id, p.title as title, p.author as author, p.content as content, c.name as category_name FROM posts AS p INNER JOIN categories AS c WHERE p.id = c.id";

		// $this->db->select('p.id, title, author, content, category_id, name');
		// $this->db->from('categories AS c');
		// $this->db->join('posts AS p', 'p.category_id = id', 'INNER');
		// $query = $this->db->get();
		$sql = "SELECT posts.id, title, author, content, posts.created_at, name FROM posts INNER JOIN categories ON category_id=categories.id";
		$query = $this->db->query($sql);
		return $query->result_array();
		
	}

	public function create_post()
	{
		$post_title = $this->input->post('post_title');
		$post_category_id = $this->input->post('post_categories');
		$post_author = $this->input->post('post_author');
		$post_content = $this->input->post('post_content');
		$data = array(
				'title' => $post_title,
				'category_id' => $post_category_id,
				'author' => $post_author,
				'content' => $post_content
			);

		$insert_data = $this->db->insert('posts', $data);
		if($insert_data) {
			return TRUE;
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
			if($this->db->delete('posts'))
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

	public function edit_post($id = null)
	{
		$post_title = $this->input->post('post_title');
		$post_category_id = $this->input->post('post_categories');
		$post_author = $this->input->post('post_author');
		$post_content = $this->input->post('post_content');
		$data = array(
				'title' => $post_title,
				'category_id' => $post_category_id,
				'author' => $post_author,
				'content' => $post_content
			);
		$this->db->where('id', $id);
		$update_data = $this->db->update('posts', $data);
		if($update_data) {
			return TRUE;
		} else {
			return FALSE;
		}

		// if($id) {
		// 	// $sql = "DELETE FROM categories WHERE id = ?";
		// 	// $query = $this->db->query($sql, array($id));

		// 	// ternary operator
		// 	// return ($query === true) ? true : false;	
		// 	$category_name = $this->input->post('category_name');
		// 	$data = array(
		// 		'name' => $this->input->post('category_name')
		// 	);
		// 	$this->db->where('id', $id);
		// 	$sql = $this->db->update('categories',$data);
		// 	if($sql === true) {
		// 		return true; 
		// 	} else {
		// 		return false;
		// 	}
		// } else {
		// 	return false;
		// }
		
	}

}

?>
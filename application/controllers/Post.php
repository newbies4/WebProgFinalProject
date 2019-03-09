<?php

class Post extends CI_Controller {
	
	public function show()
	{
		
		$data['results'] = $this->Post_model->get_post();
		$data['main_view'] = "admin/post_view";
		$this->load->view('dashboard/dashboard_main', $data);

	}

	public function create()
	{
		$this->form_validation->set_rules('post_title', 'Post Title', 'trim|required|min_length[2]');
		$this->form_validation->set_rules('post_categories', 'Post Category', 'trim|required');
		$this->form_validation->set_rules('post_author', 'Post Author', 'trim|required|min_length[2]');
		$this->form_validation->set_rules('post_content', 'Post Content', 'trim|required|min_length[10]');
		
		//$cat_name = $this->input->post('category_name');

		if($this->form_validation->run() == FALSE)
		{
			$data['categories'] = $this->Category_model->get_selected_category();
			$data['main_view'] = "admin/add_post_view";
			$this->load->view('dashboard/dashboard_main', $data);
		}
		else
		{
			
			if($this->Post_model->create_post()) {

				$this->session->set_flashdata('post_created', "Post has been created");
				redirect('post/show');
			}
			else
			{
				$this->session->set_flashdata('post_exist', "Category already exist");
				redirect('post/create');
			}

		}
		//redirect('category/show','refresh');
	}
	public function edit($id = null)
	{
		$this->form_validation->set_rules('post_title', 'Post Title', 'trim|required|min_length[2]');
		$this->form_validation->set_rules('post_categories', 'Post Category', 'trim|required');
		$this->form_validation->set_rules('post_author', 'Post Author', 'trim|required|min_length[2]');
		$this->form_validation->set_rules('post_content', 'Post Content', 'trim|required|min_length[10]');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['categories'] = $this->Category_model->get_selected_category();
			$data['main_view'] = "admin/add_post_view";
			$this->load->view('dashboard/dashboard_main', $data);
		}
		else
		{
			$id = $this->session->userdata('post_id');
			if($this->Post_model->edit_post($id)) {
				$this->session->unset_userdata('post_id');
				$this->session->set_flashdata('post_updated', "Post has been updated");
				redirect('post/show');
			}
			else
			{
				$this->session->set_flashdata('post_exist', "Category already exist");
				redirect('post/create');
			}

		}
	}

	public function remove($id = null)
	{
		if($id) {

			$remove_post = $this->Post_model->remove($id);
			if($remove_post === true) {
				$this->session->set_flashdata('post_removed', "Post successfully deleted");
				redirect('post/show');
			} else {
				$this->session->set_flashdata('post_failed', "Post deletion failed");
				redirect('post/show');
			}
		}
	}
}

?>
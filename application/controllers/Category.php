<?php

class Category extends CI_Controller {
	
	public function show()
	{
		
		$data['results'] = $this->Category_model->get_category();
		$data['main_view'] = "admin/category_view";
		$this->load->view('dashboard/dashboard_main', $data);

	}

	public function create()
	{
		$this->form_validation->set_rules('category_name', 'Category Name', 'trim|required|min_length[2]');
		

		if($this->form_validation->run() == FALSE)
		{
			$data['main_view'] = "admin/add_category_view";
			$this->load->view('dashboard/dashboard_main', $data);
		}
		else
		{
			
			if($this->Category_model->create_category()) {

				$this->session->set_flashdata('category_created', "Category has been created");
				redirect('category/show');
			}
			else
			{
				$this->session->set_flashdata('category_exist', "Category already exist");
				redirect('category/create');
			}

		}
		//redirect('category/show','refresh');
	}

	public function remove($id = null)
	{
		if($id) {

			$remove_category = $this->Category_model->remove($id);
			if($remove_category === true) {
				$this->session->set_flashdata('category_removed', "Category successfully deleted");
				redirect('category/show');
			} else {
				$this->session->set_flashdata('category_failed', "Category deletion failed, Category is used in posts");
				redirect('category/show');
			}
		}
	}
	public function edit($id = null)
	{
		$this->session->unset_userdata('category_name');
		$this->form_validation->set_rules('category_name', 'Category Name', 'trim|required|min_length[2]');

		if($this->form_validation->run() == FALSE)
		{
			$data['main_view'] = "admin/edit_category_view";
			$this->load->view('dashboard/dashboard_main', $data);
		}
		else
		{
			$id = $this->session->userdata('category_id');	
			if($this->Category_model->edit_category($id)) {

				$this->session->set_flashdata('category_updated', "Category successfully updated");
				$id = $this->session->unset_userdata('category_id');
				redirect('category/show');
			}
			else
			{
				echo $this->Category_model->edit_category($id);
				echo "<h1>Hello</h1>";
				// $this->session->set_flashdata('category_exist', "Category already exist");
				// redirect('category/show');
			}

		}
		// if($id && $name) {

		// 	$remove_category = $this->Category_model->edit($id);
		// 	if($remove_category === true) {
		// 		$this->session->set_flashdata('category_removed', "Category successfully updated");
		// 		redirect('category/show');
		// 	} else {

		// 	}
		// }
	}
	
}

?>
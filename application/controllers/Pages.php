<?php

class Pages extends CI_Controller {

	// public function index()
	// {
	// 	// $data['main_view'] is a parameter that is passed to the layouts/main in the view folder
	// 	$data['main_view'] = "home_view";
	// 	$this->load->view('layouts/main', $data);
	// }

	public function login()
	{
		$data['main_view'] = "users/login_view";
		$data['category'] = $this->Category_model->get_category();
		$data['post'] = $this->Post_model->get_post();
		$this->load->view('layouts/main', $data);
	}

	public function dashboard()
	{
		$data['main_view'] = "admin_view";
		$this->load->view('dashboard/dashboard_main', $data);
	}

	public function category()
	{
		$data['main_view'] = "admin/category_view";
		$this->load->view('dashboard/dashboard_main', $data);
	}

	public function create_category()
	{
		$data['main_view'] = "admin/add_category_view";
		$this->load->view('dashboard/dashboard_main', $data);
	}

	public function edit_category($id=null, $name=null)
	{
		$data['main_view'] = "admin/edit_category_view";
		$this->session->set_userdata('category_id', $id);
		$this->session->set_userdata('category_name', $name);
		$this->load->view('dashboard/dashboard_main', $data);
	}

	public function post()
	{
		$data['main_view'] = "admin/post_view";
		$this->load->view('dashboard/dashboard_main', $data);
	}


	public function create_post()
	{
		$data['categories'] = $this->Category_model->get_selected_category();
		$data['main_view'] = "admin/add_post_view";
		$this->load->view('dashboard/dashboard_main', $data);
	}

	public function edit_post($id=null)
	{
		$data['post'] = $this->Post_model->get_post($id);
// $que = $this->Post_model->get_post($id);
// echo $que['id'];
		$data['categories'] = $this->Category_model->get_selected_category();
		$data['main_view'] = "admin/edit_post_view";
		$this->session->set_userdata('post_id', $id);
		$this->load->view('dashboard/dashboard_main', $data);
	}

	public function no_page()
	{
		$this->load->view('no_page');
	}

}

?>
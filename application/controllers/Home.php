<?php

class Home extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			echo "Welcome".$this->session->userdata('username');
		}

		// $data['main_view'] is a parameter that is passed to the layouts/main in the view folder
		$data['main_view'] = "home_view";
		$data['category'] = $this->Category_model->get_category();
		$data['post'] = $this->Post_model->get_post();
		// $data['posts_results']
		$this->load->view('layouts/main', $data);
	}

}

?>
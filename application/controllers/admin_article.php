<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_article extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('article_m');
	}

	public function index()
	{
		
		$id = $_GET['id'];
		
		$story = $this->article_m->get_article($id);
		
		$data['story'] = $story[0];
		$data['title'] = $story[0]['title'];
		
		$this->load->view('admin/header_admin.php', $data);	
		//$this->load->view('admin/header_widgets.php');
		$this->load->view('admin/article', $data);
		$this->load->view('admin/footer.php');
	}
	public function view()
	{
		
		$id = $_GET['id'];
		
		$story = $this->article_m->get_article($id);
		$data['document'] = $story[0]['document'];
		$this->load->view('view_doc', $data);
	}
	public function publish(){
		
		$id = $_GET['id'];
		$this->article_m->publish($id);
		redirect(base_url().'/index.php/admin/moderate');

	}
	public function unpublish(){
		
		$id = $_GET['id'];
		
		$this->article_m->unpublish($id);
		redirect(base_url().'/index.php/admin');

	}
	public function delete(){
		
		$id = $_GET['id'];
		
		$this->article_m->delete($id);
		redirect(base_url().'/index.php/admin/moderate');
	}
	public function edit(){
		$id = $_GET['id'];
		
		$story = $this->article_m->get_article($id);
		
		$data['story'] = $story[0];
		$data['title'] = $story[0]['title'];
		
		$this->load->model('admin_model');
		
		$data['sections'] = $this->admin_model->get_sections();
		$data['categories'] = $this->admin_model->get_categories();
			
		$this->load->view('admin/header_admin.php', $data);
		$this->load->view('admin/edit_document', $data);
		$this->load->view('admin/footer.php');
	}
}
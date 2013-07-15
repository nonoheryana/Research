<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_article extends CI_Controller {

	public function index()
	{
		$article = $_GET['id'];
		
		$this->load->model('article_m');
		$story = $this->article_m->get_article($article);
		
		$data['story'] = $story[0];
		$data['title'] = $story[0]['title'];
		
		$this->load->view('admin/header_admin.php', $data);	
		//$this->load->view('admin/header_widgets.php');
		$this->load->view('admin/article', $data);
		$this->load->view('admin/footer.php');
	}
	public function view(){
		$article = $_GET['id'];
		$this->load->model('article_m');
		$story = $this->article_m->get_article($article);
		
		$data['document'] = $story[0]['document'];
		$this->load->view('view_doc', $data);
	}
}
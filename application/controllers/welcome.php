<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['title'] = "Welcome";
		
		$this->load->model('welcome_m');
		
		if(isset($_GET['cat'])){
			$cat = $_GET['cat'];			
		}else{
			$cat = 0;
		}
		
		if($cat==0){
			$data['more_news'] = $this->welcome_m->get_all();
		}else{
			$data['more_news'] = $this->welcome_m->get_all_cat($cat);
		}
		$data['featured'] = $this->welcome_m->get_featured();
		
		$this->load->view('layout/header.php', $data);	
		$this->load->view('layout/header_widgets', $data);
		$this->load->view('welcome_message', $data);
		$this->load->view('layout/footer.php');
		
	}
	public function filter_feed(){
		$section = $_POST['section'];
		$this->load->model('welcome_m');
		if(isset($_POST['cat'])){
		$cat = $_POST['cat'];
		$data['filtered_feed'] = $this->welcome_m->get_filtered_feed_cat($section,$cat);
		}else{
		$data['filtered_feed'] = $this->welcome_m->get_filtered_feed($section);
		}
		if($section==1){
			$data['title'] = "Latest";
		}elseif($section==2){
			$data['title'] = "Features";
		}elseif($section==3){
			$data['title'] = "Opinion";
		}elseif($section==4){
			$data['title'] = "News";
		}else{
			$data['title'] = "Other Health News";
		}
		$this->load->view('filtered', $data);
	}
	public function add_document(){
			$this->load->model('admin_model');
			
			$data['sections'] = $this->admin_model->get_sections();
			$data['categories'] = $this->admin_model->get_categories();
			
			$data['title'] = 'Add document';			
			
			$this->load->view('layout/header',$data);
			$this->load->view('layout/header_widgets', $data);
			$this->load->view('add_document', $data);
			
			$this->load->view('layout/footer', $data);
	}
	public function add_documents_process(){
			$this->load->model('admin_model');
			$data['result'] = $this->admin_model->process_add($_POST, $_FILES);
		
			$data['sections'] = $this->admin_model->get_sections();
			$data['categories'] = $this->admin_model->get_categories();
			
			$data['title'] = 'Add document';			
			
			$this->load->view('layout/header',$data);
			$this->load->view('layout/header_widgets', $data);
			$this->load->view('add_document', $data);
			
			$this->load->view('layout/footer', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

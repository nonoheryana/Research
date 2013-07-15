<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	  public function __construct()
       {
            parent::__construct();
            // Your own constructor code
			if(($this->session->userdata('user_name')==""))
			{
				redirect(base_url().'index.php/user');
			}
       }
       
	public function index()
	{
			$data['page_title'] = 'Admin Dashboard';
				
			//get items
			$this->load->model('welcome_m');
			if(isset($_GET['category'])){
				$cat = $_GET['category'];
				$section = $_GET['section'];
				$data['filtered_feed'] = $this->welcome_m->get_filtered_feed_cat($section,$cat);
			}else{
				$data['filtered_feed'] = $this->welcome_m->get_all();
			}
			//
			$this->load->model('admin_model');
			$data['sections'] = $this->admin_model->get_sections();
			$data['categories'] = $this->admin_model->get_categories();
			$this->load->view('admin/header_admin',$data);
			$this->load->view('admin/admin', $data);
			$this->load->view('admin/footer', $data);
	}
	public function moderate()
	{
			$data['page_title'] = 'Moderate Articles';
				
			//get items
			$this->load->model('welcome_m');
			if(isset($_GET['category'])){
				$cat = $_GET['category'];
				$section = $_GET['section'];
				$data['filtered_feed'] = $this->welcome_m->get_filtered_feed_cat0($section,$cat);
			}else{
				$data['filtered_feed'] = $this->welcome_m->get_all0();
			}
			//
			$this->load->model('admin_model');
			$data['sections'] = $this->admin_model->get_sections();
			$data['categories'] = $this->admin_model->get_categories();
			$this->load->view('admin/header_admin',$data);
			$this->load->view('admin/moderate', $data);
			$this->load->view('admin/footer', $data);
	}
	public function add_document(){
			$this->load->model('admin_model');
			$data['sections'] = $this->admin_model->get_sections();
			$data['categories'] = $this->admin_model->get_categories();
			
			$data['page_title'] = 'Add document';			
			
			$this->load->view('admin/header_admin',$data);
			$this->load->view('admin/add_document', $data);
			$this->load->view('admin/footer', $data);
	}
	public function add_documents_process(){
			$this->load->model('admin_model');
			$data['result'] = $this->admin_model->process_add($_POST, $_FILES);
		
			$data['sections'] = $this->admin_model->get_sections();
			$data['categories'] = $this->admin_model->get_categories();
			
			$data['page_title'] = 'Add document';			
			
			$this->load->view('admin/header_admin',$data);
			$this->load->view('admin/add_document', $data);
			$this->load->view('admin/footer', $data);
	}
	
}
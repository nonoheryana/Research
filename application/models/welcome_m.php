<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome_m extends CI_Model {
 

  public function get_all(){
 	
	$this->db->select("news.*, UNIX_TIMESTAMP() - timestamp AS TimeSpent, timestamp, categories.*");
	$this->db->from("news");	
	$this->db->join("categories", "categories.cat_id=news.category");
	$this->db->where("news.active", "1");
	$result = $this->db->get();
	$news = $result->result_array();
	return $news;
 }
   public function get_all0(){
 	
	$this->db->select("news.*, UNIX_TIMESTAMP() - timestamp AS TimeSpent, timestamp, categories.*");
	$this->db->from("news");	
	$this->db->join("categories", "categories.cat_id=news.category");
	$this->db->where("news.active", "0");
	$result = $this->db->get();
	$news = $result->result_array();
	return $news;
 }
   public function get_all_cat($cat){
 	
	$this->db->select("*, UNIX_TIMESTAMP() - timestamp AS TimeSpent, timestamp, categories.*");
	$this->db->from("news");	
	$this->db->join("categories", "categories.cat_id=news.category");
	$this->db->where("news.category", $cat);
	$this->db->where("news.active", "1");
	$result = $this->db->get();
	$news = $result->result_array();
	return $news;
 }
   public function get_archive($cat){
 	
	$this->db->select("*, UNIX_TIMESTAMP() - timestamp AS TimeSpent, timestamp, categories.*");
	$this->db->from("news");	
	$this->db->join("categories", "categories.cat_id=news.category");
	$this->db->where("category", $cat);
	$this->db->where("news.active", "1");
	$result = $this->db->get();
	$news = $result->result_array();
	return $news;
 }
    public function show_article($id){
 	
	$this->db->select("*, UNIX_TIMESTAMP() - timestamp AS TimeSpent, timestamp, categories.*");
	$this->db->from("news");	
	$this->db->join("categories", "categories.cat_id=news.category");
	$this->db->where("id", $id);
	
	$result = $this->db->get();
	$news = $result->result_array();
	return $news;
 }
   public function get_filtered_feed($section){
   	$this->db->select("*, UNIX_TIMESTAMP() - timestamp AS TimeSpent, timestamp, categories.*");
	$this->db->from("news");	
	$this->db->join("categories", "categories.cat_id=news.category");	
	$this->db->where("news.active", "1");
	if($section=="0"){
		
	}else{
	$this->db->where("news.section", $section);	
	}
	$result = $this->db->get();
	return $result->result_array();
   }
    public function get_filtered_feed_cat($section, $cat){
   	$this->db->select("*, UNIX_TIMESTAMP() - timestamp AS TimeSpent, timestamp, categories.*");
	$this->db->from("news");	
	$this->db->join("categories", "categories.cat_id=news.category");
	$this->db->where("news.active", "1");	
	if($section=="0"){
		
	}else{
	$this->db->where("news.section", $section);	
	}
	if($cat=="0"){
		
	}else{
	$this->db->where("news.category", $cat);
	}
	$result = $this->db->get();
	return $result->result_array();

	}
	public function get_filtered_feed_cat0($section, $cat){
   	$this->db->select("*, UNIX_TIMESTAMP() - timestamp AS TimeSpent, timestamp, categories.*");
	$this->db->from("news");	
	$this->db->join("categories", "categories.cat_id=news.category");
	$this->db->where("news.active", "0");	
	if($section=="0"){
		
	}else{
	$this->db->where("news.section", $section);	
	}
	if($cat=="0"){
		
	}else{
	$this->db->where("news.category", $cat);
	}
	$result = $this->db->get();
	return $result->result_array();

	}
}
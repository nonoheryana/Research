<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model {
	public function index(){
 	
 }	public function get_sections(){				$result = $this->db->get("sections");		return $result->result_array();	}	public function get_categories(){				$result = $this->db->get("categories");		return $result->result_array();	}	public function process_add($_POST, $_FILES){		$path = str_replace('system/', '', BASEPATH);		$allowedExts = array("pdf");		$temp = explode(".", $_FILES["file"]["name"]);		$extension = end($temp);		if (($_FILES["file"]["size"] < 2000000)&& in_array($extension, $allowedExts))		  {		  if ($_FILES["file"]["error"] > 0)		    {		    return "Return Code: " . $_FILES["file"]["error"] . "<br>";		    }		  else		    {	    /*echo "Upload: " . $_FILES["file"]["name"] . "<br>";	    echo "Type: " . $_FILES["file"]["type"] . "<br>";	    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";	    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";*/	   	    if (file_exists($path."upload/" . $_FILES["file"]["name"]))	      {	      return $_FILES["file"]["name"] . " already exists. ";	      }	    else	      {		$filename = $_FILES["file"]["name"];	      move_uploaded_file($_FILES["file"]["tmp_name"], $path."upload/" . $_FILES["file"]["name"]);	      //echo "Stored in: " . $path."upload/" . $_FILES["file"]["name"];	      $this->db->query("insert into news(`title`, `content`, `category`, `section`, `document`)values('$_POST[title]', '$_POST[abstract]', '$_POST[category]', '$_POST[section]', '$filename')");	      return "Tour added successfully!";	      }	    }	  }	else	  {	  return "Invalid file";	  }				}
}
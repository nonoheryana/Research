<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model {
	public function index(){
 	
 }	public function get_sections(){				$result = $this->db->get("sections");		return $result->result_array();	}	public function get_categories(){				$result = $this->db->get("categories");		return $result->result_array();	}	public function process_add($_POST, $_FILES){		$path = str_replace('system/', '', BASEPATH);		$allowedExts = array("pdf");		$temp = explode(".", $_FILES["file"]["name"]);		$extension = end($temp);		if (($_FILES["file"]["size"] < 2000000)&& in_array($extension, $allowedExts))		  {		  if ($_FILES["file"]["error"] > 0)		    {		    return "Return Code: " . $_FILES["file"]["error"] . "<br>";		    }		  else		    {	   	    if (file_exists($path."upload/" . $_FILES["file"]["name"]))	      {	      return $_FILES["file"]["name"] . " already exists. ";	      }	    else	      {		$filename = $_FILES["file"]["name"];	      move_uploaded_file($_FILES["file"]["tmp_name"], $path."upload/" . $_FILES["file"]["name"]);	      //echo "Stored in: " . $path."upload/" . $_FILES["file"]["name"];	      $timestamp = round(microtime(true) * 1000);		  if(($this->session->userdata('is_admin')==""))			{				$active = 0;			}else{				$active = 1;			}	      $this->db->query("insert into news(`title`, `content`, `category`, `section`, `document`, `timestamp`, `active`)values('$_POST[title]', '$_POST[abstract]', '$_POST[category]', '$_POST[section]', '$filename', '$timestamp', '$active')");	      $inserted = mysql_insert_id();		  if(isset($_POST['featured'])){		  	$this->db->query("update news set featured='1' where id='$inserted'");		  }		  return "Document added successfully!";	      }	    }	  }	else	  {	  return "Invalid file";	  }				}	public function edit($_POST, $_FILES){		$path = str_replace('system/', '', BASEPATH);		$allowedExts = array("pdf");		if($_FILES['file']['name']==''){	   		$this->db->query("update news set title='$_POST[title]', content='$_POST[abstract]', category='$_POST[category]', section='$_POST[section]' where id='$_POST[id]'");			return "Document edited successfully!";		}		else		{		$temp = explode(".", $_FILES["file"]["name"]);		$extension = end($temp);		if (($_FILES["file"]["size"] < 2000000)&& in_array($extension, $allowedExts))		  {		  if ($_FILES["file"]["error"] > 0)		    {		    return "Return Code: " . $_FILES["file"]["error"] . "<br>";		    }		  else		    {	   	    if (file_exists($path."upload/" . $_FILES["file"]["name"]))	      {	      return $_FILES["file"]["name"] . " already exists. ";	      }	    else	      {		$filename = $_FILES["file"]["name"];	      move_uploaded_file($_FILES["file"]["tmp_name"], $path."upload/" . $_FILES["file"]["name"]);	      //echo "Stored in: " . $path."upload/" . $_FILES["file"]["name"];	      $timestamp = round(microtime(true) * 1000);		  if(($this->session->userdata('is_admin')==""))			{				$active = 0;			}else{				$active = 1;			}	    //  $this->db->query("insert into news(`title`, `content`, `category`, `section`, `document`, `timestamp`, `active`)values('$_POST[title]', '$_POST[abstract]', '$_POST[category]', '$_POST[section]', '$filename', '$timestamp', '$active')");	      $this->db->query("update news set title='$_POST[title]', content='$_POST[abstract]', category='$_POST[category]', section='$_POST[section]' document='$filename' where id='$_POST[id]'");	      return "Document edited successfully!";	      }	    }	  }	else	  {	  return "Invalid file";	  }			}	}
}
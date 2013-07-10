<?php
//print_r($doctors);
header("Content-type: text/xml");
$Result = "<?xml version='1.0' encoding='utf-8'?>\n<doctors>\n";
$Result .= " <doctor>\n";	
		$description ='';
		foreach($doctors as $doc){
			$description .="Name: ".$doc['Title'].' '.$doc['Names']." | Reg No: ".$doc['RegNo']." | Specialty :".$doc['Specialty']."\n";
		}
		if(count($doctors)==0){
			$description = "No doctor found with that name";
		}
$Result .="<description>".str_replace('&', 'and', $description)."</description>";		
$Result .= " </doctor>\n";
$Result .= "</doctors>\n"; 
echo $Result;
?>
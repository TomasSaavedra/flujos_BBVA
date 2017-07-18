<?php
	$q = '';
	if(isset($_REQUEST['term'])){
		$q = $_REQUEST['term'];
	}
	 
	$options = array(
		array("id"=>"Upupa epops","label"=>"Eurasian Hoopoe","value"=>"Eurasian Hoopoe"),
		array("id"=>"Jynx torquilla","label"=>"Eurasian Wryneck","value"=>"Eurasian Wryneck"),
		array("id"=>"Ficedula hypoleuca","label"=>"Eurasian Pied Flycatcher","value"=>"Eurasian Pied Flycatcher"),
		array("id"=>"Sitta europaea","label"=>"Eurasian Nuthatch","value"=>"Eurasian Nuthatch"),
		array("id"=>"Falco subbuteo","label"=>"Eurasian Hobby","value"=>"Eurasian Hobby"),
		array("id"=>"Pica pica","label"=>"Eurasian Magpie","value"=>"Eurasian Magpie"),
		array("id"=>"Garrulus glandarius","label"=>"Eurasian Jay","value"=>"Eurasian Jay"),
		array("id"=>"Pyrrhula pyrrhula","label"=>"Eurasian Bullfinch","value"=>"Eurasian Bullfinch"),
		array("id"=>"Scolopax rusticola","label"=>"Eurasian Woodcock","value"=>"Eurasian Woodcock"),
		array("id"=>"Fulica atra","label"=>"Eurasian Coot","value"=>"Eurasian Coot"),
		array("id"=>"Numenius phaeopus","label"=>"Eurasian Whimbrel","value"=>"Eurasian Whimbrel"),
		array("id"=>"Passer montanus","label"=>"Eurasian Tree Sparrow","value"=>"Eurasian Tree Sparrow")
	);
	
	$ret = array();
	foreach ($options as $option){
		if(strpos(strtolower($option['label']), strtolower($q)) !== false){
			array_push($ret, $option);
		}
	}
	
	echo json_encode($ret);
<?php 

	$entityBody = file_get_contents('php://input');
	error_log("$_REQUEST: " . json_encode($_REQUEST));
	error_log("Post BODY: " . $entityBody);
	
	
	// Calls two variants every other time:
	// ?c=Canada&d=decline&x1[]=2018%20Q4&x1[]=2019%20Q1&x1[]=2019%20Q2&y1[]=67&y1[]=70&y1[]=74&y2[]=64&y2[]=61&y2[]=53 
	// ?c=Canada&d=increase&x1[]=2018%20Q4&x1[]=2019%20Q1&x1[]=2019%20Q2&y1[]=67&y1[]=70&y1[]=74&y2[]=65&y2[]=79&y2[]=84

	if (file_exists('_graph_toggle')) {	
		unlink('_graph_toggle');	
		
		if (!isset($_GET['c']))		$_GET['c'] 	= 'Canada';
		if (!isset($_GET['d']))		$_GET['d'] 	= 'increase';
		if (!isset($_GET['x1']))	$_GET['x1'] = array('2018 Q4', '2019 Q1', '2019 Q2');
		if (!isset($_GET['y1']))	$_GET['y1'] = array('67', '70', '74');
		if (!isset($_GET['y2']))	$_GET['y2'] = array('65', '79', '84');					
	
	} else {		
		touch('_graph_toggle');		
		
		if (!isset($_GET['c']))		$_GET['c'] 	= 'Canada';
		if (!isset($_GET['d']))		$_GET['d'] 	= 'decline';
		if (!isset($_GET['x1']))	$_GET['x1'] = array('2018 Q4', '2019 Q1', '2019 Q2');
		if (!isset($_GET['y1']))	$_GET['y1'] = array('67', '70', '74');
		if (!isset($_GET['y2']))	$_GET['y2'] = array('64', '61', '53');		
		
	}			
	include('index.php');
<?php
    
	function sanitize_input($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$f_name = sanitize_input($_POST['ft']);
	$l_name = sanitize_input($_POST['lt']);
	$mail = sanitize_input($_POST['mail']);
	$pw = sanitize_input($_POST['pw']);
	
	echo "first name: ".$f_name."<br>";
	echo "last name: ".$l_name."<br>";
	echo "mail : ".$mail."<br>";
	echo "User password: " .$pw ."<br>";
?>
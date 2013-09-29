<?php 

	

	$data = explode(",",$_POST['imgBase64']);
	$name = generateRandomString().'.png';
	file_put_contents($name, base64_decode($data[1]));

	echo $name;

	function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    return $randomString;
	}

?>
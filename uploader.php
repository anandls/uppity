<?php
	
	$data = $_POST['imgBase64'];

	// remove the part that we don't need from the provided image and decode it
	$data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $data));

	$filepath = $_SERVER['DOCUMENT_ROOT'] . "/uppity/uploads/".time().'.png'; 

	// Save the image in a defined path
	file_put_contents($filepath,$data);

	echo "/uppity/uploads/".time().'.png';

?>

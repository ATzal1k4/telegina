<?php
/*
Uploadify v2.1.4
Release Date: November 8, 2010
Copyright (c) 2010 Ronnie Garcia, Travis Nickels
*/
$fileArray = array();
foreach ($_POST as $key => $value) {
	if ($key != 'folder') {
		if (file_exists($_SERVER['DOCUMENT_ROOT'] . $_POST['folder'] . '/' . $value)) {
			$fileArray[$key] = $value;
		}
	}
}
echo json_encode($fileArray);
?>
<?php
/*
Uploadify v2.1.4
Release Date: November 8, 2010
Copyright (c) 2010 Ronnie Garcia, Travis Nickels
*/
echo "123";
if (!empty($_FILES)) {
	$tempFile = $_FILES['Filedata']['tmp_name'];
	die($tempFile);
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $_REQUEST['folder'] . '/';
	$targetFile =  str_replace('//','/',$targetPath) . $_FILES['Filedata']['name'];
	
	 $fileTypes  = str_replace('*.','',$_REQUEST['fileext']);
	 $fileTypes  = str_replace(';','|',$fileTypes);
	 $typesArray = split('\|',$fileTypes);
	 $fileParts  = pathinfo($_FILES['Filedata']['name']);
	
	 if (in_array($fileParts['extension'],$typesArray)) {
		// Uncomment the following line if you want to make the directory if it doesn't exist
		 mkdir(str_replace('//','/',$targetPath), 0755, true);
		
		move_uploaded_file($tempFile,$targetFile);
		echo str_replace($_SERVER['DOCUMENT_ROOT'],'',$targetFile);
	 } else {
	 	echo 'Invalid file type.';
	 }
}
?>
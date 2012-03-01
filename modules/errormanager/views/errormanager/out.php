<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if (count($errors) > 0) {
	echo 'ERRORS:<br/>';
	foreach ($errors as $error) {
		echo $error . '<br/>';
	}
}


if (count($exceptions) > 0) {
	echo "EXCEPTIONS:<br/>";
	foreach ($exceptions as $exception) {
		echo $exception->getMessage() . '<br/>';
	}
}

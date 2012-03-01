<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<a onclick="history.go(-1);" href="#">Назад</a>
<ul class="alt">
<? foreach ($errors as $error): ?>
	<li class="error"><?= $error ?></li>
<? endforeach; ?>
</ul>
<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="col_12">
	<fieldset>
		<legend><?= $new->title ?></legend>
		<article><?= $new->text ?></article>
		<span>
			Автор: <?= $new->author ?><br/>
			Дата: <?= Date::publicFormat($new->date_create) ?>
		</span>
		
	</fieldset>
</div>

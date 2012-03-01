<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<? foreach ($configs as $k => $config): ?>
	<fieldset>
		<legend><?= $config->name ?></legend>
		<form action="/admin/configs/save/<?= $config->pk(); ?>" method="post">

			<? foreach ($config->items->find_all() as $item): ?>

				<label for="<?= $item->name ?>" class="col_3 right"><?= $item->title ?></label>
				<input type="<?= $item->type ?>" name="<?= $item->name ?>" value="<?= $item->value ?>" required="required" class="col_7 left" />

			<? endforeach; ?>
			<div class="col_4"></div>
			<div class="col_4">
				<input type="submit" name="submit" value="Сохранить" class="blue" />	
			</div>
			<div class="clear"></div>
		</form>
		<? if (isset($errors)): ?>
			<? foreach ($errors as $k => $error): ?>
				<p><?= $error ?></p>
			<? endforeach; ?>
		<? endif; ?>
	</fieldset>
<? endforeach; ?>

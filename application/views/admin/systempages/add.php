<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<form action="/admin/<?= $entityName ?>s/add/" method="post">
	<label class="col_2 right" for="title">Заголовок</label>
	<input class="col_6 left" type="text" placeholder="Заголовок" name="title" required="required" /><br/>
	<label for="alias" class="col_2 right">Алиас</label>
	<input type="text" placeholder="Алиас" name="alias" required="required" class="col_6 left" /><br/>
	<label for="is_hide" class="col_2 right inline">Скрывать</label>
	<input type="checkbox" name="is_hide" /><br/>
	<label for="show_in_menu" class="col_2 right inline">Показывать в меню</label>
	<input type="checkbox" name="show_in_menu" /><br/>
	
	<label for="module_id" class="col_2 right inline">Модуль</label>
	<select name="module_id">
		<? if(isset($modules)): ?>
		<? foreach ($modules as $module): ?>
		<option value="<?= $module->pk() ?>"><?=$module->title ?></option>
		<? endforeach; ?>
		<? endif; ?>
	</select><br/>
	<input type="submit" value="Сохранить" name="submit" class="blue" />
</form>
<?  foreach ($errors as $error): ?>
<p class="error"><?=$error ?></p>
<? endforeach; ?>

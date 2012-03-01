<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<form action="/admin/<?= $entityName ?>s/edit/<?= $entity->pk() ?>" method="post">

	<label class="col_2 right top" for="title">Заголовок</label>
	<input class="col_6 left" type="text" name="title" value="<?= $entity->title ?>" required="required" /><br/>
	<label for="alias" class="col_2 right">Алиас</label>
	<input type="text" name="alias"  value="<?= $entity->alias ?>" required="required" class="col_6 left" /><br/>
	<label for="is_hide" class="col_2 right inline">Скрывать</label>
	<input type="checkbox" <? if ($entity->is_hide == 1): ?>checked="checked"<? endif; ?> name="is_hide" /><br/>
	
	<label for="show_in_menu" class="col_2 right inline">Показывать в меню</label>
	<input type="checkbox" name="show_in_menu" <? if ($entity->show_in_menu == 1): ?>checked="checked"<? endif; ?> /><br/>
	
	<label for="module_id" class="col_2 right inline">Модуль</label>
	<select name="module_id">
		<? if(isset($modules)): ?>
		<? foreach ($modules as $module): ?>
		<option value="<?= $module->pk() ?>" <? if($entity->module_id == $module->pk()): ?>selected="selected"<? endif; ?>><?=$module->title ?></option>
		<? endforeach; ?>
		<? endif; ?>
	</select><br/>
	
	<input type="submit" value="Сохранить" name="submit" class="blue" />
	


</form>
<? foreach ($errors as $error): ?>
	<p class="error"><?= $error ?></p>
<? endforeach; ?>
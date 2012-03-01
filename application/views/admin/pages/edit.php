<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<form action="/admin/<?= $entityName ?>s/edit/<?= $entity->pk() ?>" method="post">

	<label class="col_2 right top" for="title">Заголовок</label>
	<input class="col_6 left" type="text" placeholder="Заголовок" name="title" value="<?= $entity->title ?>" required="required" /><br/>
	<label for="alias" class="col_2 right">Алиас</label>
	<input type="text" placeholder="Алиас" name="alias"  value="<?= $entity->alias ?>" required="required" class="col_6 left" /><br/>
	<label for="is_hide" class="col_2 right inline">Скрывать</label>
	<input type="checkbox" <? if ($entity->is_hide == 1): ?>checked="checked"<? endif; ?> name="is_hide" /><br/>
	<label for="text" class="col_2 right top">Текст</label>
	<div>
		<textarea name="text" required="required"><?= $entity->text ?></textarea>
	</div>
	<div class="col_12">
		<input type="submit" value="Сохранить" name="submit" class="blue" />
	</div>


</form>
<? foreach ($errors as $error): ?>
	<p class="error"><?= $error ?></p>
<? endforeach; ?>
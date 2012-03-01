<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<form action="/admin/<?= $entityName ?>s/edit/<?= $entity->pk() ?>" method="post">

	<label class="col_2 right top" for="title">Заголовок</label>
	<input class="col_6 left" type="text" placeholder="Заголовок" name="title" value="<?= $entity->title ?>" required="required" /><br/>

	<label for="author" class="col_2 right">Автор</label>
	<input type="text" name="author"  value="<?= $entity->author ?>" required="required" class="col_6 left" /><br/>

	<label for="is_hide" class="col_2 right inline">Скрывать</label>
	<input type="checkbox" <? if ($entity->is_hide == 1): ?>checked="checked"<? endif; ?> name="is_hide" /><br/>

	<label for="announce" class="col_2 right top">Анонс</label>
	<textarea name="announce" id="announce"><? echo $entity->announce ?></textarea>

	<label for="text" class="col_2 right top">Текст</label>
	<textarea name="text" id="text"><? echo $entity->text ?></textarea>

	<input type="submit" value="Сохранить" name="submit" class="blue" />

</form>
<? foreach ($errors as $error): ?>
	<p class="error"><?= $error ?></p>
<? endforeach; ?>
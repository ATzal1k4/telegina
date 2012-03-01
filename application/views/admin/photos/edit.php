<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<form action="/admin/photos/edit/<?= $photo->photo_id ?>" method="post" enctype="multipart/form-data">

	<label class="col_2 right top" for="title">Заголовок</label>
	<input class="col_6 left" type="text" placeholder="Заголовок" name="title" value="<?= $photo->title ?>" required="required" /><br/>
	
	<label for="url" class="col_2 right">Описание</label>
	<input type="text" name="description"  value="<?= $photo->description ?>" class="col_6 left" /><br/>
	
	<label for="is_hide" class="col_2 right inline">Скрывать</label>
	<input type="checkbox" <? if ($photo->is_hide == 1): ?>checked="checked"<? endif; ?> name="is_hide" /><br/>	
	
	<label class="col_2 right">Изображение</label>
	<input type="file" name="file" class="col_6 left" /><br/>
	
	<input type="submit" value="Сохранить" name="submit" class="blue" />
	
</form>
<br/>
<img class="style3" src="<?= Entity::$uploadDirectory ?>full_<?=$photo->src ?>" />
<? foreach ($errors as $error): ?>
	<p class="error"><?= $error ?></p>
<? endforeach; ?>
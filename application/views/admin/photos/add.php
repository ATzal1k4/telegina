<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<form action="/admin/photos/add/<?=$album->album_id ?>" method="post" enctype="multipart/form-data">
	<label class="col_2 right" for="title">Заголовок</label>
	<input class="col_6 left" type="text" placeholder="Заголовок" name="title" required="required" /><br/>
	
	<label for="url" class="col_2 right">Описание</label>
	<input type="text" placeholder="Описание" name="description" class="col_6 left" /><br/>
	
	<label for="is_hide" class="col_2 right inline">Скрывать</label>	
	<input type="checkbox" name="is_hide" /><br/>
	
	<label class="col_2 right" for="file">Изображение</label>
	<input type="file" id="file_upload" name="file" class="col_6 left" /><br/>
	
	<input type="submit" value="Сохранить" name="submit" class="blue" />
</form>
<?  foreach ($errors as $error): ?>
<p class="error"><?=$error ?></p>
<? endforeach; ?>

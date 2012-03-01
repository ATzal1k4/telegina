<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<form action="/admin/pages/add/" method="post">
	<label class="col_2 right" for="title">Заголовок</label>
	<input class="col_6 left" type="text" placeholder="Заголовок" name="title" required="required" /><br/>
	<label for="alias" class="col_2 right">Алиас</label>
	<input type="text" placeholder="Алиас" name="alias" required="required" class="col_6 left" /><br/>
	<label for="is_hide" class="col_2 right inline">Скрывать</label>
	<input type="checkbox" name="is_hide" /><br/>
	
	<label for="text" class="col_2 right">Текст</label>
	<textarea name="text" class="col_9">Текст страницы</textarea>
	<input type="submit" value="Сохранить" name="submit" class="blue" />
</form>
<?  foreach ($errors as $error): ?>
<p class="error"><?=$error ?></p>
<? endforeach; ?>

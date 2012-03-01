<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<form action="/admin/links/add/" method="post">
	<label class="col_2 right" for="title">Заголовок</label>
	<input class="col_6 left" type="text" placeholder="Заголовок" name="title" required="required" /><br/>
	<label for="url" class="col_2 right">Ссылка</label>
	<input type="url" placeholder="http://google.com" name="url" required="required" class="col_6 left" /><br/>
	<label for="is_hide" class="col_2 right inline">Скрывать</label>
	<input type="checkbox" name="is_hide" /><br/>
	
	<input type="submit" value="Сохранить" name="submit" class="blue" />
</form>
<?  foreach ($errors as $error): ?>
<p class="error"><?=$error ?></p>
<? endforeach; ?>

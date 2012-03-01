<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<form action="/admin/<?= $entityName ?>s/add/" method="post">
	<label class="col_2 right" for="title">Заголовок</label>
	<input class="col_6 left" type="text" placeholder="Заголовок" name="title" required="required" /><br/>
	
	<label for="alias" class="col_2 right">Автор</label>
	<input type="text" placeholder="Автор новости" name="author" required="required" class="col_6 left" /><br/>
	
	<label for="is_hide" class="col_2 right inline">Скрывать</label>
	<input type="checkbox" name="is_hide" /><br/>

	<label for="announce" class="col_2 right">Анонс новости</label>
	<textarea name="announce" id="announce">Анонс новости</textarea>
	
	<label for="text" class="col_2 right">Текст</label>
	<textarea name="text" id="text">Текст новости</textarea>
	<input type="submit" value="Сохранить" name="submit" class="blue" />
</form>
<?  foreach ($errors as $error): ?>
<p class="error"><?=$error ?></p>
<? endforeach; ?>

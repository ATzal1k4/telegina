<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<form action="/admin/voteitems/add/<?=$vote->vote_id ?>" method="post">
	<label class="col_2 right" for="text">Вариант ответа</label>
	<input class="col_6 left" type="text" placeholder="Вариант ответа 1" name="text" required="required" /><br/>
		
	<label for="is_hide" class="col_2 right inline">Скрывать</label>
	<input type="checkbox" name="is_hide" /><br/>
		
	<input type="submit" value="Сохранить" name="submit" class="blue" />
</form>
<?  foreach ($errors as $error): ?>
<p class="error"><?=$error ?></p>
<? endforeach; ?>
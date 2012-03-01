<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<form action="/admin/votes/add/" method="post">
	<label class="col_2 right" for="question">Вопрос</label>
	<input class="col_6 left" type="text" placeholder="Как вам наш сайт?" name="question" required="required" /><br/>
	
	<label for="is_hide" class="col_2 right inline">Скрывать</label>
	<input type="checkbox" name="is_hide" /><br/>
	
	<input type="submit" value="Сохранить" name="submit" class="blue" />
</form>
<?  foreach ($errors as $error): ?>
<p class="error"><?=$error ?></p>
<? endforeach; ?>

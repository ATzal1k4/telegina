<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<p>Добавление подпункта меню в "<?= $entity->text ?>"</p>

<form action="/admin/menuitems/addchild/<?=$entity->pk(); ?>" method="post">
	<label class="col_2 right" for="text">Текст</label>
	<input class="col_6 left" type="text" placeholder="Заголовок" name="text" required="required" /><br/>
	
	<label class="col_2 right" for="URL">Ссылка</label>
	<input type="text" name="url" placeholder="http://google.com" class="col_6 left" /><br/>
	
	<label for="is_hide" class="col_2 right inline">Скрывать</label>
	<input type="checkbox" name="is_hide" /><br/>
	
	<input type="submit" value="Сохранить" name="submit" class="blue" />
</form>
<?  foreach ($errors as $error): ?>
<p class="error"><?=$error ?></p>
<? endforeach; ?>
<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<form action="/admin/<?= $entityName ?>s/subpage/<?= $entity->pk() ?>" method="post">

	<select name="child_id">
		<? if (isset($pages)): ?>
			<? foreach ($pages as $page): ?>
				<option value="<?= $page->pk() ?>"><?= $page->title ?></option>
			<? endforeach; ?>
		<? endif; ?>
	</select>

	<input type="submit" name="submit" value="Сохранить" />
</form>
<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<table class="striped tight sortable">
	<thead>
		<tr>
			<th>ID</th>
			<th>Заголовок</th>
			<th>Дата создания</th>
			<th>Дата изменения</th>
			<th>Действия</th>
		</tr>
	</thead>
	<tbody>

		<? foreach ($pagination->result() as $entity): ?>
			<tr>
				<td><?= $entity->pk() ?></td>
				<td><a href="/admin/photos/list/<?= $entity->pk() ?>"><?= $entity->title ?></a></td>
				<td><?= $entity->date_create ?></td>
				<td><?= $entity->date_modif ?></td>
				<td>
					<a href="/admin/albums/edit/<?= $entity->pk() ?>">
						<span class="icon blue tooltip" title="Редактировать элемент" data-icon="Z"></span>
					</a>
					<? if ($entity->is_hide == 0): ?>
						<a href="/admin/albums/hide/<?= $entity->pk() ?>"><span class="icon blue tooltip" title="Скрыть элемент" data-icon="+"></span></a>
					<? else: ?>
						<a href="/admin/albums/show/<?= $entity->pk() ?>"><span class="icon blue tooltip" title="Показать элемент" data-icon="-"></span></a>
					<? endif; ?>
					<a href="/admin/albums/delete/<?= $entity->pk() ?>"><span class="icon blue tooltip" title="Удалить элемент" data-icon="T"></span></a></td>
			</tr>
		<? endforeach; ?>
	</tbody>
</table>
<?= $pagination->render() ?>
<a href="/admin/albums/add/"><span class="icon blue large tooltip" title="Добавить альбом" data-icon="+"></span></a>
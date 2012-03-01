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
			<th>Название</th>
			<th>Дата создания</th>
			<th>Дата изменения</th>
			<th>Действия</th>
		</tr>
	</thead>
	<tbody>

		<? foreach ($pagination->result() as $menu): ?>
			<tr>
				<td><?= $menu->pk() ?></td>
				<td><a class="tooltip" title="Управление меню" href="/admin/menuitems/list/<?= $menu->pk() ?>"><?= $menu->title ?></a></td>
				<td><?= $menu->date_create ?></td>
				<td><?= $menu->date_modif ?></td>
				<td>
					<a href="/admin/menus/edit/<?= $menu->pk() ?>">
						<span class="icon blue tooltip" title="Редактировать элемент" data-icon="Z"></span>
					</a>
					<? if ($menu->is_hide == 0): ?>
						<a href="/admin/menus/hide/<?= $menu->pk() ?>"><span class="icon blue tooltip" title="Скрыть элемент" data-icon="+"></span></a>
					<? else: ?>
						<a href="/admin/menus/show/<?= $menu->pk() ?>"><span class="icon blue tooltip" title="Показать элемент" data-icon="-"></span></a>
					<? endif; ?>
					<a href="/admin/menus/delete/<?= $menu->pk() ?>"><span class="icon blue tooltip" title="Удалить элемент" data-icon="T"></span></a></td>
			</tr>
		<? endforeach; ?>
	</tbody>
</table>
<? $pagination->render(); ?>
<a href="/admin/<?= $entityName ?>s/add/"><span class="icon blue large tooltip" title="Добавить меню" data-icon="+"></span></a>
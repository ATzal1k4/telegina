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
			<th>Алиас</th>
			<th>Модуль</th>
			<th>Дата создания</th>
			<th>Дата изменения</th>
			<th>Действия</th>
		</tr>
	</thead>
	<tbody>

		<? foreach ($pagination->result() as $page): ?>
			<tr>
				<td><?= $page->pk() ?></td>
				<td><?= $page->title ?></td>
				<td><?= $page->alias ?></td>
				<td><?= $page->module->title ?></td>
				<td><?= $page->date_create ?></td>
				<td><?= $page->date_modif ?></td>
				<td>
					<a href="/admin/<?= $entityName ?>s/manage/<?= $page->pk() ?>">
						<span class="icon blue tooltip" title="Управление страницей" data-icon=","></span>
					</a>
					
					<a href="/admin/<?= $entityName ?>s/subpage/<?= $page->pk() ?>">
						<span class="icon blue tooltip" title="Вложить страницу" data-icon="_"></span>
					</a>
					
					<a href="/admin/<?= $entityName ?>s/inpage/<?= $page->pk() ?>">
						<span class="icon blue tooltip" title="Переместить в другую страницу" data-icon=";"></span>
					</a>
					
					<a href="/admin/<?= $entityName ?>s/edit/<?= $page->pk() ?>">
						<span class="icon blue tooltip" title="Редактировать элемент" data-icon="Z"></span>
					</a>
					
					<? if ($page->is_hide == 0): ?>
						<a href="/admin/<?= $entityName ?>s/hide/<?= $page->pk() ?>"><span class="icon blue tooltip" title="Скрыть элемент" data-icon="+"></span></a>
					<? else: ?>
						<a href="/admin/<?= $entityName ?>s/show/<?= $page->pk() ?>"><span class="icon blue tooltip" title="Показать элемент" data-icon="-"></span></a>
					<? endif; ?>
						
					<? if ($page->show_in_menu == 0): ?>
						<a href="/admin/<?= $entityName ?>s/showinmenu/<?= $page->pk() ?>"><span class="icon blue tooltip" title="Показать в меню" data-icon="m"></span></a>
					<? else: ?>
						<a href="/admin/<?= $entityName ?>s/hideinmenu/<?= $page->pk() ?>"><span class="icon blue tooltip" title="Не показывать в меню" data-icon="p"></span></a>
					<? endif; ?>
						
					<a href="/admin/<?= $entityName ?>s/delete/<?= $page->pk() ?>">
						<span class="icon blue tooltip" title="Удалить элемент" data-icon="T"></span>
					</a>
					
					
					
				</td>
			</tr>
		<? endforeach; ?>
	</tbody>
</table>
<?= $pagination->render(); ?>
<a href="/admin/<?= $entityName ?>s/add/"><span class="icon blue large tooltip" title="Добавить новую страницу" data-icon="+"></span></a>
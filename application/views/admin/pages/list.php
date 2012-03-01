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
			<th>Алиас</th>
			<th>Дата создания</th>
			<th>Дата изменения</th>
			<th>Действия</th>
		</tr>
	</thead>
	<tbody>

		<? foreach ($pagination->result() as $page): ?>
			<tr>
				<td><?= $page->page_id ?></td>
				<td><?= $page->title ?></td>
				<td><?= $page->alias ?></td>
				<td><?= $page->date_create ?></td>
				<td><?= $page->date_modif ?></td>
				<td>
					<a href="/admin/pages/edit/<?= $page->page_id ?>">
						<span class="icon blue tooltip" title="Редактировать элемент" data-icon="Z"></span>
					</a>
					<? if ($page->is_hide == 0): ?>
						<a href="/admin/pages/hide/<?= $page->page_id ?>"><span class="icon blue tooltip" title="Скрыть элемент" data-icon="+"></span></a>
					<? else: ?>
						<a href="/admin/pages/show/<?= $page->page_id ?>"><span class="icon blue tooltip" title="Показать элемент" data-icon="-"></span></a>
					<? endif; ?>
					<a href="/admin/pages/delete/<?= $page->page_id ?>"><span class="icon blue tooltip" title="Удалить элемент" data-icon="T"></span></a></td>
			</tr>
		<? endforeach; ?>
	</tbody>
</table>
<?= $pagination->render(); ?>
<a href="/admin/pages/add/"><span class="icon blue large tooltip" title="Добавить новую страницу" data-icon="+"></span></a>
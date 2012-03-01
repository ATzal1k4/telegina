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
			<th>Ссылка</th>
			<th>Дата создания</th>
			<th>Дата изменения</th>
			<th>Действия</th>		
		</tr>
	</thead>
	<tbody>

		<? foreach ($pagination->result() as $link): ?>
			<tr>
				<td><?= $link->link_id ?></td>
				<td><?= $link->title ?></td>
				<td><?= $link->url ?></td>
				<td><?= $link->date_create ?></td>
				<td><?= $link->date_modif ?></td>
				<td>
					<a href="/admin/links/edit/<?= $link->link_id ?>">
						<span class="icon blue tooltip" title="Редактировать элемент" data-icon="Z"></span>
					</a>
					<? if ($link->is_hide == 0): ?>
						<a href="/admin/links/hide/<?= $link->link_id ?>"><span class="icon blue tooltip" title="Скрыть элемент" data-icon="+"></span></a>
					<? else: ?>
						<a href="/admin/links/show/<?= $link->link_id ?>"><span class="icon blue tooltip" title="Показать элемент" data-icon="-"></span></a>
					<? endif; ?>
					<a href="/admin/links/delete/<?= $link->link_id ?>"><span class="icon blue tooltip" title="Удалить элемент" data-icon="T"></span></a></td>
			</tr>
		<? endforeach; ?>
	</tbody>
</table>
<?= $pagination->render() ?>
<a href="/admin/links/add/"><span class="icon blue large tooltip" title="Добавить ссылку" data-icon="+"></span></a>
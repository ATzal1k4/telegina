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
			<th>Автор</th>
			<th>Дата создания</th>
			<th>Дата изменения</th>
			<th>Действия</th>
		</tr>
	</thead>
	<tbody>

		<? foreach ($pagination->result() as $new): ?>
			<tr>
				<td><?= $new->new_id ?></td>
				<td><?= $new->title ?></td>
				<td><?= $new->author ?></td>
				<td><?= $new->date_create ?></td>
				<td><?= $new->date_modif ?></td>
				<td>
					<a href="/admin/news/edit/<?= $new->new_id ?>">
						<span class="icon blue tooltip" title="Редактировать элемент" data-icon="Z"></span>
					</a>
					<? if ($new->is_hide == 0): ?>
						<a href="/admin/news/hide/<?= $new->new_id ?>"><span class="icon blue tooltip" title="Скрыть элемент" data-icon="+"></span></a>
					<? else: ?>
						<a href="/admin/news/show/<?= $new->new_id ?>"><span class="icon blue tooltip" title="Показать элемент" data-icon="-"></span></a>
					<? endif; ?>
					<a href="/admin/news/delete/<?= $new->new_id ?>"><span class="icon blue tooltip" title="Удалить элемент" data-icon="T"></span></a>
				</td>
			</tr>
		<? endforeach; ?>
	</tbody>
</table>
<?= $pagination->render() ?>
<a href="/admin/news/add/"><span class="icon blue large tooltip" title="Добавить новость" data-icon="+"></span></a>
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
			<th>Вопрос</th>
			<th>Дата создания</th>
			<th>Дата изменения</th>
			<th>Действия</th>		
		</tr>
	</thead>
	<tbody>

		<? foreach ($pagination->result() as $vote): ?>
			<tr>
				<td><?= $vote->vote_id ?></td>
				<td><a class="tooltip" title="Управление вариантами ответа" href="/admin/voteitems/list/<?= $vote->vote_id ?>"><?= $vote->question ?></a></td>
				<td><?= $vote->date_create ?></td>
				<td><?= $vote->date_modif ?></td>
				<td>
					<a href="/admin/votes/edit/<?= $vote->vote_id ?>">
						<span class="icon blue tooltip" title="Редактировать элемент" data-icon="Z"></span>
					</a>
					<? if ($vote->is_hide == 0): ?>
						<a href="/admin/votes/hide/<?= $vote->vote_id ?>"><span class="icon blue tooltip" title="Скрыть элемент" data-icon="+"></span></a>
					<? else: ?>
						<a href="/admin/votes/show/<?= $vote->vote_id ?>"><span class="icon blue tooltip" title="Показать элемент" data-icon="-"></span></a>
					<? endif; ?>
					<a href="/admin/votes/delete/<?= $vote->vote_id ?>"><span class="icon blue tooltip" title="Удалить элемент" data-icon="T"></span></a></td>
			</tr>
		<? endforeach; ?>
	</tbody>
</table>
<?= $pagination->render() ?>
<a href="/admin/votes/add/"><span class="icon blue large tooltip" title="Добавить опрос" data-icon="+"></span></a>
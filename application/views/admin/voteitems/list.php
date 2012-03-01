<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h5><?= $vote->question ?></h5>
<p>Варианты ответов:</p>
<table class="striped tight sortable">
	<thead>
		<tr>
			<th>ID</th>
			<th>Вариант ответа</th>
			<th>Количество голосов</th>
			<th>Дата создания</th>
			<th>Дата изменения</th>
			<th>Действия</th>		
		</tr>
	</thead>
	<tbody>

		<? foreach ($items as $item): ?>
			<tr>
				<td><?= $item->vote_item_id ?></td>
				<td><?= $item->text ?></td>
				<td><?= $item->count_answer ?></td>
				<td><?= $item->date_create ?></td>
				<td><?= $item->date_modif ?></td>
				<td>
					<a href="/admin/voteitems/edit/<?= $item->vote_item_id ?>">
						<span class="icon blue tooltip" title="Редактировать элемент" data-icon="Z"></span>
					</a>
					<a href="/admin/voteitems/up/<?= $item->vote_item_id ?>">
						<span class="icon blue tooltip" title="Сделать выше" data-icon="~"></span>
					</a>
					<a href="/admin/voteitems/down/<?= $item->vote_item_id ?>">
						<span class="icon blue tooltip" title="Сделать ниже" data-icon="|"></span>
					</a>
					<? if ($item->is_hide == 0): ?>
						<a href="/admin/voteitems/hide/<?= $item->vote_item_id ?>">
							<span class="icon blue tooltip" title="Скрыть элемент" data-icon="+"></span>
						</a>
					<? else: ?>
						<a href="/admin/voteitems/show/<?= $item->vote_item_id ?>">
							<span class="icon blue tooltip" title="Показать элемент" data-icon="-"></span>
						</a>
					<? endif; ?>
					<a href="/admin/voteitems/delete/<?= $item->vote_item_id ?>"><span class="icon blue tooltip" title="Удалить элемент" data-icon="T"></span></a>
				</td>
			</tr>
		<? endforeach; ?>
	</tbody>
</table>
<a href="/admin/voteitems/add/<?= $vote->vote_id ?>"><span class="icon blue large tooltip" title="Добавить пункт меню" data-icon="+"></span></a>


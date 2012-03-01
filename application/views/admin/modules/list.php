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
			<th>Действия</th>
		</tr>
	</thead>
	<tbody>

		<? foreach ($pagination->result() as $entity): ?>
			<tr>
				<td><?= $entity->pk(); ?></td>
				<td><?= $entity->title ?></td>
				<td>
					<a href="/admin/<?= $entityType ?>s/edit/<?= $entity->pk() ?>">
						<span class="icon blue tooltip" title="Редактировать элемент" data-icon="Z"></span>
					</a>
					<? if ($entity->is_hide == 0): ?>
						<a href="/admin/<?= $entityType ?>s/hide/<?= $entity->pk() ?>"><span class="icon blue tooltip" title="Скрыть элемент" data-icon="+"></span></a>
					<? else: ?>
						<a href="/admin/<?= $entityType ?>s/show/<?= $entity->pk() ?>"><span class="icon blue tooltip" title="Показать элемент" data-icon="-"></span></a>
					<? endif; ?>

				</td>
			</tr>
		<? endforeach; ?>
	</tbody>
</table>
<?= $pagination->render() ?>
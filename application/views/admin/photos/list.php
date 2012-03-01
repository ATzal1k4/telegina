<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h5><?=$album->title; ?></h5>
<p>Фотографии альбома:</p>
<table class="striped tight sortable">
	<thead>
		<tr>
			<th>ID</th>
			<th>Заголовок</th>
			<th>Мини-изображение</th>
			<th>Дата создания</th>
			<th>Дата изменения</th>
			<th>Действия</th>		
		</tr>
	</thead>
	<tbody>

		<? foreach ($photos as $photo): ?>
		<tr class="alpha">
				<td><?= $photo->photo_id ?></td>
				<td><?= $photo->title ?></td>
				<td><img src="<?= Entity::$uploadDirectory ?>small_<?= $photo->src ?>" alt="<?= $photo->description ?>" /></td>
				<td><?= $photo->date_create ?></td>
				<td><?= $photo->date_modif ?></td>
				<td>
					<? if($album->main_photo != $photo->photo_id): ?>
					<a href="/admin/photos/mainphoto/<?= $photo->photo_id ?>"><span class="icon blue tooltip" title="Сделать обложкой" data-icon="0"></span></a>
					<? endif; ?>
					<a href="/admin/photos/edit/<?= $photo->photo_id ?>">
						<span class="icon blue tooltip" title="Редактировать элемент" data-icon="Z"></span>
					</a>
					<? if ($photo->is_hide == 0): ?>
						<a href="/admin/photos/hide/<?= $photo->photo_id ?>"><span class="icon blue tooltip" title="Скрыть элемент" data-icon="+"></span></a>
					<? else: ?>
						<a href="/admin/photos/show/<?= $photo->photo_id ?>"><span class="icon blue tooltip" title="Показать элемент" data-icon="-"></span></a>
					<? endif; ?>
					<a href="/admin/photos/delete/<?= $photo->photo_id ?>"><span class="icon blue tooltip" title="Удалить элемент" data-icon="T"></span></a>
				</td>
			</tr>
		<? endforeach; ?>
	</tbody>
</table>

<a href="/admin/photos/add/<?=$album->album_id ?>"><span class="icon blue large tooltip" title="Добавить изображение в альбом" data-icon="+"></span></a>
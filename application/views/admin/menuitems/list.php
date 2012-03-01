<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<h5><?= $menu->title ?></h5>
<p>Пункты меню:</p>

<table class="striped tight">
	<thead>
		<tr>
			<th>Текст</th>
			<th>URL</th>
			<th>Дата создания</th>
			<th>Дата изменения</th>
			<th>Действия</th>		
		</tr>
	</thead>
	<tbody>

		<? foreach ($items as $item): ?>
			<tr>
				<td><?= $item->text ?></td>
				<td><?= $item->url ?></td>
				<td><?= $item->date_create ?></td>
				<td><?= $item->date_modif ?></td>
				<td>
					<a href="/admin/menuitems/addchild/<?= $item->pk() ?>">
						<span class="icon blue tooltip" data-icon="_" title="Добавить подпункт"></span>
					</a>

					<a href="/admin/menuitems/edit/<?= $item->pk() ?>">
						<span class="icon blue tooltip" title="Редактировать элемент" data-icon="Z"></span>
					</a>
					<a href="/admin/menuitems/up/<?= $item->pk() ?>">
						<span class="icon blue tooltip" title="Сделать выше" data-icon="~"></span>
					</a>
					<a href="/admin/menuitems/down/<?= $item->pk() ?>">
						<span class="icon blue tooltip" title="Сделать ниже" data-icon="|"></span>
					</a>
					<? if ($item->is_hide == 0): ?>
						<a href="/admin/menuitems/hide/<?= $item->pk() ?>">
							<span class="icon blue tooltip" title="Скрыть элемент" data-icon="+"></span>
						</a>
					<? else: ?>
						<a href="/admin/menuitems/show/<?= $item->pk() ?>">
							<span class="icon blue tooltip" title="Показать элемент" data-icon="-"></span>
						</a>
					<? endif; ?>
					<a href="/admin/menuitems/delete/<?= $item->pk() ?>"><span class="icon blue tooltip" title="Удалить элемент" data-icon="T"></span></a>
				</td>
			</tr>
			<? if ($item->children->count_all() > 0): ?>
			
				<tr>
					<td colspan="5">
						<table class="striped tight">
							<thead>
								<tr>
									<th>Текст</th>
									<th>URL</th>
									<th>Дата создания</th>
									<th>Дата изменения</th>
									<th>Действия</th>		
								</tr>
							</thead>
							<tbody>
								<? foreach ($item->children->where('is_deleted', '=', '0')->order_by('position', 'desc')->find_all() as $item ): ?>
									<tr>
										<td><?= $item->text ?></td>
										<td><?= $item->url ?></td>
										<td><?= $item->date_create ?></td>
										<td><?= $item->date_modif ?></td>
										<td>
<!--											<a href="/admin/menuitems/addchild/<?= $item->pk() ?>">
												<span class="icon blue tooltip" data-icon="_" title="Добавить подпункт"></span>
											</a>-->

											<a href="/admin/menuitems/edit/<?= $item->pk() ?>">
												<span class="icon blue tooltip" title="Редактировать элемент" data-icon="Z"></span>
											</a>
											<a href="/admin/menuitems/up/<?= $item->pk() ?>">
												<span class="icon blue tooltip" title="Сделать выше" data-icon="~"></span>
											</a>
											<a href="/admin/menuitems/down/<?= $item->pk() ?>">
												<span class="icon blue tooltip" title="Сделать ниже" data-icon="|"></span>
											</a>
											<? if ($item->is_hide == 0): ?>
												<a href="/admin/menuitems/hide/<?= $item->pk() ?>">
													<span class="icon blue tooltip" title="Скрыть элемент" data-icon="+"></span>
												</a>
											<? else: ?>
												<a href="/admin/menuitems/show/<?= $item->pk() ?>">
													<span class="icon blue tooltip" title="Показать элемент" data-icon="-"></span>
												</a>
											<? endif; ?>
											<a href="/admin/menuitems/delete/<?= $item->pk() ?>"><span class="icon blue tooltip" title="Удалить элемент" data-icon="T"></span></a>
										</td>
									</tr>
									<? if ($item->children->count_all() > 0): ?>
										<tr>
											<td colspan="6">

											</td>
										</tr>
									<? endif; ?>
								<? endforeach; ?>
							</tbody>
						</table>
					</td>
				</tr>
			<? endif; ?>
		<? endforeach; ?>
	</tbody>
</table>
<a href="/admin/menuitems/add/<?= $menu->menu_id ?>"><span class="icon blue large tooltip" title="Добавить пункт меню" data-icon="+"></span></a>



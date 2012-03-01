<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<ul class="alt">
	<? foreach ($comments as $k => $comment): ?>
		<li>
			<fieldset>
				<legend><?= $comment->nick . " :: " . $comment->date_create ?></legend>
				<p><?= $comment->text ?></p>

				<div class="clear"></div>
				<div class="col_1"></div>
				<div class="col_11">
					<? foreach ($comment->children->and_where('is_deleted', '=', 0)->order_by('date_create', 'asc')->find_all() as $cmnt): ?>
						<fieldset>
							<legend><?= $cmnt->nick . ' :: ' . $cmnt->date_create ?></legend>
							<p><?= $cmnt->text ?></p>
							<div class="clear"></div>
							<div class="col_11">
								<p>
								<table>
									<thead>
									<th>E-Mail</th>
									<th>Сайт</th>
									<th>Действия</th>
									</thead>
									<tbody>
										<tr>
											<td><?= $cmnt->email ?></td>
											<td><a href="<?= $cmnt->site ?>" target="_blank"><?= $cmnt->site ?></a></td>
											<td>

												<? if ($cmnt->is_hide == 0): ?>
													<a href="/admin/guestbook/hide/<?= $cmnt->comment_id ?>"><span class="icon blue tooltip" title="Скрыть элемент" data-icon="+"></span></a>
												<? else: ?>
													<a href="/admin/guestbook/show/<?= $cmnt->comment_id ?>"><span class="icon blue tooltip" title="Показать элемент" data-icon="-"></span></a>
												<? endif; ?>
												<a href="/admin/guestbook/delete/<?= $cmnt->comment_id ?>"><span class="icon blue tooltip" title="Удалить элемент" data-icon="T"></span></a>
											</td>								
										</tr>
									</tbody>
								</table>
								</p>
							</div>
						</fieldset>
					<? endforeach; ?>
				</div>
				<div class="clear"></div>
				<p>
				<table>
					<thead>
					<th>E-Mail</th>
					<th>Сайт</th>
					<th>Действия</th>
					</thead>
					<tbody>
						<tr>
							<td><?= $comment->email ?></td>
							<td><a href="<?= $comment->site ?>" target="_blank"><?= $comment->site ?></a></td>
							<td>

								<? if ($comment->is_hide == 0): ?>
									<a href="/admin/guestbook/hide/<?= $comment->comment_id ?>"><span class="icon blue tooltip" title="Скрыть элемент" data-icon="+"></span></a>
								<? else: ?>
									<a href="/admin/guestbook/show/<?= $comment->comment_id ?>"><span class="icon blue tooltip" title="Показать элемент" data-icon="-"></span></a>
								<? endif; ?>
								<a href="/admin/guestbook/delete/<?= $comment->comment_id ?>"><span class="icon blue tooltip" title="Удалить элемент" data-icon="T"></span></a>
							</td>								
						</tr>
					</tbody>
				</table>
				</p>
			</fieldset>
		</li>
	<? endforeach; ?>
</ul>
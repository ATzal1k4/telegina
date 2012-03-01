<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="menuMain" class="col_12">
	<fieldset>
		<legend><?= $menu->title ?></legend>
		<ul class="menu vertical">
			<? foreach ($menu->items->where('is_hide', '=', 0)->and_where('is_deleted', '=', 0)->and_where('parent_id', 'IS', NULL)->order_by('position', 'desc')->find_all() as $item): ?>
				<li><a href="<?= $item->url ?>" class="transition"><?= $item->text ?></a>
					<? if ($item->children->where('is_hide', '=', 0)->and_where('is_deleted', '=', 0)->count_all() > 0) : ?>
						<ul>
							<? foreach ($item->children->where('is_hide', '=', 0)->and_where('is_deleted', '=', 0)->order_by('position', 'desc')->find_all() as $_item): ?>
								<li><a href="<?= $_item->url ?>" class="transition"><?= $_item->text ?></a>
								<? endforeach; ?>
						</ul>
					<? endif; ?>
				</li>
			<? endforeach; ?>
		</ul>
	</fieldset>
</div>
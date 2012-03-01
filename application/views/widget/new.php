<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="col_12" id="new">
	<fieldset>
		<legend>Последние новости</legend>

		<? foreach ($news as $new): ?>

			<div class="col_12">
				<div class="col_7 title">
					<?= $new->title ?>
				</div>
				<div class="col_12 announce">
					<p><?= Text::limit_words($new->announce, 12); ?></p>
					<?= Date::publicFormat($new->date_create); ?>&nbsp;&nbsp;<a href="/news/show/<?= $new->pk(); ?>" class="transition">Прочитать...</a>
				</div>
			</div>
		<hr/>
		<? endforeach; ?>
		<div class="clear"></div>

		<p align="center"><a href="/news/" class="transition">Все новости</a></p>
	</fieldset>
</div>
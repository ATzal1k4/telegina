<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="col_12">
	<fieldset>
		<legend>Новости</legend>
		<ul class="alt">
			<? foreach ($news as $k => $new): ?>
				<li>
					<h5><?= $new->title ?></h5>
					<p><?= $new->announce ?></p>
					<span>
						Автор: <?= $new->author ?><br/>
						Дата: <?= Date::publicFormat($new->date_create) ?>
						
					</span>
					<a href="/news/show/<?= $new->pk(); ?>" class="transition">Читать полностью...</a>
				</li>
			<? endforeach; ?>
		</ul>
	</fieldset>
</div>
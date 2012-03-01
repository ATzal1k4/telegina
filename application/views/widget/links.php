<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="links" class="col_12">
	<fieldset>
		<legend>Наши друзья</legend>
		<ul class="checks">
			<? foreach ($links as $link): ?>
			<li><a href="<?=$link->url ?>" target="_blank"><?=$link->title ?></a></li>
			<? endforeach; ?>
		</ul>
	</fieldset>
</div>
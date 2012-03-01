<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<ul class="alt">

	<? foreach ($albums as $k => $album): ?>
		<li>
			<fieldset>
				<legend><a class="transition" href="/photos/list/<?=$album->album_id ?>" <? if(Module_Photos::$openInNewPage): ?>target="_blank"<? endif; ?>><?= $album->title ?></a></legend>
				<img src="<?=  Entity::$uploadDirectory ?>full_<?= $album->cover->src ?>"  />				
			</fieldset>
		</li>
	<? endforeach; ?>
</ul>